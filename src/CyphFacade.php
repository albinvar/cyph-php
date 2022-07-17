<?php

namespace Cyph\Cyph;


class CyphFacade
{
    public function __construct()
    {
        throw new \RuntimeException("Cant instantiate this class");
    }

    // use __callStatic magic method to get all static calls.
    public static function __callStatic(string $name, array $args)
    {
        $cyphInstance = new Cyph();
        return $cyphInstance->$name(...$args);
    }
}
