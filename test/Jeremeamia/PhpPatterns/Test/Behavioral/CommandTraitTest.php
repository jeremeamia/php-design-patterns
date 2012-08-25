<?php

namespace Jeremeamia\PhpPatterns\Test\Behavioral;

use Jeremeamia\PhpPatterns\Behavioral\CommandTrait;

class CommandTraitTest extends \PHPUnit_Framework_TestCase
{
    protected function getCommand()
    {
        $command = new CommandFixture();
        $command->set('operand1', 3);
        $command->set('operand2', 5);

        return $command;
    }

    public function testCanExecuteCommand()
    {
        $command = $this->getCommand();
        $result  = $command->execute();

        $this->assertEquals(15, $result);
        $this->assertEquals(15, $command->getResult());
        $this->assertTrue($command->isExecuted());
    }

    public function testCanExecuteLikeClosure()
    {
        /** @var $command callable */
        $command = $this->getCommand();
        $result  = $command();

        $this->assertEquals(15, $result);
    }

    public function testCanResetCommand()
    {
        $command = $this->getCommand();

        $this->assertFalse($command->isExecuted());
        $this->assertNull($command->getResult());
        $this->assertNotEmpty($command->all());

        $command->execute();

        $this->assertTrue($command->isExecuted());
        $this->assertEquals(15, $command->getResult());

        $command->reset();

        $this->assertFalse($command->isExecuted());
        $this->assertNull($command->getResult());
        $this->assertEmpty($command->all());
    }
}
