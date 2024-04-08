<?php

// Incluir el archivo de conexión a la base de datos
$mysqli = include_once "conexion.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // recopila los valores del formulario
    $id = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $img = $_FILES['imagen'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    // Obtén el nombre y el tipo de la imagen
    $nombreImg = $img['name'];
    $tipoImg = $img['type'];

    // Define los tipos de imagen permitidos
    $tiposPermitidos = array('image/jpeg', 'image/png', 'image/gif');

    // Verifica que la imagen sea válida y tenga un tipo permitido
    if ($img['error'] == 0 && in_array($tipoImg, $tiposPermitidos)) {
        // La imagen es válida y se puede procesar

        // Obtén la ruta temporal de la imagen
        $rutaTemp = $img['tmp_name'];

        // Define la ruta donde quieres guardar la imagen
        $rutaDestino = 'img/' . $nombreImg;

        // Mueve la imagen desde la ruta temporal a la ruta destino
        if (move_uploaded_file($rutaTemp, $rutaDestino)) {
            // La imagen se ha movido correctamente

            // prepara la sentencia SQL para actualizar el producto
            $miUpdate = $mysqli->prepare('UPDATE productos_ceramica SET imagen = ?, precio = ?, descripcion = ? WHERE id_producto = ?');
            $miUpdate->bind_param('sssi', $nombreImg, $precio, $descripcion, $id);

            // ejecuta la sentencia de actualización
            if ($miUpdate->execute()) {
                // redirige a la página de visualización de productos actualizados
                header('Location: pagadmin.php');
                exit;
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
}

// cierra la conexión a la base de datos
$mysqli->close();
?>




