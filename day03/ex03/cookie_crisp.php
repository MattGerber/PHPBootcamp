<?php
	$action =$_GET["action"];
	$name = $_GET["name"];
	$value = $_GET["value"];

	if ($action == "set"){
		setcookie($name, $value, time()+60*60);
	}
	else if ($action == "get") {
		echo $_COOKIE["$name"];
	}
	else if ($action == "del"){
		setcookie($name, $value, time(-1));
	}
?>
