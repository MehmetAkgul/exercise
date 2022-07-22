<?php

// bigO(n) gösterimine örnek
// burada her n sayısını bir kere yazdırıyor böylece O(n) zaman açısından simule ediliyor.
function bigO($n)
{
    for ($i = 0; $i < $n; $i++) {
        echo $i;
    }
}

bigO(50);
