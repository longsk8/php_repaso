<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Usuarios</title>
</head>

<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Proyecto Java</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="dentro.php" class="nav-link " >Tabla Usuarios</a></li>
        <li class="nav-item"><a href="profesion.php" class="nav-link" >Tabla Profesion</a></li>
        <li class="nav-item"><a href="administradores.php" class="nav-link">Tabla Administradores</a></li>
        <li class="nav.item"><a href="cerrarsesion.php" class="nav-link">Cerrar Sesion</a></li>
      </ul>
    </header>
    <!-- llamamos ala coneccion -->
    <?php include('conexion.php'); ?>

    <table class="table table-striped">
        <tr>
            <th colspan="4">
                <h1 class="container text-center">Tabla de los usuarios registrados</h1>
            </th>
        </tr>
        <tr>
            <th>ID_PROFESION</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>CREDITO</th>
            
        </tr>
        <!-- realizo la consulta en la base de datos -->
        <?php
        $sql = "SELECT * FROM profesion";
        $resultado = mysqli_query($db_connection, $sql);

        // Procesar resultado de la consulta
        if (mysqli_num_rows($resultado) > 0) {
            // Imprimir datos en un ciclo while
            while ($mostrarFila = mysqli_fetch_array($resultado)) {

                ?>
                <tr>
                    <td>
                        <?php echo $mostrarFila['id_profesion']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['descripcion']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['credito']; ?>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='4'>0 resultados</td></tr>";
        }

        // Cerrar conexión
        mysqli_close($db_connection);
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>