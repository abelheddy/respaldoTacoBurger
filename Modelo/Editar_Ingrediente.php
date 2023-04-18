<?php
require("../Modelo/ModeloBurger.php");

$id = $_GET['EDITAR_ID'];
$result = Consultar('ingrediente', "WHERE id_ingrediente = $id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>EDITAR INGREDIENTES</title>
    <!--======================================= ESTILO DE LA TABLA PLOMO ==============================-->


    <script language="javascript" type="text/javascript">
        function windowClose() {
            window.open('', '_parent', '');
            window.close();
        }
    </script>
</head>


<?php
require("../Modelo/Conexion.php");
$status = "";
if (isset($_POST["enviar"])) {
    $ingre = $_POST["ingrediente"];
    $update = 'UPDATE ingrediente SET ingrediente=TRIM("' . $ingre . '") WHERE id_Ingrediente =TRIM(' . $id. ');';


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
            <li id="li_2">
                <label class="description" for="producto">Ingrediente: </label>
                <div>
                    <input id="ingrediente" name="ingrediente" type="text"  value="<?php echo $row['ingrediente']; ?>" />
                </div>
            </li>

            <li class="buttons">
                <input type="hidden" name="form_id" value="18653" />
                <input id="saveForm" class="button_text" type="submit" name="enviar" value="Editar" />
                <input class="button_text" type="submit" onclick="javascript: form.action='../Vistas/ConsultaIngredientes.php';" value="Retornar" />

                </ul>
        </form>

    <?php } ?>

    </div>
    </body>

</html>