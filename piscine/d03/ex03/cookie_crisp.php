<?PHP
foreach($_GET as $key => $action)
{
	if ($key == "action" && $action == "set")
		setcookie($_GET['name'],$_GET['value']);
	else if ($key == "action" && $action == "get")
			echo ($_COOKIE[$_GET['name']]);
	else if ($key == "action" && $action == "del")
		setcookie($_GET['name'],$_GET['value'], time() - 3600);
}
?>
