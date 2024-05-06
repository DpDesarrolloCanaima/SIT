const ActualizarArea = async() => {
    var areaCambiar = document.querySelector("#areaCambiar").value;
    var cedulaUsuario = document.querySelector("#cedulaUsuario").value;

    if (
        areaCambiar.trim() === "" ||
        cedulaUsuario.trim() === ""
    ) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Faltan Campos por completar",
          });
        return;
    }

    // Enviar datos al backend 

    const datos = new FormData();

    datos.append("areaCambiar", areaCambiar);
    datos.append("cedulaUsuario", cedulaUsuario);

    var respuesta = await fetch("php/update/updateArea.php", {
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
        document.querySelector("#updateArea").reset();
      }else{
        Swal.fire({
          icon: "error",
          title: "ERROR",
          text: resultado.mensaje,
        });
      }
}