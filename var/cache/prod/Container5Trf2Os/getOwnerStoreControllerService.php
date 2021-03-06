<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\Admin\Store\OwnerStoreController' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ContainerAwareInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dependency-injection'.\DIRECTORY_SEPARATOR.'ContainerAwareTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ControllerTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Controller.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'Store'.\DIRECTORY_SEPARATOR.'OwnerStoreController.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'CacheUtil.php';

$this->services['Eccube\\Controller\\Admin\\Store\\OwnerStoreController'] = $instance = new \Eccube\Controller\Admin\Store\OwnerStoreController(($this->services['Eccube\\Repository\\PluginRepository'] ?? $this->load('getPluginRepositoryService.php')), ($this->services['Eccube\\Service\\PluginService'] ?? $this->load('getPluginServiceService.php')), ($this->privates['Eccube\\Service\\Composer\\ComposerServiceInterface'] ?? $this->load('getComposerServiceInterfaceService.php')), ($this->services['Eccube\\Service\\SystemService'] ?? $this->load('getSystemServiceService.php')), ($this->privates['Eccube\\Service\\PluginApiService'] ?? $this->load('getPluginApiServiceService.php')), ($this->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $this->getBaseInfoRepositoryService()), ($this->privates['Eccube\\Util\\CacheUtil'] ?? ($this->privates['Eccube\\Util\\CacheUtil'] = new \Eccube\Util\CacheUtil(($this->services['kernel'] ?? $this->get('kernel', 1)), $this))));

$instance->setEccubeConfig(($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))));
$instance->setEntityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
$instance->setSession(($this->services['session'] ?? $this->getSessionService()));
$instance->setFormFactory(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')));
$instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

return $instance;
