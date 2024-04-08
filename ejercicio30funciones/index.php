<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php y html</title>
</head>

<body>
    <h3>hacer un formulario que ponga nombre apellidos y el tipo de lenguaje
        que esta estudiando con un select y despues le devolvemos dichos resultados
    </h3>
    <?php
    //funcion para mostra los datos que introdusca el usuario
    function mostrarDatosUsuario($nombres, $apellidos, $lenguajes)
    {
        //hacemos un switch con las opciones del lenguaje
        switch ($lenguajes) {
            case "PHP":
                echo ("El estudiante $nombres $apellidos estudia PHP");
                break;
            case "HTML":
                echo ("El estudiante $nombres  $apellidos estudia HTML");
                break;
            case "JAVA":
                echo ("El estudiante $nombres $apellidos estudia JAVA");
                break;
            case "CSS":
                echo ("El estudiante $nombres $apellidos estudia CSS");
                break;
        }
    }

    //vereficamos los datos cuando el usuario le da al boton
    if (isset($_POST["enviar"])) {
        //creamos las varible para guardar los datos del usuario
        $nombres= strtoupper($_POST["nombres"]) ;
        $apellidos = strtoupper( $_POST["apellidos"]);
        $lenguajes = $_POST["lenguajes"];
        //llamamos ala funcion
        mostrarDatosUsuario($nombres, $apellidos, $lenguajes);
    } else {
        ?>
        <form action="index.php" method="post">
            <label for="nombres">
                <input type="text" name="nombres" placeholder="introduce tu nombre">
            </label>
            <label for="apellido">
                <input type="text" name="apellidos" placeholder="introduce tu apellido">
            </label>
            <select name="lenguajes" id="lenguajes" name="lenguajes">
                <option value="PHP">PHP</option>
                <option value="HTML">HTML</option>
                <option value="JAVA">JAVA</option>
                <option value="CSS">CSS</option>
            </select>
            <button type="submit" name="enviar">Enviar</button>
        </form>
    </body>
    <?php
    }
    ?>

</html>