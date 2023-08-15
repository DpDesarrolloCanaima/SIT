<?php
if ($_POST) {
    require "function.php";
    $fechaEntrega = $_POST['fechaEntrega'];
    $estatus = $_POST['id_status'];
    $responsable = limpiarDatos($_POST['responsable']);
    $rol = limpiarDatos($_POST['id_roles']);
    $idDispo = limpiarDatos($_POST['id_dispositivo']);

    require "config/conexionProvi.php";

    $sql = "UPDATE datos_del_dispositivo SET fecha_de_entrega = '$fechaEntrega', id_estatus = '$estatus', responsable = '$responsable', id_roles = '$rol' WHERE id_datos_del_dispositivo = $idDispo";

    $resultado = mysqli_query($mysql, $sql);

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
                location.assign('detalleanalista?id=".$idDispo.".php');
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
                location.assign('detalleanalista?id=".$idDispo.".php');
              });
    });
        </script>";
}
}


?>