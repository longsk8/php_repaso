<?php
session_start();
//crear la variables de coneccion
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "ceramica";
$db_table_name = "usuarios";


//crear la coneccion a la base de datos
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//comprabar si entro en la base de datos
if (!$db_connection) {
    die('no se ha podido conectar con el servidor');
} else {

    //guardar las variables 
    $nombre = mysqli_real_escape_string($db_connection, $_POST['nombre']);
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $password = mysqli_real_escape_string($db_connection, $_POST['password']);

    //comprobamos que los campos obligatorios no estan vacios
    if (empty($nombre) || empty($email) || empty($password)) {
        //creo una alerta para que el usuario no deje ningun campo vacio
        echo '<script>alert("Por favor complete todos los campos obligatorios"); window.location.href = "registro.php";</script>';
    } else {
        //funcion para cifrar la contraseña con password_hash
        $pass_cifrada = password_hash($password, PASSWORD_DEFAULT);

        //comprobar si el email existe en la base de datos
        $stmt = $db_connection->prepare("SELECT * FROM " . $db_table_name . " WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        //si esto me devulve que el usuario ya esta registrado
        if ($resultado and $resultado->num_rows > 0) {
            echo '<script>alert("El email ya está registrado"); window.location.href = "registro.php";</script>';

        } //si el usuario no esta registrado insertamos los valores
        else {
            //insertamos los valores en la base de dato en la tabla con el valor del nombre y apellidos
            $stmt = $db_connection->prepare("INSERT INTO " . $db_table_name . " (nombre , email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $email, $pass_cifrada);
            $stmt->execute();

            if (mysqli_affected_rows($db_connection)) {
                header("Location: formularioSesion.php");
                exit();
            } else {
                die('ERROR: ' . mysqli_error($db_connection));
            }
        }
    }
}
//mirar bien los roles de usuario ----------->
?>