<?php

namespace Jeremeamia\PhpPatterns\Creational;

/**
 * This trait establishes the class as a Factory pattern and requires that the
 * create() method be implemented.
 */
trait FactoryTrait
{
    /**
     * Creates an instance of the class or subclass that the factory supports
     *
     * @param string $name The name used to determine which class to create
     * @param array $context An array of data that may affect the created object
     * @return mixed
     */
    abstract public function create($name, array $context = []);
}
