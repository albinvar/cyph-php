<?php

namespace Cyph\Cyph\Tests;

use Cyph\Cyph\CyphFacade;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class CyphTest extends TestCase
{

    //test if phpunit is properly initialized
    public function test_init_phpunit()
    {
        $this->assertTrue(1 == 1);
    }

    //initialize cyph class.
    public function test_check_if_cyph_facade_class_is_instantiatable()
    {
        $this->expectException(RuntimeException::class);
        new CyphFacade();
    }
}
