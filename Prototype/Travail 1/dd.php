
<?php
$resulta=0;
//echo "<div class='calc'>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1  = $_POST['num1']  ?? '';
    $num2 = $_POST['num2'] ?? '';
    $oper   = $_POST['oper']   ?? '';

    /*echo "<p> calcul done";
    echo "</p>";
    echo calc($num1,$num2,$oper);*/
    $resulta =calc($num1,$num2,$oper);

}


function calc($num1,$num2,$oper){


function add($num1,$num2){
            return $num1 + $num2;
}
function sub($num1,$num2){
        return $num1 - $num2;
}
function mul($num1,$num2){
    return $num1 * $num2;
}
function div($num1,$num2){
    if ($num2 != 0){
        return $num1 / $num2;
    }else{
        return "You have error";
        }
        }
        
        if ($oper =="+"){
            return add($num1,$num2);
            }elseif ($oper =="-"){
                return sub($num1,$num2);
                }elseif ($oper =="*"){
                    return mul($num1,$num2);
                    }elseif ($oper =="/"){
                        return div($num1,$num2);
                        }

}

header("Location: index.php?resulta=$resulta");

//echo "</div>";


?>