# MageMe WebForms 3 — Zapier Integration

Free add-on for [MageMe WebForms for Magento 2](https://mageme.com/magento-2-form-builder.html) that sends form submissions to Zapier webhooks.

## Features

- Send form submissions to Zapier webhooks automatically
- Connect your Magento forms with 7000+ apps through Zapier automations
- Send submissions to Zapier manually from the admin panel

## Requirements

- Magento 2.4.x
- [MageMe WebForms 3](https://mageme.com/magento-2-form-builder.html) version 3.5.0 or higher
- PHP `curl` and `json` extensions

## Installation

### Via Composer

```
composer require mageme/module-webforms-3-zapier
bin/magento setup:upgrade
bin/magento cache:flush
```

### Manual Installation

1. Download and extract to `app/code/MageMe/WebFormsZapier/`
2. Run `bin/magento setup:upgrade`
3. Run `bin/magento cache:flush`

## Configuration

1. Create a Zap in your Zapier account with a "Webhooks by Zapier" trigger (Catch Hook).
2. Open a form in the admin panel and paste the Zapier webhook URL in the Zapier integration tab.

## About MageMe WebForms

[MageMe WebForms](https://mageme.com/magento-2-form-builder.html) is a powerful form builder for Magento 2 that allows you to create any type of form — contact forms, surveys, registration forms, order forms, and more — with a drag-and-drop interface, conditional logic, file uploads, and CRM integrations.

[Get MageMe WebForms](https://mageme.com/magento-2-form-builder.html)

## Support

- Documentation: [mageme.com](https://mageme.com)
- Issue Tracker: [GitHub Issues](https://github.com/mageme/module-webforms-3-zapier/issues)

## License

Proprietary. See [License](https://mageme.com/license/) for details.
