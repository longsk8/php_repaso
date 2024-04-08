<?php include('conexion.php')?>
<?php session_start();


//guardamos las datos en  las variables
$usuario = ($_POST['usuario']);
$contrasena = ($_POST['contrasena']);
$pass_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);

//buscar el usuario en la base de datos
$resultado = $db_connection->query("SELECT * FROM " . $db_table_name . " WHERE usuario = '" . $usuario . "'");
if ($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $pass_cifrada = $fila['contrasena'];

  

    //verificar la contraseña
    if (password_verify($contrasena, $pass_cifrada)) {
        //la contraseña es correcta
        header('location: pag1.php');
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
