<?php
    
    function Alta($tabla,$datos){
        include 'Conexion.php';
        $sql = "INSERT INTO ".$tabla." VALUES ($datos);";
        $result = mysqli_query($conexion,$sql);

        if(!$result){
            echo '<script type="text/javascript">
            alert("Uppss ah ocurrido un error");
            </script>';
        } else{
            return $result;
        }
    }

    function Eliminar($tabla,$condicion){
        include 'Conexion.php';
        $sql ="DELETE FROM ".$tabla." WHERE ".$condicion." ;";
        $result = mysqli_query($conexion,$sql);

        if(!$result){
            echo '<script type="text/javascript">
            alert("Uppss ah ocurrido un error");
            </script>';
        }
        
    }

    function Consultar($tabla,$condicion){
        include 'Conexion.php';
        $sql = "SELECT * FROM ".$tabla." ".$condicion.";";
        $result = mysqli_query($conexion,$sql);
        if(!$result){
            echo '<script type="text/javascript">
            alert("Uppss ah ocurrido un error\ncon tu consulta");
            </script>';
        }else{
            return $result;
        }
    }
