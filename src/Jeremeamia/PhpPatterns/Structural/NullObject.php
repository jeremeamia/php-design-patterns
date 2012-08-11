<?php

namespace Jeremeamia\PhpPatterns\Structural;

class NullObject implements \Iterator, \Countable, \ArrayAccess
{
    public function count() {}
    public function current() {}
    public function key() {}
    public function next() {}
    public function offsetExists($offset) {}
    public function offsetGet($offset) {}
    public function offsetSet($offset, $value) {}
    public function offsetUnset($offset) {}
    public function rewind() {}
    public function valid() {}
    public function __call($method, $args) {}
    public function __get($key) {}
    public function __isset($key) {}
    public function __set($key, $value) {}
    public function __unset($key) {}
}
