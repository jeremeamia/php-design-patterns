<?php

namespace Jeremeamia\PhpPatterns\Test\Structural\Collection;

use Jeremeamia\PhpPatterns\Structural\Collection\IndexedArrayAccessTrait;
use Jeremeamia\PhpPatterns\Structural\Collection\GetDataTrait;

class IndexedArrayAccessFixture implements \ArrayAccess
{
    use IndexedArrayAccessTrait, GetDataTrait;
}
