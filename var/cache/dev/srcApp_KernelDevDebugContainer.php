<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM1TU8Dl\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM1TU8Dl/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerM1TU8Dl.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerM1TU8Dl\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerM1TU8Dl\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'M1TU8Dl',
    'container.build_id' => '126973d8',
    'container.build_time' => 1645614985,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerM1TU8Dl');
