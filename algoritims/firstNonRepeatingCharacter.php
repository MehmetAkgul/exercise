<?php

/*


Write a function that returns the first non-repeating character of a string.
Examples
Input : “aaaaaabbbsasdweqwe” => Output : “d”
Input : “aaxaaaabbbsasdweqe” =>  Output : “x”
*/


function firstNonRepeatingChar($s)
{
    $arr = str_split($s);
    $arr2 = array();
    /*
        foreach ($arr as $v) {
            @$arr2[$v] +=1;
        }
    */
    $arr2 = array_count_values($arr);

    foreach ($arr2 as $k => $v) {
        if ($v == 1)
            return $k;
    }

}


$s = "aaxaaaabbbsasdweqe";

echo firstNonRepeatingChar($s);