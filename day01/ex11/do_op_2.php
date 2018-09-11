#!/usr/bin/php
<?php
function ft_split($str) {
	$str = trim($str);
	$str = str_replace(array('\t', '\n', '	', '+', '-', '*', '/', '%'), ' ', $str);
	$split = explode(" ", $str);
	$split = array_filter($split, "strlen");
	$split = array_values($split);
	return $split;
}

function rage_quit() {
	echo "Incorrect Parameters\n";
	exit;
}

function rage_quit_2() {
	echo "Syntax Error\n";
	exit;
}

if ($argc > 1)
{
	if (!($operator = strpbrk($argv[1], "+-*/%")))
		rage_quit_2();
	$split = ft_split($argv[1]);
	$operation = 0;
	if (!is_numeric($split[0]) || !is_numeric($split[1]))
		rage_quit_2();
	if ($operator[0] == "+") {$operation = $split[0] + $split[1];}
	elseif ($operator[0] == "-") {$operation = $split[0] - $split[1];}
	elseif ($operator[0] == "*") {$operation = $split[0] * $split[1];}
	elseif ($operator[0] == "/") {$operation = $split[0] / $split[1];}
	elseif ($operator[0] == "%") {$operation = $split[0] % $split[1];}
	else {rage_quit_2();}
	echo $operation."\n";
}
else {
	rage_quit();
}
