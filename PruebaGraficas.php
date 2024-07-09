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
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Dispositivos</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="TipoDeEquipo" style="width:100%;max-width:600px"></canvas>  
                                    </div>
                                </div>
                            </div>

                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Estatus De Dispositivos</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="Estatus" style="width:100%;max-width:600px"></canvas>   
                                    </div>
                                    <hr>
                                    Styling for the bar chart can be found in the
                                    <code>/js/demo/chart-bar-demo.js</code> file.
                                </div>
                            </div>

                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <hr>
                                    Styling for the donut chart can be found in the
                                    <code>/js/demo/chart-pie-demo.js</code> file.
                                </div>
                            </div>
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

    <script>    
     <?php
            $sqlStatus = "SELECT estatus FROM estatus";
            $resultadoStatus = $conexion->query($sqlStatus);
        ?>
        var xValuesTorta = [<?php while ($row = $resultadoStatus->fetch_assoc()) { ?>
            '<?php  echo $row['estatus'];?>',
        <?php
    }?>];

        <?php 
            require "php/datosGraficaTorta.php";
        ?>
        var yValuesTorta = [<?php echo $cantidadRecibidos;?>, <?php echo $cantidadEnLinea;?>, <?php echo $cantidadReparados;?>, <?php echo $cantidadPorVerificar;?>, <?php echo $cantidadVerificado;?>, <?php echo $cantidadPorEntregar;?>, <?php echo $cantidadEntregados;?>];
        var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145",
        "#cb5f0b",
        "#0edb52"
        ];

        new Chart("Estatus", {
        type: "doughnut",
        data: {
            labels: xValuesTorta,
            datasets: [{
            backgroundColor: barColors,
            data: yValuesTorta
            }]
        },
        options: {
            title: {
            display: true,
            text: "Estatus De Dispositivos."
            }
        }
        });

    <?php
        $sqlTipodeEquipo = "SELECT nombre FROM tipo_de_equipo";
        $resultado = $conexion->query($sqlTipodeEquipo);
    ?>
    const xValues = [<?php  while ($row = $resultado->fetch_assoc()) { ?>
        '<?php echo $row['nombre'];?>',
    <?php }?>];

    <?php
        require "php/datosGraficaLine.php";
    ?>        
    const yValues = [<?php echo $CantidadTablet;?>,<?php echo $CantidadTabletDos;?>,<?php echo $CantidadCanaimaOne;?>, <?php echo $CantidadCanaimaDos;?>,<?php echo $CantidadCanaimatres;?>, <?php echo $CantidadCanaimaCuatro;?>, <?php echo $CantidadCanaimaCinco;?>, <?php echo $CantidadCanaimaDocente;?>,<?php echo $CantidadTabletTres;?>, <?php echo $CantidadCanaimaSeis;?>,];

    new Chart("TipoDeEquipo", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        scales: {
        yAxes: [{ticks: {min: 1, max:1000}}],
        }
    }
    });




    </script>

</body>

</html>