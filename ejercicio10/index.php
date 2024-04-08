<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>

<body>

    <h1>Jugar con dos numeros: tendremos que elejir dos numeros y imprimir todo los numeros pares que hay entre esos
        numeros </h1>
    <p>ejemplo num = 2 y num2=8 el resultado seria 4 6</p>

    <?php
    $numero = 10;
    $numero2 = 18;
    while ($numero <= $numero2) {
        if ($numero % 2 == 0) {
            echo ($numero);
            echo ('<br>');
        }
        $numero++;
    }
    while ($numero >= $numero2) {
        if ($numero % 2 == 0) {
            echo ($numero);
            echo ('<br>');
        }
        $numero--;
    }



    ?>
</body>

</html>