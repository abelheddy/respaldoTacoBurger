<?php
include('Menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Estilos_Inputs.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form class="formulario" action="../Controlador/Controlador.php" method="POST">

            <h1>Alta Platillos</h1>


            <div class="form-group">
                <label>Nombre platillo:</label>
                <input type="text" name="nomPlatillo">
            </div>
            <div class="form-group">
                <label>Precio:</label>
                <input type="text" name="precio">
            </div>

            <div>
                <button type="submit" name="RegistPlatillo">Registrar</button>
            </div>
    </div>
    </form>
</body>

</html>