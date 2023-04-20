<?php
	include('Menu.php');
?>
<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href="../css/Estilos_tablas.css" type="text/css">
</head>
<center>

	<body>

		<div class="contenido">
			<div class="container">
				<div class='wrap-table100'>
					<div class='table100 ver1 m-b-110'>
						<table data-vertable='ver1'>
							<br>
							<h2>TABLA USUARIOS</h2>
							<br>
							<thead>
								<tr class='row100 head'>
									<th>ID</th>
									<th >
										<center>NOMBRE</center>
									</th>
									<th >
										<center>PASSWORD</center>
									</th>
									<th>
										<center>NIVEL</center>
									</th>
									<th>
										<center>EDITAR</center>
									</th>
								</tr>
							</thead>
							<tbody>

								<?php
								require('../Modelo/Conexion.php');
								require('../Modelo/ModeloBurger.php');
								$result = Consultar('usuario','order by id_Usuario');
								while ($crow = mysqli_fetch_assoc($result)) {
								?>
									<tr class='row100'>
										<td style='width:10px'>
											<center> <?php echo $crow['id_Usuario']; ?> </center>
										</td>
										<td>
											<center><?php echo $crow['nombre']; ?> </center>
										</td>
										<td>
											<center><?php echo $crow['password']; ?></center>
										</td>
										<td>
											<center><?php echo $crow['nivel']; ?></center>
										</td>
											
										<td>
											<center><a href="../Modelo/Editar_Usuario.php?EDITAR_ID=<?php echo $crow['id_Usuario']; ?>" class="edit_btn">Editar</a></center>
										</td>
										
										</form>
									</tr>
								<?php
								}
								?>

							</tbody>
						</table>

					</div>
				</div>
				<div>
				</div>
			</div>
		</div>
	</body>
</center>

</html>