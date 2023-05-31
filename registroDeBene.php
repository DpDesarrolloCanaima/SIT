<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
require "function.php";

if ($_POST['registrar']) {
    header("Location: dispositivoEntrada.php");
} else {

    if (!preg_match("/^[a-zA-z0-9]/", $_POST['ic'])) {
        echo "<script>
            alert('El IC no coincide con el formato solicitado');
            </script>";
    };
    if (!preg_match("/^[a-zA-Z]/", $_POST['nombre_del_beneficiario'])) {
        echo "<script>
                alert('La CÉDULA no coincide con el formato solicitado');
            </script>";
    };
    if (!preg_match("/^[0-9]/", $_POST['cedula'])) {
        echo "<script>
                alert('La CÉDULA no coincide con el formato solicitado');
            </script>";
    };
    if (!preg_match("/^[0-9]/", $_POST['edad'])) {
        echo "<script>
                alert('La EDAD no coincide con el formato solicitado');
            </script>";
    };
    if ($_POST['genero'] = "") {
        echo "<script>
            alert('Seleccione un genero');
        </script>";
    }
    if ($_POST['area'] = "") {
        echo "<script>
            alert('Seleccione un area');
        </script>";
    }
    if ($_POST['cargo'] = "") {
        echo "<script>
            alert('Seleccione un cargo');
        </script>";
    }
    if (!preg_match("/^[a-zA-Z@]/", $_POST['correo'])) {
        echo "<script>
            alert('El Correo no coincide con el formato solicitado');
        </>";
    };
    if (!preg_match("/^[0-9+-]/", $_POST['telefono'])) {
        echo "<script>
            alert('El Telefono no coincide con el formato solicitado');
        </script>";
    };
    if (!preg_match("/^[a-zA-Z]/", $_POST['estado'])) {
        echo "<script>
            alert('El Telefono no coincide con el formato solicitado');
        </script>";
    };
    if (!preg_match("/^[a-zA-Z]/", $_POST['municipio'])) {
        echo "<script>
            alert('El Telefono no coincide con el formato solicitado');
        </script>";
    };
    if (!preg_match("/^[a-zA-Z0-9]/", $_POST['direccion'])) {
        echo "<script>
            alert('El Dirección no coincide con el formato solicitado');
        </script>";
    };
    if (isset($_POST['discapacidad_o_condicion'])) {
        $discapacidad_o_condicion = $_POST['discapacidad_o_condicion'];
        if ($discapacidad_o_condicion = "") {
            echo "<script>
                alert('Selecione SI o NO');
            </script>";
        }
    };
    if (!preg_match("/^[a-zA-Z0-9]/", $_POST['direccion'])) {
        echo "<script>
        alert('El Dirección no coincide con el formato solicitado');
            </script>";
        exit();
    }; 
    $ic = limpiarDatos($_POST['ic']);
    $nombre_del_beneficiario = limpiarDatos($_POST['nombre_del_beneficiario']);
    $cedula = limpiarDatos($_POST['cedula']);
    $edad = limpiarDatos($_POST['edad']);
    $genero = limpiarDatos($_POST['genero']);
    $fecha_nac = limpiarDatos($_POST['fecha_de_nacimiento']);
    $unidadAdscripcion = limpiarDatos($_POST['unidad_de_adscripcion']);
    $area = limpiarDatos($_POST['area']);
    $cargo = limpiarDatos($_POST['cargo']);
    $nombre_del_representante = limpiarDatos($_POST['nombre_del_representante']);
    $correo = limpiarDatos($_POST['correo']);
    $telefono = limpiarDatos($_POST['phone']);
    $estado = limpiarDatos($_POST['estado']);
    $municipio = limpiarDatos($_POST['municipio']);
    $direccion = limpiarDatos($_POST['direccion']);
    $discapacidadCondicion = limpiarDatos($_POST['discapacidad_o_condicion']);
    $descripcionDiscapacidadCondicion = limpiarDatos($_POST['descripcion_discapacidad']);
    $tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
    $origen = limpiarDatos($_POST['origen']);

    $conex = $mysqli;
    $sql = "INSERT INTO datos_del_entregante (ic, nombre_del_beneficiario, cedula, edad, Id_genero, fecha_de_nacimiento, unidad_de_adscripcion, id_area, id_cargo, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion, id_tipo_de_equipo, id_origen) VALUES ('$ic', '$nombre_del_beneficiario', '$cedula', '$edad', '$genero', '$fecha_nac','$unidadAdscripcion','$area','$cargo','$nombre_del_representante','$correo','$telefono','$estado','$municipio','$direccion','$discapacidadCondicion','$descripcionDiscapacidadCondicion','$tipoDeEquipo', '$origen');";

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

													






