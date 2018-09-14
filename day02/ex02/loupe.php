#!/usr/bin/php
<?php
if ($argc > 1)
{
	$handle = fopen($argv[1], 'r+');
	$file = "";
	while (($buf = fgets($handle)))
	{
		$file = $file.$buf;
	}

	$regex = "#(<[^</>]>)(.*)(</.*>)#s";
	$file = preg_replace_callback($regex, function ($matches) {return strtoupper($matches[1]);}, $file);
	echo $file."\n";
}