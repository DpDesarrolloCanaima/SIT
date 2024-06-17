<?php

require "../../config/conexion.php";
require "../function.php";

$valido['success']=array('success', false, 'mensaje'=>"");


if ($_POST) {
    $equipoSeleccionado = limpiarDatos($_POST['equipoSeleccionado']);

    if ($equipoSeleccionado === '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Seleccione un equipo";
    }

    $fechaRegistro = limpiarDatos($_POST['fechaEquipo']);
    if ($fechaRegistro === '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Fecha de registro no enviada.";
    }

    $sqlRegistro = "INSERT INTO equipo_diario (id_equipo_diario, equipo, fecha) VALUES (NULL, '$equipoSeleccionado', $fechaRegistro)";
    $resultadoRegistro = $conexion->query($sqlRegistro);

    if ($resultadoRegistro ===  true) {
        $valido['success'] = true;
        $valido['mensaje'] = "Guardado Equipo Diario";
    }else {
        $valido['success'] = false;
        $valido['mensaje'] = "No se realizo el registro";
    }
}

echo json_encode($valido);