<?php
require "config/app.php";
require "config/conexionProvi.php";
session_start();
if (!isset($_SESSION['id_usuarios'])) {
    header("Location: index.php");
}else{
    if ($_SESSION['id_roles'] != 3) {
        header("Location: index.php");
    }
}

$usuario = $_SESSION['usuario'];
$rol = $_SESSION['id_roles'];
$idusuario = $_SESSION['id_usuarios'];

//consulta para obtener el id del cordinador

$sql = "SELECT id_usuarios FROM usuarios WHERE id_roles = 6";

$resultado = $mysqli->query($sql);

$row = $resultado->fetch_assoc(); 

$cordinadorID = $row['id_usuarios']; 


// Consultas de para mostrar datos en formulario
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

//Consulta para traer nombre del usuario
$consulta14 = "SELECT id_usuarios, nombre  FROM usuarios WHERE id_roles = 4";
$resultado14 = $mysqli->query($consulta14);

$sql3 = "SELECT id_datos_del_entregante, nombre_del_beneficiario FROM datos_del_entregante";
$result = $mysqli->query($sql3);

//Consulta para traer el tipo de documento
$sql14 = "SELECT id_documento, tipo_documento FROM tipo_documento";
$resultado14 = $mysqli->query($sql14);

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
    <link rel="stylesheet" href="css/error.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include "inc/navbarlateral2.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include "inc/navbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo company; ?></h1>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div class="btn-group dropright">
                            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <img src="img/bootstrap-icons-1.10.5/person-fill-add.svg" alt="Industrias Canaima" width="15" height="15">
                                Registro de Beneficiario
                            </button>
                            <button type="button"
                                class="btn btn-primary d-none d-sm-inline-block dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-expanded="false">
                                <span class="sr-only"></span>
                            </button>
                            <div class="dropdown-menu">
                                <li>
                                    <a class="btn" data-toggle="modal" data-target="#modalApoyo">Apoyo Institucional</a>
                                </li>
                                <li>
                                    <a class="btn" data-toggle="modal" data-target="#modalBene">Beneficiario</a>
                                </li>
                                <li>
                                    <a class="btn" data-toggle="modal" data-target="#modalTrabajador">Trabajador</a>
                                </li>
                                <li>
                                    <a class="btn" data-toggle="modal" data-target="#modalJornada">Jornadas
                                        Especiales</a>
                                </li>
                            </div>
                        </div>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                            data-toggle="modal" data-target="#modalDispo"><img src="img/bootstrap-icons-1.10.5/device-hdd.svg"
                                alt="Industrias Canaima" width="15" height="15"> Registrar Dispositivo</a>
                    </div>


                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Productividad de OAC</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myBarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Estadisticas</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                         include "modal/modalBene.php";
                         include "modal/modalApoyoInst.php";
                         include "modal/modalTrabajador.php";
                         include "modal/modalJornadaEsp.php";
                        include "modalregistroDispositivo.php";

                    ?>
                    </div>

                    <!-- /.container-fluid -->

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
                            <a class="btn btn-success" href="logout.php">Salir</a>
                            <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "inc/script.php"; ?>
</body>

</html>