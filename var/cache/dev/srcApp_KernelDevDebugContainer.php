<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWEM3Xrw\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWEM3Xrw/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWEM3Xrw.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWEM3Xrw\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWEM3Xrw\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WEM3Xrw',
    'container.build_id' => 'e8f8c5a7',
    'container.build_time' => 1571154222,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWEM3Xrw');
