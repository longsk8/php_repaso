<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <title>Formulario</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body clas="p-3 m-0 border-0 ">

    <form  action="registrobasedatos.php" method="post" class="formulario form-control" style="width: 50%;">
        <div class="mb-3">
            <label for="Nombre4" class="form-label ">Nombre</label>
            <input type="text" name="nombre" class="form-control  " id="Nombre4" placeholder="Nombre">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control " id="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
        </div>
    
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
 <a href="iniciarsesion.php">ir a sesion</a>
</body>

</html>