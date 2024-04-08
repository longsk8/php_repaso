<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Productos</title>
</head>

<body>
    <!-- llamamos ala coneccion -->
    <?php include('coneccion.php'); ?>

    <table class="table table-striped">
        <tr>
            <th colspan="6">
                <h1 class="container text-center">Listado de productos</h1>
            </th>
        </tr>
        <tr>
            <th>Imagen</th>
            <th>Codigo</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Accion</th>
        </tr>
        <!-- realizo la consulta en la base de datos y que traiga todo los valores de la tabla productos -->
        <?php
        $sql = "SELECT * FROM productos";
        $resultado = mysqli_query($conn, $sql);

        // Procesar resultado de la consulta
        if (mysqli_num_rows($resultado) > 0) {
            // Imprimir datos en un ciclo while
            while ($mostrarFila = mysqli_fetch_array($resultado)) {

                ?>
                <tr>
                    <td>
                        <?php echo "<img width='80' height='80' src='img/" . $mostrarFila['imagen'] . ".png'>"; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['codigo']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['producto']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['precio']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['stock']; ?>
                    </td>
                    <td>
                        <?php echo "<a href='recibir.php?codigo=" . $mostrarFila['codigo'] . "&producto=" . $mostrarFila['producto'] . "&imagen=" . $mostrarFila['imagen'] . "'>Mostrar</a>" ?>
                        <?php echo "<a href='editar.php?codigo=" . $mostrarFila['codigo'] . "&producto=" . $mostrarFila['producto'] . "&imagen=" . $mostrarFila['imagen'] . "'>Editar</a>" ?>
                        <?php echo "<a href='eliminar.php?codigo=" . $mostrarFila['codigo'] . "&producto=" . $mostrarFila['producto'] . "&imagen=" . $mostrarFila['imagen'] . "'>Eliminar</a>" ?>
                        
        
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='6'>0 resultados</td></tr>";
        }

        // Cerrar conexión
        mysqli_close($conn);
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>