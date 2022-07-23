<?php


function isContainsDuplicateBruteForce($array)
{
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] == $array[$j])
                return 1;
        }
    }
    return 0;
}

echo isContainsDuplicateBruteForce([1, 2, 3, 4, 5, 1])."<br>";

echo "time complexity = O(N^2)<br>";
echo "space complexity = O(1)";