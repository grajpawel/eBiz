<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.order.delivery.slip.options.form_provider' shared service.

return $this->services['prestashop.adapter.order.delivery.slip.options.form_provider'] = new \PrestaShopBundle\Form\Admin\Sell\Order\Delivery\SlipOptionsFormDataProvider(${($_ = isset($this->services['prestashop.adapter.order.delivery.slip.options.configuration']) ? $this->services['prestashop.adapter.order.delivery.slip.options.configuration'] : $this->load('getPrestashop_Adapter_Order_Delivery_Slip_Options_ConfigurationService.php')) && false ?: '_'});
