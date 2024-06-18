<?php 

session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
}else{
    if ($_SESSION['rol'] != 4) {
        header("Location: 404.php");
    }
}

$cedula_usuario =$_SESSION['cedula'];
$usuario = $_SESSION['usuario'];
$rol = $_SESSION['rol'];

date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d");

include "content/inc/header.php";
include "content/inc/navbar.php";
?>
        
        <div id="layoutSidenav">
            <?php include "content/inc/sidebar.php";?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Sistema de Inventario y Trazabilidad | Operaciones</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Ensamblador</li>
                        </ol>
                        <div class="container my-4">
                            <div class="row p-4">
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="" id="RegistroEquipoTablet">
                                               <div class="form-group">
                                                <label for="">Buscar Dispositivo</label>
                                                <br>
                                                <input type="text" name="SerialEquipo" id="SerialEquipo" class="form-control">
                                                <input type="hidden" name="fechaDeEquipo" id="fechaDeEquipo" value="<?php echo $fecha?>">
                                               </div>
                                                <div class="my-3">
                                                    <input type="button" class="btn btn-success" onclick="buscarEquipo()" value="Enviar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                    
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-center">Identificador</td>
                                                <td class="text-center">Cara B</td>
                                                <td class="text-center">Serial Memoria Ram</td>
                                                <td class="text-center">Serial Cargador</td>
                                                <td class="text-center">Serial Tarjeta Madre</td>
                                                <td class="text-center">Serial Pantalla</td>
                                                <td class="text-center">Serial Disco Duro</td>
                                                <td class="text-center">Serial Bateria</td>
                                                <td class="text-center">Opciones</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
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
    </body>
</html>
