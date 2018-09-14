#!/usr/bin/php
<?php
if ($argc > 1)
{
	date_default_timezone_set('Europe/Paris');
	$pattern = "/[\s:]/";
	$str = trim($argv[1]);
	$split = preg_split($pattern, $str);
	$mytime = valid_format($split);
	echo $mytime."\n";
}

function valid_format($split)
{
	$week = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
	$year = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
	$ret = 0;
	if (!(count($split) == 7) ||
		!in_array($split[0], $week) ||
		!(preg_match("/[0-9]{2}/", $split[1]) && 0 < $split[1] && $split[1] < 13) ||
		!in_array($split[2], $year) ||
		!preg_match("/[0-9]{4}/", $split[3]) ||
		!(preg_match("/[0-9]{2}/", $split[4]) && 0 <= $split[4] && $split[4] < 24) ||
		!(preg_match("/[0-9]{2}/", $split[5]) && 0 <= $split[5] && $split[5] < 60) ||
		!(preg_match("/[0-9]{2}/", $split[6]) && 0 <= $split[6] && $split[6] < 60)
		)
		{
			echo "Wrong Format\n";
		}
	else {
		$ret = mktime($split[4], $split[5], $split[6], array_search($split[2], $year) + 1, $split[1], $split[3]);
	}
	return $ret;
}