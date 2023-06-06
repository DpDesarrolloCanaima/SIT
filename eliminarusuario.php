<?php
require "config/conexionProvi.php";
session_start();
if (!isset($_SESSION['id_usuarios'])) {
	header("Location:index.php");
}else{
    if ($_SESSION['id_roles'] != 1) {
        header("Location: index.php");
    }
}

	$id = $_REQUEST['id'];
	$conex = $mysqli;
	$sql = "DELETE FROM usuarios WHERE id_usuarios ='".$id."'"; 
	$respuesta = mysqli_query($conex,$sql);
	
	if($respuesta){
	echo "<script>
		alert('Eliminado usuario con exito');
		location.assign('admin.php');
		</script>";

	}else{
	echo "<script>
		alert('No se puedo elimnar el usuario con exito');
		location.assign('admin.php');
		</script>";	
	}


	
?>