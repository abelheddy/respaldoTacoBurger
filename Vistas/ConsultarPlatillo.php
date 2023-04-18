<?php
    include('menu.php');
?>
<!DOCTYPE html>

<html>

<center>

    <body>
        <form action="" method="GET">
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
                                        <center>PLATILLO</center>
                                    </th>
                                    <th>
                                        <center>COSTO</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php
                                require('../Modelo/Conexion.php');
                                ?>



                                <?php
                                require("../Modelo/ModeloBurger.php");

                                $result = Consultar('platillo', "ORDER BY id_platillo");
                                while ($crow = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr class='row100'>
                                        <td style='width:10px'>
                                            <center> <?php echo $crow['id_platillo']; ?> </center>
                                        </td>
                                        <td>
                                            <center><?php echo $crow['platillo']; ?> </center>
                                        </td>
                                        <td><center><?php echo $crow['costo'];?></center></td>
                                        <td>
                                            <center><a href="../Modelo/Editar_Platillo.php?EDITAR_ID=<?php echo $crow['id_platillo']; ?>" class="edit_btn">Editar</a></center>
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
        </form>
    </body>
</center>

</html>