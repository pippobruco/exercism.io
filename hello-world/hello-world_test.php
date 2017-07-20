<?php

require "hello-world.php";

class HelloWorldTest extends PHPUnit\Framework\TestCase
{
    public function testHelloWorld()
    { 
        echo $this->assertEquals('Hello, World!', helloWorld());
    }
}
