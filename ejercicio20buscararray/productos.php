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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo04" aria-controls="navbarTogglerDemo04" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo04">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="">Ver Carrito</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="">Cerrar session</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
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
                                <img class="card-img-top" src="<?php echo $fila['imagen_producto'] . ".jpg'>"; ?>"
                                    alt="Imagen del producto">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Nombre del producto -->
                                        <h5 class="fw-bolder">
                                            <?php echo $fila['nombre']; ?>
                                        </h5>
                                        <!-- Precio del producto -->
                                        <span class="price">
                                            <?php echo $fila['precio']; ?> €
                                        </span>
                                    </div>
                                </div>
                                <!-- Botón para ver detalles del producto -->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <a class="btn btn-outline-dark mt-auto" href="#">Ver detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    // Si no se encontraron resultados, mostrar un mensaje indicando que no hay productos disponibles
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