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

namespace MageMe\WebFormsZapier\Model;

use MageMe\WebFormsZapier\Api\Data\FormInterface;

class Form extends \MageMe\WebForms\Model\Form implements FormInterface
{
    #region DB getters and setters
    /**
     * @inheritDoc
     */
    public function getIsZapierWebhookEnabled(): bool
    {
        return (bool)$this->getData(FormInterface::IS_ZAPIER_WEBHOOK_ENABLED);
    }

    /**
     * @inheritDoc
     */
    public function setIsZapierWebhookEnabled(bool $isZapierWebhookEnabled): FormInterface
    {
        return $this->setData(FormInterface::IS_ZAPIER_WEBHOOK_ENABLED, $isZapierWebhookEnabled);
    }

    /**
     * @inheritDoc
     */
    public function getZapierWebhookUrl(): string
    {
        return (string)$this->getData(FormInterface::ZAPIER_WEBHOOK_URL);
    }

    /**
     * @inheritDoc
     */
    public function setZapierWebhookUrl(string $zapierWebhookUrl): FormInterface
    {
        return $this->setData(FormInterface::ZAPIER_WEBHOOK_URL, $zapierWebhookUrl);
    }
    #endregion
}