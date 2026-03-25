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

namespace MageMe\WebFormsZapier\Helper;

use Exception;
use MageMe\WebForms\Api\Data\ResultInterface;
use MageMe\WebForms\Api\ResultRepositoryInterface;
use MageMe\WebFormsZapier\Api\Data\FormInterface;
use Magento\Framework\HTTP\Client\Curl;
use Psr\Log\LoggerInterface;

class WebhookHelper
{
    const UNEXPECTED_ERROR = 'Unexpected error';

    /**
     * @var Curl
     */
    private $curl;
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var ResultRepositoryInterface
     */
    private $resultRepository;

    /**
     * @param ResultRepositoryInterface $resultRepository
     * @param LoggerInterface $logger
     * @param Curl $curl
     */
    public function __construct(
        ResultRepositoryInterface $resultRepository,
        LoggerInterface           $logger,
        Curl                      $curl)
    {
        $this->curl             = $curl;
        $this->logger           = $logger;
        $this->resultRepository = $resultRepository;
    }

    /**
     * @throws Exception
     */
    public function sendResult(ResultInterface $result)
    {
        $resultData = $this->resultRepository->getDataById($result->getId());
        /** @var FormInterface $form */
        $form = $result->getForm();
        $data = [
            'form_id'      => $form->getId(),
            'form_name'    => $form->getName(),
            'submitted_at' => date('Y-m-d H:i:s'),
            'result'       => $resultData['result']
        ];

        // URL Webhook from Zapier
        $zapierWebhookUrl = $form->getZapierWebhookUrl();
        if (!$zapierWebhookUrl) {
            throw new Exception(__('Zapier webhook is not configured.'));
        }

        try {
            $this->curl->setOption(CURLOPT_RETURNTRANSFER, true);
            $this->curl->setOption(CURLOPT_FOLLOWLOCATION, true);
            $this->curl->post($zapierWebhookUrl, $data);
            $response = json_decode($this->curl->getBody(), true);
            if (!is_array($response)) {
                $this->logger->error(self::UNEXPECTED_ERROR . ' body: ' . $this->curl->getBody());
                throw new Exception(__(self::UNEXPECTED_ERROR));
            }
            if (isset($response['error'])) {
                $this->logger->error($response['error'] . ' body: ' . $this->curl->getBody());
                throw new Exception(__($response['error']));
            }
        } catch (Exception $e) {
            $this->logger->error('Zapier error: ' . $e->getMessage());
        }
    }
}