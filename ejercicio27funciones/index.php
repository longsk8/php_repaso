<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html y php</title>
</head>

<body>
    <h3>Crear un formulario que pida nombre apellidos y edad y hacer
        una funcion que diga que es mayor de edad o no.
    </h3>
    <?php

    function presentacion($nombre, $apellido, $edad)
    {
        if ($edad < 18) {
            echo "$nombre $apellido eres menor de 18 ";
        } else {
            $edad >= 18;
            echo "$nombre $apellido eres mayor de edad";
        }
    }
    //vereficamos los daton cuando envie los datos ( boton enviar)
    if (isset($_POST['enviar'])) {
        //creamos las variable
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        //llamamos ala funcion y le pasamos dichos parametros
        presentacion($nombre, $apellido, $edad);
    } else {

        ?>
        <form action="index.php" method="post">
            <label for="nombre">
                <input type="text" name="nombre" placeholder="Tu nombre">
            </label>
            <label for="apellido">
                <input type="text" name="apellido" placeholder="Tu apellido">
            </label>
            <label for="edad">
                <input type="number" name="edad" placeholder="Tu edad">
            </label>
            <button type="submit" name="enviar">enviar</button>
        </form>
    <?php
    }
    ?>
</body>

</html>