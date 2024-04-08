<?php 
//eliminar productos de la base de datos
//incluir la conexion
include('conexion.php');

//vereificar si se recibe el id del producto para poder eliminar
if(!isset($_GET['id'])){
    die('no se pudo obetener el ID DEL PRODUCTO');
}

//obtengo el ide para eliminar el producto
$id = $_GET['id'];

//crear la consulta para eliminar el producto de la base de datos
$deleteQuery = "DELETE FROM productos WHERE id = ?";
$stmt = $db_connection->prepare($deleteQuery);
$stmt->bind_param('i',$id);
$stmt->execute();

//si se logra la accion rederigo al usuario a otra pagina
header('location: editarproductoadmin.php');
exit();
?>