<?php
require("../Modelo/Conexion.php");
require("../Vistas/Menu.php");
$id = $_GET['EDITAR_ID'];
$sele = "SELECT * FROM venta WHERE id_venta = $id ";
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
    $fecha = $_POST["fecha"];
    $monto = $_POST["monto_total"];
 


    $update = 'UPDATE venta (fecha,monto_total) SET

fecha=TRIM("' . $fecha . '"),

monto_total=TRIM("' . $monto . '"),
      
WHERE id_venta=TRIM(' . $id . ')';


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

                <label>Fecha de venta:</label>
                <div class="form-group">
                    <input id="fecha" name="fecha" class="element text medium" type="text" maxlength="255" value="<?php echo $row['fecha']; ?>" />
                </div>

                <div class="form-group">
                    <label>Monto Total: </label>
                    <input id="monto" name="monto" type="text" value="<?php echo $row['monto_total']; ?>" />
                </div>

                <div class="form-group">
                    <button id="saveForm" type="submit" name="enviar">EDITAR</button>
                    <button class="button2" type="submit" onclick="javascript: form.action='../Vistas/ConsultarVenta.php';">REGRESAR</button>
                </div>
            </form>
        </div>

    <?php } ?>

    </div>
    </body>

</html>