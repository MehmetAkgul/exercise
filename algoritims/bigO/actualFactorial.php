<?php

// bigO(n!) gösterimine örnek
//   O(n!) zaman açısından simule ediliyor.
function actualFactorial($n)
{
    if ($n == 0 || $n == 1)
        return 1;

    return $n * actualFactorial($n - 1);
}

echo "....<br>";
echo actualFactorial(6);

