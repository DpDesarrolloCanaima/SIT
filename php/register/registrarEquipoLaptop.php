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
    $serialMR = limpiarDatos($_POST['serialMR']);
    if ($serialMR == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }
    $serialCargador = limpiarDatos($_POST['serialCargador']);
    if ($serialCargador) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }
    $serialTarjetaMadre = limpiarDatos($_POST['serialTarjetaMadre']);
    if ($serialTarjetaMadre) {
        $valido['success'] = false;
        $valido['mensaje'] = "Debe Ingresar un serial";
    }
    $serialPantalla = limpiarDatos($_POST['serialPantalla']);
    $serialDiscoDuro = limpiarDatos($_POST['serialDiscoDuro']);
    $serialBateria = limpiarDatos($_POST['serialBateria']);
    $fechaRegistro = limpiarDatos($_POST['fechaRegistro']);
    $estatus = limpiarDatos($_POST['estatus']);
    $tipoEquipo = limpiarDatos($_POST['tipoEquipo']);
    $responsable = limpiarDatos($_POST['responsable']);


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