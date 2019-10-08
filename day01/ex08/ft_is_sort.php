<?php
function ft_is_sort($arr1){
$arr2 = $arr1;
sort($arr2);
if ($arr1 == $arr2)
	return(1);
else
	return(0);
}
?>