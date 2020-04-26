<?php
function checkIsPrime($number)
{
    if (is_numeric($number)) {
        if ($number <= 2) {
            return true;
        } else {
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i === 0) {
                    return false;
                }
            }
            return true;
        }
    }
    return false;
}

function isPrime($number)
{
    if (checkIsPrime($number)) {
        echo $number . " is a isPrime!";
    } else {
        echo $number . " is not isPrime! ";
    }
}

isPrime(12);