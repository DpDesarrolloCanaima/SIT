<?php
require "../../config/conexion.php";
require "../../function.php";

if ($_POST) {
    $nombre_del_beneficiario = limpiarDatos($_POST['nombre_del_beneficiario']);
    if (!preg_match("/^[a-zA-Z\s]{3,80}/", $nombre_del_beneficiario)) {
        // $valido['success']=false;
        // $valido['mensaje']="El nombre del beneficiario no cumple con los caracteres establecidos.";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El nombre del beneficiario no cumple con los caracteres establecidos',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../../listadebeneficiario.php');
              });
    });
        </script>";
    }

    $tipoDocumento = limpiarDatos($_POST['tipo_documento']);
    if ($tipoDocumento != 1) {
        // $valido['success']=false;
        // $valido['mensaje']="Tipo de documento no valido.";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Tipo de documento no valido',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../../listadebeneficiario.php');
              });
    });
        </script>";
    }
    $cedula = limpiarDatos($_POST['documento']);
    if (!preg_match("/\b/", $cedula)) {
        // $valido['success']=false;
        // $valido['mensaje']="Debe ingresar solo numeros.";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar solo numeros.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../../listadebeneficiario.php');
              });
    });
        </script>";
        if (!preg_match("/[0-9]{8}/", $cedula)) {
            // $valido['success']=false;
            // $valido['mensaje']="Los datos ingresados no cumplen con los caracteres especificados.";
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Los datos ingresados de la cedula no cumplen con los caracteres especificados.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
        }
    }
    $edad = limpiarDatos($_POST['edadBene']);
    if (!preg_match("/\b/", $edad)) {
        // $valido['success']=false;
        // $valido['mensaje']="Debe ingresar solo numeros.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Debe ingresar solo numeros en la edad.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
        if (!preg_match("/[0-9]{2}/", $edad)) {
            // $valido['success']=false;
            // $valido['mensaje']="Los datos ingresados no cumplen con los caracteres especificados.";
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Debe ingresar solo numeros en la edad.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
        }
    }
    
    $genero = limpiarDatos($_POST['genero']);
    if ($genero == "") {
        // $valido['success']=false;
        // $valido['mensaje']="Debe seleccionar un genero.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Debe seleccionar un genero.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }
    
    $fecha_nac = limpiarDatos($_POST['fecha_de_nacimiento']);
    if ($fecha_nac == "") {
        // $valido['success']=false;
        // $valido['mensaje']="Debe ingresar una fecha de nacimiento.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Debe ingresar una fecha de nacimiento.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }

    $nombre_del_representante = limpiarDatos($_POST['nombre_del_representante']);
    if (!preg_match("/^[a-zA-Z\s]{3,80}/", $nombre_del_representante)) {
        // $valido['success']=false;
        // $valido['mensaje']="El nombre del representante no cumple con los caracteres especificos.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'El nombre del representante no cumple con los caracteres especificos.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }
    $correo = limpiarDatos($_POST['correoBene']);
    if (!preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $correo)) {
        // $valido['success']=false;
        // $valido['mensaje']="El correo no cumple con los caracteres necesarios.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'El correo no cumple con los caracteres necesarios.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
  }
    $telefono = limpiarDatos($_POST['phone']);
    if (!preg_match("/\b/", $telefono)) {
        // $valido['success']=false;
        // $valido['mensaje']="Debe ingresar solo numeros.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Debe ingresar solo numeros en el telefono.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }elseif (!preg_match("/[0-9]{11}/",$telefono)) {
        // $valido['success']=false;
        // $valido['mensaje']="Los datos ingresados no cumplen con los caracteres especificados.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Debe ingresar solo numeros en el telefono.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }
    $estado = limpiarDatos($_POST['estado']);
    if ($estado == "") {
        // $valido['success']=false;
        // $valido['mensaje']="Los datos ingresados no cumplen con los caracteres especificados.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Debe seleccionar un estado.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }
    $municipio = limpiarDatos($_POST['municipio']);
    if (!preg_match("/^[a-zA-Z\s]{10,60}/", $municipio)) {
        // $valido['success']=false;
        // $valido['mensaje']="Los datos ingresados en el campo de municipio no cumplen con los caracteres especificados.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Los datos ingresados en el campo de municipio no cumplen con los caracteres especificados..',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }
    $direccion = limpiarDatos($_POST['direccion']);
    if ($direccion == "") {
        // $valido['success']=false;
        // $valido['mensaje']="Los datos ingresados en el campo de direccion no cumplen con los caracteres especificados.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Los datos ingresados en el campo de direccion no cumplen con los caracteres especificados.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }
    $discapacidadCondicion = limpiarDatos($_POST['discapacidad_o_condicion']);
    if ($discapacidadCondicion == "") {
        // $valido['success']=false;
        // $valido['mensaje']="Debe marcar una opción.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Debe marcar una opción.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }
    $descripcionDiscapacidadCondicion = limpiarDatos($_POST['descripcionDiscapacidad']);
    if ($descripcionDiscapacidadCondicion == "") {
       $descripcionDiscapacidadCondicion = "No posee";
    }
    $origen = limpiarDatos($_POST['origen']);
    if ($origen != 2 || $origen == "") {
        // $valido['success']=false;
        // $valido['mensaje']="El origen no existe o fue modificado.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'El origen no existe o fue modificado.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }
    $consejoComunal = limpiarDatos($_POST['consejo_comunal']);
    if (!preg_match("/[a-zA-Z\s]{10,60}/", $consejoComunal)) {
        // $valido['success']=false;
        // $valido['mensaje']="Los datos ingresados en el campo de consejo comunal no cumplen con los caracteres especificados.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Los datos ingresados en el campo de consejo comunal no cumplen con los caracteres especificados.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }
    $mesaTelecomunicaciones = limpiarDatos($_POST['mesa_telecomunicaciones']);
    if (!preg_match("/[a-zA-Z\s]{10,60}/", $mesaTelecomunicaciones)) {
        // $valido['success']=false;
        // $valido['mensaje']="Los datos ingresados en el campo de mesa de telecomunicaciones no cumplen con los caracteres especificados.";
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Los datos ingresados en el campo de consejo comunal no cumplen con los caracteres especificados.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listadebeneficiario.php');
                });
        });
            </script>";
    }
    $institucionEntrega = limpiarDatos($_POST['institucion_entrega']);
    if (!preg_match("/[a-zA-Z\s]{10,60}/", $institucionEntrega)) {
        // $valido['success']=false;
        // $valido['mensaje']="Los datos ingresados en el campo de institución entrega no cumplen con los caracteres especificados.";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Los datos ingresados en el campo de institución entrega no cumplen con los caracteres especificados.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listadebeneficiario.php');
            });
    });
        </script>";
    }
    $institucionEstudia = limpiarDatos($_POST['institucion_estudia']);
    if (!preg_match("/[a-zA-Z\s]{10,60}/", $institucionEstudia)) {
        // $valido['success']=false;
        // $valido['mensaje']="Debe seleccionar una opcion.";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe seleccionar una opcion.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listadebeneficiario.php');
            });
    });
        </script>";
    }

    $responsableEntrega = limpiarDatos($_POST['responsable_entrega']);
    if (!preg_match("/[a-zA-Z\s]{5,60}/", $responsableEntrega)) {
        // $valido['success']=false;
        // $valido['mensaje']="Los datos ingresados en el campo de responsable de entrega no cumplen con los caracteres especificados.";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Los datos ingresados en el campo de responsable de entrega no cumplen con los caracteres especificados.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listadebeneficiario.php');
            });
    });
        </script>";
    }
    //Datos complementarios
    $idarea = 1;
    $idcargo = 1;
    $conex = $mysqli;
    $descontinuado = 2;
    $sqlValidation = "SELECT cedula FROM datos_del_entregante WHERE cedula = '$cedula' AND descontinuado = 2";
    $resultadoValidation = $conex->query($sqlValidation);
    $n = $resultadoValidation->num_rows;

    if ($n == 0) {
        $sql = "INSERT INTO datos_del_entregante (nombre_del_beneficiario, tipo_documento, cedula, edad, Id_genero, fecha_de_nacimiento, id_area, id_cargo, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion, consejo_comunal, mesa_telecom, intitucion_entrega, institucion_estudia, responsable, id_origen, descontinuado) VALUES ('$nombre_del_beneficiario', '$tipoDocumento', '$cedula', '$edad', '$genero', '$fecha_nac','$idarea','$idcargo','$nombre_del_representante','$correo','$telefono','$estado','$municipio','$direccion','$discapacidadCondicion','$descripcionDiscapacidadCondicion', '$consejoComunal', '$mesaTelecomunicaciones','$institucionEntrega','$institucionEstudia','$responsableEntrega','$origen', '$descontinuado');";

        // $valido['success']=false;
        // $valido['mensaje']= $sql;
        
        if ($conex->query($sql)===true) {
            // $valido['success']=true;
            // $valido['mensaje']="Registro exitoso";  
            echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Registro exitoso',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('../../listadebeneficiario.php');
                    });
            });
                </script>";
        }else {
            // $valido['success']=false;
            // $valido['mensaje']="Fallo al registar la institucion.";  
            echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Fallo al registar la institucion.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('../../listadebeneficiario.php');
                    });
            });
                </script>";
        }
    }else {
        // $valido['success']=false;
        // $valido['mensaje']="El beneficiario ya se encuentra registrado.";
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El beneficiario ya se encuentra registrado.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('../../listadebeneficiario.php');
                    });
            });
                </script>";
    }

    }else {
        // $valido['success']=false;
        // $valido['mensaje']="No se enviaron los datos";
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'No se enviaron los datos',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('../../listadebeneficiario.php');
                    });
            });
                </script>";
    }
    
    // echo json_encode($valido);  


													