const RegistrarArmadoTablet = async() => {
    var serialCaraB = document.querySelector("#serialCaraB").value;
    var serialCargador = document.querySelector("#serialCargador").value;
    var serialBateria = document.querySelector("#serialBateria").value;
    var serialPantalla = document.querySelector("#serialPantalla").value;
    var fechaRegistro = document.querySelector("#fechaRegistro").value;
    var estatus = document.querySelector("#estatus").value;
    var tipoEquipo = document.querySelector("#tipoEquipo").value;
    var responsable = document.querySelector("#responsable").value;
    if (
        serialCaraB.trim() === '' ||
        serialCargador.trim() === '' ||
        serialBateria.trim() === '' ||
        serialPantalla.trim() === '' ||
        fechaRegistro.trim() === '' ||
        estatus.trim() === '' ||
        responsable.trim() === ''
    ) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Faltan Campos por completar",
          });
        return;
    }
    if (tipoEquipo.trim() === '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "No esta permitido registrar tablets",
          });
        return;
    }

    const datos = new FormData();
    datos.append("serialCaraB", serialCaraB);
    datos.append("serialCargador", serialCargador);
    datos.append("serialBateria", serialBateria);
    datos.append("serialPantalla", serialPantalla);
    datos.append("fechaRegistro", fechaRegistro);
    datos.append("estatus", estatus);
    datos.append("tipoEquipo", tipoEquipo);
    datos.append("responsable", responsable);

    var respuesta = await fetch("php/register/registrarEquipoTablet.php", {
        method: 'POST',
        body: datos
      })
  
      var resultado=await respuesta.json();
    
      if (resultado.success == true) {
        Swal.fire({
          icon: "success",
          title: "EXITO",
          text: resultado.mensaje,
        });
        document.querySelector("#RegistroEquipoTablet").reset();
        window.location.reload();
      }else{
        Swal.fire({
          icon: "error",
          title: "ERROR",
          text: resultado.mensaje,
        });
      }
}