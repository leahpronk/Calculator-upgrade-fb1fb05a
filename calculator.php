<?php

$calculator = readline ("welke uitvoering wil je? (+,-,%)");

switch ($calculator) {
	case '+':
		echo ($antwoord1 + $antwoord2) .PHP_EOL;
		break;
	case '-':
		echo ($antwoord1 - $antwoord2) .PHP_EOL;
		break;
	case '%':
		echo ($antwoord1 % $antwoord2) .PHP_EOL;
		break;

	
	default:
		exit("ERROR");
		break;
}

$antwoord1 = readline ("wat is je eerste cijfer?");
if (is_numeric($antwoord1)){
	echo "";
} else {
	exit("Dit is geen getal");
}
$antwoord2 = readline ("wat is je tweede cijfer?");
if (is_numeric($antwoord2)){
	echo "";
} else {
	exit("ERROR");
}



