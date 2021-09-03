<?php
/**
 * Landofcoder
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Landofcoder.com license that is
 * available through the world-wide-web at this URL:
 * https://landofcoder.com/license
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category   Landofcoder
 * @package    Lof_MarketPlaceRecaptcha
 * @copyright  Copyright (c) 2021 Landofcoder (https://landofcoder.com/)
 * @license    https://landofcoder.com/LICENSE-1.0.html
 */

namespace Lof\MarketPlaceRecaptcha\Helper;

use Magento\Store\Model\ScopeInterface;
use Lof\Recaptcha\Helper\Data as RecaptchaHelperData;
use Magento\Framework\App\Helper\Context;

class Data extends RecaptchaHelperData
{
    /**
     * Is module enabled_seller_create
     *
     * @param null $storeId
     * @return boolean
     */
    public function isEnabledSellerCreate($storeId = null)
    {
        return $this->scopeConfig->getValue('lof_recaptcha/settings/enabled_seller_create', ScopeInterface::SCOPE_STORE, $storeId);
    }
}