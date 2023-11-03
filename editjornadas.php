<?php
//Requerimos las funciones necesarias para evitar caracteres especiales.
require "function.php";
//Comprobamos que el envio del formulrio
if ($_POST) {
    //Obtenemos todos los valores necesarios enviados mediante el formulario
    $editjornadas = limpiarDatos($_POST['id_jornada']);
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
                        location.assign('listajornadas.php');
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
                        location.assign('listajornadas.php');
                    });
            });
                </script>
                
        ";
    }
    $nombreInstitucion = limpiarDatos($_POST['nombre_de_institucion_jornada']);
    if (!preg_match("/^[a-zA-Z\s]{3,80}/", $nombreInstitucion)) {
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
                        location.assign('listajornadas.php');
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
                        location.assign('listajornadas.php');
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
                location.assign('listajornadas.php');
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
                location.assign('listajornadas.php');
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
                location.assign('listajornadas.php');
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
                location.assign('listajornadas.php');
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
                location.assign('listajornadas.php');
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
                location.assign('listajornadas.php');
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
                        location.assign('listajornadas.php');
                    });
            });
                </script>
                
        ";
    }
    require "config/conexionProvi.php";
    
    // Realizamos la consulta a la base de datos.
    $sql = "UPDATE datos_del_entregante SET ic = '$ic', nombre_del_beneficiario = '$nombreInstitucion', tipo_documento = '$tipoDocumento', cedula = '$documento', fecha_de_nacimiento = '$fechaJornada', correo = '$correoJornada', telefono = '$telefonoJornada', estado = '$estadoJornada', municipio = '$municipioJornada', direccion = '$direccionJornada', id_origen = '$origen' WHERE id_datos_del_entregante = $editjornadas";

    $resultado = $mysqli->query($sql);
    if ($resultado) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Modificación Realizada.',
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
    }else {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Fallo al modificar el registro.',
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

}

?>