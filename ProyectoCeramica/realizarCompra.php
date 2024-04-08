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
    <link rel="stylesheet" href="CSS/estilos.css">
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
                        <a class="nav-link fs-5" href="verCarrito.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg> Carrito</a>
                    </li>
                    <!-- cerrar sesion -->
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
    <div>

        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">¡Gracias por comprar en nuestra tienda!</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Puedes recojer tu pedido en 15 dias</p>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="card shadow border-0 rounded-4 mb-5">
                <div class="card-body p-5">
                    <div class="row align-items-center gx-5">
                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                            <div class="bg-light p-4 rounded-4">
                                <!-- mapa de google con la ubicaion -->
                                <div>
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.327701842543!2d2.134800376537999!3d41.388689171299795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a499a9e6f36957%3A0xcfdbe303208a31a4!2sCampusNET!5e0!3m2!1ses!2ses!4v1684186742865!5m2!1ses!2ses"
                                        width="100%" height="400" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                                <p class="mt-2 blue-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg> Donde nos puedes encontrar
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <div class='text-center'>
                                    <h3>¡Gracias por confiar en nosotros!</h3>
                                    <p>Siempre diseñamos productos especiales con amor y cuidado para nuestros clientes.
                                    </p>
                                    <p>Esperamos que disfrutes de tu compra y que vuelvas pronto.</p>
                                    <p>¡Nos encantaría atenderte nuevamente en el futuro <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
                                        </svg>!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- pie de pagina-->
        <footer class="footer">
            <p>Derechos de Autor &copy; 2023. Todos los derechos reservados.</p>
            <p>陶芸</p>
        </footer>
</body>


</html>