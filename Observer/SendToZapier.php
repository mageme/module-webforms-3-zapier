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

namespace MageMe\WebFormsZapier\Observer;

use Exception;
use MageMe\WebForms\Model\Result;
use MageMe\WebFormsZapier\Api\Data\FormInterface;
use MageMe\WebFormsZapier\Helper\WebhookHelper;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class SendToZapier implements ObserverInterface
{
    /**
     * @var WebhookHelper
     */
    private $webhookHelper;

    /**
     * @param WebhookHelper $webhookHelper
     */
    public function __construct(
        WebhookHelper $webhookHelper
    )
    {
        $this->webhookHelper = $webhookHelper;
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public function execute(Observer $observer)
    {
        /** @var Result $result */
        $result = $observer->getEvent()->getResult();
        /** @var FormInterface $form */
        $form   = $result->getForm();
        if ($form->getIsZapierWebhookEnabled()) {
            $this->webhookHelper->sendResult($result);
        }
    }
}