<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

use Jeremeamia\PhpPatterns\Structural\Collection\AssociativeArrayAccessTrait;
use Jeremeamia\PhpPatterns\Structural\Collection\GetDataTrait;

class AssociativeArrayAccessFixture implements \ArrayAccess
{
    use AssociativeArrayAccessTrait, GetDataTrait;
}
