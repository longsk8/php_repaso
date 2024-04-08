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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/rformurioProducto.css">
    <title>Registrar productos</title>
</head>

<body>
    <div class="formulario">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Registrar un producto</h2>
                <p>Ingresa los detalles del nuevo producto:</p>
                <!-- Formulario de registro de producto -->
                <form action="bd_ingresarProductoAdmin.php" method="post" enctype="multipart/form-data"
                    onsubmit="return validarRegistro();">
                    <input type="text" id="nombre" name="nombre" class="field1" placeholder="Nombre del producto">
                    <input type="text" id="descripcion" name="descripcion" class="field2"
                        placeholder="Descripción del producto">
                    <input type="number" id="precio" name="precio" class="field3" placeholder="Precio del producto ejemplo: 20€"
                        min="0">
                    <input type="file" id="imagen" name="imagen" class="field4">
                    <input type="text" id="nombre_imagen" name="imagen_producto" placeholder="Nombre de la imagen "
                        class="field5">
                    <button type="submit" class="boton">Enviar datos</button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>