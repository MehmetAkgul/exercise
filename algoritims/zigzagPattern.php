<?php


function convert($s, $numRows)
{

    $len = strlen($s);
    $step = 2 * $numRows - 2;
$result="";


    for ($i = 0; $i < $numRows; $i++) {
        for ($j = $i; $j < $len; $j+=$step) {
           $result.=$s[$j];
            if ($i != 0 && $i != $numRows - 1 && ($j + $step - 2 * $i) < strlen($s)) {
                $result.=($s[$j + $step - 2 * $i]);
            }


        }

    }
return $result;

}

$s = "PAHNAPLSIIGYIR";

echo convert($s, 4);