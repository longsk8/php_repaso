<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="estilos.css">
    <title>Formulario</title>
</head>

<body>
    <?php

    ?>
    <div class="contenedor">
        <h3>Registrarse en el formulario</h3>
        <div class="botones">
            <button class="google-boton">
                <picture>
                    <img src="https://th.bing.com/th/id/OIP.T4UTXeAqyzF-d4e4L0fz6QHaHa?pid=ImgDet&rs=1"
                        alt="logo-google">
                </picture>
                <span>Registrarse con google</span>
            </button>
            <button class="twitter-boton">
                <picture></picture>
            </button>
        </div>
        <div class="separador">
            <hr> <!--hr nos genera una linea horizontal-->
            <span>or.....</span>
            <hr>
        </div>
        <form action="registro.php" method="post">
            <div class="seccion-inputs">
                <label for="name">
                    <span>Nombre</span>
                    <input type="text" id="name" name="nombres">
                </label>
                <label for="username">
                    <span>Apellidos</span>
                    <input type="text" id="username" name="apellidos">
                </label>
            </div>
            <label for="email">
                <span>Email</span>
                <input type="email" id="email" name="email">
            </label>
            <label for="usuario">
                <span>Usuario</span>
                <input type="text" id="usuario" name="usuario">
            </label>
            <label for="password">
                <span>Contraseña</span>
                <input type="password" id="password" name="password" placeholder="6 + caracteres">
            </label>
            <label for="checkbox" class="checkbox-label">
                <input type="checkbox" id="checkbox">
                <span>Acepto las condiciones y el aviso legal.</span>
            </label>
            <button type="submit" class="submit-boton" name="enviar">Crear Cuenta</button>
        </form>
    </div>
    <a href="session.php">session</a>

</body>

</html>