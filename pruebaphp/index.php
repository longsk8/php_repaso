<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pruebasphp</title>
</head>

<body>
   <form action="guardatosusuario.php" method="post">
    <label for="nombre">
        <input type="text" name="nombre" id="name" required placeholder="nombre">
    </label>
    <label for="email" >
        <input type="text" name= "email" id="email" required placeholder="email">
    </label>
    <label for="usuario" >
        <input type="text" name= "usuario" id="usuario" required placeholder="usuario">
    </label>
    <label for="password" >
        <input type="password" name= "contrasena" id="usuario" required placeholder="contraseña">
    </label>
    <button type="submit">enviar</button>
   </form>
   <a href="formulariosession.php">session</a>
</body>
</html>