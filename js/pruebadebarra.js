document.getElementById("comprobacion").addEventListener("submit", function(e) {
    e.preventDefault();
    // Aquí puedes agregar tu código para procesar el código de barras


    var serialEquipo = document.querySelector("#serial_del_equipo").value;

    console.log (serialEquipo);
  });