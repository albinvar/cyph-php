<?php

namespace Cyph\Cyph\Tests;

use PHPUnit\Framework\TestCase;

class CyphTest extends TestCase
{

    //test if phpunit is properly initialized
    public function test_init_phpunit()
    {
        $this->assertTrue(1 == 2);
    }
}
