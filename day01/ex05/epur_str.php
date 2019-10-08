#!/usr/bin/php
<?php
$str = trim($argv[1]);
$input = preg_replace("/\s+/", " " ,  $str);
print("$input\n"); 
?>