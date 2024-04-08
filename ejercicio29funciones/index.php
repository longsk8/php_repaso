<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>
        le pedimos al usuario que ingrese tres numero y los guardamos en una array y le pasamos el numero mas grande y
        mas pequeño de los 3
    </h3>
    <?php
    //funcion para obtener el numero menor que introdusca el usuario le pasamos como parametro la array
    function obtenerNumeroMenor($array)
    {
        $resultado = $array[0];
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] < $resultado) {
                $resultado = $array[$i];
            }
        }
        return $resultado;
    }
     //funcion para obtener el numero mayor que introdusca el usuario le pasamos como parametro la array
    function obtenerNumeroMayor($array)
    {
        $resultado = $array[0];
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] > $resultado) {
                $resultado = $array[$i];
            }
        }
        return $resultado;
    }
    //funcion para imprimir el resultado 
    function textoNumeros($array)
    {
        $numeroMayor = obtenerNumeroMayor($array);
        $numeroMenor = obtenerNumeroMenor($array);
        //le pasamos el mensaje con los numeros que introdujo
        echo "EL NUMERO MAYOR ES $numeroMayor , Y EL NUMERO MENOR ES $numeroMenor ";
    }

    if (isset($_POST["enviar"])) {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];
        //guardamos los datos que introduce el usuario en una array
        $array = [$numero1, $numero2, $numero3];
        textoNumeros($array);

    } else {
        //hacemos el formulario
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