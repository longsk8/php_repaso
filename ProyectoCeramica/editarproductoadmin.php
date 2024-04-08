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
                        <a class="nav-link fs-5 gap-2" href="registrarProductoAdmin.php"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg> Añadir producto</a>
                    </li>
                    <li class="nav-item">
                        <!-- aviso al usuario antes de cerrar session -->
                        <a class="nav-link fs-5" href="cerrarSesion.php"
                            onclick="return confirm('¿Estás seguro de que deseas cerrar sesión?')">
                            <Cerrar src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
                                Cerrar sesión <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-dark py-5">
        <div
            class="container px-4 px-lg-5 my-5 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <div class="text-center text-white mb-4 mb-lg-0">
                <h1 class="display-4 fw-bolder">Productos</h1>
                <p class="lead fw-normal text-white-80 mb-0">Los productos disponibles para la temporada verano 2023</p>
                <p class="text-white-80">¡Editar productos!</p>
            </div>
            <div class="text-center text-white">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_dNPIoR.json" background="transparent"
                    speed="0.8" style="width: 420px; height: 300px;" loop autoplay></lottie-player>

            </div>
        </div>
    </header>

    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 justify-content-center">
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
                                    <!-- descripcio del producto -->
                                    <span class="descripcion">
                                        <?php echo $fila['descripcion']; ?>
                                    </span>
                                    <br>
                                    <!-- precio del producto -->
                                    <span class="precio">
                                        <?php echo $fila['precio']; ?> €
                                    </span>
                                </div>
                            </div>
                            <!-- Formulario Botón para ver detalles del producto (ocultar id en el hmtml) -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent d-flex justify-content-center gap-2 ">
                                <div class="text-center mr-2">
                                    <form id="edit-form-<?php echo $fila['id']; ?>" method="GET"
                                        action="editarformularioproducto.php">
                                        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                                        <button type="submit"
                                            class="btn btn-info mt-auto text-white text-decoration-none">Editar</button>
                                    </form>
                                </div>
                                <!-- boton para eliminar el producto -->
                                <div class="text-center mr-2">
                                    <button class="btn btn-danger mt-auto">
                                        <a class="text-decoration-none text-white"
                                            href="eliminarProducto.php?id=<?php echo $fila['id']; ?>"
                                            onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                // Si no se encuenta ningun producto, mostrar un mensaje indicando que no hay productos disponibles
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
</body>


</html>