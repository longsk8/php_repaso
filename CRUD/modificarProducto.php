<?php
include('conexion.php');

// Obtén el ID del producto a editar 
$id = $_GET['id_producto'];


// Realiza la consulta para obtener los datos del producto 
$sql = "SELECT * FROM productos WHERE id_producto = ?";
$stmt = $db_connection->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

// Verifica si se encontró el producto 
if (count($result) > 0) {
    // Obtiene los datos del producto 
    $producto = $result[0];
}

// Verifica si se encontró el producto 
if (count($result) > 0) {
    // Obtiene los datos del producto 
    $producto = $result[0];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>

<body>

    <!-- Formulario de actualización -->
    <form method="POST" action="bdmodificar.php?id_producto=<?php echo $id; ?>" enctype="multipart/form-data">

        <input type="hidden" name="id_producto" value="<?php echo $id; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $producto['nombre']; ?>">
        <label for="descripcion">Descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" value="<?php echo $producto['descripcion']; ?>">
        <label for="nombre_imagen">Nombre de la imagen:</label>
        <input type="text" id="nombre_imagen" name="nombre_imagen" value="<?php echo $producto['nombre_imagen']; ?>">
        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" name="imagen">

        <button type="submit">Actualizar</button>
    </form>
</body>

</html