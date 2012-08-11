<?php

namespace Jeremeamia\PhpPatterns\Behavioral;

trait ProxyTrait
{
    /**
     * @var object The subject being proxied
     */
    protected $subject;

    public function setSubject($subject)
    {
        if (!is_object($subject)) {
            throw new \InvalidArgumentException('The argument must be an object.');
        }

        $this->subject = $subject;

        return $this;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function __call($method, array $args)
    {
        /** @var $method callable */
        $method = [$this->subject, $method];

        return $args ? call_user_func_array($method, $args) : $method();
    }
}
