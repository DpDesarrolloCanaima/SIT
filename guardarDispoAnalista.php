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

        // if ($cedula = $comprobacion) {
        //     $tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
        //     if ($tipoDeEquipo == "") {
        //         echo "
        //         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        //         <script language='JavaScript'>
        //         document.addEventListener('DOMContentLoaded', function() {
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'Seleccione un equipo',
        //                 showCancelButton: false,
        //                 confirmButtonColor: '#3085d6',
        //                 confirmButtonText: 'OK'
        //             }).then(() => {
        //                 location.assign('dispositivosentrada.php');
        //             });
        //     });
        //         </script>";
        //     }
        //     $serialEquipo = limpiarDatos($_POST['serial_del_equipo']);
        //     if (!preg_match("/[A-Z0-9]{18}/", $serialEquipo)) {
        //         echo "
        //         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        //         <script language='JavaScript'>
        //         document.addEventListener('DOMContentLoaded', function() {
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'El serial del equipo no coincide con el formato correspondiente',
        //                 showCancelButton: false,
        //                 confirmButtonColor: '#3085d6',
        //                 confirmButtonText: 'OK'
        //             }).then(() => {
        //                 location.assign('dispositivosentrada.php');
        //             });
        //     });
        //         </script>";
        //     }
        //     $serialCargador = limpiarDatos($_POST['serial_cargador']);
        //     if (!preg_match("/[0-9]{18}/", $serialCargador)) {
        //         echo "
        //         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        //         <script language='JavaScript'>
        //         document.addEventListener('DOMContentLoaded', function() {
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'El serial del cargador no coincide con el formato correspondiente',
        //                 showCancelButton: false,
        //                 confirmButtonColor: '#3085d6',
        //                 confirmButtonText: 'OK'
        //             }).then(() => {
        //                 location.assign('dispositivosentrada.php');
        //             });
        //     });
        //         </script>";
        //     }
        //     $fechaRecepcion = $_POST['fecha_de_recepcion'];
        //     if ($fechaRecepcion == "") {
        //         echo "
        //         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        //         <script language='JavaScript'>
        //         document.addEventListener('DOMContentLoaded', function() {
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'Ingrese una fecha',
        //                 showCancelButton: false,
        //                 confirmButtonColor: '#3085d6',
        //                 confirmButtonText: 'OK'
        //             }).then(() => {
        //                 location.assign('dispositivosentrada.php');
        //             });
        //     });
        //         </script>";
        //     }
        //     $estadoRecepcion = limpiarDatos($_POST['estado_recepcion']);
        //     if ($estadoRecepcion == "") {
        //         echo "
        //         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        //         <script language='JavaScript'>
        //         document.addEventListener('DOMContentLoaded', function() {
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'Debe seleccionar un estado de recepcion',
        //                 showCancelButton: false,
        //                 confirmButtonColor: '#3085d6',
        //                 confirmButtonText: 'OK'
        //             }).then(() => {
        //                 location.assign('dispositivosentrada.php');
        //             });
        //     });
        //         </script>";
        //     }
        //     $observaciones = limpiarDatos($_POST['observaciones']);
        //     if ($observaciones == "") {
        //         echo "
        //         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        //         <script language='JavaScript'>
        //         document.addEventListener('DOMContentLoaded', function() {
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: 'Debe ingresar observaciones del equipo',
        //                 showCancelButton: false,
        //                 confirmButtonColor: '#3085d6',
        //                 confirmButtonText: 'OK'
        //             }).then(() => {
        //                 location.assign('dispositivosentrada.php');
        //             });
        //     });
        //         </script>";
        //     }
        //     $motivoIngreso = limpiarDatos($_POST['']);
        //     $rol = limpiarDatos($_POST['id_roles']);
        //     $origen = limpiarDatos($_POST['origen']);
        //     $estatus = limpiarDatos($_POST['estatus']);
        //     $falla = limpiarDatos($_POST['falla']);
        //     $coordinador = limpiarDatos($_POST['coordinador']);
        //     $fechaEntrega = date('00-00-0000');
        //     $comprobacion = "Faltan comprobaciones";
        //     $observaciones_tecnico = "Falta por observaciones";
        //     $observaciones_verificador = "Falta por observaciones";
        //     $responsable = limpiarDatos($_POST['responsable']);
            //Generacion de IC para el registro del dispositivo
            
            // $datos = "SELECT MAX(ic_dispositivo) AS ic_dispositivo FROM datos_del_dispotivo";
            // $resultado=mysqli_query($mysqli,$datos);
        
            // while ($row = mysqli_fetch_assoc($resultado)) {
            //     $valor1 = $row['ic_dispositivo'];
            //         $contadordb = 0;
            //         for ($i=0; $i <= $valor1 ; $i++) { 
            //             if ($valor1 == 0) {
            //                 $contadordb = 1;
            //             }else {
            //                 $contadordb++;
            //             }
            //         }
            //         $año = date("Y", strtotime($fechaRecepcion));
            //         $enviaric = $año."-".$contadordb;

            //         echo "
            //         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            //         <script language='JavaScript'>
            //         document.addEventListener('DOMContentLoaded', function() {
            //             Swal.fire({
            //                 icon: 'success',
            //                 title: 'Se registro correctamente el dispositivo',
            //                 showCancelButton: false,
            //                 confirmButtonColor: '#3085d6',
            //                 confirmButtonText: 'OK',
            //                 timer: 1500
            //                 }).then(() => {
            //                     location.assign('dispositivosentrada.php');
            //                 });
            //             });
            //         </script>";
            //         }


            // $sql = "INSERT INTO datos_del_dispotivo (id_tipo_de_dispositivo, serial_equipo, serial_de_cargador, fecha_de_recepcion, estado_recepcion_equipo, fecha_de_entrega, responsable,  observaciones_analista, observaciones_tecnico, observaciones_verificador, comprobaciones, motivo_de_ingreso, coordinador, id_roles, id_origen, id_estatus, id_motivo, id_datos_del_beneficiario) VALUES ('$tipoDeEquipo','$serialEquipo','$serialCargador','$fechaRecepcion','$estadoRecepcion', '$fechaEntrega', '$responsable','$observaciones', '$observaciones_tecnico', '$observaciones_verificador', '$comprobacion','$motivoIngreso','$coordinador','$rol','$origen','$estatus', '$falla','$beneficiario');";

            // $resultado = $mysqli->query($sql);
            // if ($resultado) {
            //     echo "
            //             <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            //             <script language='JavaScript'>
            //             document.addEventListener('DOMContentLoaded', function() {
            //                 Swal.fire({
            //                     icon: 'success',
            //                     title: 'Se registro correctamente el dispositivo',
            //                     showCancelButton: false,
            //                     confirmButtonColor: '#3085d6',
            //                     confirmButtonText: 'OK',
            //                     timer: 1500
            //                   }).then(() => {
            //                     location.assign('dispositivosentrada.php');
            //                   });
            //         });
            //             </script>";
            // }else {
            //     echo "
            //             <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            //             <script language='JavaScript'>
            //             document.addEventListener('DOMContentLoaded', function() {
            //                 Swal.fire({
            //                     icon: 'error',
            //                     title: 'Algo salio mal. Intenta de nuevo',
            //                     showCancelButton: false,
            //                     confirmButtonColor: '#3085d6',
            //                     confirmButtonText: 'OK',
            //                     timer: 1500
            //                   }).then(() => {
            //                     location.assign('dispositivosentrada.php');
            //                  });
            //         });
            //             </script>";
            // }
            if ($cedula == $comprobacion ) {
                $tipoDeEquipo = limpiarDatos($_POST['tipo_de_equipo']);
                if ($tipoDeEquipo == "") {
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Seleccione un equipo',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.assign('dispositivosentrada.php');
                        });
                });
                    </script>";
                }
                $serialEquipo = limpiarDatos($_POST['serial_del_equipo']);
                if (!preg_match("/[A-Z0-9]{18}/", $serialEquipo)) {
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'El serial del equipo no coincide con el formato correspondiente',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.assign('dispositivosentrada.php');
                        });
                });
                    </script>";
                }
                $serialCargador = limpiarDatos($_POST['serial_cargador']);
                if (!preg_match("/[0-9]{18}/", $serialCargador)) {
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'El serial del cargador no coincide con el formato correspondiente',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.assign('dispositivosentrada.php');
                        });
                });
                    </script>";
                }
                $fechaRecepcion = $_POST['fecha_de_recepcion'];
                if ($fechaRecepcion == "") {
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Ingrese una fecha',
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
                            title: 'Debe seleccionar un estado de recepcion',
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
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Debe ingresar observaciones del equipo',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            location.assign('dispositivosentrada.php');
                        });
                });
                    </script>";
                }
            }
            
            $sql = "INSERT INTO datos_del_dispotivo (id_tipo_de_dispositivo, serial_equipo, serial_de_cargador, fecha_de_recepcion, estado_recepcion_equipo, fecha_de_entrega, responsable,  observaciones_analista, observaciones_tecnico, observaciones_verificador, comprobaciones, motivo_de_ingreso, coordinador, id_roles, id_origen, id_estatus, id_motivo, id_datos_del_beneficiario) VALUES ('$tipoDeEquipo','$serialEquipo','$serialCargador','$fechaRecepcion','$estadoRecepcion', '$fechaEntrega', '$responsable','$observaciones', '$observaciones_tecnico', '$observaciones_verificador', '$comprobacion','$motivoIngreso','$coordinador','$rol','$origen','$estatus', '$falla','$beneficiario');";
            echo $sql;
          
        }

        
               
?>