<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.jIkrOw2' shared service.

return $this->privates['.service_locator.jIkrOw2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Plugin' => ['privates', '.errored..service_locator.jIkrOw2.Eccube\\Entity\\Plugin', NULL, 'Cannot autowire service ".service_locator.jIkrOw2": it references class "Eccube\\Entity\\Plugin" but no such service exists.'],
    'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService.php', true],
], [
    'Plugin' => 'Eccube\\Entity\\Plugin',
    'cacheUtil' => 'Eccube\\Util\\CacheUtil',
]);
