<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
</head>
<?php
if (!(isset($_SESSION['usuario']))) {
    ?>

    <body>
        <main role="main" class="container my auto">
            <div class="row">
                <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                    col-12">
                    <h2 class="text-center">Iniciar Sesion</h2>
                    <img class="img-fluid mx-auto d-block rounded mb-2" src="https://th.bing.com/th/id/OIP.SHVR3Zu0GKs_Qn_Og65MGgHaDy?pid=ImgDet&rs=1" />

                    <form action="vereficarsesion.php" method="POST">
                        <div class="form-group">
                        <input class="form-control mb-2" type="text" placeholder="usuario" name="usuario" />
                        </div>
                        <div>
                        <input class="form-control mb-2" type="password" placeholder="contraseña" name="password">
                        </div>
                        <center><input class="btn btn-primary mb-2" name="submit" type="submit" value="Entrar" /></center>
                    </form>
                   
                </div>
            </div>
        </main>
        <?php
} else {
    header("Location: session.php");
    exit;

}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>