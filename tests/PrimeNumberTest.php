<?php

namespace Tests;

use Moderate\PrimeNumber;
use PHPUnit\Framework\TestCase;


class PrimeNumberTest extends TestCase
{
    public function testPrimeNumberIsValid()
    {
        $prime = new PrimeNumber();
        $result = $prime->validate(7607);
        $this->assertEquals(true, $result);
    }

    public function testIsNotAValidPrime()
    {
        $prime = new PrimeNumber();
        $result = $prime->validate(7604);
        $this->assertEquals(false, $result);
    }
}
