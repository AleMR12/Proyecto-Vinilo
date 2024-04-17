document.addEventListener("DOMContentLoaded", function() {
    // Obtén referencias a los elementos del DOM
    var carritoIcono = document.getElementById("carrito-icono");
    var menuCarrito = document.getElementById("menu-carrito");

    // Agrega un controlador de eventos al icono del carrito
    carritoIcono.addEventListener("click", function(event) {
        event.stopPropagation(); // Evita que el evento se propague al hacer clic en el icono del carrito

        // Muestra u oculta el menú desplegable del carrito según su estado actual
        if (menuCarrito.classList.contains("menu-carrito-oculto")) {
            menuCarrito.classList.remove("menu-carrito-oculto");
        } else {
            menuCarrito.classList.add("menu-carrito-oculto");
        }
    });

    // Cierra el menú desplegable del carrito cuando se hace clic fuera de él
    document.addEventListener("click", function(event) {
        if (!menuCarrito.contains(event.target) && event.target !== carritoIcono) {
            menuCarrito.classList.add("menu-carrito-oculto");
        }
    });
});

function agregarAlCarrito(idDisco) {
    // Aquí puedes realizar la lógica para agregar el disco al carrito
    // Por ejemplo, puedes enviar una solicitud AJAX al servidor para manejar la acción de agregar al carrito
    // Aquí estoy mostrando un mensaje de alerta como ejemplo
    alert("Se ha agregado el disco con ID " + idDisco + " al carrito.");

    // Muestra u oculta el menú desplegable del carrito según su estado actual
    var menuCarrito = document.getElementById("menu-carrito");
    menuCarrito.classList.remove("menu-carrito-oculto");
}
