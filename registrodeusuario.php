<?php
// Conexion a la base de datos
require "config/conexionProvi.php";
//  Funciones requeridas para la validacion de los datos.
require "function.php";

 if ($_POST['registrar']) {
    header("Location: admin.php");
 }else {
    
    $cedula = limpiarDatos(htmlspecialchars($_POST['cedula']));
    if (!preg_match("/\b/", $cedula)) {
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Ingrese correctamente la cedula',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK',
                            timer: 1500
                        }).then(() => {
                        location.assign('listadeusuario.php');
                        });
                    });
                </script>";
        if (!preg_match("/[0-9]{8}/", $cedula)) {
            echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'La cedula no coincide con los caracteres necesarios',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                    }).then(() => {
                        location.assign('listadeusuario.php');
                    });
            });
                </script>";
        }
    }
    

    $sqlValidation = " SELECT cedula FROM usuarios WHERE cedula = ". $cedula;
    $resultValidation = mysqli_query($mysqli, $sqlValidation);
    if (mysqli_num_rows($resultValidation)>0) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El usuario ya existe',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('admin.php');
              });
    });
        </script>";
    }else {
        $usuario = limpiarDatos(htmlspecialchars($_POST['usuario'])) ;
        if (!preg_match("/^[a-zA-Z]{10,60}/", $usuario)) {
            echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ingrese correctamente el usuario',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                    }).then(() => {
                        location.assign('listadeusuario.php');
                    });
            });
                </script>";
        }
        $nombre = limpiarDatos(htmlspecialchars($_POST['nombre']));
        if (!preg_match("/^[a-zA-Z\s]{10,50}/", $nombre)) {
            echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ingrese correctamente el nombre',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                    }).then(() => {
                        location.assign('listadeusuario.php');
                    });
            });
                </script>";
        }
        $password = limpiarDatos(htmlspecialchars($_POST['password']));
        if (!preg_match("/[A-Z0-9]{9}/", $password)) {
            echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ingrese correctamente la contraseña',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                    }).then(() => {
                        location.assign('listadeusuario.php');
                    });
            });
                </script>";
        }
        $cedula = limpiarDatos(htmlspecialchars($_POST['cedula']));
        if (!preg_match("/[0-9]{8}/", $cedula)) {
            echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ingrese correctamente la cedula',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                    }).then(() => {
                        location.assign('listadeusuario.php');
                    });
            });
                </script>";
        }
        $correo = limpiarDatos(htmlspecialchars($_POST['correo']));
        if(!preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $correo)) {
            echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script language='JavaScript'>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'El correo no cumple con el formato solicitado',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK',
                            timer: 3000
                        }).then(() => {
                            location.assign('Listadeapoyo.php');
                        });
                });
                    </script>
                    
            ";
        }
        $perfil = limpiarDatos(htmlspecialchars($_POST['perfil'])) ;
        if($perfil == ""){
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script language='JavaScript'>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Ingrese el perfil',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK',
                    timer: 1500
                  }).then(() => {

                    location.assign('listadeusuario.php');

                  });
        });
            </script>";
        }   
            $pass_c = sha1($password);
        
            $conex = $mysqli;    
            $sql = "INSERT INTO usuarios (id_usuarios, usuario, nombre, cedula, password, correo, id_roles) VALUES (NULL, '$usuario', '$nombre', '$cedula', '$pass_c', '$correo', '$perfil');";
        
            $resultado = $conex->query($sql);
        
            if ($resultado) {
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'El registro fue actualizado correctamente',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('listadeusuario.php');

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

                        location.assign('listadeusuario.php');

                     });
            });
                </script>";
            }
    }

   
 }