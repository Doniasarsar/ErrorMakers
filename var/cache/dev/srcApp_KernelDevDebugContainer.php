<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOk7vdRp\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOk7vdRp/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOk7vdRp.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOk7vdRp\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerOk7vdRp\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Ok7vdRp',
    'container.build_id' => '6ad6bf98',
    'container.build_time' => 1646172545,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOk7vdRp');
