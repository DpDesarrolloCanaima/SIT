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
$consulta5 = "SELECT * FROM tipo_de_equipo";
$resultado5 = $mysqli->query($consulta5);

// Consulta para mostrar los datos e enviar
$consulta6 = "SELECT * FROM origen";
$resultado6 = $mysqli->query($consulta6);

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

$sql3 = "SELECT id_datos_del_entregante, nombre_del_beneficiario FROM datos_del_entregante";
$result = $mysqli->query($sql3);



//Consulta para traer los datos almacenados de los dispositivos

$sql2 = "SELECT d.id_datos_del_dispositivo, d.serial_equipo, d.serial_de_cargador, d.institucion_educativa, d.institucion_donde_estudia, d.fecha_de_recepcion, d.estado_recepcion_equipo,d.fecha_de_entrega, d.observaciones, d.equipo_reincidio, d.motivo_reincidencia, j.nombre, j.modelo, l.grado, k.origen, m.estatus, b.tipo_de_motivo , t.estado FROM datos_del_dispotivo AS d 
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
                        <div class="btn-group dropright">
                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i>
                                Generar Reporte
                            </button>
                            <button type="button"
                                class="btn btn-primary d-none d-sm-inline-block dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-expanded="false">
                                <span class="sr-only"></span>
                            </button>
                            <div class="dropdown-menu">
                                <li><a class="dropdown-item" href="report/reportedipositivosrecibidos.php?id=1"
                                        target="_blank">Recibidos</a></li>
                                <li><a class="dropdown-item" href="report/reportedispositivosenlinea.php?id=2"
                                        target="_blank">En la linea</a></li>
                                <li><a class="dropdown-item" href="report/reportedispositivoverificados.php?id=3"
                                        target="_blank">Verificados</a></li>
                                <li><a class="dropdown-item" href="report/reportedispositivosentregados.php?id=4"
                                        target="_blank">Entregados</a></li>
                                <li><a class="dropdown-item" href="report/reportedispositivosAll.php"
                                        target="_blank">Todos</a></li>

                            </div>
                        </div>

                        <?php
                                    switch ($rol) {
                                        case 1:
                                            echo '
                                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                            data-toggle="modal" data-target="#modalDispo"> Registrar Dispositivo</a>
                                            ';
                                            break;
                                        case 3:
                                                echo '
                                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                            data-toggle="modal" data-target="#modalDispo"> Registrar Dispositivo</a>
                                                ';
                                            break;
                                    }

                                ?>
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
                                            <th>Institucion Educativa</th>
                                            <th>Institucion Educativa (Donde estudia)</th>
                                            <th>Grado</th>
                                            <th>Fecha de Recepción</th>
                                            <th>Estado de Recepción Del Equipo</th>
                                            <th>Fecha de Entrega</th>
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
                                        while ($row = $resultado8->fetch_assoc()) :
                                        ?>
                                        <tr>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['modelo']; ?></td>
                                            <td><?php echo $row['serial_equipo']; ?></td>
                                            <td><?php echo $row['serial_de_cargador']; ?></td>
                                            <td><?php echo $row['institucion_educativa']; ?></td>
                                            <td><?php echo $row['institucion_donde_estudia']; ?></td>
                                            <td><?php echo $row['grado']; ?></td>
                                            <td><?php echo $row['fecha_de_recepcion']; ?></td>
                                            <td><?php echo $row['estado']; ?></td>
                                            <td><?php echo $row['fecha_de_entrega']; ?></td>
                                            <td><?php echo $row['equipo_reincidio']; ?></td>
                                            <td><?php echo $row['motivo_reincidencia']; ?></td>
                                            <td><?php echo $row['tipo_de_motivo']; ?></td>
                                            <td><?php echo $row['observaciones']; ?></td>
                                            <td><?php echo $row['origen']; ?></td>
                                            <td><?php echo $row['estatus']; ?></td>

                                            <?php
                                                    switch ($rol) {
                                                        case 1:
                                                            echo '
                                                            <td>
                                                            <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-sm dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                Opciones
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item btn btn-warning" data-toggle="modal"
                                                                    data-target="#editDis'.$row['id_datos_del_dispositivo'].'"
                                                href="#"><img src="img/svg/editar.svg " alt="Industrias Canaima"
                                                    width="15" height="15">
                                                Editar</a>
                                                <a class="dropdown-item btn btn-danger"
                                                    href="eliminardispositivo.php?id='.$row['id_datos_del_dispositivo'].'"><img
                                                    src="img/svg/eliminar.svg " alt="Industrias Canaima" width="15"
                                                    height="15"> Eliminar</a>
                         ';
                        break;
                        }

                        ?>
                            </div>
                        </div>
                        </td>

                        <?php
                                            include "modalEditDis.php";
                                        ?>

                        </tr>
                        <?php endwhile;?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
                        include "modalDeRegistroDis.php";
                    ?>
        </div>
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