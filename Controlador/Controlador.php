<?php 
   include '../Modelo/ModeloBurger.php';

    
    if(isset($_POST['EnviarUs'])){
        $Nom = $_REQUEST['nom'];
        $psw = $_REQUEST['psw'];
        $nivel = $_REQUEST['nvl'];
        $datos = "'".$Nom."','".$psw."','".$nivel."'";
        Alta('usuario',$datos);

        echo "<script type='text/javascript'>
        window.location.href = '../Vistas/Agregar_Usuario.php';
        </script>";
    }

    if(isset($_POST['RegistIng'])){
        $Ingre = $_REQUEST['ingrediente'];
        $datos = "'".$Ingre."'";
        Alta('ingrediente',$datos);
        echo "<script type='text/javascript'>
        window.location.href = '../Vistas/Agregar_Ingrediente.php';
        </script>";
    }

    if(isset($_POST['RegistPlatillo'])){
        $nomPlatillo = $_REQUEST['nomPlatillo'];
        $precio = $_REQUEST['precio'];
        $datos = "'".$nomPlatillo."',".$precio."";

        Alta('platillo',$datos);
        echo "<script type='text/javascript'>
        window.location.href = '../Vistas/Agregar_Platillo.php';
        alert('Platillo registrado');
        </script>";
    }
?>