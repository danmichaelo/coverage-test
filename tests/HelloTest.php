<?php

require('vendor/autoload.php');

class HelloTest extends PHPUnit_Framework_TestCase
{
    public function testWorld()
    {
        $hello = new Hello();

        $this->assertEquals('Hello world', $hello->world());
    }
}
