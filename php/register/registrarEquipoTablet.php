<?php

require "../../config/conexion.php";
require "../function.php";

$valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
    $serialCaraB = limpiarDatos($_POST['serialCaraB']);
    if ($serialCaraB == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }
    $serialCargador = limpiarDatos($_POST['serialCargador']);
    if ($serialCargador) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }
    $serialBateria = limpiarDatos($_POST['serialBateria']);
    if ($serialBateria === '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }
    $serialPantalla = limpiarDatos($_POST['serialPantalla']);
    if ($serialPantalla === '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }
    $fechaRegistro = limpiarDatos($_POST['fechaRegistro']);
    if ($fechaRegistro === '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Envio de fecha no realizado";
    }
    $estatus = limpiarDatos($_POST['estatus']);
    if (!preg_match("/\b/", $estatus)) {
        $valido['success'] = false;
        $valido['mensaje'] = "Envio de estatus erroneo";
    }elseif ($estatus != 2) {
        $valido['success'] = false;
        $valido['mensaje'] = "Estatus no permitido";
    }
    $tipoEquipo = limpiarDatos($_POST['tipoEquipo']);

    switch ($tipoEquipo) {
        case 1:
            if (!preg_match("/\b/", $tipoEquipo)) {
                $valido['success'] = false;
                $valido['mensaje'] = "Tipo de equipo no valido.";
            }
            break;
        case 2:
            if (!preg_match("/\b/", $tipoEquipo)) {
                $valido['success'] = false;
                $valido['mensaje'] = "Tipo de equipo no valido.";
            }
            break;
        case 3:
            if (!preg_match("/\b/", $tipoEquipo)) {
                $valido['success'] = false;
                $valido['mensaje'] = "Tipo de equipo no valido.";
            }
            break;
        default:
            $valido['success'] = false;
            $valido['mensaje'] = "Tipo de equipo no valido.";
            break;
    }
    $responsable = limpiarDatos($_POST['responsable']);
    if (!preg_match("/\b/", $responsable)) {
        $valido['success'] = false;
        $valido['mensaje'] = "Responsable no valido.";
    }elseif (!preg_match("/[0-9]{7,8}/", $responsable)) {
        $valido['success'] = false;
        $valido['mensaje'] = "Responsable no valido.";
    }


    $sqRegistroEquipoLaptop = "INSERT INTO equipo_tablet (serial_id_l, serial_cara_b,serial_cargador, serial_bateria, serial_pantalla, fecha, estatus, tipo_de_equipo, responsable) VALUES ('$serialCaraB', '$serialCaraB', '$serialCargador','$serialBateria','$serialPantalla','$fechaRegistro','$estatus','$tipoEquipo','$responsable')";
    $resultadoLaptop = $conexion->query($sqRegistroEquipoLaptop);


    if ($resultadoLaptop===true) {
        $valido['success'] = true;
        $valido['mensaje'] = "Se registro correctamente";
    }else {
        $valido['success'] = false;
        $valido['mensaje'] = "No se registro el equipo";
    }

}

echo json_encode($valido);