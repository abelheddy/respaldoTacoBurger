<?php
        $servername = "localhost";
        $database = "bdtacoburger";
        $username = "root";
        $password = "";
        $conexion = mysqli_connect($servername, $username, $password, $database);

        if (!$conexion) {
              die("Conexión falló revisa si tienes algun error" . mysqli_connect_error());     
              echo "2";
             return "Conexión falló";
        }
?>