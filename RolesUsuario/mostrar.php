<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilomostrar.css">
    <title>Descripcion producto</title>
</head>

<body>
    <div class="card">
        <?php
        echo "<img src='img/" . $_GET['imagen'] . ".jpg' width='50%'>";
        echo '<br>';
        echo "<h1>Nombre del producto: " . $_GET['nombre'] . "</h1>";
        echo '<br>';
        echo "<h1>Precio: " . $_GET['precio'] . "</h1>";
        echo '<br>';
        echo "<h1>Descripcion: " . $_GET['descripcion'] . "</h1>";
        echo '<a href="pagadmin.php">atras</a>';
        ?>
      
    </div>
</body>

</html>