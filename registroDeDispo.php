<?php
session_start();
if (!isset($_SESSION['id_usuarios'])) {
    header("Location: index.php");
}


$usuario = $_SESSION['usuario'];
$rol = $_SESSION['id_roles'];
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos

if ($_POST['registrar']) {
    header("Location: analista.php");
} else {
    
    // captacion de datos y limpiaza de caracteres        
    $tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
    $serialEquipo = limpiarDatos($_POST['serial_del_equipo']);

        if ($serialEquipo == "") {
            $serialEquipo = "No posee serial";
        }
    $serialCargador = limpiarDatos($_POST['serial_cargador']);
        if ($serialCargador == "") {
        $serialCargador = "No posee serial";
        }
    $institucionEducativa = limpiarDatos($_POST['institucion_educativa']);
    $institucionDondeEstudia = limpiarDatos($_POST['institucion_donde_estudia']);
    $falla = limpiarDatos($_POST['falla']);
    $grado = limpiarDatos($_POST['grado']);
    $fechaRecepcion = validar_fecha($_POST['fecha_de_recepcion']);
    $fechaEntrega = validar_fecha($_POST['fecha_de_entrega']);
    $estadoRecepcion = limpiarDatos($_POST['estado_recepcion']);
    $observaciones = limpiarDatos($_POST['observaciones']);
        if ($observaciones == "") {
            $observaciones = "No se realizaron observaciones";
        }
    $equiporeincidio = limpiarDatos($_POST['equipo_reincidio']);
    $motivoreincidencia = limpiarDatos($_POST['motivoReincidencia']);
    if ($motivoreincidencia == "") {
        $motivoreincidencia = "No se realizaron observaciones";
    }
    /*$cargo = limpiarDatos($_POST['cargo']);*/
    $rol = limpiarDatos($_POST['id_roles']);
    $origen = limpiarDatos($_POST['origen']);
    $estatus = limpiarDatos($_POST['estatus']);
    $beneficiario = limpiarDatos($_POST['beneficiario']);

    echo $tipoDeEquipo=($_POST['tipo_de_equipo']);
    echo $serialEquipo=($_POST['serial_del_equipo']);
    echo $serialCargador=($_POST['serial_cargador']);
    echo $institucionEducativa = ($_POST['institucion_educativa']);
    echo $institucionDondeEstudia = ($_POST['institucion_donde_estudia']);
    echo $falla = ($_POST['falla']);
    echo $grado = ($_POST['grado']);
    echo $fechaRecepcion = ($_POST['fecha_de_recepcion']);
    echo $fechaEntrega = ($_POST['fecha_de_entrega']);
    echo $estadoRecepcion = ($_POST['estado_recepcion']);
    echo $observaciones = ($_POST['observaciones']);
    echo $equiporeincidio = ($_POST['equipo_reincidio']);
    echo $motivoreincidencia = ($_POST['motivoReincidencia']);
    echo $rol = ($_POST['id_roles']);
    echo $origen = ($_POST['origen']);
    echo $estatus = ($_POST['estatus']);
    echo $beneficiario = ($_POST['beneficiario']);


    /*$sql = "INSERT INTO `datos_del_dispotivo`(`id_datos_del_dispositivo`, `id_tipo_de_dispositivo`, `serial_equipo`, `serial_de_cargador` , `institucion_educativa`, `institucion_donde_estudia`, `fecha_de_recepcion`, `estado_recepcion_equipo`, `fecha_de_entrega`, `observaciones`, `equipo_reincidio`, `motivo_reincidencia`, `id_roles`, `id_origen`, `id_grado`, `id_estatus`, `id_motivo`, `id_datos_del_beneficiario`) VALUES (NULL,'$tipoDeEquipo','$serialEquipo','$serialCargador','$institucionEducativa','$institucionDondeEstudia','$fechaRecepcion','$estadoRecepcion','$fechaEntrega','$observaciones','$equiporeincidio','$motivoreincidencia','$rol','$origen','$grado','$estatus','$falla','$beneficiario')";*/

    $resultado = mysqli_query($mysqli, $sql);

    if ($resultado) {
        echo "Se registo el dispositivo";
    } else {
        echo "No se registro el dispositivo";
    }
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