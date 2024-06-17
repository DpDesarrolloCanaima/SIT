<?php 

session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
}else{
    if ($_SESSION['rol'] != 3) {
        header("Location: 404.php");
    }
}

$usuario = $_SESSION['usuario'];
$rol = $_SESSION['rol'];

date_default_timezone_set('America/Caracas');
include "content/inc/header.php";

include "content/inc/navbar.php";
?>
        
        
        <div id="layoutSidenav">
            <?php include "content/inc/sidebar.php";?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Sistema de Inventario y Trazabilidad | Produccion</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Aduana | Armar Equipo Canaima</li>
                        </ol>
                        <div class="container my-4">
                            <div class="row p-4">
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="" id="RegistroCaraB">
                                                <div class="form-group">
                                                    <label for="">Equipo del dia : </label>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="">Serial Cara A</label>
                                                    <input type="text" name="serialCaraB" id="serialCaraB" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="">Serial Cara B</label>
                                                    <input type="text" name="serialCaraB" id="serialCaraB" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="">Serial Cargador</label>
                                                    <input type="text" name="serialCaraB" id="serialCaraB" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="">Serial Pantalla</label>
                                                    <input type="text" name="serialCaraB" id="serialCaraB" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="">Serial Disco Duro</label>
                                                    <input type="text" name="serialCaraB" id="serialCaraB" class="form-control">
                                                </div>
                                                <input type="hidden" name="fechaRegistro" id="fechaRegistro" value="<?php echo $fecha;?>">
                                                <div class="my-3">
                                                    <input type="button" class="btn btn-success" onclick="RegistrarCaraB()" value="Enviar">
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
                                            <td><?php echo $rowRegistroDisco['serial_cara_b'];?></td>
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
            include "content/modal/armador/armarEquipo.php";
            include "content/modal/armador/armarTablet.php";
            include "content/inc/script.php";
        ?>
    </body>
</html>
