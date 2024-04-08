<?php

//https://www.youtube.com/watch?v=FiAQ3kGBXgY clase de coneccion a base de datos 27 octubre.
//primero de todo agregamos las varibles de coneccion
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "netcampus";
$db_table_name = "usuario";

//hacemo la coneccion
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//comprovamos si entramos en la base de datos
if(!$db_connection){
    die('No se ha podido conectar con el servidor');
}else{
    echo "conneccion extitosa";
}

//nos guardamos las variables
$nombres = utf8_decode($_POST['nombres']);
$apellidos = utf8_decode($_POST["apellidos"]);

//comprovamos si estos resultados existen o en la base de datos
$resultado = $db_connection -> query("SELECT * FROM ".$db_table_name." WHERE nombres = '".$nombres."'");

//si esto me devulve que el usuario ya esta registrado
if($resultado AND $resultado->num_rows>0){
    echo "esto usuario ya existe";
    header("Location:index.php");
}
//si no esta registrado
else {
    //insertamos en la base de dato en la tabla con el valor del nombre y apellidos
    $insert_value = 'INSERT INTO `' . $db_name . '`.`' . $db_table_name . '` ( `nombres` , `apellidos`) VALUES ("' . $nombres . '" , "' . $apellidos . '")';
    $retry_value = mysqli_query($db_connection, $insert_value);

    if(!$retry_value){
        die('ERROR: '.$mysqli_error());
    }
    else{
        header('Location:index.php');
    }
}

?>