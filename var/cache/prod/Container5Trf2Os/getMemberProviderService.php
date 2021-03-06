<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Security\Core\User\MemberProvider' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'MemberProvider.php';

return $this->privates['Eccube\\Security\\Core\\User\\MemberProvider'] = new \Eccube\Security\Core\User\MemberProvider(($this->privates['Eccube\\Repository\\MemberRepository'] ?? $this->load('getMemberRepositoryService.php')));
