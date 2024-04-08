<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Ejercicio</h3>
    <p> Ejercicio: hola nombre encantao de conocerte</p>
    <?php
    //forma de hacerlo
    $letra = 'Hola';
    $letra2 = 'encantado de conocerte';
    echo ("$letra <b>$letra2</b>");

    echo ('<br>'); //espacios
    echo ('<br>'); //espacios
    
    //otra forma de la que se puede hacer
    $nombre = 'Andres';
    echo ("Hola <b>$nombre</b> encantado de conocerte");
    ?>
</body>

</html>