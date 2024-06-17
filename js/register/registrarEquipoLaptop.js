const RegistrarArmado = async() =>{
    var serialCaraB = document.querySelector("#serialCaraB").value;
    var serialMR = document.querySelector("#serialMR").value;
    var serialCargador = document.querySelector("#serialCargador").value;
    var serialTarjetaMadre = document.querySelector("#serialTarjetaMadre").value;
    var serialPantalla = document.querySelector("#serialPantalla").value;
    var serialDiscoDuro = document.querySelector("#serialDiscoDuro").value;
    var serialBateria = document.querySelector("#serialBateria").value;
    var fechaRegistro = document.querySelector("#fechaRegistro").value;
    var estatus = document.querySelector("#estatus").value;
    var tipoEquipo = document.querySelector("#tipoEquipo").value;
    var responsable = document.querySelector("#responsable").value;

    if (
        serialCaraB.trim() === '' ||
        serialMR.trim() === '' ||
        serialCargador.trim() === '' ||
        serialTarjetaMadre.trim() === '' ||
        serialPantalla.trim() === '' ||
        serialDiscoDuro.trim() === '' ||
        serialBateria.trim() === '' ||
        fechaRegistro.trim() === '' ||
        estatus.trim() === '' ||
        tipoEquipo.trim() === '' ||
        responsable.trim() === ''
    ) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Faltan Campos por completar",
          });
        return;
    }

    const datos = new FormData();
    datos.append("serialCaraB", serialCaraB);
    datos.append("serialMR", serialMR);
    datos.append("serialCargador", serialCargador);
    datos.append("serialTarjetaMadre", serialTarjetaMadre);
    datos.append("serialPantalla", serialPantalla);
    datos.append("serialDiscoDuro", serialDiscoDuro);
    datos.append("serialBateria", serialBateria);
    datos.append("fechaRegistro", fechaRegistro);
    datos.append("estatus", estatus);
    datos.append("tipoEquipo", tipoEquipo);
    datos.append("responsable", responsable);

    var respuesta = await fetch("php/register/registrarEquipoLaptop.php", {
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
        document.querySelector("#RegistroEquipoLaptop").reset();
        window.location.reload();
      }else{
        Swal.fire({
          icon: "error",
          title: "ERROR",
          text: resultado.mensaje,
        });
      }

}