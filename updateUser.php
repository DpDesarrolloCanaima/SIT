<?php
    require "function.php";
   
if ($_POST) {
    $idUpdate = $_POST['idEdit'];
    $usuarioupdate = limpiarDatos(htmlspecialchars($_POST['usuario']));
    $nombreupdate = limpiarDatos(htmlspecialchars($_POST['nombre']));
    $passwordupdate = limpiarDatos(htmlspecialchars($_POST['password']));
    $cedulaupdate = limpiarDatos(htmlspecialchars($_POST['cedula']));
    $correoupdate = limpiarDatos(htmlspecialchars($_POST['correo']));
    $rolesupdate = limpiarDatos(htmlspecialchars($_POST['perfil']));
    $pass_cupdate = sha1($passwordupdate);
    
    require "config/conexionProvi.php";
    $sql = "UPDATE usuarios SET usuario = ' $usuarioupdate ', nombre = ' $nombreupdate ', cedula = ' $cedulaupdate ', password = ' $pass_cupdate ', id_roles = ' $rolesupdate ' WHERE id_usuarios = $idUpdate";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        echo "Se realizo el cambio";
    }else {
        echo "No se a registrado cambios";
    }
}



?>