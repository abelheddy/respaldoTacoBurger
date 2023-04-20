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
    <title>Alta Usuarios</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="../Controlador/Controlador.php">
            <h1>Alta Usuarios</h1>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nom" required>
            </div>

            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="psw" required>
            </div>

            <div class="form-group">
                <label for="nivel">Nivel:</label>
                <input type="text" id="nivel" name="nvl" required>
            </div>

            <div class="form-group">
                <button type="submit" name="EnviarUs">Registrar</button>
            </div>
        </form>
    </div>

</body>
</html>