<?php

require "config/conexionProvi.php";

session_start();

if (!isset($_SESSION['id_usuarios']) OR !isset($_GET['Observacion'])) {
    header("Location: index.php");
    session_destroy();
}

$observacionT = $mysqli->real_escape_string($_GET['Observacion']);

$sql = "UPDATE datos_del_dispotivo SET id_estatus = ".(4).",  observaciones = '".$observacionT."' WHERE id_datos_del_dispositivo = ".$_SESSION['lastId']; 

$resultado = $mysqli->query($sql);

header("Location: verificador.php");
?>