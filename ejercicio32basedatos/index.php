<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Registro</title>
</head>
<body>
    <main>
    <div class="formulario">
        <form action="registro.php" method="post">
            <h3>Registro a la base de datos</h3>
            <label for="nombre">Nombres</label>
            <input type="text" name="nombres" placeholder="introduce nombre">
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellidos" placeholder="introduce apellidos">
            <button type="submit" name="enviar">enviar</button>
        </form>
    </div>
    </main>
</body>
</html>