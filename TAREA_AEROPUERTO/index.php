<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>VUELOS</title>
</head>

<body>
    <!-- llamamos ala coneccion -->
    <?php include('conexion.php'); ?>

    <table class="table table-striped">
        <tr>
            <th colspan="8">
                <h1 class="container text-center">TABLA DE VUELOS</h1>
            </th>
        </tr>
        <tr>
            <th>CODIGO DE VUELO</th>
            <th>HORA DE SALIDA</th>
            <th>DESTINO</th>
            <th>PROCEDENCIA</th>
            <th>PLAZAS FUMADOR</th>
            <th>PLAZAS NO FUMADOR</th>
            <th>PLAZAS TURISTA</th>
            <th>PLAZAS PRIMERA</th>
        </tr>
        <!-- realizo la consulta en la base de datos -->
        <?php
        $sql = "SELECT * FROM vuelos";
        $resultado = mysqli_query($conn, $sql);

        // Procesar resultado de la consulta
        if (mysqli_num_rows($resultado) > 0) {
            // Imprimir datos en un ciclo while
            while ($mostrarFila = mysqli_fetch_array($resultado)) {

                ?>
                <tr>
                    <td>
                        <?php echo $mostrarFila['COD_VUELO']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['HORA_SALIDA']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['DESTINO']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['PROCEDENCIA']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['PLAZAS_FUMADOR']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['PLAZAS_NO_FUMADOR']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['PLAZAS_TURISTA']; ?>
                    </td>
                    <td>
                        <?php echo $mostrarFila['PLAZAS_PRIMERA']; ?>
                    </td>


                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='8'>0 resultados</td></tr>";
        }

        // Cerrar conexión
        mysqli_close($conn);
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>