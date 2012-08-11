<?php

namespace Jeremeamia\PhpPatterns\Behavioral;

trait DecoratorTrait
{
    use ProxyTrait;

    public function getDecorators(array $found = [])
    {
        $found[] = $this;

        /** @var $getDecorators callable */
        $getDecorators = [$this->getSubject(), 'getDecorators'];

        return is_callable($getDecorators) ? $getDecorators($found) : $found;
    }
}
