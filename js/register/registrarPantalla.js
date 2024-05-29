const RegistrarPantalla = async() => {
    var SerialDisco = document.querySelector("#serialPantalla").value;
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

    datos.append("serialPantalla", SerialDisco);
    datos.append("fechaRegistro", fechaRegistro);

    var respuesta = await fetch("php/register/registrarPantalla.php", {
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
        document.querySelector("#RegistroPantalla").reset();
        window.location.reload();
      }else{
        Swal.fire({
          icon: "error",
          title: "ERROR",
          text: resultado.mensaje,
        });
      }
}