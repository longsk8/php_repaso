<?php session_start();
// Verificar si el usuario ha iniciado sesión y si la clave "usuario" está definida en $_SESSION
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    require_once('conexion.php');
   
} else {
    // Si el usuario no ha iniciado sesión, redirigir al formulario de inicio de sesión
    header("Location: index.php");
    exit();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Servicios</title>
  
</head>
<body>
<header>
<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
        <form action="guardartrabajo.php" method="POST">
				<h2>Registrar Servicios</h2>
                <input type="number" class="field" placeholder="codigo referencia" name="codigo">
				<input type="text" class="field" placeholder="tipo" name="tipo">
				<input type="number" class="field" placeholder="Tiempo/Valor" name="valor">
				<button type="submit"  name="enviar" class="btn">Enviar</button>
        </form>
				
			</div>
		</div>
	</div>
  <div class="right"></div>
</div>

</body>
</html>