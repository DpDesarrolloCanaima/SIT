<?php

require "../../config/conexion.php";

$valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
    $updatearea = $_POST['areaCambiar'];

    if ($updatearea == "") {
        $valido['success'] = false;
        $valido['mensaje'] = "Seleccione un area";
    }
    $cedulaUsuario = $_POST['cedulaUsuario'];
    if ($cedulaUsuario == '') {
        $valido['success'] = false;
        $valido['mensaje'] = "Cedula del usuario no enviada.";
    }
    
    $sqlUpdateUsuario = "UPDATE usuarios SET rol = '$updatearea' WHERE cedula_usuario = '$cedulaUsuario'";
    $resultadoUpdate = $conexion->query($sqlUpdateUsuario);

    if ($resultadoUpdate === true) {
        $valido['success'] = true;
        $valido['mensaje'] = "Registro Exitoso.";
    }else {
        $valido['success'] = false;
        $valido['mensaje'] = "Error al realizar el registro.";
    }
}else {
    $valido['success'] = false;
    $valido['mensaje'] = "Datos no enviados.";
}

echo json_encode($valido);
?>