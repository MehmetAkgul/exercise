<?php

//Get the last occurred error

echo $x;

foreach (error_get_last() as $k=> $item){
    echo $k." --> ". $item."<br>";
}

