<?php

namespace Jeremeamia\PhpPatterns\Creation;

interface FactoryInterface
{
    public function create($name, array $context = []);
}
