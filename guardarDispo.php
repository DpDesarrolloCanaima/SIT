<?php

require("config/conexionProvi.php");

$tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
    if ($tipoDeEquipo == "") {
        echo 'Tiene que elegir un Tipo de equipo';
    }
$serialEquipo = limpiarDatos($_POST['serial_del_equipo']);
    if ($serialEquipo == "") {
        $serialEquipo = "No posee serial de equipo";
    }

$serialCargador = limpiarDatos($_POST['serial_cargador']);
    if ($serialCargador == "") {
        $serialCargador = "No posee serial de cargador";
    }
$institucionEducativa = limpiarDatos($_POST['institucion_educativa']);
    if ($institucionEducativa == "") {
        $institucionEducativa = "No posee una institucion educativa";
    }
$institucionDondeEstudia = limpiarDatos($_POST['institucion_donde_estudia']);
    if ($institucionDondeEstudia == "") {
        institucionDondeEstudia = "No posee";
    }
$fechaRecepcion = validar_fecha($_POST['fecha_de_recepcion']);
$estadoRecepcion = limpiarDatos($_POST['estado_recepcion']);
$fechaEntrega = validar_fecha($_POST['fecha_de_entrega']);
$observaciones = limpiarDatos($_POST['observaciones']);
if ($observaciones == "") {
    $observaciones = "No posee observaciones";
}
$reincidio = limpiarDatos($_POST['equipo_reincidio']);
$motivoreincidencia = limpiarDatos($_POST['motivoReincidencia']);
    if ($motivoreincidencia == "") {
        $motivoreincidencia = "No posee motivo";
    }
$rol = limpiarDatos($_POST['id_roles']);
$origen = limpiarDatos($_POST['origen']);
$grado = limpiarDatos($_POST['grado']);
$estatus = limpiarDatos($_POST['estatus']);
$falla = limpiarDatos($_POST['falla']);
$beneficiario = limpiarDatos($_POST['beneficiario']);


$sql = "INSERT INTO datos_del_dispotivo (id_tipo_de_dispositivo, serial_equipo, serial_de_cargador, institucion_educativa, institucion_donde_estudia, fecha_de_recepcion, estado_recepcion_equipo,fecha_de_entrega, observaciones, equipo_reincidio, id_roles, id_origen, id_grado, id_estatus, id_motivo, id_datos_del_beneficiario) VALUES ('$tipoDeEquipo','$serialEquipo','$serialCargador','$institucionEducativa', '$institucionDondeEstudia','$fechaRecepcion','$estadoRecepcion','$fechaEntrega','$observaciones','$reincidio','$motivoreincidencia','$rol','$origen','$grado','$estatus', '$falla','$beneficiario');";
$resultado = mysqli_query($mysqli, $sql);

if ($resultado) {
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Se registro correctamente el dispositivo',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('dispositivosentrada.php');

                      });
            });
                </script>";
            }else {
                 echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Algo salio mal. Intenta de nuevo',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('dispositivosentrada.php');

                     });
            });
                </script>";
            }
    
													
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
$data = str_ireplace("<", "" , $data); $data=str_ireplace(">", "", $data);
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