#!/usr/bin/php
<?PHP
$elem = $argv[1];
$elem = preg_replace('/\s+/', ' ', $elem);
$elem = trim($elem);
print $elem . "\n";
?>
