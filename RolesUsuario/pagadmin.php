<?php
session_start();
// Incluir archivo de conexión
require_once('conexion.php');

// Verificar si el usuario ha iniciado sesión y si la clave "usuario" está definida en $_SESSION
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $resultado = mysqli_query($db_connection, $query);
    $mostrarFila = mysqli_fetch_assoc($resultado);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilopagadmin.css">
    <title>Document</title>
</head>

<body>
    <h1>welcome administrador</h1>
    <a href="cerrarsession.php">cerrarsesion</a>
    <table>
        <tr>
            <th colspan="5">
                <h1>Listado de la ceramica</h1>
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>NOMBRE PRODUCTO</th>
            <th>IMAGEN</th>
            <th>PRECIO</th>
            <th>DISCRIPCION DEL PRODUCTO</th>
        </tr>
        <tr>
            <!-- traemos los productos de la base de datos a la tabla -->

            <?php
            //consulta a la base de datos
            $sql = "SELECT * FROM productos_ceramica";
            $resultado = mysqli_query($db_connection, $sql);

            // Procesar resultado de la consulta
            if (mysqli_num_rows($resultado) > 0) {
                // Imprimir datos en un ciclo while
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
                        <?php echo "<img width='80' height='80' src='img/" . $mostrarFila['imagen'] . ".jpg'>"; ?>
                    </td>

                    <td>
                        <?php echo $mostrarFila['precio']; ?>
                    </td>

                    <td>
                        <?php echo $mostrarFila['descripcion']; ?>
                    </td>

                    <td>
                        <!-- enlace para mostrar el producto en otra pagina -->
                        <?php echo "<a href='mostrar.php?id=" . $mostrarFila['id_producto'] . "&nombre=" . $mostrarFila['nombre'] .
                            "&imagen=" . $mostrarFila['imagen'] . "&precio=" . $mostrarFila['precio'] . "&descripcion="
                            . $mostrarFila['descripcion'] . "'>Mostrar</a>"; ?>
                    </td>

                    <td>
                        <!-- pasar múltiples valores como parámetros  -->
                        <a href="modificar.php?id_producto=<?php echo $mostrarFila['id_producto']; ?>">Modificar</a>
                    </td>
                </tr>
                <?php
                }
            } else {
                echo "<tr><td colspan='5'>0 resultados</td></tr>";
            }
            // Cerrar conexión
            mysqli_close($db_connection);
            ?>
    </table>

</body>

</html>