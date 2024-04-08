<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ciclos</title>
</head>

<body>
    <h2>Ejercio con while</h2>
    <p>Imprimir los 100 primeros numero pero pares
        ejemplo 2 4 6 8 10
    </p>
    <?php
    //creamos las variable
    $numero = 1;
    //hacemos el while
    while ($numero <= 100) {
        if ($numero % 2 == 0) {
            echo ($numero);
            echo ('<br>');
        }
        $numero++;
    }
    ?>
    <br>
    <h2>Ejercio con while</h2>
     <p>Imprimir los 100 primeros numero pero en 5 en 5
         ejemplo 5 10 15 20 25
     </p>
    <?php
     //creamos la variable para el numero
    $number = 1;
    //hacemos el while
    while($number<=100){
        if($number  % 5 == 0){
            echo ($number);
            echo ('<br>');
        }
        $number++;
    }


    ?>
</body>

</html>