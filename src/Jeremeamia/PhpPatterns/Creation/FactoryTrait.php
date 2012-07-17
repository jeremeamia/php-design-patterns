<?php

namespace Jeremeamia\PhpPatterns\Creation;

trait FactoryTrait
{
    abstract public function create($name, array $context = []);
}
