<?PHP
session_start();

if ($_GET["login"] !== "" && $_GET["passwd"] !== "" && $_GET['submit'] === "OK")
{
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_GET["passwd"];
}
?>
<html>
<head>
<body>
<form method="get" action="index.php">
<p>
Identifiant :<br /><input type="text" name="login" value="<?PHP echo $_SESSION["login"]?>" /><br />
Mot de passe :<br/><input type="text" name="passwd" value="<?PHP echo $_SESSION["passwd"]?>"/>
<input type ="submit" name="submit" value="OK"/>
</p>
</form>
</body>
</head>
</html>
