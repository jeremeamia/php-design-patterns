<?php

namespace Jeremeamia\PhpPatterns\Test\Ornamental;

use Jeremeamia\PhpPatterns\Ornamental\DuckTypingTrait;

class DuckTypingFixture extends \SplObjectStorage
{
    use DuckTypingTrait;

    public function quack()
    {
        echo 'Quack!';
    }
}
