<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYlGQbp8\EccubeEccube_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYlGQbp8/EccubeEccube_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerYlGQbp8.legacy');

    return;
}

if (!\class_exists(EccubeEccube_KernelProdContainer::class, false)) {
    \class_alias(\ContainerYlGQbp8\EccubeEccube_KernelProdContainer::class, EccubeEccube_KernelProdContainer::class, false);
}

return new \ContainerYlGQbp8\EccubeEccube_KernelProdContainer([
    'container.build_hash' => 'YlGQbp8',
    'container.build_id' => '2bd1acfa',
    'container.build_time' => 1635849247,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYlGQbp8');
