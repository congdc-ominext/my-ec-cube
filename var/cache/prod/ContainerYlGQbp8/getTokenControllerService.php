<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Trikoder\Bundle\OAuth2Bundle\Controller\TokenController' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TokenController.php';

return $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Controller\\TokenController'] = new \Trikoder\Bundle\OAuth2Bundle\Controller\TokenController(($this->privates['League\\OAuth2\\Server\\AuthorizationServer'] ?? $this->load('getAuthorizationServerService.php')));