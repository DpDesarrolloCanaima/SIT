<?php

require("config/conexionProvi.php");

$id = $mysqli->real_escape_string($_POST['id_datos_del_dispositivo']);

$sql = "SELECT serial_equipo, serial_de_cargador, pertenencia_del_equipo, institucion_educativa, institucion_donde_estudia, fecha_de_recepcion, estado_recepcion_equipo, observaciones, equipo_reincidio,id_roles, id_origen, id_grado, id_estatus, id_motivo, id_datos_del_beneficiario FROM datos_del_dispotivo WHERE id_datos_del_dispositivo = $id LIMIT 1";

$resultado = $mysqli->query($sql);

$rows = $resultado->num_rows;

$dispositivo = [];

if ($rows > 0) {
    $dispositivo = $resultado->fetch_array();
}

echo json_encode($dispositivo, JSON_UNESCAPED_UNICODE);