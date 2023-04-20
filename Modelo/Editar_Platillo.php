<?php
require("../Modelo/Conexion.php");
require("../Vistas/Menu.php");
$id = $_GET['EDITAR_ID'];
$sele = "SELECT * FROM platillo WHERE id_platillo = $id ";
$result = $conexion->query($sele);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../css/Estilos_Inputs.css" type="text/css">
    <title>EDITAR CLIENTES</title>
    <!--======================================= ESTILO DE LA TABLA PLOMO ==============================-->


    <script language="javascript" type="text/javascript">
        function windowClose() {
            window.open('', '_parent', '');
            window.close();
        }
    </script>
</head>


<?php
$status = "";
if (isset($_POST["enviar"])) {
    $platillo = $_POST["platillo"];
    $costo = $_POST["Costo"];

    $update = 'UPDATE usuario SET

nombre=TRIM("' . $platillo . '"),

nivel=TRIM("' . $costo . '"),

WHERE id_Usuario=TRIM(' . $id . ')';


    if ($conexion->query($update) === TRUE) {
        echo '<script type="text/javascript">';
        echo 'alert("EDICION CORRECTA. YA PUEDE CERRAR ESTA VENTANA ");';
        echo 'window.location = "javascript:history.back(1)";';
        echo '</script>';
    } else {

        echo '<script type="text/javascript">';
        echo 'alert("ERROR REVISAR SI FALTAN DATOS");';
        echo 'window.location = "javascript:history.back(1)";';
        echo '</script>';
    }
} else {

?>

    <body>
        <div class="container">


            <form method="post" action="">
                <div class="form-group">
                    <label>Platillo: </label>
                    <input id="platillo" name="platillo" type="text" value="<?php echo $row['platillo']; ?>" />
                </div>
                </li>

                <div class="form-group">
                    <label>Costo:</label>
                    <input id="costo" name="costo" class="element text medium" type="text" maxlength="255" value="<?php echo $row['costo']; ?>" />
                </div>





                <div class="form-group">
                    <button id="saveForm" type="submit" name="enviar">EDITAR</button>
                    <button class="button2" type="submit" onclick="javascript: form.action='../Vistas/ConsultarPlatillo.php';">REGRESAR</button>
                </div>
            </form>
        </div>
    <?php } ?>

    </div>
    </body>

</html>