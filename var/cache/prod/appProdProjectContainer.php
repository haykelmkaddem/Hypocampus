<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAx4bymi\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAx4bymi/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerAx4bymi.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerAx4bymi\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerAx4bymi\appProdProjectContainer([
    'container.build_hash' => 'Ax4bymi',
    'container.build_id' => 'f927bdbb',
    'container.build_time' => 1582584274,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAx4bymi');
