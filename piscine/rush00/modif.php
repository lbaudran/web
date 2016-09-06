<?PHP
session_start();
if ($_POST["login"] !== "" && $_POST["oldpw"] !== "" && $_POST["newpw"] && $_POST["submit"] === "OK")
{
	if (!file_exists("../htdocs/private/passwd"))
	{
		echo "ERROR\n";
		return;
	}
	if (file_exists("../htdocs/private/passwd"))
	{
		$BUF = file_get_contents("../htdocs/private/passwd");
		if ($BUF)
		{
			$BUF = unserialize($BUF);
			foreach ($BUF as $key => $value)
			{
				if ($value["login"] === $_POST["login"])
				{
					if ($value["passwd"] === hash('whirlpool', $_POST["oldpw"]))
					{
						$BUF[$key]["passwd"] = hash('whirlpool', $_POST["newpw"]);
						file_put_contents("../htdocs/private/passwd", serialize($BUF));
						echo "OK\n";
						return;
					}
					else
					{
						echo "ERROR\n";
						return;
					}
				}
			}
		}
	}
	echo "ERREUR\n";
}
else
	echo "ERROR\n";

?>
