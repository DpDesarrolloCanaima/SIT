<?php

require "../../config/conexionDBextra.php";

$valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
    $serial_cara_a = $_POST['serialCaraA'];
    if ($serial_cara_a == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Ingrese el serial del disco";
    }
    $fecha_registro = $_POST['fechaRegistro'];
    if ($fecha_registro) {
        $valido['success'] = false;
        $valido['mensaje'] = "Fecha de registro no tomada.";
    }

    $sqlRegistro = "INSERT INTO cara_a (id_cara_a, serial_cara_a, fecha_registro) VALUES (NULL, '$serial_cara_a','$fecha_registro')";
    $resultadoRegistro = $conexionExtra->query($sqlRegistro);

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