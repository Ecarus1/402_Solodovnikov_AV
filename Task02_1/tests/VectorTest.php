<?php

namespace Tests\VectorTest;

use App\Vector;
use PHPUnit\Framework\TestCase;

class VectorTest extends TestCase
{
    public function testAdd()
    {
        $v1 = new Vector(2, 6, 4);
    
        $v2 = new Vector(1, -3, -7);

        $this->assertSame("(3;3;-3)", $v1->add($v2)->__toString());
    }

    public function testSub()
    {
        $v1 = new Vector(1, 5, 2);
    
        $v2 = new Vector(3, 2, -6);

        $this->assertSame("(-2;3;8)", $v1->sub($v2)->__toString());
    }

    public function testMultiply()
    {
        $v1 = new Vector(4, 4, 3);

        $this->assertSame("(12;12;9)", $v1->multiply(3)->__toString());
    }

    public function testScalar()
    {
        $v1 = new Vector(5, 9, 2);
    
        $v2 = new Vector(9, 3, -4);

        $this->assertEquals(64, $v1->scalar($v2));
    }

    public function testVector()
    {
        $v1 = new Vector(1, 2, 3);
    
        $v2 = new Vector(3, -8, 1);

        $this->assertSame("(-26;-8;14)", $v1->vector($v2)->__toString());
    }
}
