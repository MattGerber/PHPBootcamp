<?PHP
function ft_split($str) {
	$arr = preg_split( '/\ +/', $str);
	sort($arr);
	return($arr);
}
?>