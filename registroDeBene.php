<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
require "function.php";

if ($_POST['registrar']) {
    header("Location: dispositivoEntrada.php");
} else {

    $nombre_del_beneficiario = limpiarDatos($_POST['nombre_del_beneficiario']);
    if (!preg_match("/^[a-zA-Z\s]{3,80}/", $nombre_del_beneficiario)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El nombre del beneficiario no coincide con el formato solicitado',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }

    $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
    if ($tipoDocumento != 1) {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El tipo de documento fue modificado',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }
    $cedula = limpiarDatos($_POST['documento']);
    if (!preg_match("/\b/", $cedula)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Debe ingresar la cedula en solo digitos.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
        if (!preg_match("/[0-9]{8}/", $cedula)) {
          echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'La cedula no cumple con el formato deseado.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 1500
                  }).then(() => {

                    location.assign('listadebeneficiario.php');

                  });
        });
            </script>";
        }
    }
    $edad = limpiarDatos($_POST['edadBene']);
    if (!preg_match("/\b/", $edad)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'La edad debe de ser un digito.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
        if (!preg_match("/[0-9]{2}/", $edad)) {
          echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script language='JavaScript'>
          document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                  icon: 'success',
                  title: 'La edad no cumple el formato solicitado',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'OK',
                  timer: 1500
                }).then(() => {
  
                  location.assign('listadebeneficiario.php');
  
                });
      });
          </script>";
        }
    }
    
    $genero = limpiarDatos($_POST['genero']);
    if ($genero == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Ingrese el genero del beneficiario',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }
    
    $fecha_nac = limpiarDatos($_POST['fecha_de_nacimiento']);
    if ($fecha_nac == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Ingrese la fecha de nacimiento del beneficiario',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }

    $nombre_del_representante = limpiarDatos($_POST['nombre_del_representante']);
    if (!preg_match("/^[a-zA-Z\s]{3,80}/", $nombre_del_representante)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El nombre del representante no cumple con el formato solicitado',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }
    $correo = limpiarDatos($_POST['correoBene']);
    if (!preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $correo)) {
      echo "
              <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
              <script language='JavaScript'>
              document.addEventListener('DOMContentLoaded', function() {
                  Swal.fire({
                      icon: 'error',
                      title: 'El correo no cumple con el formato solicitado',
                      showCancelButton: false,
                      confirmButtonColor: '#3085d6',
                      confirmButtonText: 'OK',
                      timer: 3000
                  }).then(() => {
                      location.assign('Listadeapoyo.php');
                  });
          });
              </script>
              
      ";
  }
    $telefono = limpiarDatos($_POST['phone']);
    if (!preg_match("/\b/", $telefono)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El telefono debe ser solo digitos.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }elseif (!preg_match("/[0-9]{11}/",$telefono)) {
      echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El telefono cumple con los caracteres requeridos',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }
    $estado = limpiarDatos($_POST['estado']);
    if ($estado == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Ingrese el Estado',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }
    $municipio = limpiarDatos($_POST['municipio']);
    if (!preg_match("/^[a-zA-Z\s]{10,60}/", $municipio)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Ingrese el municipio',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }
    $direccion = limpiarDatos($_POST['direccion']);
    if ($direccion == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Ingrese la direccion',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }
    $discapacidadCondicion = limpiarDatos($_POST['discapacidad_o_condicion']);
    if ($discapacidadCondicion == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Seleccione SI o NO',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }
    $descripcionDiscapacidadCondicion = limpiarDatos($_POST['descripcion_discapacidad']);
    if ($descripcionDiscapacidadCondicion == "") {
       $descripcionDiscapacidadCondicion = "No posee";
    }
    $origen = limpiarDatos($_POST['origen']);
    if ($origen != 2 || $origen == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Ingrese el origen',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    }
    //Datos complementarios
    $idarea = 1;
    $idcargo = 1;
    $conex = $mysqli;
    $sql = "INSERT INTO datos_del_entregante (nombre_del_beneficiario, tipo_documento, cedula, edad, Id_genero, fecha_de_nacimiento, id_area, id_cargo, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion,id_origen) VALUES ('$nombre_del_beneficiario', '$tipoDocumento', '$cedula', '$edad', '$genero', '$fecha_nac','$idarea','$idcargo','$nombre_del_representante','$correo','$telefono','$estado','$municipio','$direccion','$discapacidadCondicion','$descripcionDiscapacidadCondicion','$origen');";
    
    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Se registro correctamente el Beneficiario',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {

                location.assign('listadebeneficiario.php');

              });
    });
        </script>";
    } else {
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script language='JavaScript'>
      document.addEventListener('DOMContentLoaded', function() {
          Swal.fire({
              icon: 'error',
              title: 'Fallo al registrar el Beneficiario',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK',
              timer: 1500
            }).then(() => {

              location.assign('listadebeneficiario.php');

            });
  });
      </script>";
    }
    }    


													