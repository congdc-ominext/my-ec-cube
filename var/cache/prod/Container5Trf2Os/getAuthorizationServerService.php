<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'League\OAuth2\Server\AuthorizationServer' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'event'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EmitterAwareInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'event'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EmitterAwareTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AuthorizationServer.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repositories'.\DIRECTORY_SEPARATOR.'RepositoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repositories'.\DIRECTORY_SEPARATOR.'ClientRepositoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'League'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ClientRepository.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repositories'.\DIRECTORY_SEPARATOR.'ScopeRepositoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'League'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ScopeRepository.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'ScopeManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'InMemory'.\DIRECTORY_SEPARATOR.'ScopeManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'Scope.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CryptKey.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Grant'.\DIRECTORY_SEPARATOR.'GrantTypeInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CryptTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Grant'.\DIRECTORY_SEPARATOR.'AbstractGrant.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Grant'.\DIRECTORY_SEPARATOR.'RefreshTokenGrant.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repositories'.\DIRECTORY_SEPARATOR.'RefreshTokenRepositoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'League'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'RefreshTokenRepository.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Grant'.\DIRECTORY_SEPARATOR.'AbstractAuthorizeGrant.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Grant'.\DIRECTORY_SEPARATOR.'AuthCodeGrant.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repositories'.\DIRECTORY_SEPARATOR.'AuthCodeRepositoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'League'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'AuthCodeRepository.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'AuthorizationCodeManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Manager'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'AuthorizationCodeManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Converter'.\DIRECTORY_SEPARATOR.'ScopeConverterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Converter'.\DIRECTORY_SEPARATOR.'ScopeConverter.php';

$a = ($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\ClientManagerInterface'] ?? $this->load('getClientManagerInterfaceService.php'));
$b = new \Trikoder\Bundle\OAuth2Bundle\Manager\InMemory\ScopeManager();
$b->save(new \Trikoder\Bundle\OAuth2Bundle\Model\Scope('read'));
$b->save(new \Trikoder\Bundle\OAuth2Bundle\Model\Scope('write'));
$c = ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter'] ?? ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter'] = new \Trikoder\Bundle\OAuth2Bundle\Converter\ScopeConverter()));

$this->privates['League\\OAuth2\\Server\\AuthorizationServer'] = $instance = new \League\OAuth2\Server\AuthorizationServer(new \Trikoder\Bundle\OAuth2Bundle\League\Repository\ClientRepository($a), ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\AccessTokenRepository'] ?? $this->load('getAccessTokenRepositoryService.php')), new \Trikoder\Bundle\OAuth2Bundle\League\Repository\ScopeRepository($b, $a, $c, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())), new \League\OAuth2\Server\CryptKey($this->getEnv('ECCUBE_OAUTH2_AUTHORIZATION_SERVER_PRIVATE_KEY'), NULL, false), $this->getEnv('ECCUBE_OAUTH2_ENCRYPTION_KEY'));

$d = new \Trikoder\Bundle\OAuth2Bundle\League\Repository\RefreshTokenRepository(($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\RefreshTokenManager'] ?? $this->load('getRefreshTokenManagerService.php')), ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\AccessTokenManager'] ?? $this->load('getAccessTokenManagerService.php')));

$e = new \League\OAuth2\Server\Grant\RefreshTokenGrant($d);
$e->setRefreshTokenTTL(new \DateInterval('P1M'));
$f = new \League\OAuth2\Server\Grant\AuthCodeGrant(new \Trikoder\Bundle\OAuth2Bundle\League\Repository\AuthCodeRepository(new \Trikoder\Bundle\OAuth2Bundle\Manager\Doctrine\AuthorizationCodeManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())), $a, $c), $d, new \DateInterval('PT10M'));
$f->setRefreshTokenTTL(new \DateInterval('P1M'));

$instance->enableGrantType($e, new \DateInterval('PT1H'));
$instance->enableGrantType($f, new \DateInterval('PT1H'));

return $instance;