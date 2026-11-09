<?php
declare(strict_types=1);

namespace PriyankJivani\FreeShippingProgressHyva\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Configuration ViewModel for Free Shipping Progress in Hyvä Theme
 */
class Config implements ArgumentInterface
{
    public const XML_PATH_ENABLED = 'free_shipping_bar/configuration/enabled';
    public const XML_PATH_MIN_AMOUNT = 'free_shipping_bar/configuration/min_amount';
    public const XML_PATH_MSG_BEFORE = 'free_shipping_bar/configuration/message_before';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @param ScopeConfigInterface $scopeConfig
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        StoreManagerInterface $storeManager
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;
    }

    /**
     * Check if free shipping progress bar is enabled
     */
    public function isEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_ENABLED);
    }

    /**
     * Get minimum amount for free shipping
     */
    public function getMinAmount(): float
    {
        return (float) $this->scopeConfig->getValue(self::XML_PATH_MIN_AMOUNT);
    }

    /**
     * Get message displayed before the progress bar
     */
    public function getBeforeMessage(): string
    {
        return (string) $this->scopeConfig->getValue(self::XML_PATH_MSG_BEFORE);
    }

    /**
     * Get active store currency symbol
     */
    public function getCurrencySymbol(): string
    {
        try {
            $currency = $this->storeManager->getStore()->getCurrentCurrency();
            return (string) ($currency->getCurrencySymbol() ?: $currency->getCurrencyCode());
        } catch (\Throwable $e) {
            return '$';
        }
    }

    /**
     * Get full configuration array for JS
     */
    public function getConfigArray(): array
    {
        return [
            'enabled'         => $this->isEnabled(),
            'min_amount'      => $this->getMinAmount(),
            'before_message'  => $this->getBeforeMessage(),
            'currency_symbol' => $this->getCurrencySymbol()
        ];
    }
}
