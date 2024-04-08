<?php
session_start();
include('conexion.php');

// Validar y obtener el ID del usuario y el ID del producto desde la URL
if (isset($_GET['id_usuario']) && isset($_GET['id'])) {
    $idUsuario = mysqli_real_escape_string($db_connection, $_GET['id_usuario']);
    $idProducto = mysqli_real_escape_string($db_connection, $_GET['id']);

    // Consulta SQL para agregar el producto al carrito
    $sql = "INSERT INTO carrito (id_usuario, id_producto) VALUES ('$idUsuario', '$idProducto')";

    // Ejecutar la consulta SQL
    if (mysqli_query($db_connection, $sql)) {
        // Redirigir al usuario de vuelta a la página de productos o a la página del carrito
        header("Location: verCarrito.php");
        exit(); // Importante: Terminar la ejecución del script después de la redirección
    } else {
        // Mostrar un mensaje de error si algo salió mal
        echo "Error: " . mysqli_error($db_connection);
    }
} else {
    // Mostrar un mensaje de error si no se proporcionaron los parámetros necesarios en la URL
    echo "Error: Parámetros inválidos en la URL";
}

// Cerrar la conexión a la base de datos
mysqli_close($db_connection);
?>

