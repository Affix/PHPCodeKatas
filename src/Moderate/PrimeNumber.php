<?php
/**
 * A prime number is a natural number greater than 1 that has no positive divisors other than 1 and itself.
 * Write a method that checks if a number is prime number.
 */

namespace Moderate;


class PrimeNumber
{
    public function validate($number)
    {
        $prime = true;
        for($i = ($number - 1); $i > 1; $i--)
        {
            if($number % $i == 0)
            {
                $prime = false;
                break;
            }
        }
        return $prime;
    }
}