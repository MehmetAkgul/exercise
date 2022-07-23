<?php
/****************
 * Given a non-empt array given pf integers(nums)every element appears twice expect for one.
 * find that single one.
 * You must implement a solution with a linear runtime complexity and use only constant extra space.
 * Example
 * input:[2,2,1]
 * output:1
 */


// PHP program to find the array
// element that appears only once

function findSingle($ar)
{

    // Do XOR of all
    // elements and return
    $res = $ar[0];
    for ($i = 1; $i < count($ar); $i++)
        $res = $res ^ $ar[$i];

    return $res;
}

// Driver code
$ar = array(2, 3, 5, 4, 5, 3, 4);

echo "bir tane olan eleman ", findSingle($ar);

?>