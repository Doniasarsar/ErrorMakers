<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBOLFpTt\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBOLFpTt/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBOLFpTt.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBOLFpTt\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBOLFpTt\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BOLFpTt',
    'container.build_id' => '4e1a6186',
    'container.build_time' => 1646166858,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBOLFpTt');
