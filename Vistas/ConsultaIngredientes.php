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

        <div class="content">
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
                                        <center>ID</center>
                                    </th>
                                    <th>
                                        <center>IGREDIENTE</center>
                                    </th>
                                    <th>
                                        <center>EDITAR</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php
                                require('../Modelo/Conexion.php');
                                ?>



                                <?php
                                require("../Modelo/ModeloBurger.php");

                                $result = Consultar('ingrediente', "ORDER BY id_ingrediente");
                                while ($crow = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class='row100'>
                                        <td style='width:10px'>
                                            <center> <?php echo $crow['id_ingrediente']; ?> </center>
                                        </td>
                                        <td>
                                            <center><?php echo $crow['ingrediente']; ?> </center>
                                        </td>

                                        <td>
                                            <center><a href="../Modelo/Editar_Ingrediente.php?EDITAR_ID=<?php echo $crow['id_ingrediente']; ?>" class="edit_btn">Editar</a></center>
                                        </td>
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