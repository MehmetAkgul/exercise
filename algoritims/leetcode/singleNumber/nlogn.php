<?php
/****************
 * Given a non-empt array given pf integers(nums)every element appears twice expect for one.
 * find that single one.
 * You must implement a solution with a linear runtime complexity and use only constant extra space.
 *
 * Another approach:
 * This is not an efficient approach but just another way to get the desired results. If we add each number once and multiply the sum by 2, we will get twice the sum of each element of the array. Then we will subtract the sum of the whole array from the twice_sum and get the required number (which appears once in the array).
 * Array [] : [a, a, b, b, c, c, d]
 * Mathematical Equation = 2*(a+b+c+d) – (a + a + b + b + c + c + d)
 *
 * In more simple words: 2*(sum_of_array_without_duplicates) – (sum_of_array)
 *
 * let arr[] = {7, 3, 5, 4, 5, 3, 4}
 * Required no = 2*(sum_of_array_without_duplicates) - (sum_of_array)
 * = 2*(7 + 3 + 5 + 4) - (7 + 3 + 5 + 4 + 5 + 3 + 4)
 * = 2*     19         -      31
 * = 38 - 31
 * = 7 (required answer)
 * As we know that set does not contain any duplicate element we will be using the set here.
 *
 */


// PHP program to find the array
// element that appears only once

function findSingle($ar)
{
    return (array_sum(array_unique($ar)) * 2)-array_sum($ar) ;
}

// Driver code
$ar = array( 3, 7,5, 4, 5, 3, 4);

echo "bir tane olan eleman ", findSingle($ar);

?>