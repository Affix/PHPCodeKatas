<?php
/**
 * Created by PhpStorm.
 * User: keiran
 * Date: 28/04/2017
 * Time: 21:29
 */

namespace tests;

use Moderate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function setUp()
    {
        $this->_fizzBuzz = new FizzBuzz();
    }

    public function testMultpleOfThree()
    {
        $result = $this->_fizzBuzz->solution(9);
        $this->assertEquals('fizz', $result);
    }

    public function testMultpleOfFive()
    {
        $result = $this->_fizzBuzz->solution(400);
        $this->assertEquals('buzz', $result);
    }

    public function testMultpleOfBoth()
    {
        $result = $this->_fizzBuzz->solution(15);
        $this->assertEquals('fizzbuzz', $result);
    }

    public function testEverythingElse()
    {
        $result = $this->_fizzBuzz->solution(2);
        $this->assertEquals(2, $result);
    }

}
