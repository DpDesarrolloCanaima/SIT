<?php
//Requerimos las funciones necesarias para evitar caracteres especiales.
require "function.php";
//Comprobamos que el envio del formulrio
if ($_POST) {
    //Obtenemos todos los valores necesarios enviados mediante el formulario
    $editjornadas = limpiarDatos($_POST['id_jornada']);
    $ic = limpiarDatos($_POST['ic']);
    $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
    $nombreInstitucion = limpiarDatos($_POST['nombre_de_institucion_jornada']);
    $correoJornadas = limpiarDatos($_POST['correoJornada']);
    $telefonoJornadas = limpiarDatos($_POST['phone']);
    $estadoJornadas = limpiarDatos($_POST['estado']);
    $municipioJornadas = limpiarDatos($_POST['municipio']);
    $direccionJornadas = limpiarDatos($_POST['direccion']);
    $fechaJornadas = limpiarDatos($_POST['fechaJornada']);
    $origenJornada = limpiarDatos($_POST['origen']);
    require "config/conexionProvi.php";

    $sql = "UPDATE datos_del_entregante SET ic = '$ic', nombre_del_beneficiario = '$nombreInstitucion'";
}

?>