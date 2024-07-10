<?php
require "../../config/conexion.php";
require "../../function.php";

// $valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
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
                title: 'Tipo de documento no valido.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../../listatrabajadores.php');
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
                location.assign('../../listatrabajadores.php');
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
                    location.assign('../../listatrabajadores.php');
                });
        });
            </script>";
        }
    }
    $nombreTrabajador = limpiarDatos($_POST['nombre_del_beneficiario']);
    if (!preg_match("/^[a-zA-Z\s]{3,80}/", $nombreTrabajador)) {
        // $valido['success']=false;
        // $valido['mensaje']="El nombre del trabajador no cumple con los caracteres establecidos.";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El nombre del trabajador no cumple con los caracteres establecidos.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listatrabajadores.php');
            });
    });
        </script>";
    }
    $generoTrabajador = limpiarDatos($_POST['genero']);
    if ($generoTrabajador == "") {
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
                location.assign('../../listatrabajadores.php');
            });
    });
        </script>";
    }
    $areaTrabajador = limpiarDatos($_POST['area']);
    if ($areaTrabajador == "") {
        // $valido['success']=false;
        // $valido['mensaje']="Debe seleccionar un area.";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe seleccionar un area.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listatrabajadores.php');
            });
    });
        </script>";
    }
    $cargoTrabajador = limpiarDatos($_POST['cargo']);
    if ($cargoTrabajador == "") {
        // $valido['success']=false;
        // $valido['mensaje']="Debe seleccionar un cargo.";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe seleccionar un cargo.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listatrabajadores.php');
            });
    });
        </script>";
    }
    $correoTrabajador = limpiarDatos($_POST['correoBene']);
    if (!preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $correoTrabajador)) {
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
                location.assign('../../listatrabajadores.php');
            });
    });
        </script>";
    }
    $telefonoTrabajador = limpiarDatos($_POST['phone']);
    if (!preg_match("/\b/", $telefonoTrabajador)) {
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
                location.assign('../../listatrabajadores.php');
            });
    });
        </script>";
    }elseif (!preg_match("/[0-9]{11}/",$telefonoTrabajador)) {
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
                location.assign('../../listatrabajadores.php');
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
                title: 'Los datos ingresados no cumplen con los caracteres especificados.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listatrabajadores.php');
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
                title: 'Los datos ingresados en el campo de municipio no cumplen con los caracteres especificados.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listatrabajadores.php');
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
                location.assign('../../listatrabajadores.php');
            });
    });
        </script>";
    }
    $discapacidad = limpiarDatos($_POST['discapacidad_o_condicion']);
    if ($discapacidad == "") {
        // $valido['success']=false;
        // $valido['mensaje']="Debe marcar una opcion";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe marcar una opcion.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listatrabajadores.php');
            });
    });
        </script>";
    }
    $descripcionDisca = limpiarDatos($_POST['descripcionDiscapacidad']);
    if ($descripcionDisca == "") {
        $descripcionDisca = "No posee";
    }
    $origen = limpiarDatos($_POST['origen']);
    if ($origen != 3 || $origen == "") {
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
                location.assign('../../listatrabajadores.php');
            });
    });
        </script>";
        
    }

    // Datos complementarios para el registro
    $edad = 0;
    $fechaNac = '00-00-0000';
    $nombreRepre = "Industria Canaima";
    $mesaTelecomunicaciones = "No posee";
    $institucionEntrega = "No posee";
    $institucionEstudia = "no posee";
    $responsableEntrega = "No posee";
    $consejoComunal = "no posee";
    $descontinuado = 2;

    $sqlValidation = "SELECT cedula FROM datos_del_entregante WHERE cedula = '$cedula' AND id_origen = '$origen'";
    $resultadoValidation = $mysqli->query($sqlValidation);
    $n = $resultadoValidation->num_rows;

    if ($n == 0) {
        $sql = "INSERT INTO datos_del_entregante (nombre_del_beneficiario, tipo_documento, cedula, edad, Id_genero, fecha_de_nacimiento, id_area, id_cargo, nombre_del_representante, correo, telefono, estado, municipio, direccion, posee_discapacidad_o_condicion, descripcion_discapacidad_condicion,consejo_comunal, mesa_telecom, intitucion_entrega, institucion_estudia, responsable, id_origen, descontinuado) VALUES ('$nombreTrabajador', '$tipoDocumento','$cedula','$edad','$generoTrabajador','$fechaNac','$areaTrabajador','$cargoTrabajador','$nombreRepre', '$correoTrabajador','$telefonoTrabajador', '$estado', '$municipio', '$direccion', '$discapacidad', '$descripcionDisca', '$consejoComunal', '$mesaTelecomunicaciones','$institucionEntrega','$institucionEstudia','$responsableEntrega','$origen', '$descontinuado')";
         
        $resultadoTrabajador = $mysqli->query($sql);

        if ($resultadoTrabajador === true) {
            // $valido['success']=true;
            // $valido['mensaje']="Trabajad@r registrado correctamente.";
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Trabajad@r registrado correctamente.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listatrabajadores.php');
                });
        });
            </script>";
        }else {
            // $valido['success']=false;
            // $valido['mensaje']="Error al registrar trabajador.";
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al registrar trabajador.',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    location.assign('../../listatrabajadores.php');
                });
        });
            </script>";
        }

    }else {
        // $valido['success']=false;
        // $valido['mensaje']="El trabajad@r ya se encuentra registrado.";
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El trabajad@r ya se encuentra registrado.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listatrabajadores.php');
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
                title: 'No se enviaron los datos.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                location.assign('../../listatrabajadores.php');
            });
    });
        </script>";
    }
    // echo json_encode($valido);  
?>