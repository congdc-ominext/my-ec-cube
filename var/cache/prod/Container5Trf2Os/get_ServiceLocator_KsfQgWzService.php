<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.KsfQgWz' shared service.

return $this->privates['.service_locator.KsfQgWz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService.php', true],
], [
    'cacheUtil' => 'Eccube\\Util\\CacheUtil',
]);
