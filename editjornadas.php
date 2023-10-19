<?php
//Requerimos las funciones necesarias para evitar caracteres especiales.
require "function.php";
//Comprobamos que el envio del formulrio
if ($_POST) {
    //Obtenemos todos los valores necesarios enviados mediante el formulario
    $editjornadas = limpiarDatos($_POST['id_jornada']);
    $ic = limpiarDatos($_POST['ic']);
    $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
}

?>