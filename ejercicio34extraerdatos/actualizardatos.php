<?php
include('coneccion.php');

// Obtén el ID del producto a editar
$id = $_GET['producto'];

// Realiza la consulta para obtener los datos del producto
$sql = "SELECT * FROM productos WHERE producto = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 's', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Verifica si se encontró el producto
if (mysqli_num_rows($result) > 0) {
    // Obtiene los datos del producto
    $producto = mysqli_fetch_assoc($result);

    // Procesar el formulario de actualización
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtén los datos actualizados del formulario
        $nuevoPrecio = $_POST['precio'];
        $nuevoStock = $_POST['stock'];

        // Valida y sanitiza los datos (aquí puedes agregar tus propias validaciones)
        $nuevoPrecio = mysqli_real_escape_string($conn, $nuevoPrecio);
        $nuevoStock = mysqli_real_escape_string($conn, $nuevoStock);

        // Crea la consulta SQL para actualizar los datos del producto
        $updateQuery = "UPDATE productos SET precio = ?, stock = ? WHERE producto = ?";
        $stmt = mysqli_prepare($conn, $updateQuery);
        mysqli_stmt_bind_param($stmt, 'dis', $nuevoPrecio, $nuevoStock, $id);

        // Ejecuta la consulta de actualización
        if (mysqli_stmt_execute($stmt)) {
            // Redirige al usuario a otra página o muestra un mensaje de éxito
            header('Location: index.php');
            exit();
        } else {
            // Muestra un mensaje de error en caso de que la consulta de actualización falle
            echo 'Error al actualizar el producto: ' . mysqli_error($conn);
        }
    }
} else {
    // El producto no se encontró, muestra un mensaje de error o redirige al usuario a otra página
    echo 'Producto no encontrado';
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
    <form method="POST" action="editar.php?codigo=<?php echo $id; ?>">
 <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto']; ?>">
 <label for="nombre">Nombre:</label>
 <input type="text" id="nombre" name="nombre" value="<?php echo $producto['nombre']; ?>">
 <label for="descripcion">Descripcion:</label>
 <input type="text" id="descripcion" name="descripcion" value="<?php echo $producto['descripcion']; ?>">
 <label for="nombre_imagen">Nombre imagen:</label>
 <input type="text" id="nombre_imagen" name="nombre_imagen" value="<?php echo $producto['nombre_imagen']; ?>">
 <button type="submit">Actualizar</button>
</form>
</body>
</html>
