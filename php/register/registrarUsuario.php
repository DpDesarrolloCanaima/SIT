<?php
require "../../config/conexion.php";

$valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
    
    $usuario = $_POST['usuario'];
    if ($usuario == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Llene el campo de usuario";
    }
    $password = $_POST['password'];
    if ($password == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Llene el campo de contrasena";
    }
    $area = $_POST['area'];
    if ($area == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Seleccione un area";
    }
    $cedulaPersona = $_POST['cedulaPersona'];
    if ($cedulaPersona == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Dato invalido.";
    }

    $sqlValidation = "SELECT cedula_usuario FROM usuarios WHERE cedula_usuario = '$cedulaPersona'";
    $resultadoValidation = $conexion->query($sqlValidation);
    $num = $resultadoValidation->num_rows;

    if ($num > 0 ) {
        $valido['success'] = false;
        $valido['mensaje'] = "Ya cuenta con usuario.";
    }else {
        $sqlRegister = "INSERT INTO usuarios (id_usuario, usuario, password, rol, cedula_usuario) VALUES (NULL,'$usuario','$password','$area','$cedulaPersona')";
        $resultadoRegister = $conexion->query($sqlRegister);

        if ($resultadoRegister === true) {
            $valido['success'] = true;
            $valido['mensaje'] = "Registro del usuario exitosamente.";
        }else {
            $valido['success'] = false;
            $valido['mensaje'] = "No se pudo registrar el usuario.";
        }
    }

}

echo json_encode($valido);




?>