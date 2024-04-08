<?php

// Incluye el archivo de conexión a la base de datos
include('conexion.php');


// Verifica si se recibió el ID del producto a eliminar
if (!isset($_GET['id_producto'])) {
    die('No se recibió el ID del producto');
}

// Obtiene el ID del producto a eliminar
$id = $_GET['id_producto'];

// Crea la consulta SQL para eliminar el producto
$deleteQuery = "DELETE FROM productos WHERE id_producto = ?";
$stmt = $db_connection->prepare($deleteQuery);
$stmt->bind_param('i', $id);
$stmt->execute();

// Redirige al usuario a otra página o muestra un mensaje de éxito
header('Location: index.php');
exit();


?>