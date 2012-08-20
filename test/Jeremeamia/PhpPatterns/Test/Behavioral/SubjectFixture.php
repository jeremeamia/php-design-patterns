<?php

namespace Jeremeamia\PhpPatterns\Test\Behavioral;

use Jeremeamia\PhpPatterns\Behavioral\SubjectTrait;
use Jeremeamia\PhpPatterns\Behavioral\SubjectInterface;

class SubjectFixture extends \ArrayObject implements SubjectInterface
{
    use SubjectTrait;
}
