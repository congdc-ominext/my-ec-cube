<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\Api\EventListener\AuthorizationRequestResolveListener' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'AuthorizationRequestResolveListener.php';

return $this->privates['Plugin\\Api\\EventListener\\AuthorizationRequestResolveListener'] = new \Plugin\Api\EventListener\AuthorizationRequestResolveListener(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['sensio_framework_extra.psr7.http_message_factory'] ?? $this->load('getSensioFrameworkExtra_Psr7_HttpMessageFactoryService.php')), ($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
