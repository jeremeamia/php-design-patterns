<?php

namespace Jeremeamia\PhpPatterns\Behavioral;

use Jeremeamia\PhpPatterns\Structural\RegistryTrait;

trait CommandTrait
{
    use RegistryTrait;

    protected $isExecuted = false;

    protected $commandResult;

    public function execute()
    {
        $this->commandResult = $this->doExecute();
        $this->isExecuted    = true;

        return $this->commandResult;
    }

    public function isExecuted()
    {
        return (bool) $this->isExecuted;
    }

    public function getResult()
    {
        return $this->commandResult;
    }

    public function reset()
    {
        $this->clear();
        $this->isExecuted    = false;
        $this->commandResult = null;
    }

    public function __invoke()
    {
        return $this->execute();
    }

    abstract protected function doExecute();
}
