<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora php</title>
</head>
<body>
    <h1>Calculadora</h1>
    <?php
    //hacemos las variables para dos numero 
    $numero = 8;
    $numero2 = 2;
    //varible ressultado
   
    $resultado = $numero + $numero2;
    echo ($resultado);
    echo '<br>';
    $resultado2 = $numero - $numero2;
    echo ($resultado2);
    echo '<br>';
    $resultado3 = $numero * $numero2;
    echo ($resultado3);
    echo '<br>';
    $resultado4 = $numero / $numero2;
    echo ($resultado4);



    ?>
</body>
</html>