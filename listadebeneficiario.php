<?php
require "config/app.php";
require "config/conexionProvi.php";
session_start();
if (!isset($_SESSION['id_usuarios'])) {
    header("Location: index.php");
}

$usuario = $_SESSION['usuario'];
$rol = $_SESSION['id_roles'];


// Consulta para traer los datos almacenados

$sql1 = "SELECT e.id_datos_del_entregante,  e.ic, e.nombre_del_beneficiario, e.cedula, e.edad, e.fecha_de_nacimiento, e.nombre_del_representante, e.correo, e.telefono, e.municipio, e.direccion, e.posee_discapacidad_o_condicion, e.descripcion_discapacidad_condicion, t.nombre, t.modelo, g.genero, a.nombre_del_area, c.tipo_de_cargo, o.origen, v.estado_nombre FROM datos_del_entregante AS e 
INNER JOIN tipo_de_equipo AS t ON t.id_tipo_de_equipo=e.id_tipo_de_equipo
INNER JOIN genero AS g ON  g.id_genero=e.id_genero
INNER JOIN area AS a ON a.id_area = e.id_area
INNER JOIN cargo AS c ON c.id_cargo = e.id_cargo
INNER JOIN origen AS o ON o.id_origen = e.id_origen
INNER JOIN estados_venezuela AS v ON v.id_estados = e.estado ";

$resultado = $mysqli->query($sql1);


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

//Consulta para traer los datos del entregante
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
                                <?php
                                    foreach ($resultado6 as $fila) :
                                
                                ?>
                                <li><a class="dropdown-item"
                                        href="report/reportebeneficiarioapoyo.php?id=<?php echo $fila['id_origen'];?>"
                                        target="_blank"><?php echo $fila['origen'];?></a></li>
                                <?php
                                    endforeach;
                                ?>
                                <li><a class="dropdown-item" href="report/reportebeneficiarioall.php"
                                        target="_blank">Todos</a></li>

                            </div>
                        </div>
                        <?php
                                    switch ($rol) {
                                        case 1:    
                                                echo '
                                                                                            
                                                <div class="btn-group dropright">
                                                    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                    <img src="img/svg/beneplus.svg " alt="Industrias Canaima" width="15" height="15">
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
                                                        <a class="btn" data-toggle="modal" data-target="#modalJornada">Jornadas Especiales</a>
                                                    </li>
                                                    </div>
                                                </div>
                                                                    
                                                ';
                                            break;
                                        case 3:
                                                echo '
                                                     <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalBene"><img src="img/svg/benelinea.svg " alt="Industrias Canaima" width="15" height="15">  Registrar Beneficiario</a>
                                                ';
                                            break;
                                    }

                                ?>

                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Beneficiario</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>IC</th>
                                            <th>Nombre del Beneficiario</th>
                                            <th>Cedula</th>
                                            <th>Edad</th>
                                            <th>Genero</th>
                                            <th>Fecha de Nacimiento</th>
                                            <th>Area</th>
                                            <th>Cargo</th>
                                            <th>Nombre del Representante</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Estado</th>
                                            <th>Municipio</th>
                                            <th>Dirección</th>
                                            <th>Posee Discapacidad o Condición</th>
                                            <th>Descripcion de Discapacidad</th>
                                            <th>Tipo de dispositivo</th>
                                            <th>Modelo</th>
                                            <th>Origen</th>
                                            <?php
                        switch($rol){
                               case 1:
                                echo ' <th>Opciones</th> ';
                               break;
                               case 3:
                                echo ' <th>Opciones</th> ';
                               break;
                            }
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = $resultado->fetch_assoc()) :
                                        ?>
                                        <tr>
                                            <td><?php echo $row['ic']; ?></td>
                                            <td><?php echo $row['nombre_del_beneficiario']; ?></td>
                                            <td><?php echo $row['cedula']; ?></td>
                                            <td><?php echo $row['edad']; ?></td>
                                            <td><?php echo $row['genero']; ?></td>
                                            <td><?php echo $row['fecha_de_nacimiento']; ?></td>
                                            <td><?php echo $row['nombre_del_area']; ?></td>
                                            <td><?php echo $row['tipo_de_cargo']; ?></td>
                                            <td><?php echo $row['nombre_del_representante']; ?></td>
                                            <td><?php echo $row['correo']; ?></td>
                                            <td><?php echo $row['telefono']; ?></td>
                                            <td><?php echo $row['estado_nombre']; ?></td>
                                            <td><?php echo $row['municipio']; ?></td>
                                            <td><?php echo $row['direccion']; ?></td>
                                            <td><?php echo $row['posee_discapacidad_o_condicion']; ?></td>
                                            <td><?php echo $row['descripcion_discapacidad_condicion']; ?></td>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['modelo']; ?></td>
                                            <td><?php echo $row['origen']; ?></td>
                                            <?php
                           switch($rol){
                                  case 1:
                                    echo '  <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu">

                                                            <a class="dropdown-item btn btn-warning" data-toggle="modal" data-target="#editBene'.$row['id_datos_del_entregante'].'" href="#"><img src="img/svg/editar.svg " alt="Industrias Canaima" width="15" height="15"> Editar</a>
                                                            <a class="dropdown-item btn btn-danger" href="eliminarbeneficiario.php?id='.$row['id_datos_del_entregante'].'"><img src="img/svg/eliminar.svg " alt="Industrias Canaima" width="15" height="15"> Eliminar</a>
                                                            <a class="dropdown-item btn btn-warning" data-toggle="modal" data-target="#modalDispo'.$row['id_datos_del_entregante'].'" href="#"><img src="img/svg/circulorelleno.svg " alt="Industrias Canaima" width="15" height="15"> Agregar</a>
                                                            </div>
                                                            </div>
                                                            </td>';
                                                            
                                  break;
                                  case 3:
                                    echo '  <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Opciones
                                        </button>
                                        <div class="dropdown-menu">

                                            <a class="dropdown-item btn btn-warning" data-toggle="modal" data-target="#modalDispo'.$row['id_datos_del_entregante'].'" href="#"><img src="img/svg/editar.svg " alt="Industrias Canaima" width="15" height="15"> Agregar</a>
                                            </div>
                                            </div>
                                            </td>';
                                    break;
                                }
                        ?>


                                            <?php
                            include "modalEditBene.php";
                            include "modalDeRegistroDis.php";


                            endwhile;
                        ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal de registro -->

                    <?php 
                    include "modal/modalBene.php";
                    include "modal/modalApoyoInst.php";
                    include "modal/modalTrabajador.php";
                    include "modal/modalJornadaEsp.php";
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