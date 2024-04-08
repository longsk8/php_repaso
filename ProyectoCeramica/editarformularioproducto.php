<?php
session_start();

// Verificar si la sesión está activa
if (!isset($_SESSION['id_usuario'])) {
    // Redirigir al usuario a la página de inicio (index)
    header("Location: index.php");
    exit();
}
include('conexion.php');

// Obtén el ID del producto a editar 
$id = $_GET['id'];


// Realiza la consulta para obtener los datos del producto 
$sql = "SELECT * FROM productos WHERE id = ?";
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
    <link rel="stylesheet" href="CSS/editFormProductos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Actualizar producto</title>
</head>

<body class="p-3 m-0 border-0 bd-example">

    <!-- Formulario de actualización con los datos de producto que se obtine de la base de datos-->
    <form  class="formulario" method="POST" action="bd_modificar.php?id=<?php echo $id; ?>">
    
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Editar el Producto</h2>
                <p>Actualiza los detalles del producto:</p>
                
                <input type="text" name="nombre" class="field" placeholder="Nombre"
                    value="<?php echo $producto['nombre']; ?>">

                <input type="text" name="descripcion" class="field" placeholder="Descripción"
                    value="<?php echo $producto['descripcion']; ?>">

                <input type="number" name="precio" class="field" placeholder="Precio"
                    value="<?php echo $producto['precio']; ?>">

                <input type="text" name="imagen_producto" class="field" placeholder="Nombre de la imagen"
                    value="<?php echo $producto['imagen_producto']; ?>">

                <button type="submit" class="boton">Editar</button>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>