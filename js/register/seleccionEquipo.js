const SeleccionEquipo = async() =>{
    var equipoSeleccionado = document.querySelector("#Equipo").value;
    var fechaRegistro = document.querySelector("#fechaEquipo").value;
    if (
        equipoSeleccionado.trim() === '' ||
        fechaRegistro.trim() === '') {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Faltan Campos por completar",
              });
            return;
    }

    const datos = new FormData();

    datos.append("equipoSeleccionado", equipoSeleccionado);
    datos.append("fechaEquipo", fechaRegistro);

    var respuesta = await fetch("php/register/registraSeleccionEquipo.php", {
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
        document.querySelector("#RegistroMemoria").reset();
        window.location.reload();
      }else{
        Swal.fire({
          icon: "error",
          title: "ERROR",
          text: resultado.mensaje,
        });
      }
}