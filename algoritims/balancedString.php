<?php
/*

Write a function that validates all opened parentheses are closed in a string. (Balanced String)
Examples
abcde(xxyy)(xxyy) => true
abc(xx(yyy)ass)     => true
abc)(xx(yyy)ass     => false

 */
function balancedParentheses($s): bool
{
    $ar = str_split($s);
    $balance = array();
    foreach ($ar as $value) {
        if ($value == "(") {
            array_push($balance, 0);
        } elseif ($value == ")") {
            if (array_pop($balance) !== 0)
                return false;
        }
    }
    return empty($balance);
}

$s = "abcde(xxyy)(xxyy)";
if (balancedParentheses($s)) {
    echo "true";
} else {
    echo "false";
}
