document.addEventListener("DOMContentLoaded", function () {
    const cookiePopup = document.getElementById("avisoCookies");
    const content = document.getElementById("content");
    const acceptBtn = document.getElementById("botonAceptar");
    const rejectBtn = document.getElementById("botonRechazar");
    const overlay = document.getElementById("overlay"); // Agregamos la referencia al overlay

    acceptBtn.addEventListener("click", function () {
        cookiePopup.style.display = "none";
        content.classList.remove("grayscale");
        overlay.style.display = "none"; // Ocultamos el overlay al aceptar las cookies
        localStorage.setItem('cookiesAccepted', 'true'); // Guardamos en localStorage que se aceptaron las cookies
    });

    rejectBtn.addEventListener("click", function () {
        cookiePopup.style.display = "none";
        content.classList.remove("grayscale");
        overlay.style.display = "none"; // Ocultamos el overlay al rechazar las cookies
        localStorage.setItem('cookiesAccepted', 'false'); // Guardamos en localStorage que se rechazaron las cookies
    });

    // Si el usuario no ha aceptado ni rechazado las cookies, mostramos el banner de cookies
    if (!localStorage.getItem('cookiesAccepted')) {
        cookiePopup.style.display = "block";
        content.classList.add("grayscale");
        overlay.style.display = "block"; // Mostramos el overlay cuando se muestra el banner de cookies
    } else {
        overlay.style.display = "none"; // Ocultamos el overlay si el usuario ya aceptó o rechazó las cookies anteriormente
    }
});
