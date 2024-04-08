<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar array</title>
</head>

<body>
    <h1>Ordenaracion de array por seleccion</h1>
    <?php
    //creamos la array
    $array = [9, 5, 1, 8, 4, 3];
    print_r($array);
    echo ('<br>');
    //empezar con un for para recorrer la array y ordenarla
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i; $j < count($array); $j++) {
            if ($array[$j] < $array[$i]) {
                $aux = $j;//guardo la poscicion en aux
                $numero = $array[$i];//guardo el numero tambien
                $array[$i] = $array[$j];
                $array[$aux] = $numero;
            }
        }
    }
    print_r($array);
    echo ('<br>');
    /*ejemplo  
       5,9,1,8,4,3 */
    ?>
    <h3>Ordenar de menor a mayot</h3>
    <?php
    
    $array2 = [6, 1, 9, 2, 5];
    print_r($array2);
    echo ('<br>');
    for ($i = 0; $i < count($array2); $i++) {
        for ($j = $i; $j < count($array2); $j++) {
            if ($array2[$j] > $array2[$i]) {
                $aux = $j;
                $numero = $array2[$i];
                $array2[$i] = $array2[$j];
                $array2[$aux] = $numero;
            }
        }
    }
    print_r($array2);
    ?>
</body>

</html>