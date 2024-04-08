<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>

<body>

    <h3>Calcular factoriales de un numero.</h3>
    <p>ejemplo 5 = 5*4*3*2*1</p>

    <?php
    
    //creamos la variable que contenga un numero
    //ejemplo con while
    $factorial = 10;
    $total = 1;
    while ($factorial >= 1) {
        $total = $total * $factorial;
        $factorial--;
    }
    echo ('el factorial de 10 es '.$total);


    // ejemplos con for
    $factorial2 = 5;
    $total2 = 1;
    for($i = $factorial2; $i >= 1; $i--){
        $total2 = $total2 * $i;
    }
    echo('<br>');
    echo('el factorial de 5 es '.$total2);

    //ejemplo con do while
    $factorial3 = 9;
    $total3 = 1;
    do{
        $total3 = $total3 * $factorial3;
        $factorial3--;
    }while($factorial3 >= 1);
    echo('<br>');
    echo ('el factorial de 9 es '.$total3);
    $passwor = "andres";
    echo ('<br>');
    $pass_cifrada = password_hash($passwor, PASSWORD_DEFAULT);
    echo $pass_cifrada;
   


    ?>
</body>

</html>