<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAWNb5ZW\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAWNb5ZW/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAWNb5ZW.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAWNb5ZW\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerAWNb5ZW\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'AWNb5ZW',
    'container.build_id' => '460aa9ef',
    'container.build_time' => 1572542122,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAWNb5ZW');
