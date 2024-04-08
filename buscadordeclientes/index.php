<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de personal cualificado</title>
</head>
<body>
    <div class="section1">
        <img src="https://th.bing.com/th/id/R.431937a1875a16932f87bff668d02d45?rik=24RV4z9Iefs3XA&pid=ImgRaw&r=0" alt="deporte">
        <form action="buscarPesonal.php" method="post">
            <!-- input para buscar las persas cualificadas -->
            <h1>Buscar personal cualificado</h1>
            <label for="categoria">
                <input type="text" id="categoria" class="categoria" placeholder="Buscar especialista">
            </label>
            <label for="localidad">
                <input type="text" id="localidad" class="localidad" placeholder="Localidad">
            </label>
            <button type="submit">Buscar</button>
        </form>
    </div>
</body>
</html>