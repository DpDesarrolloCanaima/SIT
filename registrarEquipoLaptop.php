<?php 

session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
}else{
    if ($_SESSION['rol'] != 3) {
        header("Location: 404.php");
    }
}
$cedula_usuario =$_SESSION['cedula'];
$usuario = $_SESSION['usuario'];
$rol = $_SESSION['rol'];
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d");

// CONSULTAS DE OBTENCIÓN DE DATOS.
include "config/conexion.php";
$sqlEquipoDelDia = "SELECT d.id_equipo_diario, d.equipo, d.fecha, e.nombre FROM equipo_diario AS d 
INNER JOIN tipo_de_equipo AS e ON e.id_tipo_de_equipo = d.equipo WHERE fecha = '$fecha'";
$resultadoEquipoDiario = $conexion->query($sqlEquipoDelDia);

// DATOS DE LOS EQUIPOS REGISTRADOS
$sqlEquipoLaptop = "SELECT serial_id_c, serial_cara_b FROM equipo_laptop";
$resultadoEquipoLaptop = $conexion->query($sqlEquipoLaptop);
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
                                            <form action="" id="RegistroEquipoLaptop">
                                                <div class="form-group">
                                                    <?php 
                                                     while ($rowEquipos = 
                                                     $resultadoEquipoDiario->fetch_assoc()) :
                                                    switch ($rowEquipos['equipo']) {
                                                        case 3:
                                                            echo '
                                                            <label for="">Equipo del dia :'.$rowEquipos['nombre'].'</label>
                                                            <input type="hidden" name="tipoEquipo" id="tipoEquipo" value="'.$rowEquipos['equipo'].'">
                                                            ';
                                                            break;
                                                        case 4:
                                                            echo '
                                                            <label for="">Equipo del dia :'.$rowEquipos['nombre'].'</label>
                                                            <input type="hidden" name="tipoEquipo" id="tipoEquipo" value="'.$rowEquipos['equipo'].'">
                                                            ';
                                                            break;
                                                        case 5:
                                                            echo '
                                                            <label for="">Equipo del dia :'.$rowEquipos['nombre'].'</label>
                                                            <input type="hidden" name="tipoEquipo" id="tipoEquipo" value="'.$rowEquipos['equipo'].'">
                                                            ';
                                                            break;
                                                        case 6:
                                                            echo '
                                                            <label for="">Equipo del dia :'.$rowEquipos['nombre'].'</label>
                                                            <input type="hidden" name="tipoEquipo" id="tipoEquipo" value="'.$rowEquipos['equipo'].'">
                                                            ';
                                                            break;
                                                        case 7:
                                                            echo '
                                                            <label for="">Equipo del dia :'.$rowEquipos['nombre'].'</label>
                                                            <input type="hidden" name="tipoEquipo" id="tipoEquipo" value="'.$rowEquipos['equipo'].'">
                                                            ';
                                                            break;
                                                        case 8:
                                                            echo '
                                                            <label for="">Equipo del dia :'.$rowEquipos['nombre'].'</label>
                                                            <input type="hidden" name="tipoEquipo" id="tipoEquipo" value="'.$rowEquipos['equipo'].'">
                                                            ';
                                                            break;
                                                        case 10:
                                                            echo '
                                                            <label for="">Equipo del dia :'.$rowEquipos['nombre'].'</label>
                                                            <input type="hidden" name="tipoEquipo" id="tipoEquipo" value="'.$rowEquipos['equipo'].'">
                                                            ';
                                                            break;
                                                       }
                                                    endwhile;
                                                    ?>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="serialCaraB">Serial Cara B</label>
                                                    <input type="text" name="serialCaraB" id="serialCaraB" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="serialMR">Serial Memoria Ram</label>
                                                    <input type="text" name="serialMR" id="serialMR" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="serialCargador">Serial Cargador</label>
                                                    <input type="text" name="serialCargador" id="serialCargador" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="serialTarjetaMadre">Serial Tarjeta Madre</label>
                                                    <input type="text" name="serialTarjetaMadre" id="serialTarjetaMadre" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="serialPantalla">Serial Pantalla</label>
                                                    <input type="text" name="serialPantalla" id="serialPantalla" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="serialDiscoDuro">Serial Disco Duro</label>
                                                    <input type="text" name="serialDiscoDuro" id="serialDiscoDuro" class="form-control">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="serialBateria">Serial Bateria</label>
                                                    <input type="text" name="serialBateria" id="serialBateria" class="form-control">
                                                </div>
                                                <input type="hidden" name="fechaRegistro" id="fechaRegistro" value="<?php echo $fecha;?>">
                                                <input type="hidden" name="estatus" id="estatus" value="2">
                                                <input type="hidden" name="responsable" id="responsable" value="<?php echo $cedula_usuario;?>">
                                                <div class="my-3">
                                                    <input type="button" class="btn btn-success" onclick="RegistrarArmado()" value="Enviar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                <table class="table table-bordered">
                                    <thead>
                                       
                                        <tr>
                                            <td class="text-center">Identificador</td>
                                            <td class="text-center">Serial Del Equipo</td>
                                            <td class="text-center">Opciones</td>
                                        </tr>

                                        
                                    </thead>
                                    <tbody>
                                        <?php 
                                            while ($rowRegistroLaptop = $resultadoEquipoLaptop->fetch_assoc()) :
                                        ?>
                                        <tr>
                                            <td><?php echo $rowRegistroLaptop['serial_id_c'];?></td>
                                            <td><?php echo $rowRegistroLaptop['serial_cara_b'];?></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detallesLaptop">
                                                Detalles
                                                </button>
                                            </td>
                                        </tr>
                                        <?php

                                            endwhile;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>

                        </div>

                </main>
                <?php
                    include "content/modal/armador/detallesLaptop.php";
                    include "content/inc/footer.php";
                ?>
            </div>
        </div>
        <?php
            include "content/inc/script.php";
        ?>
        <script src="js/register/registrarEquipoLaptop.js"></script>
    </body>
</html>
