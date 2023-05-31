<?php

require("config/database.php");


$tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
$serialEquipo = limpiarDatos($_POST['serial_del_equipo']);
$serialCargador = limpiarDatos($_POST['serial_cargador']);
$pertenencia = limpiarDatos($_POST['pertenencia_del_equipo']);
$institucionEducativa = limpiarDatos($_POST['institucion_educativa']);
$institucionDondeEstudia = limpiarDatos($_POST['institucion_donde_estudia']);
$falla = limpiarDatos($_POST['falla']);
$grado = limpiarDatos($_POST['grado']);
$fechaRecepcion = validar_fecha($_POST['fecha_de_recepcion']);
$estadoRecepcion = limpiarDatos($_POST['estado_recepcion']);
$observaciones = limpiarDatos($_POST['observaciones']);
$cargo = limpiarDatos($_POST['cargo']);
$rol = limpiarDatos($_POST['id_roles']);
$origen = limpiarDatos($_POST['origen']);
$estatus = limpiarDatos($_POST['estatus']);
$beneficiario = limpiarDatos($_POST['beneficiario']);

$sql = "INSERT INTO datos_del_dispotivo (id_tipo_de_dispositivo, serial_equipo, serial_de_cargador, pertenencia_del_equipo, institucion_educativa, institucion_donde_estudia, fecha_de_recepcion, estado_recepcion_equipo, observaciones, equipo_reincidio,id_roles, id_origen, id_grado, id_estatus, id_motivo, id_datos_del_beneficiario) VALUES ('$tipoDeEquipo','$serialEquipo','$serialCargador','$pertenencia','$institucionEducativa', '$institucionDondeEstudia','$fechaRecepcion','$estadoRecepcion','$observaciones','$cargo','$rol','$origen','$grado','$estatus', '$falla','$beneficiario');";
    if ($conexion->query($sql)) {
        $id = $conexion->insert_id;
    };

header("Location: index.php");







													
function limpiarDatos($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    $data = str_ireplace("<script>", "", $data);
    $data = str_ireplace("</script>", "", $data);
    $data = str_ireplace("<script src", "", $data);
    $data = str_ireplace("<script type=", "", $data);
    $data = str_ireplace("SELECT * FROM", "", $data);
    $data = str_ireplace("DELETE FROM", "", $data);
    $data = str_ireplace("INSERT INTO", "", $data);
    $data = str_ireplace("DROP TABLE", "", $data);
    $data = str_ireplace("DROP DATABASE", "", $data);
    $data = str_ireplace("TRUNCATE TABLE", "", $data);
    $data = str_ireplace("SHOW TABLES;", "", $data);
    $data = str_ireplace("<?php", "", $data);
    $data = str_ireplace("?>", "", $data);
    $data = str_ireplace("--", "", $data);
    $data = str_ireplace("^", "", $data);
    $data = str_ireplace("<", "", $data);
    $data = str_ireplace(">", "", $data);
    $data = str_ireplace("[", "", $data);
    $data = str_ireplace("]", "", $data);
    $data = str_ireplace("==", "", $data);
    $data = str_ireplace(";", "", $data);
    $data = str_ireplace("::", "", $data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

function validar_fecha($fecha)
{
    $valores = explode('/', $fecha);

    if (count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])) {
        return true;
    } else {
        return false;
    }
}
?>