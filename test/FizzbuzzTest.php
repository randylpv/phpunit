<?php

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    private $fizzBuzz;

    public function setUp():void{
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testFizzBuzz() {
        $inputSet = array(
            1, 2, 3, 4, 5,
            6, 7, 8, 9, 10,
            11, 12, 13, 14, 15,
            16, 17, 18, 19, 20,
            21, 22, 23, 24, 25,
            26, 27, 28, 29, 30,
        );
        $expectedResults = array(
            1, 2, 'Fizz', 4, 'Buzz',
            'Fizz', 7, 8, 'Fizz', 'Buzz',
            11, 'Fizz', 13, 14, 'FizzBuzz',
            16, 17, 'Fizz', 19, 'Buzz',
            'Fizz', 22, 23, 'Fizz', 'Buzz',
            26, 'Fizz', 28, 29, 'FizzBuzz',
        );
        $testResults = $this->fizzBuzz->process($inputSet);
        $this->assertEquals($expectedResults, $testResults);
    }
}