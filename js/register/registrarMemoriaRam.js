const RegistrarMemoriaRam = async() => {
    var serialMemoria = document.querySelector("#serial_memoria").value;
    var fechaActual = document.querySelector("#fechaActual").value;

    if (
        serialMemoria.trim() === "" ||
        fechaActual.trim() === ""
        ) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Faltan Campos por completar",
              });
            return;
    }
}