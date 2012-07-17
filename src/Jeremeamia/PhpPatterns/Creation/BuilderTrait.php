<?php

namespace Jeremeamia\PhpPatterns\Creation;

/**
 * This trait establishes the class as a Builder pattern and requires that
 * the build() method be implemented.
 */
trait BuilderTrait
{
    /**
     * Performs the logic for building the desired object and returns the fully-
     * instantiated object.
     *
     * @return mixed
     */
    abstract public function build();
}
