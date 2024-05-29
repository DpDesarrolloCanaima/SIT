<?php

require "../../config/conexionDBextra.php";

$valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
    $serial_bateria = $_POST['serialBateria'];
    if ($serial_bateria == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Ingrese el serial del disco";
    }
    $fecha_registro = $_POST['fechaRegistro'];
    if ($fecha_registro) {
        $valido['success'] = false;
        $valido['mensaje'] = "Fecha de registro no tomada.";
    }

    $sqlRegistro = "INSERT INTO baterias (id_baterias, serial_baterias, fecha_registro) VALUES (NULL, '$serial_bateria','$fecha_registro')";
    $resultadoRegistro = $conexion->query($sqlRegistro);

    if ($resultadoRegistro === true) {
        $valido['success'] = true;
        $valido['mensaje'] = "Registrado correctamente.";
    }else {
        $valido['success'] = false;
        $valido['mensaje'] = "Error al registrar serial.";
    }
}else {
    $valido['success'] = false;
    $valido['mensaje'] = "Datos no enviados.";
}

echo json_encode($valido);


?>