<?php
    require "function.php";
   
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUpdate = $_GET['id'];
    $usuarioupdate = limpiarDatos(htmlspecialchars($_POST['usuario']));
    $nombreupdate = limpiarDatos(htmlspecialchars($_POST['nombre']));
    $cedulaupdate = limpiarDatos(htmlspecialchars($_POST['cedula']));
    $passwordupdate = limpiarDatos(htmlspecialchars($_POST['password']));
    $rolesupdate = limpiarDatos(htmlspecialchars($_POST['id_roles']));
    $pass_cupdate = sha1($passwordupdate);
    
    require "config/conexionProvi.php";
    $sql = "UPDATE usuarios SET usuario ='$usuarioupdate', nombre = '$nombreupdate', cedula = '$cedulaupdate', password = '$pass_cupdate', id_roles = '$rolesupdate' WHERE id_usuarios = $idUpdate";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        echo "<script>
            alert('Se realizaron los cambios correctamente');
            location.assign('admin.php');
        </script>";
    }else {
        
        echo "<script>
            alert('No se realizaron los cambios');
            location.assign('admin.php');
        </script>";
    }
}



?>