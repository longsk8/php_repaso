<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body>
    <!-- llamamos ala conexio de la base de datos con include -->
    <?php include("conexion.php"); ?>

    <!-- creo una tabla para mostrar los datos -->
    <table class="table table-striped">
        <tr>
            <th colspan="6">
                <h1 class="container text-center">Lista de productos</h1>
                <ul>
                    <li><a href="formularioRegistro.php">registro</a></li>
                    <li>
                        <!-- enlaces -->
                        <a href="formularioRegistro.php">Registro de productos</a>
                    </li>
                </ul>
            </th>
        </tr>
        <tr>
            <th>ID DEL PRODUCTO</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>NOMBRE IMAGEN</th>
        </tr>
        <!-- realizo la consulta en la base de datos y que traiga todo los valores de la tabla productos -->
        <?php
        $sql = "SELECT * FROM productos";
        $resultado = mysqli_query($db_connection, $sql);

        //recorremos la consulta
        if (mysqli_num_rows($resultado) > 0)
            //imprimo los datos en un ciclo while
            while ($mostrarFila = mysqli_fetch_array($resultado)) {

                ?>
                <tr>
                    <td>
                        <?php echo $mostrarFila['id_producto']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['descripcion']; ?>
                    </td>
                    <!-- la imagen es diferente -->
                    <td>
                        <?php echo "<img width='80' height='80' src='img/" . $mostrarFila['nombre_imagen'] . ".jpg'>"; ?>
                    </td>
                    <td>
                        <?php echo "<a href='eliminar.php?id_producto=" . $mostrarFila['id_producto'] . "' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este producto?')\">Eliminar productos</a>";
                        ?>

                        <?php echo "<a href='modificarProducto.php?id_producto=" . $mostrarFila['id_producto'] . "'>Editar</a>" ?>
                    </td>
                </tr>
                <!-- abrimso php abjo del tr -->
                <?php
            } else {
            echo "<tr><td colspan='6'> 0 resultados</td></tr>";
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