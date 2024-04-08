<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular DNI</title>
</head>

<body>
    <h1 align="center">Calcula letra de DNI</h1>
    <?php
    function CalcularDNI($dni, $letra)
    {
        $posicion = intval($dni % 23);
        $letras = "TRWAGMYFPDXBNJZSQVHLCKEO";
        $letraReal = substr($letras, $posicion, 1);
        $letra = strtoupper($letra);
        if ($letraReal == $letra) {
            echo "dni correcto";
        } else {
            echo "dni incorrecto";
        }
    }
    //vereficamos los daton cuando le al boton enviar
    if (isset($_POST["enviar"])) {
        //verefico si el campo de dni este con sus caracteres
        if (empty($_POST["dni"])) {
            echo "el campo dni no puede estar vacio";
        } else {
            $dni = $_POST["dni"];
            // srtlen que incerte solo 9 caracteres
            if (strlen($dni) != 9) {
                echo "erro el dni debe de tener 9 digitos";
            } else {
                $letra = strtoupper(substr($dni, -1));
                $dni = substr($dni, 0, 8);
                if (is_numeric($dni)) {

                    CalcularDNI($dni, $letra);

                } else {
                    echo "error en dni";
                }
            }
        }
    } else {
        ?>
        <form action="index.php" method="post" name="name">
            <table align="center" border="4">
                <tr>
                    <td align="center" colspan="2">
                        <h3>Escribe tu dni</h3><br>
                        <h6>Formato 12345678H</h6>
                    </td>
                </tr>
                <tr>
                    <td>DNI</td>
                    <td align="center">
                        <input type="text" name="dni" size="9" maxlength="9">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="enviar" name="enviar">
                        &nbsp;|| &nbsp;
                        <input type="reset" value="reset" name="reset">
                    </td>
                </tr>
            </table>
        </form>

        <?php
    }
   
    ?>

</body>

</html>