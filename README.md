# Magento 2 Dynamic Free Shipping Progress Bar (Luma & Hyvä Theme)

[![Magento 2.4.x](https://img.shields.io/badge/Magento-2.4.x-orange.svg?logo=magento)](https://business.adobe.com/products/magento/magento-commerce.html)
[![Hyvä Compatible](https://img.shields.io/badge/Hyv%C3%A4-100%25%20Compatible-00D1B2.svg)](https://www.hyva.io/)
[![PHP 8.1 | 8.2 | 8.3](https://img.shields.io/badge/PHP-8.1%20%7C%208.2%20%7C%208.3-777BB4.svg?logo=php)](https://www.php.net/)
[![Alpine.js](https://img.shields.io/badge/Alpine.js-3.x-77C1D2.svg?logo=alpinedotjs)](https://alpinejs.dev/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind-CSS-38B2AC.svg?logo=tailwind-css)](https://tailwindcss.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![Upwork Top Rated](https://img.shields.io/badge/Upwork-Available%20for%20Hire-green.svg?logo=upwork)](https://www.upwork.com/freelancers/priyankjivani)

An open-source conversion-rate optimization (CRO) module for **Magento 2 & Adobe Commerce**. Displays a dynamic, reactive free shipping progress bar across your store that updates instantly whenever items are added, updated, or removed from the shopping cart.

Includes full native implementations for both **Luma (Knockout.js)** and **Hyvä Themes (Alpine.js & Tailwind CSS)**.

Developed and maintained by **[Priyank Jivani](https://github.com/priyankjivani123)** (Senior Magento 2 Backend Developer).

---

## 🎥 Video Demonstration

▶️ **[Watch the Live Video Demo](https://www.awesomescreenshot.com/video/46870419?key=d4d665693e3d66dcbdb8100954b3441c)**

---

## 🚀 Key Features

* **Real-time Cart Section Reactivity**: Listens to Magento 2 `customer-data` cart section changes via events and AJAX. Never requires full page reload.
* **Dual-Frontend Architecture**:
  * **Luma / Blank Themes**: Built using Magento UI Components, Knockout.js observables, and CustomerData local storage.
  * **Hyvä Theme**: Native Alpine.js reactive component styling powered by Tailwind CSS transitions without jQuery bloat.
* **Configurable Thresholds**: Set minimum spend required for free shipping per Store View in Magento Admin (`Stores > Configuration > Sales > Shipping Settings`).
* **Multi-Currency Support**: Dynamically formats remaining balances according to the active store currency code and symbol.
* **Dismissible Notification Bar**: Customers can dismiss the progress bar; preferences persist via session storage.
* **Celebration State**: Visually triggers celebration animations when the customer unlocks free shipping.

---

## 🛠 Technical Requirements

| Component | Specification |
| :--- | :--- |
| **Magento / Adobe Commerce** | 2.4.4, 2.4.5, 2.4.6, 2.4.7+ |
| **PHP** | 8.1, 8.2, 8.3 |
| **Themes Supported** | Magento Luma, Blank, Hyvä Themes (1.2.x - 1.3.x+) |
| **Frontend Dependencies** | Knockout.js (Luma) / Alpine.js + Tailwind (Hyvä) |

---

## 📦 Installation Instructions

### Option 1: Composer Installation (Recommended)

```bash
composer require priyank/module-free-shipping-progress
bin/magento module:enable Priyank_FreeShippingProgress Priyank_FreeShippingProgressHyva
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
bin/magento cache:flush
```

*(If you are running a standard Luma theme without Hyvä, you only need to enable `Priyank_FreeShippingProgress`)*.

### Option 2: Manual Installation

1. Copy directory `Priyank/FreeShippingProgress` to `app/code/Priyank/FreeShippingProgress`.
2. *(Optional for Hyvä)* Copy `Priyank/FreeShippingProgressHyva` to `app/code/Priyank/FreeShippingProgressHyva`.
3. Run:
```bash
bin/magento module:enable Priyank_FreeShippingProgress
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy -f
bin/magento cache:flush
```

---

## ⚙️ Configuration

Navigate to **Admin Panel > Stores > Configuration > Priyank Extensions > Free Shipping Progress**:

* **Enable Bar**: Select `Yes` to activate.
* **Free Shipping Threshold Amount**: Enter the monetary target (e.g. `100.00`).
* **Pre-threshold Message**: Customizable notification template (e.g., `Add {remaining} more to unlock FREE SHIPPING!`).

---

## 🏗 Architecture & File Tree

```
├── Priyank/
│   ├── FreeShippingProgress/            # Core Luma & Knockout.js module
│   │   ├── ViewModel/Config.php
│   │   ├── etc/
│   │   │   ├── adminhtml/system.xml
│   │   │   └── module.xml
│   │   ├── view/frontend/
│   │   │   ├── layout/default.xml
│   │   │   ├── templates/progress.phtml
│   │   │   └── web/
│   │   │       ├── js/progress.js
│   │   │       └── template/progress.html
│   │   ├── composer.json
│   │   └── registration.php
│   │
│   └── FreeShippingProgressHyva/        # Hyvä Theme Alpine.js compatibility layer
│       ├── ViewModel/Config.php
│       ├── etc/
│       │   ├── adminhtml/system.xml
│       │   └── module.xml
│       ├── view/frontend/
│       │   ├── layout/default.xml
│       │   └── templates/hyva/progress.phtml
│       └── registration.php
├── composer.json
└── README.md
```

---

## 📄 License

Open-source module released under the [MIT License](LICENSE).

---

## 💼 Developing a Magento 2 project?

I help businesses build, customize, optimize, and maintain **Magento 2 / Adobe Commerce** stores.

**Available for:**
* Magento 2 Custom Development & Architecture
* Custom Magento Extensions & Modules
* Bug Fixes, Audits, and Troubleshooting
* Performance Optimization & Core Web Vitals
* Hyvä Theme Development & Customization
* Headless GraphQL & REST API Integrations
* Ongoing Magento Store Maintenance

👉 **Hire me on Upwork:** [Priyank Jivani on Upwork](https://www.upwork.com/freelancers/priyankjivani)  
👉 **GitHub Profile:** [priyankjivani123](https://github.com/priyankjivani123)

Contact me for freelance projects and long-term enterprise collaborations.
