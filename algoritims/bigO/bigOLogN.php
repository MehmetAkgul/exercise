<?php

// bigO(logn) gösterimine örnek
//
function bigOlogN($n)
{
    while ($n > 1) {
        $n = floor($n / 2);
        echo $n . "<br>";
    }
}

echo "......<br>";
bigOlogN(129);

