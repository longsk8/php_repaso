<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Iniciar Session</title>
</head>

<body>
<?php
    if (!(isset($_SESSION['usuario']))) {
        ?>

    <div class="container">
        <form action="backsession.php" method="post">
            <div>
                <h3 class="titulo">Iniciar session</h3>
            </div>
            <div>
                <input type="text" class="input" name="nombre_usuario" id="nombre" placeholder="nombre">
            </div>
            <div>
                <input type="password" class="input" name="contrasena" placeholder="password">
            </div>
            <div>
                <button type="submit">Iniciar</button>
            </div>
        </form>  
    </div>
    <?php
    } else {
        header("Location: pagadmin.php");
        exit;

    }
    ?>
</body>

</html>