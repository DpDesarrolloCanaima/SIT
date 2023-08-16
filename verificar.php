<?php


if ($_POST) {
  require "function.php";
  
$observacion = $_POST['observaciones'];
$comprobacion = implode(',', $_POST['comprobaciones']);
$estatus =limpiarDatos($_POST['id_status']);
$responsable = limpiarDatos($_POST['responsable']);
$id_roles = limpiarDatos($_POST['id_roles']);
$idDispo = limpiarDatos($_POST['id_dispositivo']);

require "config/conexionProvi.php";
$sql = "UPDATE datos_del_dispotivo SET id_estatus = '$estatus',  observaciones = '$observacion', responsable = '$responsable', comprobaciones = '$comprobacion', id_roles = '$id_roles'  WHERE id_datos_del_dispositivo = $idDispo"; 

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
}

?>