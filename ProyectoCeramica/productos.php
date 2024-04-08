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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Ceramica Oriental</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="p-2 m-0 border-0 bd-example">
    <!-- llamamos ala conexio de la base de datos con include -->
    <?php include("conexion.php"); ?>

    <!-- navegador -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="">陶芸</a>
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
                        <a class="nav-link fs-5" href="verCarrito.php"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
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

    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Nuestros Productos</h1>
                <p class="lead fw-normal text-white-50 mb-0">Ceramica disponible para esta temporada</p>
            </div>
        </div>
    </header>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 justify-content-center">
            <!-- hacemos la consulta para obtenr los productos de la base de datos -->
            <?php
            $sql = "SELECT * FROM productos";
            $resultado = mysqli_query($db_connection, $sql);

            // Si se encontraron resultados, mostrarlos en la página
            if (mysqli_num_rows($resultado) > 0) {
                while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Imagen del producto -->
                            <?php echo "<img  class='card-img-top' height='400' src='img/" . $fila['imagen_producto'] . ".jpg'>"; ?>

                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Nombre del producto -->
                                    <h5 class="fw-bolder">
                                        <?php echo $fila['nombre']; ?>
                                    </h5>
                                    <!-- Descripción del producto -->
                                    <span class="descripcion">
                                        <?php echo $fila['descripcion']; ?>
                                    </span>
                                    <br>
                                    <!-- Precio del producto -->
                                    <span class="precio">
                                        <?php echo $fila['precio']; ?> €
                                    </span>
                                </div>
                            </div>
                            <!-- Botón para agregar al carrito -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <!-- Botón para agregar al carrito -->
                                    <form action="verCarrito.php" method="post">
                                        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>">
                                        <input type="hidden" name="id_producto" value="<?php echo $fila['id']; ?>">
                                        <button type="submit" class="btn btn-outline-dark mt-auto btn-comprar">Agregar <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                class="bi bi-cart3" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                // Si no se encontraron los productos, mostrar un mensaje indicando que no hay productos disponibles
                ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">No hay productos disponibles</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }


            // Cerrar la conexión a la base de datos
            mysqli_close($db_connection);
            ?>
        </div>

    </div>
    <footer class="footer">
        <p>Derechos de Autor &copy; 2023. Todos los derechos reservados.</p>
        <p>陶芸</p>
    </footer>
    <script>
        let botonesComprar = document.querySelectorAll('.btn-comprar');
        botonesComprar.forEach(function (boton) {
            boton.addEventListener('click', function () {
                alert('Producto añadido');
            });
        });
    </script>
</body>


</html>