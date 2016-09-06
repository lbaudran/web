#!/usr/bin/php
<?PHP
$elem = explode(" ", $argv[1]);
$save = $elem[0];
unset($elem[0]);
foreach($elem as $case)
	$line .= $case . " ";
$line .= $save;
$line = explode (" ", $line);
$line = array_filter($line);
foreach($line as $case)
	$test .= $case ." ";
$test = trim($test);
print ($test. "\n");
?>
