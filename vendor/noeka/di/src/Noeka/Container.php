<?php

namespace Noeka\DI;

use Noeka\DI\Exceptions\NotFoundException;
use Psr\Container\ContainerInterface;

class Container implements ContainerInterface {
    protected array $bindings = [];

    /**
     * @param string $id
     * @param callable $factory
     *
     * @return void
     */
    public function set(string $id, callable $factory): void
    {
        $this->bindings[$id] = $factory;
    }
    
    /**
     * @param string $id
     *
     * @return mixed
     */
    public function get(string $id): mixed
    {
        if (! $this->has($id)) {
            throw new NotFoundException(sprintf(
                'Target binding %s does not exist.',
                $id
            ));
        }

        $factory = $this->bindings[$id];

        return $factory($this);
    }
    
    /**
     * @param string $id
     *
     * @return bool
     */
    public function has(string $id): bool
    {
        if (! isset($this->bindings[$id])) {
            return false;
        }

        return true;
    }
}

