<?php
if ($_GET){
	foreach ($_GET as $var => $val){
		echo $var.":".$val."\n";
	}
}
?>