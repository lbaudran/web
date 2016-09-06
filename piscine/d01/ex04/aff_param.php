#!/usr/bin/php
<?PHP
$i = 0;
foreach ($argv as $test)
{
	if ($i != 0)
	{
		$i++;
		echo $test . "\n";
	}
	else
		$i++;
}


?>
