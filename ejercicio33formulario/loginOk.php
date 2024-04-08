<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subcripcion completa</title>
</head>
<?php
    // Verificar si el usuario ha iniciado sesión y si la clave "usuario" está definida en $_SESSION
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        echo "<h1>Bienvenido, $usuario</h1>";
    } else {
        // Si el usuario no ha iniciado sesión, redirigir al formulario de inicio de sesión
        header("Location: index.php");
        exit();
    }
?>
<a href="cerrarsession.php" class="boton">Cerrar session</a>
</body>

</html>