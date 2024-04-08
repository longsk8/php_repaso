<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Los padres de una niña le prometieron darle 10 dólares cuando cumpliera 12 años de edad y duplicar el regalo en
        cada
        cumpleaños subsiguiente hasta que el regalo excediera 1000 dólares.</p>
<?php
 //primero creamos las variables
$edad = 12;
$dinero = 10;
$totalDinero = 10;

do {
    $dinero = $dinero * 2;
    $totalDinero = $totalDinero + $dinero;
    $edad++;
    echo ('<br>');
    echo ($totalDinero. " €");
    echo (' </n>  '.$edad.' años');
} while ($totalDinero <= 1000);
echo ('<br>');
echo("la niña tendra =  $edad");
echo('<br>');
echo("la niña tendra = $totalDinero €");




?>


</body>

</html>