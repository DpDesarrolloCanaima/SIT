<?php
    if (isset($_POST)) {
        require "conexion.php";
        require "function.php";
        //$sql="INSERT INTO comprobaciones (comprobaciones) VALUES ('".implode(',',$_POST['comprobaciones'])."')";
        $observaciones = limpiarDatos($_POST['observaciones']);
        $estatus = limpiarDatos($_POST['id_status']);
        $responsable = limpiarDatos($_POST['responsable']);
        $rol = limpiarDatos($_POST['id_roles']);
        
        $comprobacion = implode(',', $_POST['comprobaciones']);

        $sql = "UPDATE datos_del_dispotivo SET observaciones = ".$observaciones.", id_estatus = ".$estatus.", responsable = ".$responsable.", comprobaciones = ".$comprobacion." ";
        $resultado = $conexion->query($sql);

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
                    location.assign('detalles.php');
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
                    location.assign('detalle.php');
                  });
        });
            </script>";
        }
    }
?>