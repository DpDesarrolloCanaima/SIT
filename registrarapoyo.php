<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
require "function.php";

if ($_POST) {
    $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
    if ($tipoDocumento != 2) {
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
              }).then(() => {
                location.assign('Listadeapoyo.php');
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
              }).then(() => {
                location.assign('Listadeapoyo.php');
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
                    }).then(() => {
                        location.assign('Listadeapoyo.php');
                    });
            });
                </script>
                
        ";
        }
    }
    $nombreInstitucion = limpiarDatos($_POST['nombre_de_institucion']);
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
                    }).then(() => {
                        location.assign('Listadeapoyo.php');
                    });
            });
                </script>
                
        ";
    }
    $correoInsti = limpiarDatos($_POST['correoApoyo']);
    if (!preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $correoInsti)) {
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
                    }).then(() => {
                        location.assign('Listadeapoyo.php');
                    });
            });
                </script>
                
        ";
    }
    $telefonoInsti = limpiarDatos($_POST['phone']);
    if (!preg_match("/\b/", $telefonoInsti)) {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El telefono no cumple con el formato solicitado',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                    }).then(() => {
                        location.assign('Listadeapoyo.php');
                    });
            });
                </script>
                
        ";
        if (!preg_match("/[0-9]{11}/", $telefonoInsti)) {
            echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El telefono no cumple con la cantidad de digitos requerida',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                    }).then(() => {
                        location.assign('Listadeapoyo.php');
                    });
            });
                </script>
                
        ";
        }
    }
    $estadoInsti = limpiarDatos($_POST['estado']);
    if ($estadoInsti == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Debe seleccionar un estado',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                    }).then(() => {
                        location.assign('Listadeapoyo.php');
                    });
            });
                </script>
                
        ";
    }
    $municipio = limpiarDatos($_POST['municipio']);
    if (!preg_match("/[a-zA-Z\s]{10,60}/", $municipio)) {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El municipio no corresponde a los caracteres requeridos',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                    }).then(() => {
                        location.assign('Listadeapoyo.php');
                    });
            });
                </script>
                
        ";
    }
    $direccionInsti = limpiarDatos($_POST['direccion']);
    if ($direccionInsti == "") {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Debe ingresar la direccion',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                    }).then(() => {
                        location.assign('Listadeapoyo.php');
                    });
            });
                </script>
                
        ";
    }
    $origen = limpiarDatos($_POST['origen']);
    if ($origen == "") {
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
                    }).then(() => {
                        location.assign('Listadeapoyo.php');
                    });
            });
                </script>
                
        ";
    }

    //Datos complementarios para el registro
    $edad = 0;
    $id_genero = 1;
    $fechaNac = date('00-00-0000');
    $id_area = 1;
    $id_cargo = 1;
    $nombreRepre = limpiarDatos($_POST['nombre_de_institucion']);
    $discapacidad = "no";
    $descripcionDis = "no posee";
    $consejoComunal = "no posee";
    $mesaTelecomunicaciones = "No posee";
    $institucionEntrega = "No posee";
    $institucionEstudia = "no posee";
    $responsableEntrega = "No posee";

    $sql = "INSERT INTO datos_del_entregante (nombre_del_beneficiario, tipo_documento, cedula, edad, Id_genero, fecha_de_nacimiento, id_area, id_cargo,  nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion,consejo_comunal, mesa_telecom, intitucion_entrega, institucion_estudia, responsable, id_origen) VALUES ('$nombreInstitucion', '$tipoDocumento', '$documento', '$edad', '$id_genero', '$fechaNac', '$id_area', '$id_cargo','$nombreRepre', '$correoInsti', '$telefonoInsti', '$estadoInsti', '$municipio', '$direccionInsti', '$discapacidad', '$descripcionDis', '$consejoComunal', '$mesaTelecomunicaciones','$institucionEntrega','$institucionEstudia','$responsableEntrega','$origen')";
     

    //echo $sql;
    
    $resultado = $mysqli->query($sql);

    if ($resultado) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Se realizo el registro correctamente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
              }).then(() => {

                location.assign('Listadeapoyo.php');

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
              }).then(() => {

                location.assign('Listadeapoyo.php');

             });
    });
        </script>";
    }
   
}



?>