<?php
//variables and its types
$name = "Marwan Bouhamid";//string
$age = 19;//interger;
$prix = 12.50;//float
$online = true;//booleen

echo 'name: '. $name;
echo "<br>";
echo 'age: '. $age;
echo "<br>";
echo 'prix: '. $prix."$";
echo "<br>";
echo 'online: '. ($online ? "Oui" : "Non");
echo "<br>";

echo "type of prix is " .gettype($prix);
echo "<br>";
var_dump($online);
echo "<br>";


//change types

$nomber = "50";
$nomberToInt = (int)$nomber;
echo "after change its type : ". $nomberToInt;