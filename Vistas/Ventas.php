<!DOCTYPE html>
<html>
<head>
	<title>Ventas de platillos</title>
</head>
<body>
	<h1>Lista de platillos</h1>
	<table>
		<tr>
			<th>ID</th>
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
			echo "<td>".$fila['id_platillo']."</td>";
			echo "<td>".$fila['platillo']."</td>";
			echo "<td>".$fila['costo']."</td>";
			echo "<td><input type='number' name='cantidad[".$fila['id_platillo']."]'></td>";
			echo "</tr>";
		}
		?>
	</table>
	<input type="submit" value="Realizar venta">
</body>
</html>