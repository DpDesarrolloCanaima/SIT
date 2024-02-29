<?php
require "config/app.php";
require "config/conexion.php";
session_start();
if (!isset($_SESSION['id_usuarios'])) {
    header("Location: index.php");
}else{
    if ($_SESSION['id_roles'] != 1) {
        header("Location: 404.php");
    }
}

$usuario = $_SESSION['usuario'];
$rol = $_SESSION['id_roles'];
$id_usuario = $_SESSION['id_usuarios'];
/* Consulta para los opciones de fechas de las graficas */

$consulta2 = "SELECT * FROM  datos_del_dispotivo";

$resultado2 = $mysqli->query($consulta2);



?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Inventario y Trazabilidad (SIT)</title>
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

        <?php include "inc/navbarlateral.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include "inc/navbar2.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo company; ?> | SIT </h1>
                    </div>

                    
                        <div class="jumbotron">
                        <h1 class="display-5">Registre un Usuario Nuevo!</h1>
                                <p class="lead">Bienvenido al Sistema de Inventario y Trazabilidad de Industria Canaima (SIT).</p>
                            <hr class="my-4">
                            <p>De click en el siguente boton.</p>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#RegistroUsuario"> <i class="fas fa-user fa-sm text-white-50"></i> Crear Usuario</a>
                        </div>
                    </div>
                </div>

                    <!-- /.container-fluid -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-print fa-sm text-white-50"></i> Generar Reporte</a> -->
                        </div>


                        <!-- Content Row -->
                        <div class="row">


                            <!-- Content Row -->
                            <div class="row">

                                <!-- Content Column -->
                                <div class="col-lg-6 mb-4">

                                </div>


                            </div>
                            <!-- /.container-fluid -->



                        </div>
                        <!-- /.container-fluid -->


                    </div>
                    <!-- End of Main Content -->
                    <?php
                        include "modal/modalRegistroUsuario.php";
                    ?>

    <?php require "inc/footer.php";?>
    <script src="js/function.js"></script>
    <script src="js/registrousuario.js"></script>
    <?php require "inc/script.php";?>

</body>

</html>