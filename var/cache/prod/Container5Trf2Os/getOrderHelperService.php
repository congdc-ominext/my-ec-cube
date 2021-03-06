<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\OrderHelper' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'OrderHelper.php';

return $this->privates['Eccube\\Service\\OrderHelper'] = new \Eccube\Service\OrderHelper($this, ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Eccube\\Repository\\OrderRepository'] ?? $this->getOrderRepositoryService()), ($this->privates['Eccube\\Repository\\Master\\OrderItemTypeRepository'] ?? $this->load('getOrderItemTypeRepositoryService.php')), ($this->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $this->load('getOrderStatusRepositoryService.php')), ($this->privates['Eccube\\Repository\\DeliveryRepository'] ?? $this->load('getDeliveryRepositoryService.php')), ($this->privates['Eccube\\Repository\\PaymentRepository'] ?? $this->load('getPaymentRepositoryService.php')), ($this->privates['Eccube\\Repository\\Master\\DeviceTypeRepository'] ?? $this->getDeviceTypeRepositoryService()), ($this->privates['Eccube\\Repository\\Master\\PrefRepository'] ?? $this->load('getPrefRepositoryService.php')), ($this->services['SunCat\\MobileDetectBundle\\DeviceDetector\\MobileDetector'] ?? ($this->services['SunCat\\MobileDetectBundle\\DeviceDetector\\MobileDetector'] = new \SunCat\MobileDetectBundle\DeviceDetector\MobileDetector())), ($this->services['session'] ?? $this->getSessionService()));
