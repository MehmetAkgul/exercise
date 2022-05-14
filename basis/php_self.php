<?php

$php_self=$_SERVER['PHP_SELF'];
$basename= basename($php_self);

echo $php_self."<br>";
echo $basename."<br>";
echo '<img src="./php-self.png">';