<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'exercise_html_purifier.default' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ezyang'.\DIRECTORY_SEPARATOR.'htmlpurifier'.\DIRECTORY_SEPARATOR.'library'.\DIRECTORY_SEPARATOR.'HTMLPurifier.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'ezyang'.\DIRECTORY_SEPARATOR.'htmlpurifier'.\DIRECTORY_SEPARATOR.'library'.\DIRECTORY_SEPARATOR.'HTMLPurifier'.\DIRECTORY_SEPARATOR.'Config.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'exercise'.\DIRECTORY_SEPARATOR.'htmlpurifier-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'HTMLPurifierConfigFactory.php';

return $this->privates['exercise_html_purifier.default'] = new \HTMLPurifier(\Exercise\HTMLPurifierBundle\HTMLPurifierConfigFactory::create('default', ['Cache.SerializerPath' => ($this->targetDir.''.'/htmlpurifier')], NULL, [], [], [], []));
