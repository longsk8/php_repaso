<?php session_start();
//clase formulario base de datos 27 octubre https://www.youtube.com/watch?v=SQm5QdV36Yw
//agregamos las variables de coneccion
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "permisos_usuarios";
$db_table_name = "usuarios";
$db_table_name2 = "roles";
$db_table_name3= "usuario_roles";

//hacemos la coneccion 
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//comprovamos si entramos en la base de datos
if (!$db_connection) {
    die('No se ha podido conectar con el servidor');
}

//guardamos las datos en  las variables
$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];

// buscar el usuario en la base de datos
$resultado = $db_connection->query("SELECT * FROM " . $db_table_name . " WHERE nombre_usuario = '" . $nombre_usuario . "'");

if ($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $id_usuario = $fila['id'];
    $pass_cifrada = $fila['contrasena'];

    // buscar si el usuario tiene el rol de administrador en la tabla usuario_roles(consulta en la tabla de usuario_roles)
    $query_roles = "SELECT * FROM usuario_roles WHERE id_usuario = $id_usuario AND id_rol = 1"; // asumiendo que el id del rol de administrador es 1
    $resultado_roles = $db_connection->query($query_roles);

    // verificar la contraseña y si es un administrador
    if (password_verify($contrasena, $pass_cifrada) && $resultado_roles && $resultado_roles->num_rows > 0) {
        // la contraseña es correcta y el usuario es un administrador
        header('location: pagadmin.php');
        $_SESSION['nombre_usuario'] = $nombre_usuario; // Guardamos el nombre de usuario en la sesión
    } else {
        // la contraseña es incorrecta o el usuario no tiene permisos de administrador
        header('location: pagusuario.php');
        echo "Contraseña incorrecta o no tiene permisos de administrador.";
    }
} else {
    // el usuario no está registrado
    header('location: pagvisitante.php');
    echo "El usuario no está registrado.";
}
?>