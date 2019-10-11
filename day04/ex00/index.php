<?php
session_start();
if ($_GET["login"] && $_GET["passwd"] && $_GET["submit"] === "OK")
{
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_GET["passwd"];
}
?>
<html>
<body>

<form action="index.php" method="get">
	login: <input type="text" name="login" value="<?= $_SESSION["login"] ?>">
	<br>
	passwd: <input type="text" name="passwd" value="<?= $_SESSION["passwd"] ?>">
	<input type="submit" name= "submit" value="OK">
</form>

</body>
</html>