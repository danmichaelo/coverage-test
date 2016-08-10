<?php

require('vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testWorld()
    {
        $hello = new Hello();

		$this->assertEquals('Hello world', $hello->world());
    }
}
