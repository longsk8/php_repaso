<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Ejercicio hacer un buscador que no encuentre el numero que esta en la array y su posicion</h1>

    <?php

    //creamos la array
    $array = [3, 2, 5, 7, 4, 1];
    //variable de numero que tenemos que buscar
    $buscarNumero = 7;
    $resultado;
    //empezar con un for para recorrer la array y ordenarla
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i; $j < count($array); $j++) {
            if ($array[$j] < $array[$i]) {
                $aux = $j; //guardo la poscicion en aux
                $numero = $array[$i]; //guardo el numero tambien
                $array[$i] = $array[$j];
                $array[$aux] = $numero;
            }
        }
    }
//despues buscamos el numero en que posicon esta
    ?>
</body>

</html>