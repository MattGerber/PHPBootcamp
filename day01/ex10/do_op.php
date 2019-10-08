#!/usr/bin/php
<?php
if ($argc == 4){
	if (trim($argv[2]) == '+')
		print((trim($argv[1]) + trim($argv[3]))."\n");
	else if (trim($argv[2]) == '-')
		print((trim($argv[1]) - trim($argv[3]))."\n");
	else if (trim($argv[2]) == '*')
		print((trim($argv[1]) * trim($argv[3]))."\n");
	else if (trim($argv[2]) == '%')
		print((trim($argv[1]) % trim($argv[3]))."\n");
	else if (trim(trim($argv[2])) == '/')
		print((trim($argv[1]) / trim($argv[3]))."\n");
	else
	print("Incorrect Parameters\n");
}
else
	print("Incorrect Parameters\n");
?>