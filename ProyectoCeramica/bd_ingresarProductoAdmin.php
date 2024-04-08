<?php
//llamo al archivo de conexion
include('conexion.php');

//creo y guardo las variables
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$nombreImagen = $_POST['imagen_producto'];

// comprobar que los datos del formulario no estén vacíos
if (empty($nombre) || empty($descripcion) || empty($precio) || empty($nombreImagen)) {
    //le envío una alerta para que el usuario no deje ningún campo vacío
    echo '<script>alert("Completar todos los campos obligatorios"); window.location.href = "registrarProductoAdmin.php";</script>';
} else {
    //comprobar que el nombre de la imagen no se repita
    $resultado = $db_connection->query("SELECT * FROM " . $db_table_name2 . " WHERE imagen_producto ='" . $nombreImagen . "'");

    //verificar los productos que tengo registrados en la base de datos
    if ($resultado && $resultado->num_rows > 0) {
        echo "<script>
        alert('El nombre de la imagen no debe repetirse.');
        window.location.href = 'registrarProductoAdmin.php';
        </script>";
    } else {

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

        // Insertar el registro en la base de datos con el nombre de imagen elegido
        $insert_value = 'INSERT INTO `' . $db_name . '`.`' . $db_table_name2 . '` (`nombre`, `descripcion`, `precio`, `imagen_producto`) VALUES ("' . $nombre . '", "' . $descripcion . '", "' . $precio . '", "' . $nombreImagen . '")';

        $retry_value = mysqli_query($db_connection, $insert_value);

        if (!$retry_value) {
            die('ERROR: ' . mysqli_error($db_connection));
        } else {
            header('Location: editarproductoadmin.php');
            echo "<script>
            alert('Producto Agregado.');
            window.location.href = 'editarproductoadmin.php';
            </script>";
        }
    }
}
?>