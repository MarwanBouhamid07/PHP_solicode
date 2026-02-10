

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

<form method= "post" style=" width:40%;margin:auto;padding:50px;display:flex;flex-direction:column;" action="dd.php">
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
if (isset($_GET['resulta'])) {
   echo "<div class='calc'>";
 echo $_GET['resulta'];

echo "</div>";
}



?>
</body>
</html>