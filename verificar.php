<?php

require "config/conexionProvi.php";

session_start();

if (!isset($_SESSION['id_usuarios']) OR !isset($_GET['Observacion'])) {
    header("Location: index.php");
    session_destroy();
}

$observacionT = $mysqli->real_escape_string($_GET['Observacion']);
$comprobacion = implode(',', $_POST['comprobaciones']);
$estatus = $mysqli->real_escape_string($_GET['id_status']);
$responsable = $mysqli->real_escape_string($_GET['responsable']);
$id_roles = $mysqli->real_escape_string($_GET['id_roles']);
$idDispo = $mysqli->real_escape_string($_GET['id_dispositivo']);


//$sql = "UPDATE datos_del_dispotivo SET id_estatus = ".$estatus.",  observaciones = '".$observacionT."', responsable = '".$responsable."', id_roles = '".$id_roles."'  WHERE id_datos_del_dispositivo = ".$_SESSION['lastId']; 

$sql = "UPDATE datos_del_dispotivo SET id_estatus = ".$estatus.",  observaciones = '".$observacionT."', comprobaciones = '".$comprobacion."' responsable = '".$responsable."', id_roles = '".$id_roles."'  WHERE id_datos_del_dispositivo = ".$idDispo; 

$resultado = $mysqli->query($sql);

if ($resultado) {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Se realizaron los cambios',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then(() => {
            location.assign('detalles.php?id=".$idDispo."');
          });
});
    </script>";
}else {
    echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'No se realizaron los cambios',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detalles.php?id=".$idDispo."');
              });
    });
        </script>";
}

//header("Location: verificador.php");
?>