<?php include('Menu.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Ventas de platillos</title>
	<link rel="stylesheet" href="../css/Estilos_tablas.css" type="text/css">
	<link rel="stylesheet" href="../css/Estilo_menu.css" type="text/css">
</head>

<body>
	
		<form action="../Modelo/procesar_venta.php" method="POST">
			<div class="ContBtn">
				<h1>Taco Burger</h1>
				
				<button type="submit" name="enVenta">Finalizar compra</button>
				<button type="submit" name="Cancelar">Cancelar compra</button>
			</div>
			<div class="ContTable">
				<table>
					<tr>
						<th>Platillo</th>
						<th>Costo</th>
						<th>Cantidad</th>
					</tr>
					<?php
					// Conexión a la base de datos
					include('../Modelo/Conexion.php');
					// Consulta a la tabla de platillos
					$query = "SELECT * FROM platillo";
					$resultado = mysqli_query($conexion, $query);
					// Recorremos los resultados y mostramos los platillos en la tabla
					while ($fila = mysqli_fetch_assoc($resultado)) {
						echo "<tr>";
						echo "<td>" . $fila['platillo'] . "</td>";
						echo "<td>" . $fila['costo'] . "</td>";
						echo "<td><input type='number' name='cantidad[" . $fila['id_platillo'] . "]'></td>";
						echo "</tr>";
					}
					?>
				</table>
			</div>
		</form>
</body>

</html>