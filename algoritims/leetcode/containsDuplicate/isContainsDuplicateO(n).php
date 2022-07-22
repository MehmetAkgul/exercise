<?php


function isContainsDuplicate($array)
{

    $new_Array = array();
    for ($i = 0; $i < count($array); $i++) {

        if (in_array($array[$i], $new_Array)) {
            return 1;
        } else {
            $new_Array[] = $array[$i];
        }
    }
    return 0;
}

echo isContainsDuplicate([1, 2, 3, 4, 5]) . "<br>";

echo "time complexity = O(n)<br>";
echo "space complexity = O(1)";