<?php
require "function.php";

if ($_POST) {
    $idEditBene = $_POST['ideditbene'];
    $icedit = limpiarDatos($_POST['icedit']);
    if ($icedit == "") {
      echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El equipo debe tener un IC',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('listadebeneficiario.php');
              });
    });
        </script>";
    }
    $nombreBeneEdit = limpiarDatos($_POST['nombre_del_beneficiario_edit']);
    if ($nombreBeneEdit == "") {
      echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El equipo ya esta registrado',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('listadebeneficiario.php');
              });
    });
        </script>";
    }
    $cedulaBeneEdit = limpiarDatos($_POST['cedulaBeneEdit']);
    if ($cedulaBeneEdit == "") {
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script language='JavaScript'>
          document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                  icon: 'error',
                  title: 'Debe ingresar la cedula del beneficiario',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'OK'
                }).then(() => {
                  location.assign('listadebeneficiario.php');
                });
      });
          </script>";
    }
    $edadBeneEdit = limpiarDatos($_POST['edadBeneEdit']);
    if ($edadBeneEdit == "") {
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script language='JavaScript'>
          document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                  icon: 'error',
                  title: 'Debe ingresar la edad',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'OK'
                }).then(() => {
                  location.assign('listadebeneficiario.php');
                });
      });
          </script>";
    }
    $generoEdit = limpiarDatos($_POST['genero']);
    if ($generoEdit == "") {
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script language='JavaScript'>
          document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                  icon: 'error',
                  title: 'Seleccione el genero',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'OK'
                }).then(() => {
                  location.assign('listadebeneficiario.php');
                });
      });
          </script>";
    }
    $fechadenacimientoEdit = limpiarDatos($_POST['fecha_de_nacimiento']);
    if ($fechadenacimientoEdit == "") {
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script language='JavaScript'>
          document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                  icon: 'error',
                  title: ' Ingrese fecha de Nacimiento',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'OK'
                }).then(() => {
                  location.assign('listadebeneficiario.php');
                });
      });
          </script>";
    }
    $nombreRepreBeneEdit = limpiarDatos($_POST['nombre_del_representanteEdit']);
    $correoEdit = limpiarDatos($_POST['correoBeneEdit']);
    $telefonoEdit = limpiarDatos($_POST['phoneEdit']);
    $estado = limpiarDatos($_POST['estado']);
    $municipioEdit = limpiarDatos($_POST['municipio']);
    $direccionEdit = limpiarDatos($_POST['direccion']);
    $poseeDiscaEdit = limpiarDatos($_POST['discapacidad_o_condicion']);
    $descripcionDisEdit = limpiarDatos($_POST['descripcion_discapacidad']);
    $origenEdit = limpiarDatos($_POST['origen']);
     //Datos complementarios 
    $areainsti = "Industria Canaima";
    $cargoinsti = "Industria Canaima";
    $idarea = 1;
    $idcargo = 1;

    require "config/conexionProvi.php";
    $sql = "UPDATE datos_del_entregante SET ic = '$icedit', nombre_del_beneficiario = '$nombreBeneEdit', cedula = '$cedulaBeneEdit', edad = '$edadBeneEdit', Id_genero = '$generoEdit', fecha_de_nacimiento = '$fechadenacimientoEdit', id_area = '$idarea', id_cargo = '$idcargo', nombre_del_representante = '$nombreRepreBeneEdit', correo = '$correoEdit', telefono = '$telefonoEdit', estado = '$estado', municipio = '$municipioEdit', direccion = '$direccionEdit', posee_discapacidad_o_condicion = '$poseeDiscaEdit',descripcion_discapacidad_condicion = '$descripcionDisEdit', id_origen = '$origenEdit' WHERE id_datos_del_entregante = $idEditBene";

    //echo $sql;
    $resultado = mysqli_query($mysqli, $sql);

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
}





?>