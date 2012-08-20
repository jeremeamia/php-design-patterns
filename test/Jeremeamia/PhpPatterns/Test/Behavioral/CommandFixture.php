<?php

namespace Jeremeamia\PhpPatterns\Test\Behavioral;

use Jeremeamia\PhpPatterns\Behavioral\CommandTrait;
use Jeremeamia\PhpPatterns\Structural\Collection\GetDataTrait;

class CommandFixture
{
    use CommandTrait, GetDataTrait;

    protected function doExecute()
    {
        $left  = (int) $this->get('operand1');
        $right = (int) $this->get('operand2');

        return $left * $right;
    }
}
