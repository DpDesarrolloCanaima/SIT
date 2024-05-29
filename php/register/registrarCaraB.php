<?php

require "../../config/conexionDBextra.php";

$valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
    $serial_cara_b = $_POST['serialCaraB'];
    if ($serial_cara_b == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Ingrese el serial del disco";
    }
    $fecha_registro = $_POST['fechaRegistro'];
    if ($fecha_registro) {
        $valido['success'] = false;
        $valido['mensaje'] = "Fecha de registro no tomada.";
    }

    $sqlRegistro = "INSERT INTO cara_b (id_cara_b, serial_cara_b, fecha_registro) VALUES (NULL, '$serial_cara_b','$fecha_registro')";
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