<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDBnLhqU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDBnLhqU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDBnLhqU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDBnLhqU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDBnLhqU\App_KernelDevDebugContainer([
    'container.build_hash' => 'DBnLhqU',
    'container.build_id' => 'eda0fe8c',
    'container.build_time' => 1711877876,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDBnLhqU');