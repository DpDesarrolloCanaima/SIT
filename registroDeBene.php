<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
require "function.php";

if ($_POST['registrar']) {
    header("Location: dispositivoEntrada.php");
} else {
    $ic = limpiarDatos($_POST['ic']);
    if ($ic == "") {
        $ic = "No se realizaron observaciones";
    }
    $nombre_del_beneficiario = limpiarDatos($_POST['nombre_del_beneficiario']);
    if ($nombre_del_beneficiario == "") {
        $nombre_del_beneficiario = "No se realizaron observaciones";
    }
    $cedula = limpiarDatos($_POST['cedulaBene']);
    if ($cedula == "") {
        $cedula = "No se realizaron observaciones";
    }
    $edad = limpiarDatos($_POST['edadBene']);
    if ($edad == "") {
        $edad = "No se realizaron observaciones";
    }
    $genero = limpiarDatos($_POST['genero']);
    $fecha_nac = limpiarDatos($_POST['fecha_de_nacimiento']);
    $area = limpiarDatos($_POST['area']);
    $cargo = limpiarDatos($_POST['cargo']);
    $nombre_del_representante = limpiarDatos($_POST['nombre_del_representante']);
    if ($nombre_del_representante == "") {
        $nombre_del_representante = "No se realizaron observaciones";
    }
    $correo = limpiarDatos($_POST['correoBene']);
    if ($correo == "") {
        $correo = "No se realizaron observaciones";
    }
    $telefono = limpiarDatos($_POST['phone']);
    if ($telefono == "") {
        $telefono = "No se realizaron observaciones";
    }
    $estado = limpiarDatos($_POST['estado']);
    $municipio = limpiarDatos($_POST['municipio']);
    if ($municipio == "") {
        $municipio = "No se realizaron observaciones";
    }
    $direccion = limpiarDatos($_POST['direccion']);
    if ($direccion == "") {
        $direccion = "No se realizaron observaciones";
    }
    $discapacidadCondicion = limpiarDatos($_POST['discapacidad_o_condicion']);
    $descripcionDiscapacidadCondicion = limpiarDatos($_POST['descripcion_discapacidad']);
    if ($descripcionDiscapacidadCondicion == "") {
        $descripcionDiscapacidadCondicion = "No se realizaron observaciones";
    }
    $tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
    $origen = limpiarDatos($_POST['origen']);

    $conex = $mysqli;
    $sql = "INSERT INTO datos_del_entregante (ic, nombre_del_beneficiario, cedula, edad, Id_genero, fecha_de_nacimiento, id_area, id_cargo, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion, id_tipo_de_equipo, id_origen) VALUES ('$ic', '$nombre_del_beneficiario', '$cedula', '$edad', '$genero', '$fecha_nac','$area','$cargo','$nombre_del_representante','$correo','$telefono','$estado','$municipio','$direccion','$discapacidadCondicion','$descripcionDiscapacidadCondicion','$tipoDeEquipo', '$origen');";

    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Se registro correctamente el dispositivo',
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
        echo "<script>
            alert('El dispositivo no se registro correctamente');
            location.assign('listadebeneficiario.php');
        </script>";
    }
}

													