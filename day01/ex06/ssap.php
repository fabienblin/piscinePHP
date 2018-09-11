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
	$split = array();
	for ($i = 1; $i < $argc; $i++) {
		$split = array_merge($split, ft_split($argv[$i]));
	}
	sort($split);
	foreach ($split as $word) {
		$str = $str.$word."\n";
	}
	echo $str;
}