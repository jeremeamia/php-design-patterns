<?php

namespace Jeremeamia\PhpPatterns\Ornamental;

/**
 * This trait adds convenience methods for reflecting the current object. An
 * object's reflection is stored in the object for memoization purposes.
 */
trait ReflectiveTrait
{
    /**
     * @var \ReflectionObject The reflected object
     */
    protected $reflectedObject;

    /**
     * Reflects the object and stores it before returning it. On subsequent
     * calls, the stored ReflectionObject is returned.
     *
     * @return \ReflectionObject
     */
    public function reflect()
    {
        if (!isset($this->reflectedObject)) {
            $this->reflectedObject = new \ReflectionObject($this);
        }

        return $this->reflectedObject;
    }
}
