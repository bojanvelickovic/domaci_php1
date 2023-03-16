<?php

$ime = "bojan";

//             0        1       2       3        4         5    
$ucenici = ["bojan", "igor", "pera", "jasar", "zoran", "marko"];

echo $ucenici[0];
echo $ucenici[4];


$ucenici[0] = "boki"; // bojan -> boki (preimenujes neko ime)
echo $ucenici[0];

//                       6         7        8  dodavanje podataka pomocu array_push
array_push($ucenici, "milutin", "nenad", "jovan");
echo $ucenici[7];



