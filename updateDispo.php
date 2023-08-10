<?php
require "function.php";

if ($_POST) {
    $idEditDispo = $_POST['idEditDispo'];
    $tipoDeEquipoEdit = limpiarDatos($_POST['tipo_de_equipo']);
    $SerialEquipoEdit = limpiarDatos($_POST['serial_del_equipo']);
    $serialCargadorEdit = limpiarDatos($_POST['serial_cargador']);
    $institucionEduEdit = limpiarDatos($_POST['institucion_educativa']);
    $institucionDondeEstudiaEdit = limpiarDatos($_POST['institucion_donde_estudia']);
    $gradoEdit = limpiarDatos($_POST['grado']);
    $fechaRecepEdit = $_POST['fecha_de_recepcion'];
    $estadoDeRecepcionEdit = limpiarDatos($_POST['estado_recepcion']);
    $fechaDeEntregaEdit = limpiarDatos($_POST['fecha_de_entrega']);
    $equipoReincidioEdit = limpiarDatos($_POST['equipo_reincidio']);
    $motivoReincidenciaEdit = limpiarDatos($_POST['motivoReincidencia']);
    $fallaEdit = limpiarDatos($_POST['falla']);
    $observacionesEdit = limpiarDatos($_POST['observaciones']);
    $origenEdit = limpiarDatos($_POST['origen']);
    $estatusEdit = limpiarDatos($_POST['estatus']);
    $beneficiarioEdit = limpiarDatos($_POST['beneficiario']);
    $idRoledit = limpiarDatos($_POST['id_roles']);
    
    require "config/conexionProvi.php";
    $sql = "UPDATE datos_del_dispotivo SET id_tipo_de_dispositivo = '$tipoDeEquipoEdit', serial_equipo = '$SerialEquipoEdit', serial_de_cargador = '$serialCargadorEdit', institucion_educativa = '$institucionEduEdit', institucion_donde_estudia = '$institucionDondeEstudiaEdit', fecha_de_recepcion = '$fechaRecepEdit', estado_recepcion_equipo = '$estadoDeRecepcionEdit', fecha_de_entrega = '$fechaDeEntregaEdit', observaciones = '$observacionesEdit', equipo_reincidio = '$equipoReincidioEdit', motivo_reincidencia = '$motivoReincidenciaEdit', id_roles = '$idRoledit', id_origen = '$origenEdit', id_grado = '$gradoEdit', id_estatus = '$estatusEdit', id_motivo = '$fallaEdit', id_datos_del_beneficiario = '$beneficiarioEdit' WHERE id_datos_del_dispositivo = $idEditDispo";

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