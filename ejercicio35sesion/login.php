<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    if (isset($_SESSION['nombre'])) {
        echo "<p> Has iniciado sesion como" . $_SESSION['nombre'] . "";
        echo "<p><a href = 'cerrarsesion.php'>Cerrar la sesion</a></p>";
        echo "<br><p><a href='paneldecontrol.php'>Ir al panel de control</a></p>";
    } else {
        ?>
        <h2>Creando la sesion</h2>
        <form action="panelcontrol.php" method="POST">
            <p>Nombre</p>
            <input type="text" placeholder="ingrese tu nombre" name="nombre" required>
            <input type="submit" value="crear session">
            <?php
    }
    ?>
    </form>
</body>

</html>