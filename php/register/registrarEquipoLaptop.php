<?php
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d");
require "../../config/conexion.php";
require "../function.php";
include "../consultasDePartes.php";
$valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
    $serialCaraB = limpiarDatos($_POST['serialCaraB']);
    if ($serialCaraB == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }elseif ($numCaraB != $serialCaraB) {
        $valido['success'] = false;
        $valido['mensaje'] = "Serial no registrado por Aduana";
    }
    $serialMR = limpiarDatos($_POST['serialMR']);
    if ($serialMR == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }elseif ($serialMR != $numMR) {
        $valido['success'] = false;
        $valido['mensaje'] = "Serial no registrado por Aduana";
    }
    $serialCargador = limpiarDatos($_POST['serialCargador']);
    if ($serialCargador) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }elseif ($serialCargador != $numCargador) {
        $valido['success'] = false;
        $valido['mensaje'] = "Serial no registrado por Aduana";
    }
    $serialTarjetaMadre = limpiarDatos($_POST['serialTarjetaMadre']);
    if ($serialTarjetaMadre) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }elseif ($serialTarjetaMadre != $numTarjetaMadre) {
        $valido['success'] = false;
        $valido['mensaje'] = "Serial no registrado por Aduana";
    }
    $serialPantalla = limpiarDatos($_POST['serialPantalla']);
    if ($serialPantalla) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }elseif ($serialPantalla != $numPantalla) {
        $valido['success'] = false;
        $valido['mensaje'] = "Serial no registrado por Aduana";
    }
    $serialDiscoDuro = limpiarDatos($_POST['serialDiscoDuro']);
    if ($serialDiscoDuro) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }elseif ($serialDiscoDuro != $numDiscoDuro) {
        $valido['success'] = false;
        $valido['mensaje'] = "Serial no registrado por Aduana";
    }
    $serialBateria = limpiarDatos($_POST['serialBateria']);
    if ($serialBateria) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }elseif ($serialBateria != $numBateria) {
        $valido['success'] = false;
        $valido['mensaje'] = "Serial no registrado por Aduana";
    }
    $fechaRegistro = limpiarDatos($_POST['fechaRegistro']);
    if ($fechaRegistro != $fecha) {
        $valido['success'] = false;
        $valido['mensaje'] = "Fecha no valida";
    }
    $estatus = limpiarDatos($_POST['estatus']);
    if ($estatus != 2) {
        $valido['success'] = false;
        $valido['mensaje'] = "Estatus no valido.";
    }
    $tipoEquipo = limpiarDatos($_POST['tipoEquipo']);
    if ($tipoEquipo == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "No enviado el equipo.";
    }
    switch ($tipoEquipo) {
        case 3:
            if ($tipoEquipo != 3) {
                $valido['success'] = false;
                $valido['mensaje'] = "Equipo no valido para el registro.";
            }
            break;
        case 4:
            if ($tipoEquipo != 4) {
                $valido['success'] = false;
                $valido['mensaje'] = "Equipo no valido para el registro.";
            }
            break;
        case 5:
            if ($tipoEquipo != 5) {
                $valido['success'] = false;
                $valido['mensaje'] = "Equipo no valido para el registro.";
            }
            break;
        case 6:
            if ($tipoEquipo != 6) {
                $valido['success'] = false;
                $valido['mensaje'] = "Equipo no valido para el registro.";
            }
            break;
        case 7:
            if ($tipoEquipo != 7) {
                $valido['success'] = false;
                $valido['mensaje'] = "Equipo no valido para el registro.";
            }
            break;
        case 8:
            if ($tipoEquipo != 8) {
                $valido['success'] = false;
                $valido['mensaje'] = "Equipo no valido para el registro.";
            }
            break;
        case 10:
            if ($tipoEquipo != 10) {
                $valido['success'] = false;
                $valido['mensaje'] = "Equipo no valido para el registro.";
            }
            break;
       }
    $responsable = limpiarDatos($_POST['responsable']);
    if (!preg_match("/\b/", $responsable)) {
        $valido['success'] = false;
        $valido['mensaje'] = "El formato del responsable no valido.";
    }elseif (!preg_match("/[0-9]{7,8}/", $responsable)) {
        $valido['success'] = false;
        $valido['mensaje'] = "Formato de responsable no valido.";
    }
    $sqRegistroEquipoLaptop = "INSERT INTO equipo_laptop (serial_id_c, serial_cara_b,serial_m_r, serial_cargador, serial_t_m, serial_pantalla, serial_hdd, serial_bateria, fecha, estatus, tipo_de_equipo, responsable) VALUES ('$serialCaraB', '$serialCaraB','$serialMR', '$serialCargador','$serialTarjetaMadre','$serialPantalla','$serialDiscoDuro','$serialBateria','$fechaRegistro','$estatus','$tipoEquipo','$responsable')";
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