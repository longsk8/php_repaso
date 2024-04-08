<?php
include('conexion.php');

// Obtén el ID del producto a editar
if (!isset($_GET['id'])) {
    die('No se recibió el ID del producto');
}
$id = $_GET['id'];

// Realizar la consulta para obtener los datos del producto
$sql = "SELECT * FROM productos WHERE id = ?";
$stmt = $db_connection->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();

// Verifica si se encontró el producto 
if ($result->num_rows > 0) {
    // Obtiene los datos del producto 
    $producto = $result->fetch_assoc();

    // Agrega estas líneas para depurar
    echo '<pre>';
    print_r($producto);
    echo '</pre>';
} else {
    // Agrega esta línea para depurar
    echo 'No se encontró el producto';
}


// Procesar el formulario de actualización
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obténer los datos actualizados del formulario
    $nuevoNombre = $_POST['nombre'];
    $nuevaDescripcion = $_POST['descripcion'];
    $nuevoPrecio = $_POST['precio'];
    $nuevoNombreImagen = $_POST['imagen_producto']; //nombre imagen


    // Valida y sanitiza los datos
    $nuevoNombre = filter_var($nuevoNombre, FILTER_SANITIZE_STRING);
    $nuevaDescripcion = filter_var($nuevaDescripcion, FILTER_SANITIZE_STRING);
    $nuevoNombreImagen = filter_var($nuevoNombreImagen, FILTER_SANITIZE_STRING);

    // Crea la consulta SQL para actualizar los datos del producto
    $updateQuery = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, imagen_producto = ? WHERE id = ?";
    $stmt = $db_connection->prepare($updateQuery);
    $stmt->bind_param("ssdsi", $nuevoNombre, $nuevaDescripcion, $nuevoPrecio, $nuevoNombreImagen, $id);
    $stmt->execute();
    // Redirige al usuario a otra página o muestra un mensaje de éxito
    header('Location: editarproductoadmin.php');
    exit();
}
?>