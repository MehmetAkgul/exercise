<?php


function findMajorityNumber($ar)
{

    sort($ar);
    $temp = $ar[0];
    $count = 0;
    $result = 0;
    for ($i = 0; $i <= count($ar); $i++) {

        if ($ar[$i] == $temp) {//5==5
            $count++;
            $temp = $ar[$i];
        } else {//5==6
            $temp = $ar[$i];
            $count=1;
        }
        if ($result < $count) {
            $result = $count;
        }
    }
    return $result;
}

echo findMajorityNumber([8, 9, 10, 10, 10, 8, 9, 10, 10, 5, 6, 7, 8, 9, 10, 10]);