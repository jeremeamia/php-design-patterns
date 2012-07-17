<?php

namespace Jeremeamia\PhpPatterns\Creation;

use Jeremeamia\PhpPatterns\Collection\RegistryTrait;

trait FlyweightFactoryTrait
{
    use RegistryTrait;

    public function create($name, array $context = [])
    {
        $key = $this->calculateHashKey($name, $context);

        if (!$this->has($key)) {
            $this->set($key, $this->doCreate($name, $context));
        }

        return $this->get($key);
    }

    protected function calculateHashKey($name, array $context)
    {
        return $name;
    }

    abstract protected function doCreate($name, array $context);
}
