<?php

if ($_POST) {
    require "function.php";
    $serialTarjetaMadreEntrada = limpiarDatos($_POST['serial_entrada_tm']);
    if (!preg_match("/[A-Z0-9]{12}/" , $serialTarjetaMadreEntrada)) {
      echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El serial de la tarjerta madre no coincide con el formato correspondiente',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('detalletecnico.php');
                    });
            });
                </script>";
    }
    $serialTarjetaMadreSalida = limpiarDatos($_POST['serial_salida_tm']);
    if (!preg_match("/[A-Z0-9]{12}/", $serialTarjetaMadreSalida)) {
      $serialTarjetaMadreSalida = "n/c";
    }
    $pilaBios = limpiarDatos($_POST['pila_bios']);
    if ($pilaBios == "") {
      echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Marque alguna casilla',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('detalletecnico.php');
                    });
            });
                </script>";
    }
    $serialBateriaEntrada = limpiarDatos($_POST['serial_entrada_bat']);
    if (!preg_match("/[A-Z0-9]{25}/", $serialBateriaEntrada)) {
      echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El serial de la bateria no corresponde a los caracteres solicitados.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('detalletecnico.php');
                    });
            });
                </script>";
    }
    $serialBateriaSalida = limpiarDatos($_POST['serial_salida_bat']);
    if (!preg_match("/[A-Z0-9]{25}/", $serialBateriaSalida)) {
        $serialBateriaSalida = "n/c";
    }
    $tarjetaIosEntrada = limpiarDatos($_POST['serial_entrada_tarj_ios']);
    if (!preg_match("/[A-Z0-9]{25}/", $tarjetaIosEntrada)) {
      echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El serial de la tarjeta ios no corresponde con los caracteres necesarios.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('detalletecnico.php');
                    });
            });
                </script>";
    }
    $tarjetaIosSalida = limpiarDatos($_POST['serial_salida_tarj_ios']);
    if (!preg_match("/[A-Z0-9]{25}/", $tarjetaIosSalida)) {
      $tarjetaIosSalida = "n/c";
    }
    $caraAserialEntrada = limpiarDatos($_POST['serial_entrada_cara_a']);
    if (!preg_match("/[A-Z0-9]{18}/", $caraAserialEntrada)) {
      echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El serial de la cara A no corresponde con el solicitado.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('detalletecnico.php');
                    });
            });
                </script>";
    }
    $caraAserialSalida = limpiarDatos($_POST['serial_salida_cara_a']);
    if (!preg_match("/[A-Z0-9]{18}/", $caraAserialSalida)) {
      $caraAserialSalida = "n/c";
    }

    //DECISION DE QUE HACER CON LAS DEMAS CARAS DE LOS DISPOSITIVOS.
    $serialEntradaMemoriaRam = limpiarDatos($_POST['serial_entrada_memoria_ram']);
    if (!preg_match("/[A-Z0-9]{15}/", $serialEntradaMemoriaRam)) {
      echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El serial de la memoria ram no coincide con el solicitado.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('detalletecnico.php');
                    });
            });
                </script>";
    }
    $serialSalidaMemoriaRam = limpiarDatos($_POST['serial_salida_memoria_ram']);
    if (!preg_match("/[A-Z0-9]{15}/", $serialSalidaMemoriaRam)) {
      $serialSalidaMemoriaRam = "N/C";
    }
    $serialEntradaTeclado = limpiarDatos($_POST['serial_entrada_teclado']);
    if (!preg_match("/[A-Z0-9]{25}/", $serialEntradaTeclado)) {
      echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                      icon: 'error',
                        title: 'El serial del teclado no coincide con los caracteres solicitado.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                      }).then(() => {
                        location.assign('detalletecnico.php');
                      });
                    });
                    </script>";
                  }
                  $serialSalidaTeclado = limpiarDatos($_POST['serial_salida_teclado']);
                  if (!preg_match("/[A-Z0-9]{25}/", $serialSalidaTeclado)) {
                    $serialSalidaTeclado = "N/C";
    }
    
    $serialEntradaCargador = limpiarDatos($_POST['serial_entrada_memoria_ram']);
    if (!preg_match("/[A-Z0-9]{15}/", $serialEntradaCargador)) {
      echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El serial de la memoria ram no coincide con el formato solicitado.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('detalletecnico.php');
                    });
            });
                </script>";
    }
    $serialSalidaCargador = limpiarDatos($_POST['serial_salida_memoria_ram']);
    if (!preg_match("/[A-Z0-9]{15}/", $serialSalidaCargador)) {
      $serialSalidaCargador = "n/c";
    }
    $serialEntradaPantalla = limpiarDatos($_POST['serial_entrada_pantalla']);
    if (!preg_match("/[A-Z0-9]{25}/", $serialEntradaPantalla)) {
      echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El serial de la pantalla no coincide con los caracteres solicitados.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('detalletecnico.php');
                    });
            });
                </script>";
    }
    $serialSalidaPantalla = limpiarDatos($_POST['serial_salida_pantalla']);
    if (!preg_match("/[A-Z0-9]{25}/", $serialSalidaPantalla)) {
      $serialSalidaPantalla = "N/C";  
    }
    $serialEntradaTarjetaRed = limpiarDatos($_POST['serial_entrada_tarjerta_red']);
    if (!preg_match("/[A-Z0-9]{18}/", $serialEntradaTarjetaRed)) {
      echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El serial de la tarjeta de red no coincide con el formato solicitado.',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.assign('detalletecnico.php');
                    });
            });
                </script>";
    }
    $serialSalidaTarjetaRed = limpiarDatos($_POST['serial_salida_tarjeta_red']);
    if (!preg_match("/[A-Z0-9]{18}/", $serialSalidaTarjetaRed)) {
      $serialSalidaTarjetaRed = "N/C";
    }
    $fanCooler = limpiarDatos($_POST['fan_cooler']);
    if ($fanCooler == "") {
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
                location.assign('detalletecnico.php');
              });
    });
        </script>";
    }
    $observacionT = limpiarDatos($_POST['observaciones']);
    if ($observacionT == "") {
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Debe ingresar observaciones.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detalletecnico.php');
              });
    });
        </script>";
}
$estatus = limpiarDatos($_POST['id_status']);
if ($estatus != 3) {
  echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'No es el estatus correcto.',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detalletecnico.php');
              });
    });
        </script>";
}
$responsable = limpiarDatos($_POST['responsable']);
if ($responsable == "") {
  echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'No se realizaron los cambios',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detalletecnico.php');
              });
    });
        </script>";
}
$id_roles = limpiarDatos($_POST['id_roles']);
if ($id_roles == "") {
  echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'No se realizaron los cambios',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detalletecnico.php');
              });
    });
        </script>";
}
$idDispo = limpiarDatos($_POST['id_dispositivo']);
if ($idDispo == "") {
  echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'No se realizaron los cambios',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detalletecnico.php');
              });
    });
        </script>";
}

require "config/conexionProvi.php";

$sql = "UPDATE datos_del_dispotivo SET id_estatus = '$estatus',  observaciones_tecnico = '$observacionT', responsable = '$responsable', coordinador = 6, id_roles = '$id_roles'  WHERE id_datos_del_dispositivo = $idDispo"; 

$resultado = $mysqli->query($sql);

if ($resultado) {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Se realizaron los cambios',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then(() => {
            location.assign('detalletecnico.php?id=".$idDispo."');
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
                title: 'No se realizaron los cambios',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('detalletecnico.php?id=".$idDispo."');
              });
    });
        </script>";
}
}
?>