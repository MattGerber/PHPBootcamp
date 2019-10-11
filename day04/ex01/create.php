<?php
	session_start();
	
	$i = 0;
	$array = [];
	if ($_POST["login"]!== "" && $_POST["passwd"] != "" && $_POST["submit"] === "OK") {
		$usr = $_POST['login'];
		$pass = $_POST['passwd'];
		if (!file_exists("../private"))
			mkdir("../private");
		if (file_exists("../private/passwd")){
			$content = file_get_contents("../private/passwd");
			$array =  unserialize($content);
			foreach ($array as $account => $login){
				if ($usr === $account){
					$i = 1;
				}
			}
		}
		$array[$usr] = hash("whirlpool",$pass);
		$file = '../private/passwd';
		if ($i){
			echo "Error\n";
		}
		else{
			file_put_contents($file, serialize($array));
			echo "Ok";	
		}

	}
	else
		echo "Error.\n";
?>