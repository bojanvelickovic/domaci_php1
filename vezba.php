<?php

$automobil = ["bmw", "mercedes", "audi"];
array_push($automobil, "zastava");

echo "$automobil[3] $automobil[1] $automobil[2] $automobil[0]";

$brojAutomobila = count($automobil);

echo "ukupno ima broj $brojAutomobila automobila";



$markePatika = ["reebok", "adidas", "nike"];
sort($markePatika);

$markePatika[3] = "puma";

sort($markePatika);
var_dump($markePatika);

unset($markePatika[0]);
var_dump($markePatika);



