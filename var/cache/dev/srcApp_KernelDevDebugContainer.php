<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNNsn4GC\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNNsn4GC/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNNsn4GC.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNNsn4GC\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNNsn4GC\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NNsn4GC',
    'container.build_id' => 'c409c268',
    'container.build_time' => 1645484893,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNNsn4GC');
