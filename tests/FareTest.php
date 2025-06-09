<?php
use PHPUnit\Framework\TestCase;
require_once 'Fare/Fare.php'; // Fareクラスのファイルパスを正しく指定してください

class FareTest extends TestCase
{
    public function testComputeBaseFareUnderBaseDistance()
    {
        $fare = new Fare(30, 3);
        $this->assertEquals(8, $fare->computeBaseFare());
    }

    public function testComputeBaseFareOverBaseDistance()
    {
        $fare = new Fare(30, 6);
        $this->assertEquals(10, $fare->computeBaseFare()); // 8 + (6 - 4) * 1
    }

    public function testIsDiscountTrue()
    {
        $fare = new Fare(65, 4);
        $this->assertTrue($fare->isDiscount());
    }

    public function testIsDiscountFalse()
    {
        $fare = new Fare(40, 4);
        $this->assertFalse($fare->isDiscount());
    }

    public function testComputeTotalFareWithDiscount()
    {
        $fare = new Fare(65, 4);
        $this->assertEquals(6.4, $fare->computeTotalFare()); // 8 * 0.8
    }

    public function testComputeTotalFareWithoutDiscount()
    {
        $fare = new Fare(40, 6);
        $this->assertEquals(10, $fare->computeTotalFare());
    }
}
