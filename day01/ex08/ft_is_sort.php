#!/usr/bin/php
<?php
function ft_is_sort($tab) {
	$tab_copy = $tab;
	sort($tab_copy);
	if (array_diff($tab, $tab_copy))
		return True;
	else
		return False;
}