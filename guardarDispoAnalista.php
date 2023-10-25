<?php
require("config/conexionProvi.php");
require("function.php");
    
    $tipo = limpiarDatos(htmlspecialchars($_POST['tipo']));
    $cedula = limpiarDatos(htmlspecialchars($_POST['cedula']));

    $sqlValidation = "SELECT id_datos_del_entregante, cedula, tipo_documento FROM datos_del_entregante WHERE tipo_documento = $tipo AND cedula = $cedula ";
    
    $resultValidation = $mysqli->query($sqlValidation);
    
    while ($row = $resultValidation->fetch_assoc()) {
        $comprobacion = $row['cedula'];
        if ($cedula = $comprobacion) {
           // echo "La comprobacion fue exitosa";
           $serialEquipo = limpiarDatos($_POST['serial_del_equipo']);
           $sqlSerial = "SELECT serial_equipo FROM datos_del_dispotivo WHERE serial_equipo = $serialEquipo";
           $resultadoSerial = $mysqli->query($sqlSerial);
           while ($row2 = $resultadoSerial->fetch_assoc()) {
            $comprobacion2 = $row2['serial_equipo'];
            if ($serialEquipo == $comprobacion2) {
                echo "La comprobacion del serial fue exitosa";
            }else {
                echo "La comprobacion del serial no fue exitosa";
            }
           }
        }else {
            echo "la comprobacion de la cedula no fue exitosa";
        }
    }
        

       
?>