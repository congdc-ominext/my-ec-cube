<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\ProductReview4\Repository\ProductReviewRepository' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'ProductReview4'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ProductReviewRepository.php';

return $this->privates['Plugin\\ProductReview4\\Repository\\ProductReviewRepository'] = new \Plugin\ProductReview4\Repository\ProductReviewRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
