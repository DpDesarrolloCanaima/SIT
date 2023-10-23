<?php
require "config/conexionProvi.php";
session_start();
if (!isset($_SESSION['id_usuarios'])) {
	header("Location:index.php");
}else{
    if ($_SESSION['id_roles'] != 1) {
        header("Location: index.php");
    }
}

$iddispo = $_REQUEST['id'];
$sql = "DELETE FROM datos_del_dispotivo WHERE id_datos_del_dispositivo = '".$iddispo."'" ;
$respuesta = mysqli_query($mysqli, $sql);

if ($respuesta) {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'El registro fue actualizado correctamente',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK',
            timer: 1500
          }).then(() => {

            location.assign('dispositivosentrada.php');

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
            title: 'Algo salio mal. Intenta de nuevo',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK',
            timer: 1500
          }).then(() => {

            location.assign('dispositivosentrada.php');

         });
});
    </script>";
}






?>