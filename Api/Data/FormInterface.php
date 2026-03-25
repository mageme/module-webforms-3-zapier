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

namespace MageMe\WebFormsZapier\Api\Data;

interface FormInterface extends \MageMe\WebForms\Api\Data\FormInterface
{
    const IS_ZAPIER_WEBHOOK_ENABLED = 'is_zapier_webhook_enabled';
    const ZAPIER_WEBHOOK_URL = 'zapier_webhook_url';

    #region ZAPIER

    /**
     * @return bool
     */
    public function getIsZapierWebhookEnabled():bool;

    /**
     * @param bool $isZapierWebhookEnabled
     * @return $this
     */
    public function setIsZapierWebhookEnabled(bool $isZapierWebhookEnabled): FormInterface;

    /**
     * @return string
     */
    public function getZapierWebhookUrl(): string;

    /**
     * @param string $zapierWebhookUrl
     * @return $this
     */
    public function setZapierWebhookUrl(string $zapierWebhookUrl): FormInterface;

    #endregion
}