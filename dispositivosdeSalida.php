<?php
require "config/app.php";
require "config/conexionProvi.php";
session_start();
if (!isset($_SESSION['id_usuarios'])) {
    header("Location: index.php");
}
$usuario = $_SESSION['usuario'];
$rol = $_SESSION['id_roles'];

$consulta = "SELECT r.id_reparacion, r.equipo, r.propietario, r.migracion, t.nombre, t.modelo, o.origen FROM reparacion AS r INNER JOIN tipo_de_equipo AS t ON t.id_tipo_de_equipo=r.id_tipo_de_equipo INNER JOIN origen AS o ON r.id_origen=o.id_origen";

$resultado = $mysqli->query($consulta);
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
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

                <?php include "inc/navbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                       <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a> -->
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Dispositivo en linea</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Equipo</th>
                                            <th>Propietario</th>
                                            <th>Migración</th>
                                            <th>Tipo de Equipo</th>
                                            <th>Modelo</th>
                                            <th>Origen</th>
                                            <?php 
                                                switch ($rol) {
                                                    case 1:
                                                        echo '<th>Options</th>';
                                                        break;
                                                }

                                            ?>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //Treamos los diferentes registros de la base de datos
                                        while ($row = $resultado->fetch_assoc()) {
                                            
                                        ?>
                                            <tr>
                                                <td><?php echo $row['id_reparacion']; ?></td>
                                                <td><?php echo $row['equipo']; ?></td>
                                                <td><?php echo $row['propietario']; ?></td>
                                                <td><?php echo $row['migracion']; ?></td>
                                                <td><?php echo $row['nombre']; ?></td>
                                                <td><?php echo $row['modelo']; ?></td>
                                                <td><?php echo $row['origen']; ?></td>
                                                <?php
                                                    switch ($rol) {
                                                        case 1:
                                                                echo '
                                                                   <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Options
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item btn btn-warning" data-toggle="modal" data-target="#ModalEditar" href="#"><img src="img/svg/editar.svg " alt="Industrias Canaima" width="15" height="15"> Editar</a>
                                                        </div>
                                                    </div>
                                                </td> 
                                                                ';
                                                            break;
                                                    }

                                                ?>
                                                
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal de registro -->

                    <!-- Modal -->
                    <div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-titlen text-dark mx-auto" id="exampleModalLabel">Editar Equipo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form name="crearusuario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="">
                                        <div class="form-group">
                                            <label for="exampleInputUser1">N°</label>
                                            <input type="text" class="form-control" id="disabledInput" disabled aria-describedby="nameHelp" name="id_reparacion">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUser1">Equipo</label>
                                            <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="nameHelp" name="equipo">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Propietario</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="propietario">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Migración</label>
                                            <input type="text" class="form-control" id="exampleInputCedula1" name="migracion">
                                        </div>
                                        <div class="form-group">
                                            <label for="tipo_de_equipo">Tipo de Equipo</label>
                                            <select name="tipoDeEquipo" id="" class="form-control form-control-lg">
                                                <option value="1">Table 1</option>
                                                <option value="2">Table 2</option>
                                                <option value="3">Canaima 1</option>
                                                <option value="4">Canaima 2</option>
                                                <option value="5">Canaima 3</option>
                                                <option value="6">Canaima 4</option>
                                                <option value="7">Canaima 5</option>
                                                <option value="8">Canaima Docente</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Origen">Origen</label>
                                            <select name="origen" id="" class="form-control form-control-lg">
                                                <option value="1">Apoyo</option>
                                                <option value="2">Beneficiario</option>
                                                <option value="3">Trabajadores</option>
                                            </select>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success" name="registrar">Enviar</button>
                                        <button type="reset" class="btn btn-secondary">Refrescar</button>
                                    </form>
                                </div>
                            </div>
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
