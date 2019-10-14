<?php
	session_start();
	
	$i = 0;
	$array = [];
	if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] === "OK") {
		$usr = $_POST['login'];
		$oldpass = hash("whirlpool",$_POST['oldpw']);
		$newpass =  hash("whirlpool",$_POST['newpw']);
		if (file_exists("../private/passwd")){
			$content = file_get_contents("../private/passwd");
			$array =  unserialize($content);
			foreach ($array as $account => $login){
				if ($usr === $account){
					$i = 1;
				}
			}
		}
		$file = '../private/passwd';
		if ($i && $array[$usr] === $oldpass){
			$array[$usr] = hash("whirlpool", $_POST["newpw"]);
			file_put_contents($file, serialize($array));
			echo "Ok\n";	
		}
		else{
			echo "Error\n";
		}

	}
	else
		echo "Error.\n";
?>