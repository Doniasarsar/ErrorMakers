<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYt3xsQH\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYt3xsQH/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYt3xsQH.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYt3xsQH\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYt3xsQH\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Yt3xsQH',
    'container.build_id' => 'e4a7c11c',
    'container.build_time' => 1646226649,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYt3xsQH');
