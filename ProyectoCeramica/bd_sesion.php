<?php session_start();
include('conexion.php');

// Guardamos los datos en las variables
$email = $_POST['email'];
$password = $_POST['password'];

// Buscar el usuario en la base de datos , erro de void to sring pero no me genero ningun problema pienso que es xk administrador esta guardo con string
$stmt = $db_connection->prepare("SELECT * FROM $db_table_name WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $pass_cifrada = $fila['password'];
    $id_usuario = $fila['id_usuario'];

    // Buscar si el usuario tiene el rol de administrador en la tabla usuarios_roles
    $query_roles = "SELECT * FROM $db_table_name4 WHERE id_usuario = $id_usuario AND id_rol = 1"; // Asumiendo que el id del rol de administrador es 1
    $resultado_roles = $db_connection->query($query_roles);

    // Verificar la contraseña
    if (password_verify($password, $pass_cifrada)) {
        // La contraseña es correcta
    
        if ($resultado_roles && $resultado_roles->num_rows > 0) {
            // Usuario con rol de administrador
            header('Location: editarproductoadmin.php');
        } else {
            // Usuario normal
            header('Location: productos.php');
        }
        $_SESSION['id_usuario'] = $id_usuario; // Guardamos el email del usuario en la sesión
        exit();
    } else {
        // La contraseña es incorrecta
        echo "<script>
        alert('Contraseña incorrecta.');
        window.location.href = 'formularioSesion.php';
        </script>";
       
    }
} else {

    // Redirigir al usuario a la página de registro (registro.php)
    header("Location: registro.php");
    exit();
}


?>
