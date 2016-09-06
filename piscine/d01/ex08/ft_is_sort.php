<?PHP
function ft_is_sort($tab)
{
	$elem = $tab;
	sort($elem);
	if (!array_diff_assoc($elem, $tab))
		return TRUE;
	rsort($elem);
	if (!array_diff_assoc($elem, $tab))
		return TRUE;
	return FALSE;
}
?>
