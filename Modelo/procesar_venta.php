<?php
// Conexión a la base de datos
include('../Modelo/Conexion.php');
include('../Modelo/ModeloBurger.php');
// Verificar si se ha enviado el formulario


if (isset($_POST['enVenta'])) {
    // Obtener la fecha y hora actual
    $fecha = date("Y-m-d");
    // Inicializar el monto total de la venta
    $monto_total = 0;

    // Recorrer los datos del formulario
    foreach ($_POST['cantidad'] as $id_platillo => $cantidad) {
        // Obtener el nombre y el costo del platillo
        $resultado = mysqli_query($conexion, "SELECT MAX(id_auxventa) AS ultimo_id FROM auxventa");
        $idaux = mysqli_fetch_assoc($resultado)['ultimo_id'];
        $query = "SELECT platillo, costo FROM platillo WHERE id_platillo = $id_platillo";
        $resultado = Consultar('platillo', 'WHERE id_platillo =' . $id_platillo);
        $fila = mysqli_fetch_assoc($resultado);
        $id = $id_platillo;
        $nombre_platillo = $fila['platillo'];
        $costo_platillo = $fila['costo'];


        // Calcular el subtotal del platillo
        $subtotal_platillo = floatval($costo_platillo) * floatval($cantidad);

        // Agregar el platillo vendido al array de productos vendidos
        $productos_vendidos[] = array(
            'id' => $id_platillo,
            'platillo' => $nombre_platillo,
            'cantidad' => $cantidad,
            'precio' => $costo_platillo,
            'subtotal' => $subtotal_platillo
        );
            if ($cantidad > 0) {
                $idaux += 1;
                $datos = "".intval($idaux). "," . intval($id) . "," . intval($cantidad)."";
                Alta('auxventa (id_auxventa,id_platillo,cantidad)', $datos);
                // Actualizar el monto total de la venta
                $monto_total += floatval($subtotal_platillo);
            }
        
            
        
    }
    
    // Registrar la venta en la tabla de ventas
    $datos = "null,'".$fecha."',".$idaux.",".$monto_total.",1";
    Alta('venta',$datos);
}

if(isset($_POST['Cancelar'])){
    header('Location:../Vistas/Ventas.php');
}

// Mostrar la información de la venta y los productos vendidos
echo "<h2>Información de la venta:</h2>";
echo "<p><strong>Fecha de venta:</strong> " . $fecha . "</p>";
echo "<p><strong>Monto total:</strong> $" . $monto_total . "</p>";
echo "<h2>Productos vendidos:</h2>";
echo "<table>";
echo "<tr><th>Platillo</th><th>Cantidad</th><th>Precio unitario</th><th>Subtotal</th></tr>";
foreach ($productos_vendidos as $producto) {
    if ($producto['cantidad'] > 0) {
        echo "<tr>";
        echo "<td>" . $producto['platillo'] . "</td>";
        echo "<td>" . $producto['cantidad'] . "</td>";
        echo "<td>$" . $producto['precio'] . "</td>";
        echo "<td>$" . $producto['subtotal'] . "</td>";
        echo "</tr>";
    }
}
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td>Monto total:</td>";
echo "<td>$" . $monto_total . "</td>";
echo "</tr>";
echo "</table>";
echo"<button><a href='../Vistas/Ventas.php'>Volver a ventas</a></button>";