<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla multiplicar</title>
</head>

<body>
    <h1>
        TABLA DE MULTIPLICAR
    </h1>
    </div>

    <div id="content">

        <table>
            
            <?php
            $num = random_int(1, 10);
            ?>
            <tr>
                <th>Tabla del <?= $num ?> </th> 
            </tr>
            <?php

            for ($i = 1; $i <= 10; $i++) {
                echo "<tr><td> $num x $i =  </td><td style=\"text-align:right\">" . ($i * $num) . "</td>";

            }
            ?>
        </table>
    </div>
    </div>
</body>

</html>