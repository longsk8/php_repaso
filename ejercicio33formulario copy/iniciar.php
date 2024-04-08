<?php session_start();
//clase formulario base de datos 27 octubre https://www.youtube.com/watch?v=SQm5QdV36Yw
//agregamos las variables de coneccion
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "netcampus";
$db_table_name = "usuariosregistrados";

//hacemos la coneccion 
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//comprovamos si entramos en la base de datos
if (!$db_connection) {
  die('No se ha podido conectar con el servidor');
}


//guardamos las datos en  las variables
$usuario = ($_POST['usuario']);
$password = ($_POST['password']);
$pass_cifrada = password_hash($password, PASSWORD_DEFAULT);

//buscar el usuario en la base de datos
$resultado = $db_connection->query("SELECT * FROM " . $db_table_name . " WHERE usuario = '" . $usuario . "'");
if ($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $pass_cifrada = $fila['password'];

  

    //verificar la contraseña
    if (password_verify($password, $pass_cifrada)) {
        //la contraseña es correcta
        header('location: loginOk.php');
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