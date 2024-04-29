<?php

require "../../config/conexion.php";

$valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
    $cedula = $_POST['cedula'];
    if ($cedula == "") {
        $valido['success'] = false;
        $valido['mensaje'] = "La cedula no puede estar vacia";
    }
    $nombre_completo = $_POST['nombre_completo'];
    if ($nombre_completo == "") {
        $valido['success'] = false;
        $valido['mensaje'] = "El nombre no puede estar vacio";
    }
    $correo_inst = $_POST['correo_inst'];
    if ($correo_inst == "") {
        $valido['success'] = false;
        $valido['mensaje'] = "El correo no puede estar vacio";
    }
    $telefono = $_POST['telefono'];
    if ($telefono == "") {
        $valido['success'] = false;
        $valido['mensaje'] = "El telefono no puede estar vacio";
    }
    $sqlValidation = "SELECT cedula FROM persona WHERE cedula = '$cedula'";
    $resultadoValidation = $conexion->query($sqlValidation);

    $num = $resultadoValidation->num_rows;

    if ($num > 0) {
        $valido['success'] = false;
        $valido['mensaje'] = "La persona ya se encuentra registrada.";
    }else {
        $sqlRegister = "INSERT INTO persona (cedula, nombre, telefono,correo_inst) VALUES ('$cedula','$nombre_completo','$telefono','$correo_inst')";
        $resultadoRegister = $conexion->query($sqlRegister);

        if ($resultadoRegister === true) {
            $valido['success'] = True;
            $valido['mensaje'] = "Persona registrada correctamente.";
        }else {
            $valido['success'] = false;
            $valido['mensaje'] = "Error al registrar a la persona.";
        }
    }
}



echo json_encode($valido);


?>