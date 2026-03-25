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

namespace MageMe\WebFormsZapier\Ui\Component\Form\Form\Modifier;

use MageMe\WebFormsZapier\Api\Data\FormInterface;
use Magento\Ui\Component\Form;
use Magento\Ui\DataProvider\Modifier\ModifierInterface;

class ZapierIntegrationSettings implements ModifierInterface
{

    /**
     * @inheritDoc
     */
    public function modifyData(array $data): array
    {
        return $data;
    }

    /**
     * @inheritDoc
     */
    public function modifyMeta(array $meta): array
    {
        $meta['zapier_integration_settings'] = [
            'arguments' => [
                'data' => [
                    'config' => [
                        'componentType' => Form\Fieldset::NAME,
                        'label'         => __('Zapier Integration Settings'),
                        'sortOrder'     => 170,
                        'collapsible'   => true,
                        'opened'        => false,
                    ]
                ]
            ],
            'children'  => [
                FormInterface::IS_ZAPIER_WEBHOOK_ENABLED => [
                    'arguments' => [
                        'data' => [
                            'config' => [
                                'componentType' => Form\Field::NAME,
                                'formElement' => Form\Element\Checkbox::NAME,
                                'dataType' => Form\Element\DataType\Boolean::NAME,
                                'visible' => 1,
                                'sortOrder' => 10,
                                'label' => __('Enable Zapier Webhook'),
                                'default' => '0',
                                'prefer' => 'toggle',
                                'valueMap' => ['false' => '0', 'true' => '1'],
                            ]
                        ]
                    ]
                ],
                FormInterface::ZAPIER_WEBHOOK_URL => [
                    'arguments' => [
                        'data' => [
                            'config' => [
                                'componentType' => Form\Field::NAME,
                                'formElement' => Form\Element\Input::NAME,
                                'dataType' => Form\Element\DataType\Text::NAME,
                                'visible' => 1,
                                'sortOrder' => 20,
                                'label' => __('Zapier Webhook URL')
                            ]
                        ]
                    ]
                ],
            ]
        ];
        return $meta;
    }
}