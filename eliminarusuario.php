<?php
require "config/conexionProvi.php";
	$id = $_REQUEST['id'];
	$conex = $mysqli;
	$sql = "DELETE FROM usuarios WHERE id='".$id."'"; 
	$respuesta = mysqli_query($conex,sql);
	
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

