const RegistrarDisco = async() => {
    var SerialDisco = document.querySelector("#serialDisco").value;
    var fechaRegistro = document.querySelector("#fechaRegistro").value;

    if (SerialDisco.trim() === '' ||
        fechaRegistro.trim() === '') {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Faltan Campos por completar",
          });
        return;
    }

    const datos = new FormData();

    datos.append("serialDisco", SerialDisco);
    datos.append("fechaRegistro", fechaRegistro);

    var respuesta = await fetch("php/register/registrarDiscoDuro.php", {
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
        window.location.reload();
        document.querySelector("#RegistroDisco").reset();
      }else{
        Swal.fire({
          icon: "error",
          title: "ERROR",
          text: resultado.mensaje,
        });
      }
}