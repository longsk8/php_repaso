<?php
include('conexion.php');

// Obtén el ID del producto a editar
if (!isset($_GET['id_producto'])) {
    die('No se recibió el ID del producto');
}
$id = $_GET['id_producto'];

// Realiza la consulta para obtener los datos del producto
$sql = "SELECT * FROM productos WHERE id_producto = ?";
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
    // Obtén los datos actualizados del formulario
    $nuevoNombre = $_POST['nombre'];
    $nuevaDescripcion = $_POST['descripcion'];
    $nuevoNombreImagen = $_POST['nombre_imagen'];

    // Valida y sanitiza los datos
    $nuevoNombre = filter_var($nuevoNombre, FILTER_SANITIZE_STRING);
    $nuevaDescripcion = filter_var($nuevaDescripcion, FILTER_SANITIZE_STRING);
    $nuevoNombreImagen = filter_var($nuevoNombreImagen, FILTER_SANITIZE_STRING);

    // Crea la consulta SQL para actualizar los datos del producto
    $updateQuery = "UPDATE productos SET nombre = ?, descripcion = ?, nombre_imagen = ? WHERE id_producto = ?";
    $stmt = $db_connection->prepare($updateQuery);
    $stmt->bind_param("sssi", $nuevoNombre, $nuevaDescripcion, $nuevoNombreImagen, $id);
    $stmt->execute();
    
    // Subir imagen a la carpeta img Verifica si se cargó un archivo 
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        // Define la ruta de destino para el archivo cargado 
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["imagen"]["name"]);

        // Mueve el archivo cargado a la ruta de destino 
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            // El archivo se cargó correctamente 
        } else {
            // Hubo un error al cargar el archivo 
        }
    }

    // Redirige al usuario a otra página o muestra un mensaje de éxito
    header('Location: index.php');
    exit();
}
?>