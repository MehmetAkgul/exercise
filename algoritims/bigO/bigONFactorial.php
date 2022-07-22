<?php

// bigO(n!) gösterimine örnek
//   O(n!) zaman açısından simule ediliyor.
function bigONFactorial($n)
{
    if ($n==0)
        return 1;


        for ($i = 0; $i < $n; $i++) {
            echo $i . "<br>";
            bigONFactorial($n-1);// recursive
        }

}

echo "....<br>";
echo bigONFactorial(6);

