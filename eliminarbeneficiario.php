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

//obtener el ID del beneficiario a eliminar
$idbeneficiario = $_REQUEST['id'];

//Realizamos la consulta para eliminar el benificiario
$sql = "DELETE FROM datos_del_entregante WHERE id_datos_del_entregante = '".$idbeneficiario."'";

// Obtenemos la respuesta de esa consulta
$respuesta = $mysqli->query($sql);

// Comprobamos si la respuesta se realizo o no y mostramos su respectivo mensaje
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

            location.assign('listadebeneficiario.php');

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

            location.assign('listadebeneficiario.php');

         });
});
    </script>";
}


?>