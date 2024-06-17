<?php 

session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: index.php");
}else{
    if ($_SESSION['rol'] != 3) {
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
                        <h1 class="mt-4">Sistema de Inventario y Trazabilidad | Produccion</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Armador | Inicio</li>
                        </ol>
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
