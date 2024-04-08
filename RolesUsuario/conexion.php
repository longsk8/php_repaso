<?php
//creamos las variables de coneccion
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "permisos_usuarios";
$db_table_name = "usuarios";
$db_table_name2 = "roles";
$db_table_name3 = "usuario_roles";
$db_table_name4 = "productos_ceramica";

//creo la conneccion 
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//compromabos si se conecto a la base de datos

// Verifica si hay algún error en la conexión
if (mysqli_connect_errno()) {
    // Muestra el mensaje de error
    echo 'Error al conectar a la base de datos: ' . mysqli_connect_error();
    // Termina la ejecución del script
    exit();
}

// Devuelve el objeto de conexión
return $db_connection;



?>