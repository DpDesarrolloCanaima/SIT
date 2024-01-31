<?php
if ($_POST) {
    require "function.php";
    $fechaEntrega = $_POST['fecha_de_entrega'];
    $fechavacia = date('00-00-0000');
    if ($fechaEntrega == $fechavacia) {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar una fecha valida',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detallesanalista.php');
              });
    });
        </script>";
    }
    $estatus = $_POST['id_status'];
    if ($estatus == 7) {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El estatus no es el correcto',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detallesanalista.php');
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
                title: 'No se realizaron los cambios.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detallesanalista.php');
              });
    });
        </script>";
    }
    $rol = limpiarDatos($_POST['id_roles']);
    if ($rol == "") {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'No se realizaron los cambios.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detallesanalista.php');
              });
    });
        </script>";
    }
    $idDispo = limpiarDatos($_POST['id_dispositivo']);
    if ($idDispo == "") {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'No posee su identificador.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detallesanalista.php');
              });
    });
        </script>";
    }

    require "config/conexionProvi.php";
// SET @usuario_actual =: '.$_SESSION['full_identificacion'].";
        // Realizamos una consulta para conocer cual es el usuario que esta realizando la reparacion.
    $sqlResponsable = "SELECT usuario FROM usuarios WHERE id_usuario = $responsable AND id_roles = 5";
    // Ejecutamos la consulta para obtener la respuesta
      $respuestaResponsable = $mysqli->query($sqlResponsable);
      //Nos traemos el resultado de esa consulta 
      while ($row2 = $respuestaResponsable->fetch_assoc()) {
              $nombreUsuario = $row2["usuario"];
          }
    // Guardamos en una variable el resultado de esa consulta.
    $responsableAnalistaEntrega = $nombreUsuario;
    $sql = "UPDATE datos_del_dispotivo SET fecha_de_entrega = '$fechaEntrega', id_estatus = '$estatus', responsable = '$responsable', responsable_analista_entrega = '$responsableAnalistaEntrega', coordinador = 6, id_roles = '$rol'  WHERE id_datos_del_dispositivo = $idDispo";

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
                location.assign('detallesanalista.php?id=".$idDispo."');
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
                location.assign('detallesanalista.php?id=".$idDispo."');
              });
    });
        </script>";
}
}


?>