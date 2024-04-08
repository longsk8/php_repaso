<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar array</title>
</head>

<body>
    <h1> Ejercicio hacer un buscador que no encuentre el numero que esta en la array y su posicion</h1>
<?php
//creamos la array
$array = [3, 2, 5, 7, 4, 1];
//variable de numero que tenemos que buscar
$buscarNumero = 5;
$resultado;
for($i = 0; $i < count($array); $i++){
    if($array[$i] == $buscarNumero){
        $resultado = " el numero $buscarNumero esta en la posicion $i ";
    }
}
echo($resultado);
echo '<br>';
print_r($array);





?>

</body>

</html>