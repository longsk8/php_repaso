<?php session_start();

//agregamos las variables de coneccion
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "administrar_web_java";
$db_table_name = "usuarios";

//hacemos la coneccion 
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//comprovamos si entramos en la base de datos
if (!$db_connection) {
  die('No se ha podido conectar con el servidor');
}


//guardamos las datos en  las variables
$usuario = ($_POST['usuario']);
$password = ($_POST['password']);


//buscar el usuario en la base de datos
$resultado = $db_connection->query("SELECT * FROM " . $db_table_name . " WHERE usuario = '" . $usuario . "'");
if ($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    

  

    //verificar la contraseña
    if ($password) {
        //la contraseña es correcta
        header('location: index.php');
        $_SESSION['usuario'] = $usuario; // Guardamos el nombre de usuario en la sesión
    } else {
        //la contraseña es incorrecta
        echo "Contraseña incorrecta.";
    }
} else {
    //el usuario no está registrado
    echo "El usuario no está registrado.";
}



?>