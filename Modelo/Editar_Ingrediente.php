<?php
require("../Modelo/ModeloBurger.php");
include('../Vistas/Menu.php');


$id = $_GET['EDITAR_ID'];
$result = Consultar('ingrediente', "WHERE id_ingrediente = $id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../css/Estilos_Inputs.css" type="text/css">
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
    $update = 'UPDATE ingrediente SET ingrediente=TRIM("' . $ingre . '") WHERE id_Ingrediente =TRIM(' . $id . ');';


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
                <h1>Modificar Ingrediente</h1>
                <div class="form-group">
                    <label class="description" for="producto">Ingrediente: </label>
                    <input id="ingrediente" name="ingrediente" type="text" value="<?php echo $row['ingrediente']; ?>" />
                </div>


                <div class="form-group">
                    <button id="saveForm"type="submit" name="enviar">EDITAR</button>
                    <button class="button2" type="submit" onclick="javascript: form.action='../Vistas/ConsultaIngredientes.php';">REGRESAR</button>
                </div>

            </form>
        </div>


    <?php } ?>

    </div>
    </body>

</html>