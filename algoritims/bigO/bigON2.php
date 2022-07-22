<?php

// bigO(n^2) gösterimine örnek
// burada her n sayısını bir kere yazdırıyor böylece O(n^2) zaman açısından simule ediliyor.
function bigO($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo $i."--";
            echo $j."<br>";
        }
    }
}
echo "genelde 2 diziyi karşılaştırmak için kullanılır.";
bigO(50);

