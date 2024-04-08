<?php session_start();
// Verificar si el usuario ha iniciado sesión y si la clave "usuario" está definida en $_SESSION
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    require_once('conexion.php');
} else {
    // Si el usuario no ha iniciado sesión, redirigir al formulario de inicio de sesión
   //
  
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome visitante</h1>
    <a href="cerrarsession.php">cerrarsesion</a>
</body>
</html>