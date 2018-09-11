#!/usr/bin/php
<?php

if ($argc > 2)
{
	$key = $argv[1];
	$tab = array_slice($argv, 2);
	$search = array();
	foreach ($tab as $param) {
		$explo = explode(":", $param);
		$search[$explo[0]] = $explo[1];
	}
	echo $search[$key]."\n";
}