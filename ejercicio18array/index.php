<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio array</title>
</head>
<body>
<h1>imprimi por pantalla cual es el numero de la array mas grande y en que posicion se encuentra y el mas pequeño</h1>  
<?php 

//creamos la varibales con los elemento en la array
$array = [3, 2, 5, 6, 7, ];
//max es el valor de la array 0 seria por de empieza la array
$max = $array[0];
$min = $array[0];

//posicion de la array
$posicion = 0;

for ($i=1; $i<count($array); $i++) { 
    if ($array[$i]>$max) {
        $max = $array[$i];
        $posicion = $i;
    }
}
echo ("el numero de la array mas grande es $max");
echo '<br>';
echo (" y esta en la posicion $posicion");
echo '<br>';

for ($i=1; $i<count($array); $i++) { 
    if ($array[$i]<$min) {
        $min = $array[$i];
        $posicion = $i;
    }
}
echo ("el numero de la array mas pequeño es $min");
echo '<br>';
echo (" y esta en la posicion $posicion");


?>
</body>
</html>