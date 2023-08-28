<?php
    require "function.php";
   
if ($_POST) {
    $usrId = limpiarDatos(htmlspecialchars($_POST['usuarioid']));
    $idDispositivo = limpiarDatos(htmlspecialchars($_POST['idDispositivo']));
    $tipo = limpiarDatos(htmlspecialchars($_POST['tipo']));
    $rol = limpiarDatos(htmlspecialchars($_POST['rol']));

    require "config/conexionProvi.php";

    $sql = "UPDATE datos_del_dispotivo SET responsable = $usrId, id_estatus = id_estatus + 1, id_roles=$rol WHERE id_datos_del_dispositivo = " . $idDispositivo;

   $result = mysqli_query($mysqli, $sql);

    if ($result) {
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
                location.assign('asignar.php?tipo=$tipo');
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
                location.assign('asignar.php?tipo=$tipo');
              });
    });
        </script>";
    }
}



?>