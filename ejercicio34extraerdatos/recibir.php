<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descripcion producto</title>
</head>

<body>
    <div class="card">
        <?php
        echo "<h1>Codigo del producto: " . $_GET['id'] . "</h1>";
        echo '<br>';
        echo "<h1>Producto: " . $_GET['producto'] . "</h1>";
        echo '<br>';
        echo "<img src='img/" . $_GET['imagen'] . ".png' width='10%'>";
        echo '<br>';
        echo '<a href="index.php">atras</a>';
        ?>
        <style>
            .card {
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
                padding: 20px;
                max-width: 500px;
                margin: 0 auto;
            }

            .card h1 {
                font-size: 24px;
                margin: 0 0 10px;
            }

            .card img {
                max-width: 100%;
                height: 150%;
                margin: 20px 0;
            }

            .card a {
                display: inline-block;
                background-color: #ccc;
                color: #fff;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
            }

            .card a:hover {
                background-color: #aaa;
            }
        </style>
    </div>
</body>

</html>