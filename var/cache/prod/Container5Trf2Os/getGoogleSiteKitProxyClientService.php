<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\SiteKit\Service\Google_Site_Kit_Proxy_Client' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'google'.\DIRECTORY_SEPARATOR.'apiclient'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Client.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'SiteKit'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Google_Site_Kit_Client.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'SiteKit'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Google_Site_Kit_Proxy_Client.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'SiteKit'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SiteKitClientFactory.php';

$a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());

$b = new \Plugin\SiteKit\Service\SiteKitClientFactory($a, ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));

return $this->privates['Plugin\\SiteKit\\Service\\Google_Site_Kit_Proxy_Client'] = $b->createClient($b, ($this->services['router'] ?? $this->getRouterService()), $a, ($this->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $this->getBaseInfoRepositoryService()));