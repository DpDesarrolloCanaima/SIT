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
    $serialEquipo = limpiarDatos($_POST['serial_del_equipo']);

    $sqlvalidation = "SELECT serial_equipo FROM datos_del_dispositivo WHERE serial_equipo = ". $serialEquipo;
    $resultValidation = mysqli_query($mysqli, $sqlvalidation);
    if (mysqli_num_rows($resultValidation)>0) {
        
        switch ($rol) {
            case 1:
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El registro ya existe',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                      }).then(() => {
                        location.assign('admin.php');
                      });
            });
                </script>
                ";    
                break;
            case 3:
                echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El registro ya existe',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('analista.php');
              });
    });
        </script>
        ";
                break;
        }
    }

    $tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
    $serialEquipo = limpiarDatos($_POST['serial_del_equipo']);

    if ($serialEquipo == "") {
        $serialEquipo = "No posee serial";
    }
    $serialCargador = limpiarDatos($_POST['serial_cargador']);
    if ($serialCargador == "") {
        $serialCargador = "No posee serial";
    }
    $pertenencia = limpiarDatos($_POST['pertenencia_del_equipo']);
    if ($pertenencia == "") {
        $pertenencia = "No posee pertenencia";
    }
    $institucionEducativa = limpiarDatos($_POST['institucion_educativa']);
    $institucionDondeEstudia = limpiarDatos($_POST['institucion_donde_estudia']);
    $falla = limpiarDatos($_POST['falla']);
    $grado = limpiarDatos($_POST['grado']);
    $fechaRecepcion = validar_fecha($_POST['fecha_de_recepcion']);
    $estadoRecepcion = limpiarDatos($_POST['estado_recepcion']);
    $observaciones = limpiarDatos($_POST['observaciones']);
    if ($observaciones == "") {
        $observaciones = "No se realizaron observaciones";
    }
    $cargo = limpiarDatos($_POST['cargo']);
    $rol = limpiarDatos($_POST['id_roles']);
    $origen = limpiarDatos($_POST['origen']);
    $estatus = limpiarDatos($_POST['estatus']);
    $beneficiario = limpiarDatos($_POST['beneficiario']);

    $sql = "INSERT INTO datos_del_dispotivo (id_tipo_de_dispositivo, serial_equipo, serial_de_cargador, pertenencia_del_equipo, institucion_educativa, institucion_donde_estudia, fecha_de_recepcion, estado_recepcion_equipo, observaciones, equipo_reincidio,id_roles, id_origen, id_grado, id_estatus, id_motivo, id_datos_del_beneficiario) VALUES ('$tipoDeEquipo','$serialEquipo','$serialCargador','$pertenencia','$institucionEducativa', '$institucionDondeEstudia','$fechaRecepcion','$estadoRecepcion','$observaciones','$cargo','$rol','$origen','$grado','$estatus', '$falla','$beneficiario');";

    $resultado = mysqli_query($mysqli, $sql);

    if ($resultado) {
        switch ($rol) {
            case 1:
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'sucess',
                        title: 'Se realizo el registro',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                      }).then(() => {
                        location.assign('admin.php');
                      });
            });
                </script>
                ";    
                break;
            case 3:
                echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Se realizo el registro',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('analista.php');
              });
    });
        </script>
        ";
                break;
        }
    } else {
        switch ($rol) {
            case 1:
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El registro fallo',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                      }).then(() => {
                        location.assign('admin.php');
                      });
            });
                </script>
                ";    
                break;
            case 3:
                echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El registro fallo',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('analista.php');
              });
    });
        </script>
        ";
                break;
        }
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