<?php include('conexion.php'); ?>

<?php
//guardamos las datos en  las variables

    //guardamos las variables
    $nombre = ($_POST['nombre']);
    $email = ($_POST['email']);
    $usuario = ($_POST['usuario']);
    $contrasena = ($_POST['contrasena']);

    //comprobamos que los compos obligatorios no esten vacio
    if (empty($nombre) || empty($email) || empty($usuario) || empty($contrasena)) {
     
    } else {
        //funcion para cifrar la contraseña
        $pass_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);

        //comprabamos si el email  existe o no en la base de datos
        $resultado = $db_connection->query("SELECT * FROM " . $db_table_name . " WHERE email = '" . $email . "'");

        //si esto me devulve que el usuario ya esta registrado
        if ($resultado and $resultado->num_rows > 0) {
            echo "esto usuario ya existe";
        }
        //si el usuario no esta registrado insertamos los valores
        else {
            //insertamos en la base de dato en la tabla con el valor del nombre y apellidos
            $insert_value = 'INSERT INTO `' . $db_name . '`.`' . $db_table_name . '` (`nombre`, `email`, `usuario`, `contrasena`) VALUES ("' . $nombre . '", "' . $email . '", "' . $usuario . '", "' . $pass_cifrada . '")';
            $retry_value = mysqli_query($db_connection, $insert_value);

            if (!$retry_value) {
                die('ERROR: ' . mysqli_error($db_connection));
            } else {
                header("Location: pag1.php");
            }
        }
    }


?>
