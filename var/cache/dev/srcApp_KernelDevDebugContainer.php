<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2geBmas\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2geBmas/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2geBmas.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2geBmas\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container2geBmas\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '2geBmas',
    'container.build_id' => '09106684',
    'container.build_time' => 1646821586,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2geBmas');
