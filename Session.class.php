<?php

$program = 4;
switch($program){
 case 1:
echo "<h1>Programming Language</h1>";
break;
case 2:
    echo "<h2>Programming Hargija</h2>";
    break;
case 3:
    echo "<h3>Programming Moj</h3>";
    break;
    case 4:
        echo "<h4>Programmmmmming</h4>";
    break:
default:
echo "<h5>Programing is not rasponding</h5>";
break;
}

echo "<br>";

$status_korisnika = "0";

switch($status_korisnika){
    case 0:
        require "admin.php";
        break;
    case 1:
        require "moderator.php";
    break;
    case 2:
        require "user.php";
    break;
    case 3:
        echo "user is blocked";
    break;
    case 4:
        echo "user is deleted";
    break;
    default:
    echo "no such user type here";
    break;
}


$currentTemperature = mt_rand(0,45);
$rain = mt_rand(0,1) == 1;
$mud = mt_rand(0,1) == 1;

switch($currentTemprature){
}