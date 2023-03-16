<?php

$naslov = "postani programer";
$navigacija = ["glavna", "o nama", "kontakt"];

array_push($navigacija, "podaci", "mail", "subscribe");
var_dump($navigacija);




?>


<!DOCTYPE html>

<html lang="en">

    <head>
         <title> <?= $naslov; ?> </title>
    </head>
    <body>
        
        <h1>  <?= $naslov;   ?>   </h1>
        
        <nav>
            <a> <?= $navigacija[0]; ?> </a>
            <a> <?= $navigacija[1]; ?>   </a>
            <a> <?= $navigacija[2]; ?>   </a>
            <a> <?= $navigacija[5]; ?>   </a>
        </nav>

    </body>

</html>