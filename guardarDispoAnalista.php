<?php
require("config/conexionProvi.php");
require("function.php");
    
    $tipo = limpiarDatos(htmlspecialchars($_POST['tipo']));
    $cedula = limpiarDatos(htmlspecialchars($_POST['cedula']));

    $sqlValidation = "SELECT id_datos_del_entregante, cedula, tipo_documento FROM datos_del_entregante WHERE tipo_documento = $tipo AND cedula = $cedula ";
    $resultValidation = $mysqli->query($sqlValidation);
    
    if (mysqli_num_rows($resultValidation)>0) {
        
        $serialEquipo = limpiarDatos($_POST['serial_del_equipo']);
        // $sqlValidationSerial = ;
        $resultValidationSerial = $mysqli->query("SELECT serial_equipo FROM datos_del_dispotivo WHERE serial_equipo = $serialEquipo");
        
        if ($resultValidationSerial !== false && $resultValidationSerial->num_rows >0) {
            
            foreach ($resultValidation as $row) {
                $beneficiario = $row['id_datos_del_entregante'];
            }
            
            $tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
            $serialEquipo = limpiarDatos($_POST['serial_del_equipo']);
            if ($serialEquipo == "") {
                $serialEquipo = "No posee serial de equipo";
            }
            $serialCargador = limpiarDatos($_POST['serial_cargador']);
            if ($serialCargador == "") {
                $serialCargador = "No posee serial de cargador";
            }
            $fechaRecepcion = $_POST['fecha_de_recepcion'];
            if ($fechaRecepcion == "") {
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Ingrese una fecha de recepcion del equipo',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.assign('dispositivosentrada.php');
                        });
                });
                    </script>";
            }
            $estadoRecepcion = limpiarDatos($_POST['estado_recepcion']);
            if ($estadoRecepcion == "") {
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Seleccione un estado del equipo',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.assign('dispositivosentrada.php');
                        });
                });
                    </script>";
            }
            $observaciones = limpiarDatos($_POST['observaciones']);
            if ($observaciones == "") {
            $observaciones = "No posee observaciones";
            }
            $rol = limpiarDatos($_POST['id_roles']);
            $origen = limpiarDatos($_POST['origen']);
            $estatus = limpiarDatos($_POST['estatus']);
            $falla = limpiarDatos($_POST['falla']);
                if ($falla == "") {
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                        <script language='JavaScript'>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Seleccione la falla pertinente',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                location.assign('dispositivosentrada.php');
                            });
                    });
                        </script>";
                }
            $fechaEntrega = "0000-00-00";
            $comprobacion = "Faltan comprobaciones";
            $responsable = 7;
            $grado = 4;
            $institucionEducativa = "No posee una institucion educativa";
            $institucionDondeEstudia = "No posee";
    
            $sql = "INSERT INTO datos_del_dispotivo (id_tipo_de_dispositivo, serial_equipo, serial_de_cargador, institucion_educativa, institucion_donde_estudia, fecha_de_recepcion, estado_recepcion_equipo, fecha_de_entrega, responsable, observaciones, comprobaciones, id_roles, id_origen, id_grado, id_estatus, id_motivo, id_datos_del_beneficiario) VALUES ('$tipoDeEquipo','$serialEquipo','$serialCargador','$institucionEducativa', '$institucionDondeEstudia','$fechaRecepcion','$estadoRecepcion', '$fechaEntrega', '$responsable','$observaciones', '$comprobacion','$rol','$origen','$grado','$estatus', '$falla','$beneficiario');";
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
            
                                location.assign('listadebeneficiario.php');
            
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
                    title: 'El serial del equipo ya existe',
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
                title: 'El beneficiario no esta registrado',
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
 
       
?>