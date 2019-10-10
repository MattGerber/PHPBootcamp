#!/usr/bin/php
<?php
function order($a, $b) {
	$a = strtolower($a);
	$b = strtolower($b);
	$i = 0;
	while($a[$i] && $b[$i]) {
		$ora = ctype_alpha($a[$i]) ? 0 : (ctype_digit($a[$i]) ? 1 : 2);
		$orb = ctype_alpha($b[$i]) ? 0 : (ctype_digit($b[$i]) ? 1 : 2);
		if ($ora - $orb)
			return ($ora - $orb);
		else if ($a[$i] !== $b[$i])
			return ($a[$i] < $b[$i] ? -1 : 1);
		$i++;
	}
	return($a[$i] == "\0" ? -1 : 1);

}

	array_shift($argv);
	$arr = explode("\n", preg_replace("/\ +/", "\n", implode("\n", $argv)));
	usort($arr, order);
	echo implode("\n", $arr)."\n";
?>

