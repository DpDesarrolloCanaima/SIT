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
                        title: 'Debe ingresar un IC valido, solo digitos.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 3000
                    }).then(() => {

                        location.assign('listajornadas.php');

                    });
            });
                </script>
                
        ";
    }
    $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
    if ($tipoDocumento != 4 || $tipoDocumento == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El tipo de documento fue modificado.',
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
    if (!preg_match("/\b/", $documento)) {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Debe ingresar un solo digitos.',
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
    $NombreInstitucionJor = limpiarDatos($_POST['nombre_de_institucion_jornada']);
    if (!preg_match("/^[a-zA-Z\s]{3,80}/", $NombreInstitucionJor)) {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El nombre de la institucion no cumple con el formato solicitado.',
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
    $fechaJornada = limpiarDatos($_POST['fechaJornada']);
    if ($fechaJornada == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Debe ingresar una fecha.',
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
    $correoJornada = limpiarDatos($_POST['correoJornada']);
    if (!preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $correoJornada)) {
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
    $telefonoJornada = limpiarDatos($_POST['phone']);
    if (!preg_match("/\b/" , $telefonoJornada)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar telefono de solo digitos.',
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
    }elseif (!preg_match("/[0-9]{11}/", $telefonoJornada)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar telefono valido.',
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
    $estadoJornada = limpiarDatos($_POST['estado']);
    if ($estadoJornada == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar un estado.',
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
    $municipioJornada = limpiarDatos($_POST['municipio']);
    if (!preg_match("/^[a-zA-Z\s]{3,80}/", $municipioJornada)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar municipio con el formato valido.',
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
    $direccionJornada = limpiarDatos($_POST['direccion']);
    if ($direccionJornada == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar una direccion.',
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
    $origen = limpiarDatos($_POST['origen']);
    if ($origen != 4 || $origen == "") {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El origen fue modificado.',
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

    
    // Datos complementarios para el registro de la jornada.
    $edad = 0;
    $id_genero = 1;
    $id_area = 1;
    $id_cargo = 1;
    $nombreRepresentante = "Industria Canaima c.a";
    $dispcacidad = "no";
    $descripcionDis = "No posee";

    $sql = "INSERT INTO datos_del_entregante (ic, nombre_del_beneficiario, tipo_documento, cedula, edad, Id_genero, fecha_de_nacimiento, id_area,  id_cargo,  nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion, id_origen) VALUES ('$ic', '$NombreInstitucionJor','$tipoDocumento', '$documento', '$edad', '$id_genero','$fechaJornada', '$id_area', '$id_cargo',  '$nombreRepresentante', '$correoJornada', '$telefonoJornada', '$estadoJornada', '$municipioJornada', '$direccionJornada', '$dispcacidad', '$descripcionDis', '$origen')";

    $resultado = $mysqli->query($sql);

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

                location.assign('listajornadas.php');

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

                location.assign('listajornadas.php');

             });
    });
        </script>";
    }
}
?>