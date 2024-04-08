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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>pagina primera</title>
</head>

<body>
    <!-- llamamos ala coneccion -->
    <?php include('conexion.php'); ?>
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
                <li>
                    <a href="registrartrabajo.php">registrar trabajo</a>
                </li>
                <li>
                    <a href="contrartrabajo.php">Contratar trabajo</a>
                </li>
    </ul>

    <table class="table table-striped">
        <tr>
            <th colspan="6">
                <h1 class="container text-center">Listado de personas registradas</h1>
            </th>
        </tr>
        <tr>
          
            <th>ID</th>
            <th>Nombre</th>
            <th>email</th>
            <th>Usuario</th>
            <th>Puntos</th>
        </tr>
        <!-- realizo la consulta en la base de datos -->
        <?php
        $sql = "SELECT * FROM usuarios";
        $resultado = mysqli_query($db_connection, $sql);

        // Procesar resultado de la consulta
        if (mysqli_num_rows($resultado) > 0) {
            // Imprimir datos en un ciclo while
            while ($mostrarFila = mysqli_fetch_array($resultado)) {

                ?>
                <tr>
                    <td>
                        <?php echo $mostrarFila['id']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['email']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['usuario']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['puntos']; ?>
                    </td>
                    <td>
                        <?php echo "<a href='mostrar.php?id=" . $mostrarFila['id'] . "&nombre=" . $mostrarFila['nombre'] . "&email=" . $mostrarFila['email'] . "&email=" . $mostrarFila['usuario'] ."&puntos=" . $mostrarFila['puntos'] ."'>Mostrar</a>" ?>
                        
        
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='6'>0 resultados</td></tr>";
        }

        // Cerrar conexión
        mysqli_close($db_connection);
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>