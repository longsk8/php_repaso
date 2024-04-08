<?php
session_start();
// Eliminar todas las variables de sesión
session_unset();
// Destruir la sesión actual
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cerrar session</title>
</head>

<body>
    <?php
    //rederigimos al usuario
    header('Location:index.php');
    ?>
</body>

</html>