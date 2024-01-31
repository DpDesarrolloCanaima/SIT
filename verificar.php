<?php

if ($_POST) {
  require "function.php";
$idDispo = limpiarDatos($_POST['id_dispositivo']);
$observacion = $_POST['observaciones'];
if ($observacion == "") {
  echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar observaciones.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detalles.php');
              });
    });
        </script>";
}
$comprobacion = implode(',', $_POST['comprobaciones']);
$estatus =limpiarDatos($_POST['id_status']);
if ($estatus != 5) {
  echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El estatus no es lo indicado.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detalles.php');
              });
    });
        </script>";
}
$responsable = limpiarDatos($_POST['responsable']);
if ($responsable == "") {
  echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'No existe ningun responsable',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detalles.php');
              });
    });
        </script>";
}
$id_roles = limpiarDatos($_POST['id_roles']);
if ($id_roles == "") {
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
                location.assign('detalles.php');
              });
    });
        </script>";
}

require "config/conexionProvi.php";

// Realizamos una consulta para conocer cual es el usuario que esta realizando la reparacion.
$sqlResponsable = "SELECT usuario FROM usuarios WHERE id_usuario = $responsable AND id_roles = 5";
// Ejecutamos la consulta para obtener la respuesta
  $respuestaResponsable = $mysqli->query($sqlResponsable);
  //Nos traemos el resultado de esa consulta 
  while ($row2 = $respuestaResponsable->fetch_assoc()) {
          $nombreUsuario = $row2["usuario"];
      }
// Guardamos en una variable el resultado de esa consulta.
$responsableVerificador = $nombreUsuario;

$sql = "UPDATE datos_del_dispotivo SET id_estatus = '$estatus',  observaciones_verificador = '$observacion', responsable = '$responsable', responsable_verificador = '$responsableVerificador', comprobaciones = '$comprobacion',coordinador = 6, id_roles = '$id_roles' WHERE id_datos_del_dispositivo = $idDispo"; 

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