<?php
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
} else {

    //guardamos las variables
    $nombres = ($_POST['nombres']);
    $apellidos = ($_POST['apellidos']);
    $email = ($_POST["email"]);
    $usuario = ($_POST["usuario"]);
    $password = ($_POST["password"]);

    // comprobar que los campos obligatorios no están vacíos
    if (empty($nombres) || empty($apellidos) || empty($email) || empty($usuario) || empty($password)) {
        //ALERTA PARA QUE EL USUARIO NO DEJE NINGUN CAMPO VACIO
        echo '<script>alert("Por favor complete todos los campos obligatorios"); window.location.href = "index.php";</script>';
    } else {
        //funcion para cifrar la contraseña
        $pass_cifrada = password_hash($password, PASSWORD_DEFAULT);



        //comprabamos si eso datos existe o no en la base de datos
        $resultado = $db_connection->query("SELECT * FROM " . $db_table_name . " WHERE email = '" . $email . "'");

        //si esto me devulve que el usuario ya esta registrado
        if ($resultado and $resultado->num_rows > 0) {
            echo "esto usuario ya existe";
            header("Location:index.php");
        }
        //si el usuario no esta registrado insertamos los valores
        else {
            //insertamos en la base de dato en la tabla con el valor del nombre y apellidos
            $insert_value = 'INSERT INTO `' . $db_name . '`.`' . $db_table_name . '` ( `nombres` , `apellidos`, `email`, `usuario`, `password`) VALUES ("' . $nombres . '" , "' . $apellidos . '", "' . $email . '", "' . $usuario . '", "' . $pass_cifrada . '")';
            $retry_value = mysqli_query($db_connection, $insert_value);

            if (!$retry_value) {
                die('ERROR: ' . $mysqli_error());
            } else {
                header('Location:index.php');
            }
        }
    }
}
?>