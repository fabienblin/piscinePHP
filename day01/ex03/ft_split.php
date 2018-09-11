#!/usr/bin/php
<?php
function ft_split($str) {
	$str = trim($str);
	$str = str_replace(array('\t', '\n', '	'), '', $str);
	$split = explode(" ", $str);
	$split = array_filter($split, "strlen");
	sort($split);
	return $split;
}