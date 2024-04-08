<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3> Imprimir el dia de la semana que ponga el usuario</h3>
    <?php
    $numeroSemana = 5;

    switch ($numeroSemana) {
        case 1:   /*if($numeroSemana == 1 */
            echo ("el lunes es 1");
            break;
        case 2:     /*else if($numeroSemana == 2 */
            echo ("el martes es 2");
            break;
        case 3:     /* else if($numeroSemana == 3*/
            echo ("el miercoles es 3");
            break;
        case 4:
            echo ("el jueves es 5");
            break;
        case 5:
            echo ("el viernes es 5");
            break;
        case 6:
            echo ("el sabado es 6");
            break;
        case 7:   /*else($numeroSemana == 7*/
            echo ("el domingo es 7");
            break;

    }
    ?>
</body>

</html>