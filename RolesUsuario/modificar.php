<?php
include('conexion.php');

// Obtén el ID del producto a editar
$id = $_GET['id_producto'];

// Realiza la consulta para obtener los datos del producto
$sql = "SELECT * FROM productos_ceramica WHERE id_producto = ?";
$stmt = mysqli_prepare($db_connection, $sql);
mysqli_stmt_bind_param($stmt, 'i', $id);
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
        $nuevaImagen = $_FILES['imagen'];

        // Valida y sanitiza los datos (aquí puedes agregar tus propias validaciones)
        $nuevoPrecio = mysqli_real_escape_string($db_connection, $nuevoPrecio);

        // Verifica si se ha subido una nueva imagen
        if ($nuevaImagen['error'] === UPLOAD_ERR_OK) {
            // Obtén el nombre y el tipo de la nueva imagen
            $nombreImagen = $nuevaImagen['name'];
            $tipoImagen = $nuevaImagen['type'];

            // Define los tipos de imagen permitidos
            $tiposPermitidos = array('image/jpeg', 'image/png', 'image/gif');

            // Verifica que la imagen sea válida y tenga un tipo permitido
            if (in_array($tipoImagen, $tiposPermitidos)) {
                // Define la ruta donde quieres guardar la imagen
                $rutaDestino = 'img/' . $nombreImagen;

                // Mueve la imagen desde la ruta temporal a la ruta destino
                if (move_uploaded_file($nuevaImagen['tmp_name'], $rutaDestino)) {
                    // La imagen se ha movido correctamente
                    // Actualiza los datos del producto, incluyendo la nueva imagen

                    // Crea la consulta SQL para actualizar los datos del producto
                    $updateQuery = "UPDATE productos_ceramica SET precio = ?, imagen = ? WHERE id_producto = ?";
                    $stmt = mysqli_prepare($db_connection, $updateQuery);
                    mysqli_stmt_bind_param($stmt, 'dsi', $nuevoPrecio, $nombreImagen, $id);

                    // Ejecuta la consulta de actualización
                    if (mysqli_stmt_execute($stmt)) {
                        // Redirige al usuario a otra página o muestra un mensaje de éxito
                        header('Location: mostrar.php');
                        exit();
                    } else {
                        // Muestra un mensaje de error en caso de que la consulta de actualización falle
                        echo 'Error al actualizar el producto: ' . mysqli_error($db_connection);
                    }
                } else {
                    // La imagen no se ha podido mover
                    // Muestra un mensaje de error o redirige al usuario a otra página
                    echo 'La imagen no se ha podido guardar en la carpeta de imágenes';
                    exit();
                }
            } else {
                // La imagen no es válida o tiene un tipo no permitido
                // Muestra un mensaje de error o redirige al usuario a otra página
                echo 'La imagen no es válida o tiene un formato no permitido';
                exit();
            }
        } // No se ha subido una nueva imagen, solo actualiza los otros datos del producto

        // Crea la consulta SQL para actualizar los datos del producto
        $updateQuery = "UPDATE productos_ceramica SET precio = ? WHERE id_producto = ?";
        $stmt = mysqli_prepare($db_connection, $updateQuery);
        mysqli_stmt_bind_param($stmt, 'di', $nuevoPrecio, $id);

        // Ejecuta la consulta de actualización
        if (mysqli_stmt_execute($stmt)) {
            // Redirige al usuario a otra página o muestra un mensaje de éxito
            header('Location: mostrar.php');
            exit();
        } else {
            // Muestra un mensaje de error en caso de que la consulta de actualización falle
            echo 'Error al actualizar el producto: ' . mysqli_error($db_connection);
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
    <title>Modificar producto</title>
</head>

<body>
    <div class="formulario">
        <form method="post" action="modidatos.php?id_producto=<?php echo $id; ?>" enctype="multipart/form-data">
            <label for="Precio">Precio del producto</label>
            <input type="number" name="precio" class="input" value="<?php echo $producto['precio']; ?>">
            <input type="file" name="imagen" accept="image/*">
            <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>">
            <input type="text" name="descripcion" value="<?php echo $producto['descripcion']; ?>">

            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>

</html>