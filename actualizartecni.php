<?php
if ($_GET) {
    require "function.php";
    $idDispo = limpiarDatos($_REQUEST['id']);
    $responsable = limpiarDatos($_REQUEST['responsable']);
    $rol = limpiarDatos($_REQUEST['rol']);
    $estatus = limpiarDatos($_REQUEST['estatus']);

    require "config/conexionProvi.php";

    $sql = "UPDATE datos_del_dispotivo SET responsable = '$responsable', id_roles = '$rol', id_estatus = '$estatus' WHERE id_datos_del_dispositivo = $idDispo"; 

  
    $resultado = mysqli_query($mysqli, $sql);

    if ($resultado) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Se actualizo el estado del equipo correctamente',
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
                    title: 'No se actualizo el estado del equipo correctamente',
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