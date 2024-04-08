<?php
//creamos las variables de coneccion
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pruebaphp";
$db_table_name = "usuarios";
$db_table_name2 = "trabajos";

//creo la conneccion 
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//compromabos si entramos en la base de datos
if (!$db_connection) {
    die('no se ha podido conecatar con el servidor');
}



?>