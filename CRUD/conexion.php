<?php
// primero variables de conexion
$db_host = "localhost";
$db_user = "root";
$db_pass="";
$db_name = "crud";//nombre de la base de datos
$db_table_name="productos"; //nombre de la tabla

//creo una varibale de coneccion y  le paso todos los parametro
$db_connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

//comprobar con un if si se conecto
if($db_connection){
    echo("");
}else{
    echo("no se puedo ejecutar la coneccion");
}

?>