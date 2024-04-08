<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>hacer una variable edad
y otra con dia salir un mensaje si es mayor de 18 y el dia tiene que ser par para entrar</h3> 
    <?php
     //variable
    $edad = 18;
    $numeroDia = 2;
    //sila edad = 18 o mas y numero di dia es par 
    //&& = si son ambas true
    if($edad >= 18 && ($numeroDia %2 == 0)){
        echo('puedes pasar');
    }else{
        echo ('no puedes pasar');
    }
  
    ?>
</body>
</html>