<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOximWLU\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOximWLU/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerOximWLU.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerOximWLU\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerOximWLU\appAppKernelProdContainer([
    'container.build_hash' => 'OximWLU',
    'container.build_id' => '8bc8a296',
    'container.build_time' => 1720700048,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOximWLU');
