<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array For</title>
</head>

<body>

    <h1>primero recoorrer los 100 primeros numero y nos quedamos con los pares ,guardar los numero pares en
        una array y imprimirla
    </h1>
    <?php
    //creamos la variable con un numero
    $numero = 0;
    $aux = 0;
    $array = [];
    //1 manera de hacerlo
    while ($numero <= 100) {
        if ($numero % 2 == 0) {
            $array[$aux] = $numero;
            $aux++;
        }
        $numero++;
    }
  for ($i=0; $i <count($array); $i++) {//count recorremos los datos de la array
        echo ($array[$i]);
        echo ('<br>');
  }
    print_r($array);

    ?>
</body>

</html>