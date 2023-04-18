<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="formulario" action="../Controlador/Controlador.php" method="POST">
        <div>
            <h1>Alta Platillos</h1>
        </div>

        <div>
            <p>Nombre platillo:</p>
            <input type="text" name="nomPlatillo">
            <p>Precio:</p>
            <input type="text" name="precio">
        </div>

        <div>
            <button type="submit" name="RegistPlatillo">Registrar</button>
        </div>
    </form>
</body>
</html>