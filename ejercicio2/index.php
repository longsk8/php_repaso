<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumas</title>
</head>

<body>
    <h2>Crear dos variables que tengas numero y esos dos numero hacemos una suma, resta, multiplicion, divicion</h2>
    <h4>ejemplo 2+2, 2-2, 2*2, 2/2</h4>
    <?php
    $numero1 = random_int(1,100);/*numero random entro el 1 y el 100*/ 
    $numero2 = random_int(1,100);
    echo('la suma de '.$numero1.' + '.$numero2.' = '.($numero1 + $numero2));
    echo('<br>');
    echo('la resta de '.$numero1.' - '.$numero2.' = '.($numero1 - $numero2));
    echo('<br>');
    echo('la multiplicacion de '.$numero1.' * '.$numero2.' = '.($numero1 * $numero2));
    echo('<br>');
    echo('la division de '.$numero1.' / '.$numero2.' = '.($numero1 / $numero2));
    ?>

</body>

</html>