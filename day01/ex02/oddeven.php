#!/usr/bin/php
<?php

while (1) {
	echo "Entrez un nombre: ";
	$input = trim(fgets(STDIN));
	
	if (strlen($input) && is_numeric($input)) {
		echo "Le chiffre ".$input." est ".($input % 2 ? "Impair" : "Pair")."\n";
	}
	else {
		if (feof(STDIN))
		{
			echo "\n";
			exit;
		}
		echo "'".$input."' n'est pas un chiffre\n";
	}
}