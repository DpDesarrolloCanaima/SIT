<?php 
//Requerimos las funciones necesarias para evitar caracteres especiales.
require "function.php";
//Comprobamos que el envio del formulrio
if ($_POST) {
    //Obtenemos todos los valores necesarios enviados mediante el formulario
  $editapoyo = limpiarDatos($_POST['id_apoyo']);
  $ic = limpiarDatos($_POST['ic']);
  $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
  $documento = limpiarDatos($_POST['documento']);
  $nombreIntitucion = limpiarDatos($_POST['nombre_de_institucion']);
  $areainsti = limpiarDatos($_POST['areainsti']);
  $cargoinsti = limpiarDatos($_POST['cargoinsti']);
  $correo = limpiarDatos($_POST['correoApoyo']);
  $telefono = limpiarDatos($_POST['phone']);
  $estado = limpiarDatos($_POST['estado']);
  $municipio = limpiarDatos($_POST['municipio']);
  $direccion = limpiarDatos($_POST['direccion']);
  $origen = limpiarDatos($_POST['origen']);
    //Llamamos al archivo que continene la conexion
  require "config/conexionProvi.php";
    //Realizamos nuestra consulta de actualizacion de datos
  $sql = "UPDATE datos_del_entregante SET ic = '$ic', nombre_del_beneficiario = '$nombreIntitucion', tipo_documento = '$tipoDocumento', cedula = '$documento', areainsti = '$areainsti', cargoinsti = '$cargoinsti', correo = '$correo', telefono = '$telefono', estado = '$estado', municipio = '$municipio', direccion =  '$direccion', id_origen = '$origen' WHERE id_datos_del_entregante = $editapoyo ";
    //Guardamos su valor en una variable
  $resultado = $mysqli->query($sql);
    //Comprobamos que la consulta haya sido realizada y su respectiva respuesta positiva o negativa
  if ($resultado) {
    //Mensaje si la consulta resulta exitosa
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

            location.assign('listadeapoyo.php');

          });
});
    </script>";
  }else {
    //Mensaje si la consulta resulta negativa
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'error',
            title: 'El registro no fue actualizado ',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK',
            timer: 1500
          }).then(() => {

            location.assign('listadeapoyo.php');

          });
});
    </script>";
  }
}



?>