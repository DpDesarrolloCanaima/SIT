<?php 
require "config/conexion.php";
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
}else{
    if ($_SESSION['rol'] != 1) {
        header("Location: 404.php");
    }
}

$usuario = $_SESSION['usuario'];
$rol = $_SESSION['rol'];

include "content/inc/header.php";

include "content/inc/navbar.php";


$sqlPersonas = "SELECT cedula, nombre,telefono, correo_inst FROM persona";
$resultadoPersonas = $conexion->query($sqlPersonas);

// Consulta para traer los diferentes perfiles
$sqlPerfiles = "SELECT id_perfil , tipo FROM perfiles";
$resultadoPerfiles = $conexion->query($sqlPerfiles);
?>
        
        <div id="layoutSidenav">
            <?php include "content/inc/sidebar.php";?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Sistema de Inventario y Trazabilidad | Produccion</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Administrador</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Lista de Personas.
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Correo Institucional</th>
                                            <th>Telefono</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Cedula</th>
                                            <th>Nombre</th>
                                            <th>Correo Institucional</th>
                                            <th>Telefono</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                            while ($rowPersonas = $resultadoPersonas->fetch_assoc()) :
                                        ?>
                                        <tr>
                                            <td><?php echo $rowPersonas['cedula'];?></td>
                                            <td><?php echo $rowPersonas['nombre'];?></td>
                                            <td><?php echo $rowPersonas['correo_inst'];?></td>
                                            <td><?php echo $rowPersonas['telefono'];?></td>
                                            <th>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Opciones
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#AgregarUsuario<?php echo $rowPersonas['cedula'];?>"><i class="bi bi-person-add"></i> Agregar usuario</a></li>
                                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#CambiarArea<?php echo $rowPersonas['cedula'];?>"><i class="bi bi-repeat"></i> Cambiar Area</a></li>
                                                    </ul>
                                                </div>
                                            </th>
                                        </tr>
                                        <?php
                                                include "content/modal/admin/agregarUsuario.php";
                                                include "content/modal/admin/cambiarArea.php";
                                            endwhile;
                                        ?>

                                    </tbody>
                                </table>
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
            include "content/inc/script.php";
        ?>
        <script src="js/register/registrarPersona.js"></script>
        <script src="js/register/registrarUsuario.js"></script>
        <script src="js/update/updateArea.js"></script>
    </body>
</html>
