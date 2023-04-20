<?php
require("../Modelo/Conexion.php");
require("../Vistas/Menu.php");
$id = $_GET['EDITAR_ID'];
$sele = "SELECT * FROM usuario WHERE id_Usuario = $id ";
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
	$nombre = $_POST["nombre"];
	$passw = $_POST["password"];
	$nivel = $_POST["nivel"];


	$update = 'UPDATE usuario SET

nombre=TRIM("' . $nombre . '"),

nivel=TRIM("' . $nivel . '"),
      
password=TRIM("' . $passw . '")
      
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

				<label>Nombre del usuario:</label>
				<div class="form-group">
					<input id="nombre" name="nombre" class="element text medium" type="text" maxlength="255" value="<?php echo $row['nombre']; ?>" />
				</div>

				<div class="form-group">
					<label>Password: </label>
					<input id="password" name="password" type="text" value="<?php echo $row['password']; ?>" />
				</div>


				<div class="form-group">
					<label>Nivel:</label>
					<input id="nivel" name="nivel" class="element text medium" type="text" maxlength="255" value="<?php echo $row['nivel']; ?>" />
				</div>

				<div class="form-group">
					<button id="saveForm" type="submit" name="enviar">EDITAR</button>
					<button class="button2" type="submit" onclick="javascript: form.action='../Vistas/ConsultaUsuarios.php';">REGRESAR</button>
				</div>
			</form>
		</div>

	<?php } ?>

	</div>
	</body>

</html>