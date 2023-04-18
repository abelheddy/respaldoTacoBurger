<?php
    include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Ingredientes</title>
</head>

<body>
    <form action="../Controlador/Controlador.php" method="POST">
        <div>
            <h1>Alta De Ingredientes</h1>
        </div>
        <div>
            <p>Ingrediente</p>
            <input type="text" name="ingrediente">
        </div>
        <div>
            <button type="submit" name="RegistIng">Registrar</button>
        </div>
    </form>
</body>

</html>