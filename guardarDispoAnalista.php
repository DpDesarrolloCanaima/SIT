<?php
require("config/conexionProvi.php");
require("function.php");
    
    $tipo = limpiarDatos(htmlspecialchars($_POST['tipo']));
    $cedula = limpiarDatos(htmlspecialchars($_POST['cedula']));

    $sqlValidation = "SELECT id_datos_del_entregante, cedula, tipo_documento FROM datos_del_entregante WHERE tipo_documento = $tipo AND cedula = $cedula ";
    
    $resultValidation = $mysqli->query($sqlValidation);
    
    while ($row = $resultValidation->fetch_assoc()) {
        $comprobacion = $row['cedula'];
        $beneficiario = $row['id_datos_del_entregante'];
        if ($cedula = $comprobacion) {
           $serialEquipo = limpiarDatos($_POST['serial_del_equipo']);
           $sqlSerial = "SELECT serial_equipo FROM datos_del_dispotivo WHERE serial_equipo = $serialEquipo";
           $resultadoSerial = $mysqli->query($sqlSerial);
           if (mysqli_num_rows($resultadoSerial)==0) {
            $tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
            $serialEquipo = limpiarDatos($_POST['serial_del_equipo']);
            $serialCargador = limpiarDatos($_POST['serial_cargador']);
            $fechaRecepcion = $_POST['fecha_de_recepcion'];
            $estadoRecepcion = limpiarDatos($_POST['estado_recepcion']);
            $observaciones = limpiarDatos($_POST['observaciones']);
            $rol = limpiarDatos($_POST['id_roles']);
            $origen = limpiarDatos($_POST['origen']);
            $estatus = limpiarDatos($_POST['estatus']);
            $falla = limpiarDatos($_POST['falla']);
            $fechaEntrega = date('00-00-0000');
            $comprobacion = "Faltan comprobaciones";
            $observaciones_tecnico = "Falta por observaciones";
            $observaciones_verificador = "Falta por observaciones";
            $responsable = limpiarDatos($_POST['responsable']);
            $sql = "INSERT INTO datos_del_dispotivo (id_tipo_de_dispositivo, serial_equipo, serial_de_cargador, fecha_de_recepcion, estado_recepcion_equipo, fecha_de_entrega, responsable,  observaciones_analista, observaciones_tecnico, observaciones_verificador, comprobaciones, id_roles, id_origen, id_estatus, id_motivo, id_datos_del_beneficiario) VALUES ('$tipoDeEquipo','$serialEquipo','$serialCargador','$fechaRecepcion','$estadoRecepcion', '$fechaEntrega', '$responsable','$observaciones', '$observaciones_tecnico', '$observaciones_verificador', '$comprobacion','$rol','$origen','$estatus', '$falla','$beneficiario');";
            $resultado = $mysqli->query($sql);
            if ($resultado) {
                // echo "Se registro el dispositivo";
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
                                location.assign('listadebeneficiario.php');
                              });
                    });
                        </script>";
            }else {
                // echo "Hubo un error en la consulta";
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
                                location.assign('listadebeneficiario.php');
                             });
                    });
                        </script>";
            }
           }else {
            
            foreach ($resultadoSerial as $row2) {
                    $serialdb = $row2['serial_equipo'];    
                }
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El serial ".$serialdb." ya existe',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {
                        location.assign('listadebeneficiario.php');
                     });
            });
                </script>";  
           }
        }else {
            echo "
                        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                        <script language='JavaScript'>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'El beneficiario no existe',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                                timer: 1500
                              }).then(() => {
                                location.assign('listadebeneficiario.php');
                             });
                    });
                        </script>";
        }
    }
               
?>