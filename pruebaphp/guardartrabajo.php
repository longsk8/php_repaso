<?php
include('conexion.php');

//guardamos las variables
$codigo = ($_POST['codigo']);
$tipotrabajo = ($_POST['tipo']);
$valor = ($_POST['valor']);


//comprabar si ya tenemos registrada la profesion del usuario si esta no puede ingresarla
$resultado = $db_connection->query("SELECT * FROM " . $db_table_name2 . " WHERE tipo = '" . $tipotrabajo . "'");

//si esto me devulve que el usuario ya esta registrado
if ($resultado and $resultado->num_rows > 0) {
    echo "esta profesion ya existe";
    header("formservicios.php");
} //si el usuario no registro la profesion  insertamos los valores
else {
    //insertamos en la base de dato en la tabla con el valor del profesion
    $insert_value = 'INSERT INTO `' . $db_name . '`.`' . $db_table_name2 . '` (`codigo` , `tipo` , `valor`) VALUES ("' . $codigo . '","' . $tipotrabajo . '" , "' . $valor . '")';
    $retry_value = mysqli_query($db_connection, $insert_value);

    if (!$retry_value) {
        die('Error en la consulta: ' . mysqli_error($db_connection));
    } else {
        header('Location:registrartrabajo.php');
    }
}