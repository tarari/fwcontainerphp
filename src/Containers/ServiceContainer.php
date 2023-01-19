<?php
declare(strict_types=1);

namespace App\Containers;

use ArrayAccess;

class ServiceContainer implements ArrayAccess
{
    protected array $services = [];
    protected array $cache = [];

    public function register(string $name, string $class, array $dependencies = []): void
    {
        $this->services[$name] = [
            'class' => new \ReflectionClass($class),
            'dependencies' => $dependencies
        ];
    }

    public function get(string $name)
    {
        if (isset($this->cache[$name])) {
            return $this->cache[$name];
        }
        $service = $this->services[$name];
        $dependencies = array_map(fn ($dependency) => $this->get($dependency), $service['dependencies']);
        $instance = $service['class']->newInstanceArgs($dependencies);
        $this->cache[$name] = $instance;
        return $instance;
    }
  
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}
