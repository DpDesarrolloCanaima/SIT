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
    if ($tipoDocumento == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El tipo de documento no cumple el formato',
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
        if (!preg_match("/[0-9]{9}/", $documento)) {
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
    if (!preg_match("/[a-zA-Z\s]{3,80}/", $nombreInstitucion)) {
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
    $areaTrabajador = limpiarDatos($_POST['area']);
    $cargoTrabajador = limpiarDatos($_POST['cargo']);
    $correoTrabajador = limpiarDatos($_POST['correoBene']);
    $telefonoTrabajador = limpiarDatos($_POST['phone']);
    $estado = limpiarDatos($_POST['estado']);
    $municipio = limpiarDatos($_POST['municipio']);
    $discapacidad = limpiarDatos($_POST['discapacidad_o_condicion']);
    $descripcionDisca = limpiarDatos($_POST['descripcion_discapacidad']);
    $direccion = limpiarDatos($_POST['direccion']); 
    $origen = limpiarDatos($_POST['origen']);

    // Datos complementarios para el registro
    $edad = 0;
    $fechaNac = date('00-00-0000');
    $areainsti = "Industria canaima";
    $cargoinsti = "Industria canaima";
    $nombreRepre = "Industria Canaima";
    
    $sql = "INSERT INTO datos_del_entregante (ic, nombre_del_beneficiario, tipo_documento, cedula, edad, Id_genero, fecha_de_nacimiento, id_area, areainsti, id_cargo, cargoinsti, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion, id_origen) VALUES ('$ic', '$nombreInstitucion', '$tipoDocumento','$documento','$edad','$generoTrabajador','$fechaNac','$areaTrabajador','$areainsti','$cargoTrabajador','$cargoinsti','$nombreRepre', '$correoTrabajador','$telefonoTrabajador', '$estado', '$municipio', '$direccion', '$discapacidad', '$descripcionDisca', '$origen')";

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