# Magento 2 Free Shipping Progress Bar (Luma & Hyvä Theme)

[![Magento 2.4.x](https://img.shields.io/badge/Magento-2.4.x-orange.svg?logo=magento)](https://business.adobe.com/products/magento/magento-commerce.html)
[![PHP 8.1 - 8.4 Compatible](https://img.shields.io/badge/PHP-8.1%20%7C%208.2%20%7C%208.3%20%7C%208.4-777BB4.svg?logo=php)](https://www.php.net/)
[![Hyvä Themes Compatible](https://img.shields.io/badge/Hyv%C3%A4-Compatible-00D1B2.svg)](https://www.hyva.io/)
[![Composer Package](https://img.shields.io/badge/Composer-priyankjivani%2Fmodule--free--shipping--progress-blue.svg?logo=composer)](https://packagist.org/)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![Upwork](https://img.shields.io/badge/Upwork-Available%20for%20Hire-14a800.svg?logo=upwork)](https://www.upwork.com/freelancers/priyankjivani)

Real-time dynamic cart progress bar for **Magento 2 & Adobe Commerce**. Visualizes how close customers are to unlocking free shipping, proven to increase Average Order Value (AOV). Features native out-of-the-box support for both **Magento Luma** (Knockout.js) and **Hyvä Themes** (Alpine.js & Tailwind CSS).

Developed and maintained by **[Priyank Jivani](https://github.com/priyankjivani123)** (Senior Magento 2 Backend Developer).

---

## 🚀 Key Features

* **Live Cart Subtotal Tracking:** Automatically recalculates progress upon adding, updating, or removing cart items without page reloads.
* **Dual Theme Architecture:**
  * **Luma Theme:** Knockout.js component integrated with Magento `customerData` section.
  * **Hyvä Theme:** Lightweight Alpine.js reactive store with Tailwind CSS progress animation.
* **Zero Hardcoded URLs / Currencies:** Fully dynamic store currency resolution via `StoreManager` and dynamic AJAX endpoints.
* **Admin Configuration:** Set threshold amounts and goal celebration messages via **Stores > Configuration > Sales > Shipping Methods**.

---

## 🌐 Magento & PHP Compatibility Matrix

| Magento / Adobe Commerce Release | Supported PHP Versions | Compatibility Status | Notes |
| :--- | :--- | :---: | :--- |
| **Magento 2.4.4 - 2.4.5-p1** | PHP 8.1 | ✅ Supported | Tested on 2.4.4-p9 & 2.4.5-p1 |
| **Magento 2.4.5-p2 - 2.4.6-pX** | PHP 8.1, PHP 8.2 | ✅ Supported | Tested on 2.4.6-p8 |
| **Magento 2.4.7 - 2.4.7-pX** | PHP 8.2, PHP 8.3 | ✅ Supported | Officially verified on 2.4.7-p3 |
| **Magento 2.4.8 (Roadmap)** | PHP 8.3, PHP 8.4 | 🚀 Forward-Compatible | Strict types, zero implicit nullable deprecations |
| **PHP 8.5 (Future Release)** | *N/A (Pending Adobe Core)* | ⏳ Preview / Audited | Extension syntax passes PHP 8.5 compilation; awaiting Adobe Commerce core framework update |


---

## 📦 Composer Installation Instructions

### Step 1: Register GitHub VCS Repository
```bash
composer config repositories.priyankjivani-free-shipping-progress vcs https://github.com/priyankjivani123/magento2-free-shipping-progress.git
```

### Step 2: Require the Package
```bash
composer require priyankjivani/module-free-shipping-progress:^1.0.0
```

### Step 3: Enable the Module
```bash
bin/magento module:enable PriyankJivani_FreeShippingProgress PriyankJivani_FreeShippingProgressHyva
bin/magento setup:upgrade
bin/magento cache:flush
```

---

## 📺 Live Video Demonstration

Watch a demonstration of this module in action:  
👉 **[View Video Demo](https://www.awesomescreenshot.com/video/46870419?key=d4d665693e3d66dcbdb8100954b3441c)**

---

## 🧪 Automated Testing

```bash
vendor/bin/phpunit -c phpunit.xml.dist
```

---

## 📋 Changelog

See [CHANGELOG.md](CHANGELOG.md).

---

## 📄 License

MIT License. See [LICENSE](LICENSE).

---

## Developing a Magento 2 project?

I help businesses build, customize, optimize and maintain Magento 2 / Adobe Commerce stores.

**Available for:**
- Magento 2 Custom Development
- Magento Extensions
- Bug Fixes and Troubleshooting
- Performance Optimization
- Hyvä Theme Development
- API Integrations
- Ongoing Magento Maintenance

**Hire me on Upwork:** [Priyank Jivani Upwork Profile](https://www.upwork.com/freelancers/priyankjivani)  
**GitHub:** [github.com/priyankjivani123](https://github.com/priyankjivani123)

Contact me for freelance projects and long-term collaborations.

