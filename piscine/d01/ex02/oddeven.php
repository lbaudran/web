#!/usr/bin/php
<?PHP
while (1)
{
	echo "Entrez un nombre:";
	if (!($c = fgets(STDIN)))
		exit;
	$c = trim($c);
	if (is_numeric($c))
	{
		if ($c % 2 == 0)
			echo "Le nombre $c est pair\n";
		else
			echo "le nombre $c est impair\n";
	}
	else
		echo "Ceci n'est pas un nombre\n";
}
?>
