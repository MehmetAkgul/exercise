<?php


function isContainsDuplicate($array)
{
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i+1; $j < count($array); $j++) {
            if ($array[$i] == $array[$j])
               return  1;
        }
    }
return 0;
}

 echo isContainsDuplicate([1, 2, 3, 4, 5,1]);