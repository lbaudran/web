#!/usr/bin/php
<?PHP
$elem = $argv[1];
$elem = explode(" ",$elem);
$elem = array_filter($elem);
foreach($elem as $case)
{
	$line .= $case . " ";
}
$line = trim($line);
print ($line. "\n");
?>
