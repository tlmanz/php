<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Example;

class ExampleTest extends TestCase
{
    public function testSayHello()
    {
        $example = new Example();
        $this->assertEquals('Hello, World!', $example->sayHello());
    }
}
