<!-- Esta página sirve solo para redirigir a la persona al login cuando le da a olvidar contraseña -->

<?php
// Verificar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    // Aquí puedes realizar cualquier validación adicional si es necesario

    // Redirigir a la página deseada
    header("Location: ../HTML/LogIn.html");
    exit();
} else {
    // Si no se enviaron los datos del formulario, redirigir a otra página o mostrar un mensaje de error
    header("Location: ../HTML/LogIn.html");
    exit();
}
?>
