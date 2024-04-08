<?php
//llamo a la conexion
include('conexion.php');

//creamos y guardamos la variables
$nombre = ($_POST['nombre']);
$descripcion = ($_POST['descripcion']);
$nombre_imagen = ($_POST['nombre_imagen']);

//comprabar que los datos no esten vacios 
if (empty($nombre) || empty($descripcion) || empty($nombre_imagen)) {
    //ALERTA PARA QUE EL USUARIO NO DEJE NINGUN CAMPO VACIO
    echo '<script>alert("Por favor complete todos los campos obligatorios"); window.location.href = "formulario.php";</script>';
}else{
    //comprabamos que el nombre de la imagen nose repite
    $resultado = $db_connection->query("SELECT * FROM " . $db_table_name . " WHERE nombre_imagen='" . $nombre_imagen . "'");
    
    //esto me devuelve que el producto esta registrado
    if($resultado and $resultado->num_rows >0){
        echo "cambia en nomnbre de la imagen que quieres ingresar";
        header("formularioRegistro.php");
    }else {
        //si el nombre de la imagen no coicide con la que tenemso en base de datos se puede ingresa
        $insert_value = 'INSERT INTO `' . $db_name . '`.`' . $db_table_name . '` (`nombre`, `descripcion`, `nombre_imagen`) VALUES ("' . $nombre . '", "' . $descripcion . '", "' . $nombre_imagen . '")';

        $retry_value = mysqli_query($db_connection, $insert_value);
        if (!$retry_value) {
            die('ERROR: ' . mysqli_error($db_connection));
        } else {
            header('Location:formularioRegistro.php');
        }
    
    }
}
?>