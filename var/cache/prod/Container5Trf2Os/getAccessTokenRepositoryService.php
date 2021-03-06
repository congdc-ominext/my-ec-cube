<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Trikoder\Bundle\OAuth2Bundle\League\Repository\AccessTokenRepository' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repositories'.\DIRECTORY_SEPARATOR.'RepositoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repositories'.\DIRECTORY_SEPARATOR.'AccessTokenRepositoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'League'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'AccessTokenRepository.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Converter'.\DIRECTORY_SEPARATOR.'ScopeConverterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Converter'.\DIRECTORY_SEPARATOR.'ScopeConverter.php';

return $this->privates['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\AccessTokenRepository'] = new \Trikoder\Bundle\OAuth2Bundle\League\Repository\AccessTokenRepository(($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\AccessTokenManager'] ?? $this->load('getAccessTokenManagerService.php')), ($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\ClientManagerInterface'] ?? $this->load('getClientManagerInterfaceService.php')), ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter'] ?? ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter'] = new \Trikoder\Bundle\OAuth2Bundle\Converter\ScopeConverter())));
