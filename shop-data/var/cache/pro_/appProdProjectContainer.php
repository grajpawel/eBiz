<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKvx8vel\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKvx8vel/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerKvx8vel.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerKvx8vel\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerKvx8vel\appProdProjectContainer([
    'container.build_hash' => 'Kvx8vel',
    'container.build_id' => 'a6407dbe',
    'container.build_time' => 1636837960,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKvx8vel');