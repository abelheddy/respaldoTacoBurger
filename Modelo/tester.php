<!DOCTYPE html>
<html lang="en">

<head>

</head>
<body>
    <form action="../Controlador/Controlador.php" method="POST">
        <h1>Insertar</h1>
        <p>Nombre</p>
        <input type="text" name="Nombre">
        <p>Contraseña</p>
        <input type="text" name="psw">
        <p>Nivel</p>
        <input type ="text" name="nvl">
        <br>
        <button type="submit" name="EnviarUs">Registrar</button>

        <h1>Eliminar</h1>
        <p>Id</p>
        <input type="text" name="idUs">
        <button type="submit" name="EviarEl">Enviar</button>

        <h1>Modificar</h1>
        <p>Que id quieres modificar</p>
        <input type="text" name="idM">
        <button  name="Modf">modificar</button>
        <p>Nombre</p>
        <input type="text" name="NomM">
        <p>Contraseña</p>
        <input type="text" name="pswM">
        <p>Nivel</p>
        <input type="text" name="nvlM">
        <button type="submit" name="Modf">modificar</button>


        <h1>Consultar</h1>
        <a href="../Vistas/ConsultasUsuario.php">consultar</a>
    </form>
</body>
</html>