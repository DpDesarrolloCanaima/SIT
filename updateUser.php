<?php
    require "function.php";

    // 
   
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
    //$sql = "UPDATE usuarios SET usuario = ' $usuarioupdate ', nombre = ' $nombreupdate ', cedula = ' $cedulaupdate ', password = ' $pass_cupdate ',correo =', id_roles = ' $rolesupdate ' WHERE id_usuarios = $idUpdate";

    $sql = "UPDATE usuarios SET usuario = '$usuarioupdate', nombre = '$nombreupdate', cedula = '$cedulaupdate', password = '$pass_cupdate', correo = '$correoupdate', id_roles = '$rolesupdate' WHERE id_usuarios = $idUpdate";

    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        echo "<script>
        alert('Se a realizado los cambios Correctamente.');
        location.assign('admin.php');
    </script>";
    }else {
        echo "<script>
        alert('Ocurrio un error, no se realizaron los cambios');
        location.assign('admin.php');
    </script>";
    }
}



?>
