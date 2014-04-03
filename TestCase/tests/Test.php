<?php

namespace Mezzle\TestCase;

use Mockery as M;
use PHPUnit_Framework_TestCase as TestCase;

class FooTest extends TestCase
{
    public function setUp()
    {
        $this->object = new Foo;
    }

    public function testDoThing()
    {
        $dt = M::mock('\DateTime');

        $this->object->setDt($dt);

        $this->assertAttributeEquals($dt, 'dt', $this->object);
    }
}
