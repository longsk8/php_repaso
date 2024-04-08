<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Sueldo trabajador sera de 1000 .
        Categoria A = 18%, Categodia B = 12%, Categoria C = 9%, Categoria D = 6%
        que sueldo tendra cada categoria</h3>

    <?php
    $sueldoTrabajador = 1000;
    $Categoria = "B";
    switch ($Categoria) {
        case "A":
            $sueldoTrabajador = $sueldoTrabajador * 1.18;
            break;
        case "B":
            $sueldoTrabajador = $sueldoTrabajador * 1.12;
            break;
        case "C":
            $sueldoTrabajador = $sueldoTrabajador * 1.09;
            break;
        case "D":
            $sueldoTrabajador = $sueldoTrabajador * 1.16;
            break;

    }
    echo ($sueldoTrabajador);
    ?>
</body>

</html>