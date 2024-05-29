<?php 
include "content/inc/header.php";

include "content/inc/navbar.php";


include "config/conexionDBextra.php";

date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d");

$sqlRegistroDisco = "SELECT serial_disco, fecha_registro FROM disco_duro WHERE fecha_registro = '$fecha'";
$resultadoDisco = $conexion->query($sqlRegistroDisco);
?>
        
        <div id="layoutSidenav">
            <?php include "content/inc/sidebar.php";?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Sistema de Inventario y Trazabilidad | Produccion</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Administrador</li>
                        </ol>
                        <div class="container my-4">
                            <div class="row p-4">
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="" id="RegistroDisco">
                                                <div class="form-group">
                                                    <label for="">Serial de Cara A</label>
                                                    <input type="text" name="serialCaraA" id="serialCaraA" class="form-control">
                                                    <input type="hidden" name="fechaRegistro" id="fechaRegistro" value="<?php echo $fecha;?>">
                                                </div>
                                                <div class="my-3">
                                                    <input type="button" class="btn btn-success" onclick="RegistrarCaraA()" value="Enviar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                <table class="table table-bordered">
                                    <thead>
                                       
                                        <tr>
                                            <td class="text-center">Serial Disco</td>
                                            <td class="text-center">Fecha Registro</td>
                                        </tr>

                                        
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while ($rowRegistroDisco = $resultadoDisco->fetch_assoc()) :
                                        ?>
                                        <tr>
                                            <td><?php echo $rowRegistroDisco['serial_disco'];?></td>
                                            <td><?php echo $rowRegistroDisco['fecha_registro'];?></td>
                                        </tr>
                                        <?php

                                            endwhile;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>

                        </div>
                    </div>

                </main>
                <?php
                    include "content/inc/footer.php";
                ?>
            </div>
        </div>
        <?php
            include "content/inc/script.php";
        ?>
        <script src="js/register/registrarCaraA.js"></script>
    </body>
</html>
