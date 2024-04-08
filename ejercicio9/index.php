<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Programa que suma todo los impares</h1>
    <?php
    //variables
    $numero = 1;
    $suma = 0;
    
    //while
    //numer dividio entre dos es diferente de 0
        //sabemos que es impar
        /*suma es = al valor + el numero
        1 es mas pequeño igual que 100 entro
        1 entro 2 da un modulo diferente a 0 */
    while($numero <= 100){ 
        if($numero % 2 != 0){
            $suma = $suma + $numero;
            echo ($suma);
            echo ('<br>');
           
        }
        $numero++;
    }
    echo ("la suma total es $suma");




    ?>
</body>
</html>