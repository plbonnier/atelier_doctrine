<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXxZXg3g\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXxZXg3g/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXxZXg3g.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXxZXg3g\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXxZXg3g\App_KernelDevDebugContainer([
    'container.build_hash' => 'XxZXg3g',
    'container.build_id' => '85446b11',
    'container.build_time' => 1653302326,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXxZXg3g');