<?php session_start();

//agregamos las variables de coneccion
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "administrar_web_java";
$db_table_name = "usuarios";
$db_table_name2 = "profesion";
$db_table_name3 = "transacciones";
$db_table_name4 = "administradores";

//hacemos la coneccion 
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//comprovamos si entramos en la base de datos
if (!$db_connection) {
  die('No se ha podido conectar con el servidor');
}