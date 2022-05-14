<?php
/*
Given a string s, return the longest palindromic substring in s.

Example 1:
Input: s = "babad"
Output: "bab"
Explanation: "aba" is also a valid answer.
Example 2:
Input: s = "cbbd"
Output: "bb"
*/

function longestPalindrome($s)
{
    $len = strlen($s);
    $max = 0;
    $result = "";

    for ($i = 0; $i < $len; $i++) {
        for ($j = $i + 1; $j < $len; $j++) {

            $temp = substr($s, $i, $j);

            if (isPalindrome($temp) && $j > $max) {
                $result = $temp;
                $max = $j;
            }
        }
    }
    return $result;

}

function isPalindrome($s)
{
    $rev = strrev($s);
    if ($rev == $s) {
        return $s;
    }
}


$s = "cbbd";
echo longestPalindrome($s);