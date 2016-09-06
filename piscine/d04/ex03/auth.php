<?PHP
function auth($login, $passwd)
{
	if ($login === "" || $passwd === "")
		return FALSE;
	if (!file_exists("../htdocs/private/passwd"))
		return FALSE;
	$BUF = file_get_contents("../htdocs/private/passwd");
	if (!$BUF)
		return FALSE;
	$BUF = unserialize($BUF);
	foreach($BUF as $key => $value)
	{
		if ($value["login"] === $login)
			if ($value["passwd"] === hash('whirlpool', $passwd))
				return TRUE;
	}
	return FALSE;
}
?>
