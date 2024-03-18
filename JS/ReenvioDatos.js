document.getElementById("registroForm").addEventListener("submit", function(event) {
    // Enviar datos al primer archivo PHP
    this.action = "registrarusuario.php";
    
    // Clonar el formulario y enviar datos al segundo archivo PHP
    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "index.php");
    xhr.send(formData);
});