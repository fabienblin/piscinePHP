#!/usr/bin/php
<?php
if ($argc > 1)
{
	$pattern = "/[\s]+/";
	$replacement = " ";
	$str = trim($argv[1]);
	echo (preg_replace($pattern, $replacement, $str)."\n");
}