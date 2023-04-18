<?php
require("../Modelo/Conexion.php");
$id = $_GET['EDITAR_ID'];
$sele = "SELECT * FROM platillo WHERE id_platillo = $id ";
$result = $conexion->query($sele);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

    <body id="main_body">
        <form method="post" action="">
           
            <li id="li_3">
                <label>Platillo: </label>
                <div>
                    <input id="platillo" name="platillo" type="text" value="<?php echo $row['platillo']; ?>" />
                </div>
            </li>

            <li id="li_4">
                <label>Costo:</label>
                <div>
                    <input id="costo" name="costo" class="element text medium" type="text" maxlength="255" value="<?php echo $row['costo']; ?>" />
                </div>
            </li>

            <li class="buttons">
                <input type="hidden" name="form_id" value="18653" />
                <input id="saveForm" class="button_text" type="submit" name="enviar" value="Editar" />
                <input class="button_text" type="submit" onclick="javascript: form.action='../Vistas/ConsultaUsuarios.php'" value="Retornar" />

                </ul>
        </form>

    <?php } ?>

    </div>
    </body>

</html>