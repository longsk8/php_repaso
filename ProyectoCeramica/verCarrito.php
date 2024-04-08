<?php
session_start();

// Verificar si la sesión está activa
if (!isset($_SESSION['id_usuario'])) {
    // Redirigir al usuario a la página de inicio (index)
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <title>Ver carrito</title>
</head>

<body class="p-2 m-0 border-0 bd-example">
    <!-- navegador -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="productos.php">陶芸</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo04"
                aria-controls="navbarTogglerDemo04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo04">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link fs-5" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg> Carrito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="cerrarSesion.php"
                            onclick="return confirm('¿Estás seguro de que deseas cerrar sesión?')">Cerrar sesión <svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <?php
// poner la conexion 
    include('conexion.php');

    // Obtener el ID del usuario que inicio sesion
    $idUsuario = $_SESSION['id_usuario'];

    // Verificar si se proporcionaron los parámetros 
    if (isset($_POST['id_usuario']) && isset($_POST['id_producto'])) {
        // Obtener el ID del usuario y el ID del producto 
        $idUsuario = $_POST['id_usuario'];
        $idProducto = $_POST['id_producto'];

        // Consulta SQL para agregar el producto al carrito
        $sql = "INSERT INTO carrito (id_usuario, id_producto) VALUES ('$idUsuario', '$idProducto')";

        // Ejecutar la consulta SQL
        if (mysqli_query($db_connection, $sql)) {
            // Redirigir al usuario de vuelta a la página de productos o a la página del carrito
            header("Location: productos.php");
            exit(); // Importante: Terminar la ejecución del script después de la redirección
        } else {
            // Mostrar un mensaje de error si algo salió mal
            echo "Error: " . mysqli_error($db_connection);
        }
    }

    // Consulta SQL para obtener los productos en el carrito del usuario
    $sql = "SELECT p.id, p.nombre, p.descripcion, p.precio, p.imagen_producto 
FROM productos p 
INNER JOIN carrito c ON p.id = c.id_producto 
WHERE c.id_usuario = '$idUsuario'";

    // Ejecutar la consulta SQL y obtener los resultados
    $resultado = mysqli_query($db_connection, $sql);

    // Variable para almacenar el total de precios
    $totalPrecio = 0;

    // Mostrar la tabla de carrito
    if (mysqli_num_rows($resultado) > 0) {
        // Crear la tabla con los datos obtenidos
        echo "<div class='dashboard-wrapper user-dashboard'>";
        echo "<div class='table-responsive'>";
        echo "<table class='table'>";
        echo "<thead><tr><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Imagen</th><th>Acciones</th></tr></thead>";
        echo "<tbody>";
        // imprmimos los resultados
        while ($fila = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['descripcion'] . "</td>";
            echo "<td>" . $fila['precio'] . "€</td>";
            echo "<td><img src='img/" . $fila['imagen_producto'] . ".jpg' alt='Imagen del producto' style='width: 80px; height: 80px;' class='img-thumbnail'></td>";
            echo "<td><a class='btn btn-danger' href='eliminarCarrito.php?id_producto=" . $fila['id'] . "'>Eliminar</a></td>";

            echo "</tr>";

            // Sumar el precio del producto al total
            $totalPrecio += $fila['precio'];
        }
        echo "</tbody>";
        echo "<tfoot><tr><td colspan='3' class='text-end'>Total:</td><td>" . $totalPrecio . "€</td><td><a class='btn btn-primary ml-5' href='realizarCompra.php'>Comprar</a></td></tr></tfoot>";
        echo "</table>";
        echo "</div>";

        // Cerrar la tabla y el contenedor principal
        echo "</div>";
    } else {
        // Si el carrito está vacío, mostrar un mensaje
        echo "<p>El carrito está vacío</p>";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($db_connection);
    ?>

</body>


</html>