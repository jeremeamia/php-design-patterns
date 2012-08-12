<?php

namespace Jeremeamia\PhpPatterns\Structural\Collection;

/**
 * The Registry Pattern
 *
 * Common Aliases:   Map, Container, Collection
 * Related Patterns: Singleton Registry, Map
 *
 * Martin Fowler describes the Registry pattern as "A well-known object that
 * other objects can use to find common objects and services." In other words,
 * it is an object (whether a static, singleton, or instance) that contains
 * other objects or data, and keeps references to those by a name or key. It's
 * essentially a simplified associative array with an object-oriented interface.
 *
 * Registries are commonly used to keep track of objects and data that need to
 * be accessed in a global or wide context. Because of this, they are often
 * designed to be a static or singleton class, even though that is not
 * necessary, and is generally discouraged.
 *
 * Also, the basic interface and functionality of a Registry can be re-used to
 * form the basis of other array-like patterns. Therefore, the RegistryTrait is
 * used by many other patterns in the PhpPatterns collection.
 */
trait RegistryTrait
{
    use HasDataTrait;

    /**
     * Get an object/value out of the Registry
     *
     * @param string $key     The key of the object/value to retrieve
     * @param mixed  $default The value to return if the key is missing
     *
     * @return mixed The object/value from the Registry
     */
    public function get($key, $default = null)
    {
        return $this->has($key) ? $this->getData()[$key] : $default;
    }

    /**
     * Store an object/value in the Registry
     *
     * @param string $key   The key of the object/value being set
     * @param mixed  $value The object/value to store
     *
     * @return self The instance of the Registry for chaining
     */
    public function set($key, $value)
    {
        $data =& $this->getData();
        $data[$key] = $value;

        return $this;
    }

    /**
     * Check to see if a key exists in the Registry
     *
     * @param string $key The key of the object/value to check
     *
     * @return bool Whether or not the ey exists
     */
    public function has($key)
    {
        return array_key_exists($key, $this->getData());
    }

    /**
     * Remove an object/value from the Registry
     *
     * @param string $key The key of the object/value to remove
     *
     * @return self The instance of the object for chaining
     */
    public function remove($key)
    {
        $data =& $this->getData();
        unset($data[$key]);

        return $this;
    }

    /**
     * Removes all objects/values from the Registry
     *
     * @return self The instance of the object for chaining
     */
    public function clear()
    {
        $data =& $this->getData();
        $data = [];

        return $this;
    }

    /**
     * Returns all objects/values in the Registry as an associative array
     *
     * @return array All of the objects/data
     */
    public function getAll()
    {
        return $this->getData();
    }

    /**
     * Checks if the Registry is empty
     *
     * @return bool Whether or not its empty
     */
    public function isEmpty()
    {
        return (0 === count($this->getData()));
    }
}
