<?php
//Requerimos las funciones necesarias para evitar caracteres especiales.
require "function.php";
//Comprobamos que el envio del formulrio
if ($_POST) {
    //Obtenemos todos los valores necesarios enviados mediante el formulario
    $editTrabajador = limpiarDatos($_POST['id_trabajador']);
    $ic = limpiarDatos($_POST['ic']);
    $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
    $documento = limpiarDatos($_POST['documento']);
    $nombre = limpiarDatos($_POST['nombre_del_trabajador']);
    $genero = limpiarDatos($_POST['genero']);
    $idarea = limpiarDatos($_POST['area']);
    $idcargo = limpiarDatos($_POST['cargo']);
    $correo = limpiarDatos($_POST['correoTrabajador']);
    $telefono = limpiarDatos($_POST['phone']);
    $estado = limpiarDatos($_POST['estado']);
    $municipio = limpiarDatos($_POST['municipio']);
    $discapacidad = limpiarDatos($_POST['discapacidad_o_condicion']);
    $descripDisca = limpiarDatos($_POST['descripcion_discapacidad']);
    if ($descripDisca == "") {
        $descripDisca = "No posee discapacidad";
    }
    $direccion = limpiarDatos($_POST['direccion']);
    $origen = limpiarDatos($_POST['origen']);

    //Llamamos al archivo que continene la conexion
    require "config/conexionProvi.php";
    //Realizamos la consulta requerida
    $sql = "UPDATE datos_del_entregante SET ic = '$ic', nombre_del_beneficiario = '$nombre', tipo_documento = '$tipoDocumento', cedula = '$documento', Id_genero = '$genero', id_area = '$idarea', id_cargo = '$idcargo', correo = '$correo', telefono = '$telefono', estado = '$estado', municipio = '$municipio', direccion = '$direccion', posee_discapacidad_o_condicion = '$discapacidad', descripcion_discapacidad_condicion = '$descripDisca', id_origen = '$origen' WHERE id_datos_del_entregante = $editTrabajador ";

    //Obtenemos la respuesta de la consulta
    $resultado = $mysqli->query($sql);

    //Validamos la respuesta de la consulta, si es positivo o negativa
    if ($resultado) {
        //Mensaje si la consulta es Positiva
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

                location.assign('listatrabajadores.php');

              });
    });
        </script>";
    }else {
        //Mensaje si la respuesta es negativa
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

                location.assign('listatrabajadores.php');

             });
    });
        </script>";
    }
}

?>