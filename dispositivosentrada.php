<?php
require "config/app.php";
require "config/conexionProvi.php";
session_start();
if (!isset($_SESSION['id_usuarios'])) {
    header("Location: index.php");
}

$usuario = $_SESSION['usuario'];
$rol = $_SESSION['id_roles'];


// Consulta para mostrar los datos e enviar
$consulta2 = "SELECT * FROM genero";
$resultado2 = $mysqli->query($consulta2);

// Consulta para mostrar los datos e enviar
$consulta3 = "SELECT * FROM area";
$resultado3 = $mysqli->query($consulta3);


// Consulta para mostrar los datos e enviar
$consulta4 = "SELECT * FROM cargo";
$resultado4 = $mysqli->query($consulta4);

// Consulta para mostrar los datos e enviar
$consulta5 = "SELECT * FROM tipo_de_equipo";
$resultado5 = $mysqli->query($consulta5);

// Consulta para mostrar los datos e enviar
$consulta6 = "SELECT * FROM origen";
$resultado6 = $mysqli->query($consulta6);

// Consulta para mostrar los datos e enviar
$consulta7 = "SELECT * FROM estados_venezuela";
$resultado7 = $mysqli->query($consulta7);

// Consulta para mostrar los datos e enviar
$consulta9 = "SELECT * FROM motivo";
$resultado9 = $mysqli->query($consulta9);

// Consulta para mostrar los datos e enviar
$consulta10 = "SELECT * FROM grado";
$resultado10 = $mysqli->query($consulta10);

// Consulta para mostrar los datos e enviar
$consulta11 = "SELECT * FROM tipo_estado";
$resultado11 = $mysqli->query($consulta11);

// Consulta para mostrar los datos e enviar
$consulta12 = "SELECT * FROM estatus";
$resultado12 = $mysqli->query($consulta12);

$sql3 = "SELECT id_datos_del_entregante, cedula FROM datos_del_entregante";
$result = $mysqli->query($sql3);



//Consulta para traer los datos almacenados de los dispositivos

$sql2 = "SELECT d.serial_equipo, d.serial_de_cargador, d.pertenencia_del_equipo, d.institucion_educativa, d.institucion_donde_estudia, d.fecha_de_recepcion, d.estado_recepcion_equipo, d.observaciones, d.equipo_reincidio, d.motivo_reincidencia, j.nombre, j.modelo, l.grado, k.origen, m.estatus, b.tipo_de_motivo , t.estado FROM datos_del_dispotivo AS d 
INNER JOIN tipo_de_equipo AS j ON j.id_tipo_de_equipo=d.id_tipo_de_dispositivo
INNER JOIN origen AS k ON k.id_origen = d.id_origen
INNER JOIN grado AS l ON l.id_grado = d.id_grado
INNER JOIN estatus AS m ON m.id_estatus = d.id_estatus
INNER JOIN motivo AS b ON b.id_motivo = d.id_motivo
INNER JOIN tipo_estado AS t ON t.id = d.estado_recepcion_equipo";

$resultado8 = $mysqli->query($sql2);


?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Inventario OAC</title>
    <!-- FAVICON -->
    <link rel="icon" href="img/Canaima.png">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="css/validation.css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/error.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php 
            switch ($rol) {
                case 1:
                        include "inc/navbarlateral.php";
                    ;
                    break;
                case 2:
                        include "inc/navbarlateral.php";
                    break;
                
                case 3:
                         include "inc/navbarlateral2.php";
                break; 
                case 4:
                        include "inc/navbarlateral2.php";
                    break;
                case 5:
                    include "inc/navbarlateral2.php";
                break;   
            }
         ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include "inc/navbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Modal de registro -->

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                            data-toggle="modal" data-target="#modalDispo"> Registrar Dispositivo</a>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Dispositivos Recibidos</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tipo de Dispositivo</th>
                                            <th>Modelo</th>
                                            <th>Serial del Equipo</th>
                                            <th>Serial del Cargador</th>
                                            <th>Pertenencia del Equipo</th>
                                            <th>Institucion Educativa</th>
                                            <th>Institucion Educativa (Donde estudia)</th>
                                            <th>Grado</th>
                                            <th>Fecha de Recepción</th>
                                            <th>Estado de Recepción Del Equipo</th>
                                            <th>Equipo Reincidio</th>
                                            <th>Motivo de Reincidencia</th>
                                            <th>Falla</th>
                                            <th>Observaciones</th>
                                            <th>Origen</th>
                                            <th>Estatus</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row8 = $resultado8->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row8['nombre']; ?></td>
                                            <td><?php echo $row8['modelo']; ?></td>
                                            <td><?php echo $row8['serial_equipo']; ?></td>
                                            <td><?php echo $row8['serial_de_cargador']; ?></td>
                                            <td><?php echo $row8['pertenencia_del_equipo']; ?></td>
                                            <td><?php echo $row8['institucion_educativa']; ?></td>
                                            <td><?php echo $row8['institucion_donde_estudia']; ?></td>
                                            <td><?php echo $row8['grado']; ?></td>
                                            <td><?php echo $row8['fecha_de_recepcion']; ?></td>
                                            <td><?php echo $row8['estado']; ?></td>
                                            <td><?php echo $row8['equipo_reincidio']; ?></td>
                                            <td><?php echo $row8['motivo_reincidencia']; ?></td>
                                            <td><?php echo $row8['tipo_de_motivo']; ?></td>
                                            <td><?php echo $row8['observaciones']; ?></td>
                                            <td><?php echo $row8['origen']; ?></td>
                                            <td><?php echo $row8['estatus']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        Options
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item btn btn-warning" data-toggle="modal"
                                                            data-target="#modalEdit" href="#"><img
                                                                src="img/svg/editar.svg " alt="Industrias Canaima"
                                                                width="15" height="15"> Editar</a>
                                                        <a class="dropdown-item btn btn-danger" href="#"><img
                                                                src="img/svg/eliminar.svg " alt="Industrias Canaima"
                                                                width="15" height="15"> Eliminar</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                        include "modalDeRegistroDis.php";

                        include "modalEditDis.php";
                    ?>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Industrias Canaima 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Estas seguro?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-success" href="logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <?php include "inc/script.php"; ?>
</body>

</html>