<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora 2</title>
</head>
<body>
<h1 class="calcu">Calculadora</h1>
    <?php
    //hacemos las funciones

    function suma($num,$num2){
       return $num + $num2;
    }

    function restar($num,$num2){
        return $num - $num2;
     }

     function multiplicar($num,$num2){
        return $num * $num2;
     }

     function dividir($num,$num2){
        if($num2 != 0){
            return $num / $num2;
         }else
            return "NUMERO INFINITO";
         
        
     }
    //vereficamos los daton cuando envie los datos ( boton enviar)
    if(isset($_POST['enviar'])){
        //creamos las variable
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operador = $_POST['operador'];

        //hacemos un switch de todas las opciones de la calculadora 
        switch($operador){
            case'+':
                $resultado = suma($numero1,$numero2);
                break;
            case'-':
                $resultado = restar($numero1,$numero2);
                break;
            case'*':
                $resultado = multiplicar($numero1,$numero2);
                break;
            case'/':
                $resultado = dividir($numero1,$numero2);
                break;
        }
        echo('resultado es '.$resultado);
    }else{
    ?>
    <form class="formulario" action="index.php" method="post" name="form" id="form">
        <input class="input-numero" type="numero" name ="numero1"/>
        <select class="operador" name="operador">
            <option value = "+">+</option>
            <option value = "-">-</option>
            <option value = "*">*</option>
            <option value = "/">/</option>
        </select>
        <input class="input-numero" type = "numero" name = "numero2"/>
        <input class="form-boton" type = "submit" values = "enviar" name="enviar"/>
    </form>
    <?php
    }
  
    ?>
    
    
</body>
</html>