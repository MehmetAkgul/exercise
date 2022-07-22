<?php


function isContainsDuplicate($array)
{
    return count($array) != count(array_unique($array));
}

echo isContainsDuplicate([1, 2, 3, 3, 5]) . "<br>";

echo "time complexity = O(n)<br>";
echo "space complexity = O(1)";