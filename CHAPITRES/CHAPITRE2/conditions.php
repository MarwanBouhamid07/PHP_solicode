<?php

$choose = 'coffe';
$name = 'mouhamed';
$age = 17;
if  ($age >= 18){ 
if ($choose = 'coffe' && $name = 'mouhamed'){
    echo 'prix of '.$choose .'is 5$';
    }elseif ($choose = 'milk') {
    echo 'prix of '.$choose .'is 4$';
    
    }else{
        echo 'normal prix is 2$';
}
}else {
    echo "You can't enter this restaurant";
}



$jour = "Vendredi";
switch ($jour) {
    case "Lundi":
        echo "Début de semaine";
        break;
    case "Vendredi":
        echo "Dernier jour avant le week-end";
        break;
    default:
        echo "Jour normal";
}
