#!/usr/bin/php
<?php
function ft_split($str) {
	$str = trim($str);
	$str = str_replace(array('\t', '\n', '	'), '', $str);
	$split = explode(" ", $str);
	$split = array_filter($split, "strlen");
	return $split;
}

function rage_quit() {
	echo "Incorrect Parameters\n";
	exit;
}

if ($argc == 4)
{
	$split = array();
	for ($i = 1; $i < $argc; $i++) {
		$split = array_merge($split, ft_split($argv[$i]));
	}
	$operation = 0;
	if (!is_numeric($split[0]) || !is_numeric($split[2]))
		rage_quit();
	if ($split[1] == "+") {$operation = $split[0] + $split[2];}
	elseif ($split[1] == "-") {$operation = $split[0] - $split[2];}
	elseif ($split[1] == "*") {$operation = $split[0] * $split[2];}
	elseif ($split[1] == "/") {$operation = $split[0] / $split[2];}
	elseif ($split[1] == "%") {$operation = $split[0] % $split[2];}
	else {rage_quit();}
	echo $operation."\n";
}
else {
	rage_quit();
}