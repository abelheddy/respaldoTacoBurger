<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Usuarios</title>
</head>
<body>
    <form method="POST" action="../Controlador/Controlador.php">
        <div>
        <center><h1>Alta Usuarios</h1></center>
        </div>

        <div>
            <p>Nombre:</p>
            <input type="text" name="nom">
            <p>Contraseña:</p>
            <input type="password" name="psw">
            <p>Nivel:</p>
            <input type="text" name="nvl">
        </div>

        <div>
            <button type="submit" name="EnviarUs">Registrar</button>
        </div>
    </form>
    

</body>
</html>