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
									<th>
                                       <center>ID VENTA</center> 
                                    </th>
									<th >
										<center>FECHA DE VENTA</center>
									</th>
									<th >
										<center>ID_AUXVENTA</center>
									</th>
									<th>
										<center>MONTO TOTAL</center>
									</th>
                                    <th>
										<center>ID USUARIO</center>
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
								$result = Consultar('venta','order by id_venta');
								while ($crow = mysqli_fetch_assoc($result)) {
								?>
									<tr class='row100'>
										<td style='width:10px'>
											<center> <?php echo $crow['id_venta']; ?> </center>
										</td>
										<td>
											<center><?php echo $crow['fecha']; ?> </center>
										</td>
										<td>
											<center><?php echo $crow['id_auxventa']; ?></center>
										</td>
										<td>
											<center><?php echo $crow['monto_total']; ?></center>
										</td>
                                        <td>
											<center><?php echo $crow['id_Usuario']; ?></center>
										</td>
											
										<td>
											<center><a href="../Modelo/Editar_Venta.php?EDITAR_ID=<?php echo $crow['id_venta']; ?>" class="edit_btn">Editar</a></center>
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