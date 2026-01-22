

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .marg{
            margin-bottom:20px;
            border-radius:10px;
            height:
            30px;
        }
        label{
                font-family: sans-serif;

        }
        button{
            background:green;
            color:white;
            border:none;
            outline:none;
        }
        .calc{
           padding:20px; border-radius:10px;background:black;color:white;font-size:30px;font-weight:900;margin:auto;width:fit-content;
        }
    </style>
</head>
<body>

<form method= "POST" style=" width:40%;margin:auto;padding:50px;display:flex;flex-direction:column;" >
    <label for="num1">
        number 1
    </label>
    <input class='marg' type="text" name = 'num1' id="num1" required>
        <label for="num2">
        number 2
    </label>
    <input class='marg' type="text" name="num2" id="num2" required>
    <label for="oper">operation</label>
    <select class='marg' id="oper" name="oper" required>
    <option value="">-- Select --</option>
    <option value="/">/</option>
    <option value="*">*</option>
    <option value="+">+</option>
    <option value="-">-</option>
</select>
<button type="submit" class='marg'>=</button>

</form>


<?php
echo "<div class='calc'>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1  = $_POST['num1']  ?? '';
    $num2 = $_POST['num2'] ?? '';
    $oper   = $_POST['oper']   ?? '';

    echo calc($num1,$num2,$oper);
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


echo "</div>";
?>
</body>
</html>