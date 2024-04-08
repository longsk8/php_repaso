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

<body class="p-3 m-0 border-0 bd-example">

    <header>
        <!-- navegador -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand fs-4" href="index.php">陶芸</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo04" aria-controls="navbarTogglerDemo04" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo04">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link fs-5" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link fs-5" href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="registro.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg> Carrito</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="formularioSesion.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                  height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                </svg> Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- banner contando la historia -->

    <div class="container marketing">

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1 mb-5">Nuestra Historia</h2>
                <p class="lead">Nosotros somos una pequeña empresa que nació de la pasión por la cultura y la artesanía
                    japonesa. Durante un viaje a Japón, nos enamoramos de la belleza y la delicadeza de la cerámica
                    japonesa, y decidimos compartir esa pasión con el mundo.
                    Nuestro objetivo es ofrecer a nuestros clientes una selección cuidadosamente escogida de las mejores
                    piezas de cerámica japonesa, elaboradas por expertos artesanos de las regiones más destacadas en la
                    producción de cerámica, como Arita, Imari, Mino y Tokoname. Además, queremos acercar la cultura
                    japonesa a través de nuestras piezas y de la historia que hay detrás de cada una de ellas.
                </p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto mb-5" width="500"
                    height="500" src="img/tiendaceramica.jpg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%"
                    fill="var(--bs-secondary-color)" dy=".3em"></text></img>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1 mb-5">Nuestros Productos.</h2>
                <p class="lead">Nosotros creemos en la importancia de apoyar la tradición y el trabajo de los artesanos,
                    por lo que nuestros productos son de alta calidad y auténticos. También estamos comprometidos con la
                    sostenibilidad y la protección del medio ambiente, por lo que trabajamos con materiales respetuosos
                    con el planeta. Cada pieza de cerámica es única y cuenta una historia propia.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto mb-5" width="500"
                    height="500" src="img/manoceramica.jpg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%"
                    fill="var(--bs-secondary-color)" dy=".3em"></text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1 mb-5">Nuestra tienda</h2>
                <p class="lead">En nuestra tienda de cerámica. ofrecemos una amplia variedad de productos, desde tazas y
                    platos hasta cuencos y jarrones. Cada pieza es cuidadosamente seleccionada y proviene de los mejores
                    artesanos de Japón. Además, trabajamos con diferentes técnicas de cerámica, como la cerámica de
                    Arita. La cerámica de Arita es conocida por su estilo elegante y sofisticado. Cada pieza de cerámica
                    que ofrecemos en nuestra tienda tiene su propia historia y características únicas, lo que las
                    convierte en objetos valiosos y hermosos que puedes disfrutar en tu hogar o como regalo para alguien
                    especial. </p>
            </div>
            <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto mb-5" width="500"
                    height="500" src="img/aritaceramica.jpg" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%"
                        fill="var(--bs-secondary-color)" dy=".3em"></text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

       

    </div>

<!-- pie de pagina -->
    <footer class="footer">
        <p>Derechos de Autor &copy; 2023. Todos los derechos reservados.</p>
        <p>陶芸</p>
    </footer>
</body>

</html>