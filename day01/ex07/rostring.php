#!/usr/bin/php
<?php
$str = preg_split('/\ +/', $argv[1]);
$i = 1;
while ($str[$i]){
	print("$str[$i] ");
	$i++;
}
print(trim($str[0])."\n");
?>