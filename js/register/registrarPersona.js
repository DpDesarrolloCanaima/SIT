const RegistrarPersona = async() => {
    var cedula = document.querySelector("#cedula").value;
    var nombreCompleto = document.querySelector("#nombre_completo").value;
    var correoInst = document.querySelector("#correoInst").value;
    var telefono = document.querySelector("#telefono").value;

    if (
        cedula.trim()=== ""||
        nombreCompleto.trim() === "" ||
        correoInst.trim() === "" ||
        telefono.trim() === ""
        ) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Faltan Campos por completar",
              });
            return;
    }

    if (!validarcedula(cedula)) {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "La cedula no cumple con los caracteres establecidos",
        });
      return;
    }
    if (!validarnombre(nombreCompleto)) {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "La cedula no cumple con los caracteres establecidos",
        });
      return;
    }
    if (!validarcorreo(correoInst)) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "El correo no cumple con los caracteres establecidos",
      });
    return;
    }

    if (!validarTelefono(telefono)) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "El telefono no cumple con los caracteres establecidos",
      });
    return;
    }

    // Envio de datos al backend 

    const datos = new FormData();

    datos.append("cedula", cedula);
    datos.append("nombre_completo", nombreCompleto);
    datos.append("correo_inst", correoInst);
    datos.append("telefono", telefono);

    var respuesta = await fetch("php/register/registrarPersona.php", {
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
        document.querySelector("#registroPersona").reset();
      }else{
        Swal.fire({
          icon: "error",
          title: "ERROR",
          text: resultado.mensaje,
        });
      }
}