<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones</title>
</head>

<body>
    <h1>Ordenar array funciones</h1>

    <?php
    //funciones las ponemos arriba
    function ordenarArray($array)
    {
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
        return($array);
    }
    $array = [1, 5, 9, 7, 8, 3, 4];
    //llamamos a la funcion y le pasamos como parametro la array
    $array  = ordenarArray($array);
    print_r($array);

    ?>
</body>

</html>