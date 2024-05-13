$(function(){
    console.log("Archivo enlazado")
    $("#registrarMemoriaRam").submit(e=>{
        e.preventDefault();
        const postData = {
            serialMemoriaRam: $("#serialMemoriaRam").val(),
            fechaActual: $("#fecha_actual").val(),
        }
        // Creacion de elemento ajax para el envio de los datos al backend
        $.ajax({
            url: "php/register/agregar-memoria_ram.php",
            data: postData,
            type: 'POST', 
            success: function(response){
                if (!response.error()) {
                    $("#registrarMemoriaRam").trigger("reset")
                }
            }
        })
    })


})