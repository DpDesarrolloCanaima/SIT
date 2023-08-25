<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
require "function.php";

if ($_POST['registrar']) {
    header("Location: dispositivoEntrada.php");
} else {

    $ic = limpiarDatos($_POST['ic']);
    $sqlvalidation = "SELECT ic FROM datos_del_entregante WHERE ic = ". $ic;
    $resultvalidation = mysqli_query($mysqli, $sqlvalidation);

    if (mysqli_num_rows($resultvalidation)>0) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El beneficiario ya existe',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('listadebeneficiario.php');
              });
    });
        </script>";
    }else {
        $ic = limpiarDatos($_POST['ic']);
    if ($ic == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Ingrese el identificador unico',
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
    $nombre_del_beneficiario = limpiarDatos($_POST['nombre_del_beneficiario']);
    if ($nombre_del_beneficiario == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Ingrese el nombre del beneficiario',
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
    $cedula = limpiarDatos($_POST['cedulaBene']);
    if ($cedula == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Ingrese la cedula del beneficiario',
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
    $edad = limpiarDatos($_POST['edadBene']);
    if ($edad == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Ingrese la edad del beneficiario',
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
    $area = limpiarDatos($_POST['area']);
    if ($area == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Ingrese el area de trabajo',
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
    $cargo = limpiarDatos($_POST['cargo']);
    if ($cargo == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Ingrese el cargo',
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
    if ($nombre_del_representante == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Ingrese el nomobre del Representante',
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
    if ($correo == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Ingrese el correo del representante',
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
    $telefono = limpiarDatos($_POST['phone']);
    if ($telefono == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Ingrese el telefono del representante',
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
    if ($municipio == "") {
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
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Describa la discapacidad que posee',
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
    $tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
    if ($tipoDeEquipo == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Seleccione el equipo',
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
    $origen = limpiarDatos($_POST['origen']);
    if ($origen == "") {
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

    $conex = $mysqli;
    $sql = "INSERT INTO datos_del_entregante (ic, nombre_del_beneficiario, tipo_documento, cedula, edad, Id_genero, fecha_de_nacimiento, id_area, id_cargo, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion, id_tipo_de_equipo, id_origen) VALUES ('$ic', '$nombre_del_beneficiario', '$tipoDocumento', '$cedula', '$edad', '$genero', '$fecha_nac','$area','$cargo','$nombre_del_representante','$correo','$telefono','$estado','$municipio','$direccion','$discapacidadCondicion','$descripcionDiscapacidadCondicion','$tipoDeEquipo', '$origen');";

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
              icon: 'success',
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
}

													