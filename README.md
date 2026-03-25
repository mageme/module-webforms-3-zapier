# Magento 2 Zapier Integration — MageMe WebForms

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mageme/module-webforms-3-zapier.svg)](https://packagist.org/packages/mageme/module-webforms-3-zapier)
[![Packagist Downloads](https://img.shields.io/packagist/dt/mageme/module-webforms-3-zapier.svg)](https://packagist.org/packages/mageme/module-webforms-3-zapier)
[![License: Proprietary](https://img.shields.io/badge/license-proprietary-blue.svg)](https://mageme.com/license/)

Connect Magento 2 forms to 7000+ apps through Zapier. This free add-on for [MageMe WebForms](https://mageme.com/magento-2-form-builder.html) sends form submission data to Zapier webhooks in real time — giving you unlimited automation possibilities without writing code.

## Features

- Send form submissions to Zapier webhooks automatically on submit
- Deliver complete form data as structured JSON (form ID, name, timestamp, all field values)
- Configure a unique webhook URL per form for different Zap workflows
- Connect to 7000+ apps: Google Sheets, Slack, Trello, Asana, Notion, Airtable, and more
- Built-in error handling with Magento system logging
- Resend submissions to Zapier manually from the Magento admin panel

## Requirements

- Magento 2.4.x
- [MageMe WebForms 3](https://mageme.com/magento-2-form-builder.html) version 3.5.0 or higher
- PHP `curl` and `json` extensions
- Zapier account (free or paid)

## Installation

```
composer require mageme/module-webforms-3-zapier
bin/magento setup:upgrade
bin/magento cache:flush
```

## Configuration

1. In Zapier, create a new Zap with a **Webhooks by Zapier** trigger (Catch Hook) and copy the webhook URL.
2. Open any form in the Magento admin panel and paste the webhook URL in the Zapier integration tab.

## Other MageMe WebForms Integrations

For direct CRM and marketing platform connections, check out these add-ons:

- [HubSpot](https://github.com/mageme/module-webforms-3-hubspot) — sync contacts, companies, and tickets
- [Salesforce](https://github.com/mageme/module-webforms-3-salesforce) — create leads from form submissions
- [Zoho CRM & Desk](https://github.com/mageme/module-webforms-3-zoho) — create leads and support tickets
- [Freshdesk](https://github.com/mageme/module-webforms-3-freshdesk) — create support tickets automatically
- [Zendesk](https://github.com/mageme/module-webforms-3-zendesk) — create tickets with custom field types
- [Klaviyo](https://github.com/mageme/module-webforms-3-klaviyo) — build profiles and grow your email lists
- [Mailchimp](https://github.com/mageme/module-webforms-3-mailchimp) — subscribe customers to audiences

## About MageMe WebForms

[MageMe WebForms](https://mageme.com/magento-2-form-builder.html) brings no-code form building to Magento 2. Whether you need a simple contact form or a complex multi-step workflow with conditional logic, file uploads, and automated notifications — WebForms handles it from the admin panel, with native integrations for popular CRM and marketing tools.

[Get MageMe WebForms for Magento 2](https://mageme.com/magento-2-form-builder.html)

## Support

- Documentation: [docs.mageme.com](https://docs.mageme.com)
- Issue Tracker: [GitHub Issues](https://github.com/mageme/module-webforms-3-zapier/issues)

## License

Proprietary. See [License](https://mageme.com/license/) for details.
