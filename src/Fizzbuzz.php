<?php

namespace App;

class FizzBuzz
{
    public function process($input) {
        $resultsArray = array();

        foreach ($input as $value) {
            $output = '';

            if ($value % 3 == 0 && $value % 5 == 0) {
                $output = 'FizzBuzz';
            } elseif ($value % 3 == 0) {
                $output = 'Fizz';
            } elseif ($value % 5 == 0) {
                $output = 'Buzz';
            } else {
                $output = $value;
            }

            $resultsArray[] = $output;
        }

        return $resultsArray;
    }
}
