// Captura el nombre del artista de la pagina de artistas.php y lo pone en la barra de busqueda de discos.php
window.addEventListener('DOMContentLoaded', (event) => {
    const urlParams = new URLSearchParams(window.location.search);
    const artista = urlParams.get('artista');
    const busquedaInput = document.getElementById('busqueda');

    if (artista) {
        // Establecer el valor del input de búsqueda
        busquedaInput.value = artista;
    }
});
