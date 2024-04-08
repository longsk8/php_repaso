<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
   <h1>Reccorrer una array con un for</h1> 
<?php
$nombre = "andres";
$array = [$nombre, "casa", 1, 3, 4,"baño"];
$longitudArray = count($array);//count recorremos los datos de la array
for ($i = 0; $i < $longitudArray; $i++) {
    echo ($array[$i]);
    echo '<br>';
}