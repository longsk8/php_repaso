<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sumar($numero1, $numero2)
    {
        $suma = $numero1 + $numero2;
        echo ("la suma es $suma");
        echo ('<br>');
    }
    function restar($numero1, $numero2)
    {
        $resta = $numero1 - $numero2;
        echo ("la resta es $resta");
        echo ('<br>');
    }
    function multiplicar($numero1, $numero2)
    {
        $multiplicar = $numero1 * $numero2;
        echo ("la multiplicacion es $multiplicar");
        echo ('<br>');
    }
    function dividir($numero1, $numero2)
    {
        if ($numero2 !== 0) {
            $dividir = $numero1 / $numero2;
            echo ("la division es $dividir");
            echo ('<br>');
        } else {
            echo ("no se puede dividir entre 0");
        }

    }

    if (isset($_POST["enviar"])) {
        sumar($_POST["numero1"], $_POST["numero2"]);
        restar($_POST["numero1"], $_POST["numero2"]);
        multiplicar($_POST["numero1"], $_POST["numero2"]);
        dividir($_POST["numero1"], $_POST["numero2"]);

    }





    ?>
</body>

</html>