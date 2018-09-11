#!/usr/bin/php
<?php
function ft_split($str) {
	$str = trim($str);
	$str = str_replace(array('\t', '\n', '	'), '', $str);
	$split = explode(" ", $str);
	$split = array_filter($split, "strlen");
	return $split;
}

if ($argc > 1)
{
	$split = ft_split($argv[1]);
	foreach ($split as $word) {
		$str = $str.$word." ";
	}
	$str = trim($str);
	echo $str;
	echo "\n";
}