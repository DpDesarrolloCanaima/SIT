const RegistrarUsuario = async() => {
    var usuario = document.querySelector("#usuarioRegistroa").value;
    var passwordUsuario = document.querySelector("#passwordUsuarioa").value;
    var area = document.querySelector("#areausuario").value;
    var cedulaPersona = document.querySelector("#cedulaUsuarioa").value;
    console.log(usuario + passwordUsuario + area + cedulaPersona);
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

    if (!validarusuario(usuario)) {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "El usuario no cumple con los caracteres establecidos",
        });
      return;
    }
    // if (!validarpassword(passwordUsuario)) {
    //     Swal.fire({
    //       icon: "error",
    //       title: "Error",
    //       text: "La contraseña no cumple con los caracteres establecidos",
    //     });
    //   return;
    // }
    if (!validarcedula(cedulaPersona)) {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "La cedula no cumple con los caracteres establecidos",
        });
      return;
    }
    if (!validarArea(area)) {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "El area no cumple con los caracteres establecidos",
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