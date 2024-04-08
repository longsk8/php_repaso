<?php session_start();
// Verificar si el usuario ha iniciado sesión y si la clave "usuario" está definida en $_SESSION
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    require_once('conexion.php');
    $query = "SELECT puntos FROM usuarios";
    $resultado = mysqli_query($db_connection, $query);
    $fila = mysqli_fetch_assoc($resultado);
    $puntos = $fila['puntos'];
} else {
    // Si el usuario no ha iniciado sesión, redirigir al formulario de inicio de sesión
    header("Location: formulariosession.php");
    exit();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>
<body>
<ul>
                <li>
                    <h4 style="color: rgb(109, 6, 6);">Usuario:
                        <?php echo $usuario; ?>
                    </h4>
                </li>
                <li>
                    <h4 style="color: rgb(109, 6, 6);">puntos:
                        <?php echo $puntos; ?>
                    </h4>
                </li>
                <li>
                    <a href="cerrarsesion.php">cerrar sesion</a>
                </li>
</ul>
<?php
        echo "<h1>id: " . $_GET['id'] . "</h1>";
        echo '<br>';
        echo "<h1>nombre: " . $_GET['nombre'] . "</h1>";
        echo '<br>';
        echo "<h1>email: ". $_GET['email']. "</h1>";
        echo '<br>';
        echo '<a href="pag1.php">atras</a>';
        ?>
</body>
</html>