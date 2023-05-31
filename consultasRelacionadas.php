<?php
require "config/conexionProvi.php";

$conex = $mysqli;
    $sql = "INSERT INTO datos_del_entregante (ic, nombre_del_beneficiario, cedula, edad, id_genero, fecha_de_nacimiento, unidad_de_adscripcion, id_area, id_cargo, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion, id_datos_del_dispositivo, id_origen) VALUES ('$ic', '$nombre_del_beneficiario', '$cedula', '$edad', '$genero', '$fecha_nac','$unidadAdscripcion','$area','$cargo','$nombre_del_representante','$correo','$telefono','$estado','$municipio','$direccion','$discapacidadCondicion','$descripcionDiscapacidadCondicion','$tipoDeEquipo', '$origen');";

    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        echo "<script>
            alert('El dispositivo se registro correctamente');
            location.assign('dispositivosEntrada.php');
        </>";
    } else {
        echo "<script>
            alert('El dispositivo no se registro correctamente');
            location.assign('dispositivosEntrada.php');
        </>";
    }