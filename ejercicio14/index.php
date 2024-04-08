<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>piramide de numeros</h1>
    <?php
        //creamos la variable con un numero rando entre el 1 y el 9
    $numero = 8;
    //imprimimos el numero random
    echo("el numero es $numero <br>");
    for($numero2 = 0; $numero2 <= $numero;$numero2++){
        for ($i = 1; $i <= $numero2; $i++) { 
            if($numero2 %2==0){
                echo '<span style="color: red;">' . $numero2; 
            }else{
                echo '<span style="color: blue;">' . $numero2; 
            }
        }
        echo ('<br>');
    }
 

    ?>
    <a href="tablaMultiplicar.php">tabla multiplicar</a>
</body>
</html>