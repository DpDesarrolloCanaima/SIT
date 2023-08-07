<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
// require "function.php";

if ($_POST['registrar']) {
    header("Location: analista.php");
} else {
    // Validaciones de ingreso de datos
    // if ($_POST['tipo_de_equipo'] = "") {
    //     echo "<script>
    //         alert('Seleccione un dispositivo);
    //     </script>";
    // };
    // if (!preg_match("/^[a-zA-z0-9]/", $_POST['serial_del_equipo'])) {
    //     echo "<script>
    //         alert('El IC no coincide con el formato solicitado');
    //         </script>";
    // };
    // if (!preg_match("/^[a-zA-z0-9]/", $_POST['serial_cargador'])) {
    //     echo "<script>
    //             alert('La CÉDULA no coincide con el formato solicitado');
    //         </script>";
    // };
    // if (!preg_match("/^[a-zA-Z]/", $_POST['pertenencia_del_equipo'])) {
    //     echo "<script>
    //             alert('La PERTENENCIA no coincide con el formato solicitado');
    //         </script>";
    // };
    // if (!preg_match("/^[a-zA-Z]/", $_POST['institucion_educativa'])) {
    //     echo "<script>
    //             alert('La INSTITUCIÓN EDUCATIVA no coincide con el formato solicitado');
    //         </script>";
    // };
    // if (!preg_match("/^[a-zA-Z]/", $_POST['institucion_donde_estudia'])) {
    //     echo "<script>
    //             alert('La INSTITUCIÓN EDUCATIVA no coincide con el formato solicitado');
    //         </script>";
    // };
    // if ($_POST['grado'] = "") {
    //     echo "<script>
    //         alert('Seleccione un grado');
    //     </script>";
    // };
    // if ($_POST['estado_recepcion'] = "") {
    //     echo "<script>
    //         alert('Seleccione el Estado de Recepcion Correcto');
    //     </script>";
    // };
    // if ($_POST['falla'] = "") {
    //     echo "<script>
    //         alert('Seleccione una falla Correcto');
    //     </script>";
    // };
    // if (isset($_POST['equipo_reincidio'])) {
    //     $equipoReincidio = $_POST['equipo_reincidio'];
    //     if ($equipoReincidio = "") {
    //         echo "<script>
    //             alert('Selecione SI o NO');
    //         </script>";
    //     }
    // };
    // if (!preg_match("/^[a-zA-Z0-9]/", $_POST['observaciones"'])) {
    //     echo "<script>
    //     alert('rellene el campo de observaciones dentro de los caracteres establecidos');
    //         </script>";
    //     exit();
    // };
    // if ($_POST['cargo'] = "") {
    //     echo "<script>
    //         alert('Seleccione una cargo Correcto');
    //     </script>";
    // }; 
    // if ($_POST['origen'] = "") {
    //     echo "<script>
    //         alert('Seleccione una origen Correcto');
    //     </script>";
    // };
    // if ($_POST['estatus'] = "") {
    //     echo "<script>
    //         alert('Seleccione una estatus Correcto');
    //     </script>";
    // };
    // if ($_POST['beneficiario'] = "") {
    //     echo "<script>
    //         alert('Seleccione una cedula');
    //     </script>";
    // };
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


    $conex = $mysqli;
    $sql = "INSERT INTO datos_del_dispotivo (id_tipo_de_dispositivo, serial_equipo, serial_de_cargador, pertenencia_del_equipo, institucion_educativa, institucion_donde_estudia, fecha_de_recepcion, estado_recepcion_equipo, observaciones, equipo_reincidio,id_roles, id_origen, id_grado, id_estatus, id_motivo, id_datos_del_beneficiario) VALUES ('$tipoDeEquipo','$serialEquipo','$serialCargador','$pertenencia','$institucionEducativa', '$institucionDondeEstudia','$fechaRecepcion','$estadoRecepcion','$observaciones','$cargo','$rol','$origen','$grado','$estatus', '$falla','$beneficiario');";

    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        echo "<script>
            alert('El dispositivo se registro correctamente');
            location.assign('analista.php');
        </script>";
    } else {
        echo "<script>
            alert('El dispositivo no se registro correctamente');
            location.assign('analista.php');
        </script>";
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



