<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>la session se ha creado</h2>
    <p>
        <?php
        if (isset($_POST['nombre'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
            echo 'Bienvenido, has iniciado sesión como: <b>' . $_SESSION['nombre'] . "</b>";
        } elseif (isset($_SESSION['nombre'])) {
            echo "Has iniciado sesión como: <b>" . $_SESSION['nombre'] . "</b>";
        } else {
            echo 'Acceso denegado';
        }
        ?>

    <p>
        <br>
        <a href="login.php">Página principal</a>
        <br>
        <a href="cerrarsesion.php">Cerrar sesión</a>
    </p>
</body>

</html>