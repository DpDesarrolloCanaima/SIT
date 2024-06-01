const RegistrarUsuario = async() => {
    var usuario = document.querySelector("#Usuario").value;
    var passwordUsuario = document.querySelector("#passwordUsuario").value;
    var area = document.querySelector("#area").value;
    var cedulaPersona = document.querySelector("#cedulaUsuario").value;

    if (
        cedulaPersona.trim() === '' ||
        usuario.trim() === '' ||
        passwordUsuario.trim() === '' ||
        area.trim() === ''
    ) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Faltan Campos por completar",
          });
        return;
    }

    // Envio de los datos al backend 

    const datos = new FormData();
    datos.append("cedulaPersona", cedulaPersona);
    datos.append("usuario", usuario);
    datos.append("password", passwordUsuario);
    datos.append("area", area);

    var respuesta = await fetch("php/register/registrarUsuario.php", {
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
        document.querySelector("#AgregarUsuario").reset();
      }else{
        Swal.fire({
          icon: "error",
          title: "ERROR",
          text: resultado.mensaje,
        });
      }
}