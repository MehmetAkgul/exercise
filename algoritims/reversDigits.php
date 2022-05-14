<?php
function reversDigits($num)
{
    $rev_num = 0;
    $negative = false;
    if ($num < 0) {
        $num = abs($num);
        $negative = true;
    }
    if ($num   == 10 ) {
        $rev_num = 1;
    } elseif ($num > 10) {
        while (floor($num)) {
            $rev_num = $rev_num * 10 + $num % 10;
            $num = $num / 10;
        }
    } else {
        $rev_num = $num;
    }

    if ($negative) {
        return -$rev_num;
    } else {
        return $rev_num;
    }
}


$num = 1534236469;
echo reversDigits($num);