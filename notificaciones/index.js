const btn = document.querySelector('#btnNotificacion');

btn.addEventListener('click',()=>{
    
    if(!("Notification" in window)){
        alert('Este navegador no soporta las notificaciones');
        return;
    }

    (Notification.permission === 'granted')? crearNotificacion() : obtenerPermiso();

});

 async function obtenerPermiso() {
    const respuesta = await Notification.requestPermission();
    (respuesta == 'granted')&& crearNotificacion();
}

function crearNotificacion() {
    
    const notificacion = new Notification('Trabajo',{
        body:'Canaimas pendientes',
        icon: '../img/canaima.png',
    });

    //const notificacion2 = new Notification('CapiDeveloper',{
        //body:'Suscribete a mi canal, subo videos cada semana!',
        //icon: 'https://capideveloper.capifood.com/bryan-mini-panda.png',
      //  requireInteraction: true,
    //});

    notificacion2.addEventListener('click',()=>{
        // Redireccionar
    });

}