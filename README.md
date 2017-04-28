CODE KATAS
==========

[![Build Status](https://travis-ci.org/Affix/PHPCodeKatas.svg?branch=master)](https://travis-ci.org/Affix/PHPCodeKatas)

This is a repository of Code Katas to refresh my memory with PHP.

Each Kata is done using TDD and php unit. You can run the full suite using the following command.

`$ composer test`

This script is defined in the composer.json file

```
"scripts": {
        "test": "vendor/bin/phpunit --testsuite katas"
}
```

# Completed Katas


FizzBuzz
--

Write a method that returns 'Fizz' for multiples of three and 'Buzz' for the multiples of five.
 - For numbers which are multiples of both three and five return 'FizzBuzz'.
 - For numbers that are neither, return the input number
 
 
Prime Numbers
--
A prime number is a natural number greater than 1 that has no positive divisors other than 1 and itself.
 * Write a method that checks if a number is prime number.