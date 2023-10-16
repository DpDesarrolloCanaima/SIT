<?php
require "config/app.php";
require "config/conexionProvi.php";

session_start();
$usuario = $_SESSION['usuario'];
$rol = $_SESSION['id_roles'];
$id_usuario = $_SESSION['id_usuarios'];

if (!isset($_SESSION['id_usuarios']) || $rol != 1) {
    header("Location: index.php");
    session_destroy();
    
}

$tipoAudit = $_GET['tipo'];

if($tipoAudit != 'beneficiario' && $tipoAudit != 'usuario' AND $tipoAudit != 'dispositivo'){
    header("Location: admin.php");
    exit;
}

$usuario = $_SESSION['usuario'];
$rol = $_SESSION['id_roles'];

switch($tipoAudit){
    case 'usuario':
        $nombreT = 'usuarios_audit';
        $titulo = 'Usuario';
        $tabla = 
                '<th>id_usuarios</th>
                <th>Usuario</th>
                <th>Serial del Equipo</th>
                <th>Serial del Cargador</th>
                <th>Fecha de Recepcion</th>
                <th>Observaciones</th>
                <th>origen</th>
                <th>Nombre del Beneficiario</th>
                <th>Cedula</th>
                <th>Estatus</th>';
        break;

    case 'dispositivo':
        $nombreT = 'datos_del_dispotivo_audit';
        $titulo ='Dispositivo';
        break;

    case 'beneficiario':
        $nombreT = 'datos_del_entregante_audit';
        $tipoAudit= 'Beneficiario';
        break;
}



//Consulta para traer los datos almacenados de los dispositivos

$sql = "SELECT * FROM $nombreT";

$resultado = $mysqli->query($sql);

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
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include "inc/navbarlateral.php";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include "inc/navbar2.php";?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                   
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registro histórico: <?php echo $titulo;?></h6>
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
                                            <th>Fecha de Recepcion</th>
                                            <th>Observaciones</th>
                                            <th>origen</th>
                                            <th>Nombre del Beneficiario</th>
                                            <th>Cedula</th>
                                            <th>Estatus</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            while ($row = $resultado -> fetch_assoc() ) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['nombre'];?></td>
                                            <td><?php echo $row['modelo'];?></td>
                                            <td><?php echo $row['serial_equipo'];?></td>
                                            <td><?php echo $row['serial_de_cargador'];?></td>
                                            <td><?php echo $row['fecha_de_recepcion'];?></td>
                                            <td><?php echo $row['observaciones_tecnico'];?></td>
                                            <td><?php echo $row['origen'];?></td>
                                            <td><?php echo $row['nombre_del_beneficiario'];?></td>
                                            <td><?php echo $row['cedula'];?></td>
                                            <td><?php echo $row['estatus'];?></td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- incluir los modales -->
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

    <?php include "inc/script.php";?>
</body>

</html>