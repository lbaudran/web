<?PHP
session_start();
if ($_POST["login"] !== "" && $_POST["passwd"] !== "" && $_POST["submit"] === "OK")
{
	
	if (!file_exists("../htdocs/private"))
		mkdir("../htdocs/private/", 0777, true);
	if (file_exists("../htdocs/private/passwd"))
	{
		$BUF = file_get_contents("../htdocs/private/passwd");
		if ($BUF)
		{
			$BUF = unserialize($BUF);
			foreach ($BUF as $key)
			{
				if ($key["login"] === $_POST["login"])
				{
					echo "ERROR\n";
					return;
				}
			}
		}
	}
	$tab["login"] = $_POST["login"];
	$tab["passwd"] = hash('whirlpool', $_POST["passwd"]);
	$BUF[] = $tab;
	file_put_contents("../htdocs/private/passwd", serialize($BUF));
	echo "OK\n";
}
else
	echo "ERROR\n";
?>
