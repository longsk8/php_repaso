<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?php
    if (!(isset($_SESSION['usuario']))) {
    ?>
<body>
    <form  class="group"  action="iniciar.php" method="POST">
        <h2 id="session"><em><span class="span1">Iniciar session</span></em></h2>
        <input type="text" placeholder="usuario" name="usuario"/>
        <input type="password" placeholder="contraseña" name="password">
        <center><input class="form-btn"  name = "submit" type="submit" value="Entrar"/></center>
       
    </form>
    <?php
    }else{
        header("Location: loginOK.php");
        exit;
        
    }
    ?>
   
</body>
</html>