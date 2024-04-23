function capturarTexto(elemento) {
    // Obtener el texto del párrafo dentro del enlace clicado
    var texto = elemento.nextElementSibling.querySelector('p').innerText;
    // Codificar el texto para que sea parte de la URL
    var textoCodificado = encodeURIComponent(texto);
    // Redirigir a la página de destino con el texto como parámetro de búsqueda
    window.location.href = elemento.href + '?busqueda=' + textoCodificado;
    // Detener el comportamiento predeterminado del enlace para evitar la redirección inmediata
    event.preventDefault();
}