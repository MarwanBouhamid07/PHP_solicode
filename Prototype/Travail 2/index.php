<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            margin:0;
            padding:0;
            overflow-x:hidden;
        }
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
             margin-bottom:20px;
            border-radius:10px;
            height:
            30px;
        }
        h1{
            margin:auto;
            text-align:center;
            width: 100%;
            padding:20px;
            background:gray;
            color:white;
        }

        .table {
            width: 80%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        caption {
            text-align: left;
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Client Adress</h1>
    <form method='POST' style='width:40%;margin:auto;padding:50px;display:flex;flex-direction:column;'>
        <label for="name">Name</label>
        <input class='marg' type="text" name='name' required>
        <label for="lsName">Last name</label>
        <input class='marg' type="text" name='lsName' required>
        <label for="adresse">Adresse</label>
        <input class='marg' type="text" name='adresse' required>
        <label for="city">City</label>
        <input class='marg' type="text" name='city' required>
        <label for="codePostal">Code postal</label>
        <input class='marg' type="text" name='codePostal' required>
        <button calss='marg' type='submit' >Genere</button>
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
     $name  = $_POST['name']  ?? '';
    $lsName = $_POST['lsName'] ?? '';
    $adresse   = $_POST['adresse']   ?? '';
    $city   = $_POST['city']   ?? '';
    $codePostal   = $_POST['codePostal']   ?? '';

    echo gener($name,$lsName,$adresse,$city,$codePostal);
}

function gener($name,$lsName,$adresse,$city,$codePostal){
return "
<table class='table' style='  width: 80%;
margin:auto;
margin-bottom:20px;
            border-collapse: collapse;
            font-family: Arial, sans-serif;'>
    <caption>information of client</caption>
    <thead>
        <tr>
            <th >Champ</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Name</td>
            <td>$name</td>
        </tr>
        <tr>
            <td>Last name</td>
            <td>$lsName</td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td>$adresse</td>
        </tr>
        <tr>
            <td>City</td>
            <td>$city</td>
        </tr>
        <tr>
            <td>Code postal</td>
            <td>$codePostal</td>
        </tr>
    </tbody>
</table>

";
}

?>

</body>
</html>