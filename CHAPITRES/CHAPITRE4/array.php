<?php
$menu = array("coffe","juic","milk","tea","caposheno");

echo "Hi how are you do you want to drink $menu[0] if you don't want it ";
array_push($menu,"cooca");

unset($menu[5]);

echo 'we have '.count($menu) .'and this is our menu: <br>';
foreach($menu as $menu){
echo "<b>$menu</b> <br>";
};


$prixMenu = array(
    "coffe" => "10$",
    "juic" => "12$",
    "milk" => "9$",
    "tea" => "5$",
    "caposheno" => "25$",
) ;

echo "prix of ". $menu[4] ." is ". $prixMenu["juic"];


