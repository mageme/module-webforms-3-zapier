<?php
/**
 * MageMe
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MageMe.com license that is
 * available through the world-wide-web at this URL:
 * https://mageme.com/license
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to a newer
 * version in the future.
 *
 * Copyright (c) MageMe (https://mageme.com)
 **/

namespace MageMe\WebFormsZapier\Controller\Adminhtml\Result;

use MageMe\WebForms\Api\Data\ResultInterface;
use MageMe\WebForms\Api\ResultRepositoryInterface;
use MageMe\WebForms\Controller\Adminhtml\Result\AbstractAjaxResultMassAction;
use MageMe\WebForms\Model\ResourceModel\Result\CollectionFactory;
use MageMe\WebFormsZapier\Helper\WebhookHelper;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Phrase;
use Magento\Ui\Component\MassAction\Filter;

class AjaxSendSubmission extends AbstractAjaxResultMassAction
{
    /**
     * @inheritdoc
     */
    const ACTION = 'send';
    /**
     * @inheritdoc
     */
    const SHOW_MESSAGE = true;
    /**
     * @var WebhookHelper
     */
    private $webhookHelper;

    /**
     * @param WebhookHelper $webhookHelper
     * @param ResultRepositoryInterface $repository
     * @param CollectionFactory $collectionFactory
     * @param Filter $filter
     * @param JsonFactory $jsonFactory
     * @param Context $context
     */
    public function __construct(
        WebhookHelper             $webhookHelper,
        ResultRepositoryInterface $repository,
        CollectionFactory         $collectionFactory,
        Filter                    $filter,
        JsonFactory               $jsonFactory,
        Context                   $context
    )
    {
        parent::__construct($repository, $collectionFactory, $filter, $jsonFactory, $context);
        $this->webhookHelper = $webhookHelper;
    }

    /**
     * @inheritdoc
     * @throws NoSuchEntityException
     * @throws \Exception
     */
    protected function action(AbstractDb $collection): Phrase
    {
        foreach ($collection as $item) {

            /** @var ResultInterface $result */
            $result = $this->repository->getById($item->getId());
            $this->webhookHelper->sendResult($result);
        }
        return __('A total of %1 submission(s) have been sent to Zapier.', $collection->getSize());
    }
}