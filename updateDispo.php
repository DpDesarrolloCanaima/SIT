<?php
require "function.php";

if ($_POST) {
    $idEditDispo = $_POST['idEditDispo'];
    if ($idEditDispo == "") {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'No existe el identificador unico.',
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
    $tipoDeEquipoEdit = limpiarDatos($_POST['tipo_de_equipo']);
    if ($tipoDeEquipoEdit == "") {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Seleccione un tipo de equipo.',
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
    $SerialEquipoEdit = limpiarDatos($_POST['serial_del_equipo']);
    if (!preg_match("/[a-zA-Z]{18}/", $SerialEquipoEdit)) {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El serial del equipo no cumple con los caracteres necesarios.',
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
    $serialCargadorEdit = limpiarDatos($_POST['serial_cargador']);
    if (!preg_match("/[a-zA-Z]{18}/", $serialCargadorEdit)) {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El serial del cargador no cumple con los caracteres necesarios.',
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
    $fechaRecepEdit = $_POST['fecha_de_recepcion'];
    if($fechaRecepEdit == ""){
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar la fecha de recepcion.',
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
    $estadoDeRecepcionEdit = limpiarDatos($_POST['estado_recepcion']);
    if ($estadoDeRecepcionEdit == "") {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Seleccione un estado de recepción.',
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
    $fallaEdit = limpiarDatos($_POST['falla']);
    if ($fallaEdit == "") {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Seleccione una falla del equipo.',
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
    $observacionesEdit = limpiarDatos($_POST['observaciones']);
    if ($observacionesEdit == "") {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar observaciones del equipo.',
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
    $origenEdit = limpiarDatos($_POST['origen']);
    if ($origenEdit == "" 
        || $origenEdit != 1 
        || $origenEdit != 2 
        || $origenEdit != 3 
        || $origenEdit != 4 
        || $origenEdit != 5) {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El origen fue modificado.',
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
    $estatusEdit = limpiarDatos($_POST['estatus']);
    if ($origenEdit == "" 
        || $estatusEdit != 1 
        || $estatusEdit != 2 
        || $estatusEdit != 3 
        || $estatusEdit != 4 
        || $estatusEdit != 5
        || $estatusEdit != 6
        || $estatusEdit != 7) {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El estatus fue modificado.',
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
    $beneficiarioEdit = limpiarDatos($_POST['beneficiario']);
    if ($beneficiarioEdit == "") {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El beneficiario no existe.',
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
    $idRoledit = limpiarDatos($_POST['id_roles']);
    if ($idRoledit == "") {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El identificador fue modificado.',
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
    
    require "config/conexionProvi.php";
    

    /** NUEVA CONSULTA */

    $sql = "UPDATE datos_del_dispotivo` SET `id_tipo_de_dispositivo`='$tipoDeEquipoEdit',`serial_equipo`='$SerialEquipoEdit',`serial_de_cargador`='$serialCargadorEdit',`fecha_de_recepcion`='$fechaRecepEdit',`estado_recepcion_equipo`='$estadoDeRecepcionEdit',`observaciones_analista`='$observacionesEdit', `id_roles`='$idRoledit',`id_origen`='$origenEdit',`id_estatus`='$estatusEdit',`id_motivo`='$fallaEdit',`id_datos_del_beneficiario`='$beneficiarioEdit' WHERE id_datos_del_dispositivo = $idEditDispo AND id_datos_del_beneficiario = $beneficiarioEdit";

    $resultado = mysqli_query($mysqli, $sql);

    if ($resultado) {
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
}

?>