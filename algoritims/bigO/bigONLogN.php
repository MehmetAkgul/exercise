<?php

// bigO(nLogn) gösterimine örnek
//   O(nLogn) zaman açısından simule ediliyor.
function bigO($n)
{
    $limit = $n;
    while ($n > 1) {
        $n = floor($n / 2);
        for ($i = 0; $i < $limit; $i++) {
            echo $i . "<br>";
        }
    }
}

echo "genelde 2 diziyi karşılaştırmak için kullanılır.";
bigO(50);

