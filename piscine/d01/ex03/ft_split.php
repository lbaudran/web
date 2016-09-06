<?PHP
function ft_split($s)
{
	$tab = explode(" ","$s");
	$tab = array_filter($tab);
	sort($tab);
	return $tab;
}
?>
