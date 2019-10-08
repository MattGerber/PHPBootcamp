#!/usr/bin/php
<?php
// $n = trim(fgets(STDIN));
print("Enter a number: ");
while ($n = trim(fgets(STDIN)))
{
	if (is_numeric($n) && $n % 2 == 0)
	print("The number $n is even\n");
	else if (is_numeric($n))
	print("The number $n is odd\n");
	else
	print("$n is not a number\n");
	print("Enter a number: ");
}

?>