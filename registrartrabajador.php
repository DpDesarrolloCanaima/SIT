<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
require "function.php";

if ($_POST) {
    $ic = limpiarDatos($_POST['ic']);
    $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
    $documento = limpiarDatos($_POST['documento']);
    $nombreInstitucion = limpiarDatos($_POST['nombre_de_institucion']);
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
    $fechaNac = "0000-00-00";
    $areainsti = "Industria canaima";
    $cargoinsti = "Industria canaima";
    $nombreRepre = "Industria Canaima";
    
    $sql = "INSERT INTO datos_del_entregrante (ic, nombre_del_beneficiario, tipo_documento, cedula, edad, Id_genero, fecha_de_nacimiento, id_area, areainsti, id_cargo, cargoinsti, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion, id_origen) VALUES ('$ic', '$nombreInstitucion', '$tipoDocumento','$documento', '$generoTrabajador','$fechaNac','$areaTrabajador','$areainsti','$cargoTrabajador','$cargoinsti','$nombreRepre', '$correoTrabajador','$telefonoTrabajador', '$estado', '$municipio', '$direccion', '$discapacidad', '$descripcionDisca', '$origen')";

    $resultado = $conexion->query($sql);

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