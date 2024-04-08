<?php

include('coneccion.php');

// Obtener los datos enviados desde el formulario
$imagen = $_GET['imagen'];
$codigo = $_GET['codigo'];
$producto = $_GET['producto'];
$precio = $_GET['precio'];
$stock = $_GET['stock'];

// Crear la consulta de actualización
$sql = "UPDATE productos SET imagen = '$imagen', producto = '$producto', precio = '$precio', stock = '$stock' WHERE codigo = '$codigo'";

// Ejecutar la consulta
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    // La actualización fue exitosa, redirigir a la página principal
    header('Location: actualizardatos.php');
} else {
    // Ocurrió un error al ejecutar la consulta
    die('Error al actualizar el registro: ' . mysqli_error($conn));
}


?>