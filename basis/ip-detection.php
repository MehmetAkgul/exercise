<?php


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {//Whether ip is from share internet
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    $ip_from='ip from share internet';


} elseif (!empty($_SERVER['HTTP_XFORWARDED_FOR'])) {// Whether is ip from proxy
    $ip_address = $_SERVER['HTTP_XFORWARDED_FOR'];
    $ip_from='ip from proxy';


} else { // Whether is ip from remote address;
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $ip_from='ip from remote address';
}
echo $ip_address;
echo $ip_from;
echo '<br>';
echo '<img src="./ip-address-flowchart.png" >';
