<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
require "function.php";

if ($_POST) {
    $ic = limpiarDatos($_POST['ic']);
    if (!preg_match("/\b/", $ic)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El IC no cumple el formato',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 3000
              }).then(() => {

                location.assign('listatrabajadores.php');

              });
    });
        </script>
        
        ";
    }
    $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
    if ($tipoDocumento != 1 || $tipoDocumento == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El tipo de documento fue modificado',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 3000
              }).then(() => {

                location.assign('listatrabajadores.php');

              });
    });
        </script>
        
        ";
    }
    $documento = limpiarDatos($_POST['documento']);
    if (!preg_match("/\b/",$documento)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El documento no cumple con el formato solicitado',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 3000
              }).then(() => {

                location.assign('listatrabajadores.php');

              });
    });
        </script>
        
        ";
        if (!preg_match("/[0-9]{8}/", $documento)) {
            echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El documento no cumple con el formato solicitado',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
        }
    }
    $nombreInstitucion = limpiarDatos($_POST['nombre_del_beneficiario']);
    if (!preg_match("/^[a-zA-Z\s]{3,80}/", $nombreInstitucion)) {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El nombre de la institucion no cumple con el formato solicitado',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }
    $generoTrabajador = limpiarDatos($_POST['genero']);
    if ($generoTrabajador == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Debe seleccionar un genero.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }
    $areaTrabajador = limpiarDatos($_POST['area']);
    if ($areaTrabajador == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Debe seleccionar un area',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }
    $cargoTrabajador = limpiarDatos($_POST['cargo']);
    if ($cargoTrabajador == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Debe seleccionar un cargo',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }
    $correoTrabajador = limpiarDatos($_POST['correoBene']);
    if (!preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $correoTrabajador)) {
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
    $telefonoTrabajador = limpiarDatos($_POST['phone']);
    if (!preg_match("/\b/", $telefonoTrabajador)) {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El telefono debe ser de solo digitos.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }elseif (!preg_match("/[0-9]{11}/", $telefonoTrabajador)) {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El telefono no cumple con los caracteres necesarios.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }
    $estado = limpiarDatos($_POST['estado']);
    if ($estado == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Debe ingresar un estado',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }
    $municipio = limpiarDatos($_POST['municipio']);
    if (!preg_match("/^[a-zA-Z\s]{10,60}/", $municipio)) {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El municipio no cumple con el formato solicitado',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }
    $direccion = limpiarDatos($_POST['direccion']); 
    if ($direccion == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Debe ingresar una direccion',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }
    $discapacidad = limpiarDatos($_POST['discapacidad_o_condicion']);
    if ($discapacidad == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Debe seleccionar un valor (Si o No)',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }
    $descripcionDisca = limpiarDatos($_POST['descripcion_discapacidad']);
    if ($descripcionDisca == "") {
        $descripcionDisca = "No posee";
    }
    $origen = limpiarDatos($_POST['origen']);
    if ($origen != 3 || $origen == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El origen fue modificado',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listatrabajadores.php');

                    });
            });
                </script>
                
        ";
    }

    // Datos complementarios para el registro
    $edad = 0;
    $fechaNac = date('00-00-0000');
    $nombreRepre = "Industria Canaima";
    
    $sql = "INSERT INTO datos_del_entregante (ic, nombre_del_beneficiario, tipo_documento, cedula, edad, Id_genero, fecha_de_nacimiento, id_area, id_cargo, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion, id_origen) VALUES ('$ic', '$nombreInstitucion', '$tipoDocumento','$documento','$edad','$generoTrabajador','$fechaNac','$areaTrabajador','$cargoTrabajador','$nombreRepre', '$correoTrabajador','$telefonoTrabajador', '$estado', '$municipio', '$direccion', '$discapacidad', '$descripcionDisca', '$origen')";

    $resultado = $mysqli->query($sql);

    if ($resultado) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El trabajador se registro correctamente',
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