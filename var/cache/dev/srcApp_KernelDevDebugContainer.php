<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container20MIyDG\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container20MIyDG/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container20MIyDG.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container20MIyDG\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container20MIyDG\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '20MIyDG',
    'container.build_id' => '3fc0179b',
    'container.build_time' => 1645187941,
], __DIR__.\DIRECTORY_SEPARATOR.'Container20MIyDG');
