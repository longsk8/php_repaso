<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>array</h1>
    <?php
    //clave = array de valores estring
    $nombres = ["Ana", "Bernardo", "Carmen"];
    echo ($nombres[1]);
    echo ('<br>');
    $nombres[1] = "Ruben";
    echo ($nombres[1]);
    echo ('<br>');
    echo ('<br>');
    ?>
    <h2>Array asosiativa</h2>
    <?php
    /* valores ya definido */
    $cuadrado = [3 => 9, 5 => 19, 8 => 20];
    echo ($cuadrado[3]);
    echo ('<br>');
    $nombreEdad = ["andres" => 35, "linnea" => 29, "matias" => 33];
    echo ($nombreEdad['andres']);
    echo ('<br>');
    echo ('<br>');
    ?>

    <h2>array multidimensionales</h2>
    <?php

    $dato = [
        ["name" => "pepe", "edad" => 38, "peso" => 85],
        ["name" => "luis", "edad" => 33, "peso" => 75]
    ];
    echo ($dato[1]["edad"]);
    echo ('<br>');
    //imprimir todos los datos con print_R
    print_r($dato);

    ?>
    <h2>Union de array</h2>
    <?php
    $nombres1 = [0=>1,2=>3];
    $nombres2 = [1=>1,4=>3];
    $nombresTotal = $nombres1 + $nombres2;
    print_r($nombresTotal);
    ?>
    <h2>borrar un dato de la array</h2>
    <?php
    $apellido = ["godoy", "miguez", "villafan"];
    print_r($apellido);
    echo '<br>';
    unset($apellido[2]);//con unset eliminamos el valor de una array
    print_r($apellido);

    ?>
</body>

</html>