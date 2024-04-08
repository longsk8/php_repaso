<?php
//creamos las variables de coneccion
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "permisos_usuarios";
$db_table_name = "usuarios";

//creo la conneccion 
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//compromabos si entramos en la base de datos
if (!$db_connection) {
    die('no se ha podido conecatar con el servidor');
} else {

    //guardamos las variables
    $nombre = ($_POST['nombre']);
    $correo = ($_POST['email']);
    $password = ($_POST['password']);

    //comprobamos que los compos obligatorios no esten vacio
    if (empty($nombre) || empty($correo) ||  empty($password)) {
        //ALERTA PARA QUE EL USUARIO NO DEJE NINGUN CAMPO VACIO
        echo '<script>alert("Por favor complete todos los campos obligatorios"); window.location.href = "formulario.php";</script>';
    } else {
        //funcion para cifrar la contraseña
        $pass_cifrada = password_hash($password, PASSWORD_DEFAULT);

        //comprabamos si el email  existe o no en la base de datos
        $resultado = $db_connection->query("SELECT * FROM " . $db_table_name . " WHERE correo_electronico = '" . $correo . "'");

        //si esto me devulve que el usuario ya esta registrado
        if ($resultado and $resultado->num_rows > 0) {
            echo "esto usuario ya existe";
            
        }
        //si el usuario no esta registrado insertamos los valores
        else {
            //insertamos en la base de dato en la tabla con el valor del nombre y apellidos
            $insert_value = 'INSERT INTO `' . $db_name . '`.`' . $db_table_name . '` ( `nombre_usuario` , `correo_electronico` , `contrasena`) VALUES ("' . $nombre . '" ,"' . $correo . '", "' . $pass_cifrada . '")';
            $retry_value = mysqli_query($db_connection, $insert_value);

            if (!$retry_value) {
                die('ERROR: ' . $mysqli_error());
            } else {
                header('Location:iniciarsesion.php');
            }
        }
    }
}





?>