<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFxJS69I\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFxJS69I/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFxJS69I.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFxJS69I\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerFxJS69I\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'FxJS69I',
    'container.build_id' => '89f72bd1',
    'container.build_time' => 1645825734,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFxJS69I');
