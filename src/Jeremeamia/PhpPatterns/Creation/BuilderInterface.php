<?php

namespace Jeremeamia\PhpPatterns\Creation;

/**
 * This interface establishes the class as a Builder pattern and requires that
 * the build() method be implemented.
 */
interface BuilderInterface
{
    /**
     * Performs the logic for building the desired object and returns the fully-
     * instantiated object.
     *
     * @return mixed
     */
    public function build();
}
