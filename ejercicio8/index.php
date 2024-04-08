<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>operadores logicos</title>
</head>
 
<body>
    <div class="operadores">
    <h1>Operadores logicos</h1>
    </div>
    <div class="caja1">
        <p> $Variable || $variable2 ==> unas de las dos tiene que ser true</p>
        <p> $varibale && $variable2 ==> las dos tiene que ser true</p>
       <h3>(t || f) && (f || t)
        <br>
           t     &&   t
           <br>
               true</h3> 
    </div>
    <?php
    $a = 3;
    $b = 10;
    $resulatado = ($a <= 3 && $b != 10);
    if($resulatado == true){
        echo ('se cumple la condicion');
    }else{
        echo ('no se cumple la condicion');
    }
    ?>
 
</body>

</html>