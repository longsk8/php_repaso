<?php
 function calculaVolumenCilindro($altura,$radio){
    $calcularVolumen = 3.1416 * $radio * $radio * $altura;
    return $calcularVolumen;
 }
$altura = $_POST['altura'];
$radio = $_POST['radio'];

//llamamos al funcion
$volumenCilindro = calculaVolumenCilindro($altura, $radio);
echo ("EL volumen del cilindro es $volumenCilindro ");
?>
<a href="index.php">atras</a>