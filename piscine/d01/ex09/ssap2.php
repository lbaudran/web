#!/usr/bin/php
<?PHP
foreach($argv as $case)
	$elem .= $case." ";
$elem = explode (" ", $elem);
$elem = array_filter($elem);
unset($elem[0]);
foreach($elem as $case)
	$line .= $case ."\n";
print ($line);
?>
