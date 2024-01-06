<?php

namespace Noeka\Application;

use Psr\Container\ContainerInterface;
use Noeka\DI\Container;

class Application {
    protected ContainerInterface $container;

    public function __construct(?ContainerInterface $container) {
        $this->resolveContainer($container);
    }

    protected function resolveContainer(?ContainerInterface $container): void
    {
        if ($container instanceof ContainerInterface) {
            $this->container = $container;

            return;
        }

        $this->container = new Container;
    }
}

