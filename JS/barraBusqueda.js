document.addEventListener("DOMContentLoaded", function() {
    var inputBusqueda = document.getElementById("busqueda");

    inputBusqueda.addEventListener("input", function() {
        var filtro = inputBusqueda.value.toLowerCase();
        var discos = document.querySelectorAll(".disco-vinilo");

        discos.forEach(function(disco) {
            var nombre = disco.querySelector(".nombre-disco").textContent.toLowerCase();
            var precio = disco.querySelector(".precio").textContent.toLowerCase();

            if (nombre.includes(filtro) || precio.includes(filtro)) {
                disco.style.display = "";
            } else {
                disco.style.display = "none";
            }
        });
    });
});
