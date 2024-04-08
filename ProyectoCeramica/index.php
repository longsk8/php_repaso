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

  <header>
    <!-- navegador -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <!-- 陶芸 significa ceramica en japones logo -->
        <a class="navbar-brand fs-4" href="">陶芸</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo04"
          aria-controls="navbarTogglerDemo04" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link fs-5" href="registro.php"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                  height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                  <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg> Carrito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="formularioSesion.php"><svg xmlns="http://www.w3.org/2000/svg" width="16"
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

  <!-- BANNER -->
  <section class="text-darck p-2 mb-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1>Ceramica<span class="text-warning"> 陶芸 Oriental </span></h1>
          <p class="lead my-3">
            En nuestra tienda de cerámica japonesa,<br> cada pieza es elegida cuidadosamente y proviene de
            los
            más talentosos artesanos de Japón.<br> ¡Descubre la magia de la cerámica japonesa en
            nuestra tienda!
          </p>
          <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">
            <a class="text-white text-decoration-none" href="registro.php">Ver Productos</a>
          </button>
        </div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player class="d-none d-sm-block" src="https://assets10.lottiefiles.com/packages/lf20_yyrlj1ko.json"
          background="transparent" speed="1" style="width: 500px; height: 500px;" autoplay loop></lottie-player>
      </div>
    </div>
  </section>
  <section id="tarjetas banner" class="p-2  ">
    <div class="container">
      <h2 class="text-center text-black mt-5">Nuestros productos</h2>
      <p class="lead text-center text-black mb-5">
        Todos nuestros artículos son cuidadosamente seleccionados y enviados directamente desde Japón, garantizando así
        su autenticidad.
      </p>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card bg-light mb-5  h-100">
            <div class="card-body text-center ">
              <img src="./img/taza.jpg" class="rounded mb-3" width="250px" alt="" />
              <h3 class="card-title mb-3">Taza con flores</h3>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo">Ver Producto</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Crea una cuenta para ver los productos</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <!--  modal que lleva al usuario al registro-->
                      <div>
                        <div class="mb-3">
                          <p>Diferente, original y único .</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" onclick="window.location.href='registro.php'">Crear
                        Cuenta</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card bg-light mb-5  h-100">
            <div class="card-body text-center ">
              <img src="./img/plato1.jpg" class="rounded mb-3" width="250px" alt="" />
              <h3 class="card-title mb-3">Plato con mariposa</h3>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo">Ver Producto</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Crea una cuenta para ver los productos</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <!--  modal que lleva al usuario al registro-->
                      <div>
                        <div class="mb-3">
                          <p>Diferente, original y único .</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" onclick="window.location.href='registro.php'">Crear
                        Cuenta</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-3">
          <div class="card bg-light mb-5  h-100">
            <div class="card-body text-center ">
              <img src="./img/jarron.jpg" class="rounded mb-3" width="250px" alt="" />
              <h3 class="card-title mb-3">Jarron con samurai</h3>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo">Ver Producto</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Crea una cuenta para ver los productos</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <!--  modal que lleva al usuario al registro-->
                      <div>
                        <div class="mb-3">
                          <p>Diferente, original y único .</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" onclick="window.location.href='registro.php'">Crear
                        Cuenta</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card bg-light mb-5  h-100">
            <div class="card-body text-center ">
              <img src="./img/maseta5.jpg" class="rounded mb-3" width="250px" alt="" />
              <h3 class="card-title mb-3">Jarron con flores</h3>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                data-bs-whatever="@mdo">Ver Producto</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Crea una cuenta para ver los productos</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <!--  modal que lleva al usuario al registro-->
                      <div>
                        <div class="mb-3">
                          <p>Diferente, original y único .</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" onclick="window.location.href='registro.php'">Crear
                        Cuenta</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Sobre Nosotros -->
        <section id="learn" class="p-2">
          <div class="container">
            <div class="row align-items-center justify-content-between">
              <div class="col-md">
                <img src="img/maseta3.jpg" class="img-fluid rounded" alt="jarron" width="400px" height="auto" />
              </div>
              <div class="col-md p-2">
                <h2>Sobre Nostros</h2>
                <br>
                <p>
                  Bienvenidos a nuestra empresa de cerámica japonesa. Nos enorgullece
                  traer una selecta colección de piezas que representan la belleza y la
                  elegancia del arte japonés. Nuestra empresa se enfoca en ofrecer
                  productos de alta calidad que destacan por su diseño único y su
                  durabilidad. Todos nuestros artículos son cuidadosamente seleccionados
                  y enviados directamente desde Japón, garantizando así su autenticidad.
                  Además, nos esforzamos por brindar un servicio excepcional a nuestros
                  clientes. Entendemos la importancia de encontrar la pieza perfecta
                  para cada espacio y nos comprometemos a ayudarles a encontrarla.
                  Nuestro personal altamente capacitado está disponible para responder
                  cualquier pregunta y asesorar en cuanto a estilos y decoración. Nos
                  enorgullece ser una empresa que ofrece cerámica japonesa en español.
                  Esperamos poder compartir con ustedes la belleza de estas piezas que
                  han resistido la prueba del tiempo y que continúan siendo valoradas en
                  todo el mundo. ¡Gracias por confiar en nosotros!.
                </p>
                <a href="nosotros.php" class="btn btn-primary mt-3">
                  <i class="bi bi-chevron-right"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                      d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                  </svg> Leer mas
                </a>
              </div>
            </div>
          </div>
        </section>

        <!-- seccion contactos -->
        <section class="bg-light py-5">
          <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
              <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
              <h2 class="fw-bolder">Contacta con nosotros</h2>
            </div>
            <div class="row gx-5 justify-content-center">
              <div class="col-lg-6">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                  <!-- Name input -->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                      data-sb-validations="required" data-sb-can-submit="no">
                    <label for="name">Tu nombre</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                  </div>
                  <!-- Email address input -->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" placeholder="name@example.com"
                      data-sb-validations="required,email" data-sb-can-submit="no">
                    <label for="email">Correo Electronico</label>
                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                  </div>

                  <!-- Message input -->
                  <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                      style="height: 10rem" data-sb-validations="required" data-sb-can-submit="no"></textarea>
                    <label for="message">Mensaje</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                  </div>
                  <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                      <div class="fw-bolder">¡Gracias por contactar con nosotros!</div>
                    </div>
                  </div>
                  <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error al enviar el mensaje</div>
                  </div>
                  <!-- enviar Button -->
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>

        <script>
          document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Evita el envío del formulario
            // Realiza las acciones necesarias, como enviar los datos al servidor o mostrar mensajes de éxito/error
            // Restablece los campos del formulario
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('message').value = '';

            // Muestra el mensaje de éxito
            document.getElementById('submitSuccessMessage').classList.remove('d-none');

            // Opcional: Puedes redirigir al usuario a otra página después de enviar el formulario
            // window.location.href = 'gracias.html';
          });
        </script>

        <!-- cokies -->
        <!-- hacer la cokies aqui con php -->
      
      <?php
        if (!isset($_COOKIE['mi_cookie'])) {
            // Si la cookie no existe, se muestra el banner de cookies
            echo '<div class="cokies" id="cookie-banner">
                Este sitio web utiliza cookies para mejorar su experiencia de navegación. ¿Acepta nuestras cookies?
                <button id="aceptar-cookies" onclick="aceptarCookies()">Aceptar</button>
                <button id="cancelar-cookies" onclick="cancelarCookies()">Cancelar</button>
            </div>';
        }
        //funcion para aceptar la cokies
        function aceptarCookies()
        {
            // Se crea la cookie con una duración de un día
            setcookie('mi_cookie', 'aceptada', time() + (24 * 60 * 60), '/');
            // Se oculta el banner de cookies
            echo '<script>document.getElementById("cookie-banner").style.display = "none";</script>';
        }
        //funcion para cancelar la cokies
        function cancelarCookies()
        {
            // Se oculta el banner de cookies sin crear la cookie
            echo '<script>document.getElementById("cookie-banner").style.display = "none";</script>';
        }
        ?>
            <!-- script para la cokies -->
        <script>
        
            // Verifica si la cookie 'mi_cookie' existe
            if (document.cookie.indexOf('mi_cookie=aceptada') === -1) {
                var banner = document.getElementById('cookie-banner');
                banner.style.display = 'block';
            }

            // Función para aceptar las cookies
            function aceptarCookies() {
                var date = new Date();
                date.setTime(date.getTime() + (24 * 60 * 60 * 1000)); // expira en 1 día
                document.cookie = 'mi_cookie=aceptada; expires=' + date.toUTCString() + '; path=/';

                var banner = document.getElementById('cookie-banner');
                banner.style.display = 'none';
            }

            // Función para cancelar las cookies
            function cancelarCookies() {
                var banner = document.getElementById('cookie-banner');
                banner.style.display = 'none';
            }

        </script>




        <footer class="footer">
          <p>Derechos de Autor &copy; 2023. Todos los derechos reservados.</p>
          <p>陶芸</p>
        </footer>
</body>

</html>