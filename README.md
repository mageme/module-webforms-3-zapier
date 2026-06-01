# MageMe WebForms Zapier for Magento 2

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mageme/module-webforms-3-zapier.svg?style=flat-square)](https://packagist.org/packages/mageme/module-webforms-3-zapier)
[![Packagist Downloads](https://img.shields.io/packagist/dt/mageme/module-webforms-3-zapier.svg?style=flat-square)](https://packagist.org/packages/mageme/module-webforms-3-zapier)
[![Magento](https://img.shields.io/badge/Magento-2.4.x-EE672F.svg?style=flat-square)](https://magento.com)
[![PHP](https://img.shields.io/badge/PHP-7.4%20–%208.5-777BB4.svg?style=flat-square)](https://php.net)
[![License](https://img.shields.io/badge/license-MageMe%20EULA-blue.svg?style=flat-square)](https://mageme.com/license/)

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

## Custom Magento development

Need a feature an extension doesn't cover, or a bespoke Magento build? MageMe takes on custom extension development and integration work.

→ **[Custom Magento development](https://mageme.com/magento-services/custom-development)**

## Support

- Documentation: [docs.mageme.com](https://docs.mageme.com)
- Bug reports and feature requests: [GitHub Issues](https://github.com/mageme/module-webforms-3-zapier/issues)

## License

Governed by the **MageMe End User License Agreement** ([mageme.com/license](https://mageme.com/license/)). This add-on is distributed free of charge.

---

**MageMe WebForms** is a no-code form builder for Magento 2 — conditional logic, multi-step forms, file uploads, and CRM integrations. → [Get WebForms](https://mageme.com/magento-2-form-builder.html)