<?php

namespace Cyph\Cyph;

//create an abstract class AbstractCyph that will be extended by Cyph.
abstract class AbstractCyph
{
    //create a method that will be implemented by the child class.
    abstract public function cyph(string $text): string;
}