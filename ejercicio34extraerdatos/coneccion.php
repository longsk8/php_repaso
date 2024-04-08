<?php
// Conectarse a la base de datos

$servername = "localhost"; // Nombre del servidor
$root = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "datosproductos"; // Nombre de la base de datos

// Crear conexión
$conn = mysqli_connect($servername, $root, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}



?>