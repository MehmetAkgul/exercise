<?php


function isContainsDuplicate($array)
{

    sort($array);
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $array[$i + 1]) {
            return 1;
        }
    }
    return 0;
}

echo isContainsDuplicate([1, 2, 3, 2, 5])."<br>";

echo "time complexity = O(NLogN)<br>";
echo "space complexity = O(1)";