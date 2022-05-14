<?php
/*
2,3,5,7,11,13 are the first 6 prime numbers where 13 is the 6th prime number. Write a function that returns the Nth prime number for given input.
Examples
Input : 4  => Output : 7
Input : 6 => Output : 13
*/

function findsPrime($nft): int
{
    $status = true;
    $prime = 7;
    $tmp = 4;
    if ($nft == 1) {
        $prime = 2;
    } elseif ($nft == 2) {
        $prime = 4;
    } elseif ($nft == 3) {
        $prime = 5;
    } elseif ($nft == 4) {
        $prime = 7;
    } else {
        while ($status) {
            $prime++;
            if ($prime % 2 != 0 && $prime % 3 != 0 && $prime % 5 != 0 && $prime % 7 != 0) {
                $tmp++;
            }
            if ($nft == $tmp) {
                $status = false;
            }
        }
    }
    return $prime;
}

echo findsPrime(8);