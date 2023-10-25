<?php

if ($_POST) {
    require "function.php";
$observacionT = limpiarDatos($_POST['observaciones']);
$estatus = limpiarDatos($_POST['id_status']);
$responsable = limpiarDatos($_POST['responsable']);
$id_roles = limpiarDatos($_POST['id_roles']);
$idDispo = limpiarDatos($_POST['id_dispositivo']);

require "config/conexionProvi.php";

$sql = "SELECT id_usuarios FROM usuarios WHERE id_roles = 6";

$resultado = $mysqli->query($sql);

$row = $resultado->fetch_assoc();

$sql = "UPDATE datos_del_dispotivo SET id_estatus = '$estatus',  observaciones_tecnico = '$observacionT', responsable = ".$row['id_usuarios'].", id_roles = '$id_roles'  WHERE id_datos_del_dispositivo = $idDispo"; 

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
            location.assign('detalletecnico.php?id=".$idDispo."');
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
                location.assign('detalletecnico.php?id=".$idDispo."');
              });
    });
        </script>";
}
}
?>