<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de empleado</title>
</head>

<body>
    <h3>Diseña un aplicacion web que calcule el sueldo del empleado</h3>
    <?php
    function calcularSueldo($horasTrabajo,$sueldoPorHora){
        $sueldoTotal = $horasTrabajo * $sueldoPorHora;
        return $sueldoTotal;
    }
    if(isset($_POST["enviar"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $horasTrabajo = $_POST["sueldo_hora"];
        $sueldoPorHora = $_POST["total_hora"];
        //llamamos ala funcion
        $sueldoTotal = calcularSueldo($horasTrabajo ,$sueldoPorHora);
        echo "el trabajador $nombre cobro $sueldoTotal";
    }else{
    ?>
    <form action="index.php" method="post">
        <label for="nombre">
            <input type="text" name="nombre" placeholder="nombre empleado">
        </label>
        <label for="apellido">
            <input type="text" name="apellido" placeholder="apellido empleado">
        </label>
        <label for="horas-trabajada">
            <input type="text" name="sueldo_hora" placeholder="total de horas">
        </label>
        <label for="total-trabajada">
            <input type="text" name="total_hora" placeholder="saldo por hora">
        </label>
        <button type="submit" name="enviar">enviar</button>
        <button type="reset" name="borrar">reset</button>
    </form>
<?php
}
?>
</body>

</html>