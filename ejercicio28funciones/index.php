<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <h3>
        le pedimos al usuario que ingrese tres numero y le pasamos el numero mas grande y mas pequeño de los 3
    </h3>
    <?php
    function numeroMayor($numero1, $numero2, $numero3)
    {
        if ($numero1 > $numero2) {
            $numMayor = $numero1;
            if ($numero3 > $numero1) {
                $numMayor = $numero3;
            }
        } else if ($numero2 > $numero3) {
            $numMayor = $numero2;

        } else {
            $numMayor = $numero3;
        }
        echo ("el numero mayor es $numMayor");
    }
    function numeroMenor($numero1, $numero2, $numero3)
    {
        if ($numero1 < $numero2) {
            $numMenor = $numero1;
            if ($numero3 < $numero1) {
                $numMenor = $numero3;
            }
        } else if ($numero2 < $numero3) {
            $numMenor = $numero2;

        } else {
            $numMenor = $numero3;
        }
        echo (" ,el numero menor es $numMenor");
    }




    if (isset($_POST["enviar"])) {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];
        //llamamos al funcion y le pasamos los parametros
        numeroMayor($numero1, $numero2, $numero3);
        numeroMenor($numero1, $numero2, $numero3);
    } else {
        ?>

        <form action="index.php" method="post">
            <label for="numero">
                <input type="number" name="numero1">
            </label>
            <label for="numero">
                <input type="number" name="numero2">
            </label>
            <label for="numero">
                <input type="number" name="numero3">
            </label>
            <button type="submit" name="enviar">enviar</button>
        </form>
        <?php
    }
    ?>
</body>

</html>