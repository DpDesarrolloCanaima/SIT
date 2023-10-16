<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
require "function.php";

if ($_POST) {
    $ic = limpiarDatos($_POST['ic']);
    $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
    $documento = limpiarDatos($_POST['documento']);
    $NombreInstitucionJor = limpiarDatos($_POST['nombre_de_institucion_jornada']);
    $fechaJornada = limpiarDatos($_POST['fechaJornada']);
    $correoJornada = limpiarDatos($_POST['correoJornada']);
    $telefonoJornada = limpiarDatos($_POST['phone']);
    $estadoJornada = limpiarDatos($_POST['estado']);
    $municipioJornada = limpiarDatos($_POST['municipio']);
    $direccionJornada = limpiarDatos($_POST['direccion']);
    $origen = limpiarDatos($_POST['origen']);

    
    // Datos complementarios para el registro de la jornada.
    $edad = 0;
    $id_genero = 1;
    $id_area = 1;
    $areainsti = "Industria Canaima";
    $id_cargo = 1;
    $cargoinsti = "Industria Canaima";
    $nombreRepresentante = "Industria Canaima c.a";
    $dispcacidad = "no";
    $descripcionDis = "No posee";

    $sql = "INSERT INTO datos_del_entregante (ic, nombre_del_beneficiario, tipo_documento, cedula, edad, Id_genero, fecha_de_nacimiento, id_area, areainsti, id_cargo, cargoinsti, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion, id_origen) VALUES ('$ic', '$NombreInstitucionJor','$tipoDocumento', '$documento', '$edad', '$id_genero','$fechaJornada', '$id_area', '$areainsti', '$id_cargo', '$cargoinsti', '$nombreRepresentante', '$correoJornada', '$telefonoJornada', '$estadoJornada', '$municipioJornada', '$direccionJornada', '$dispcacidad', '$descripcionDis', '$origen')";

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