<?php
session_set_cookie_params(0); // La sesión expirará al cerrar el navegador
session_start();

// Verificar si se ha enviado una solicitud para vaciar el carrito
if (isset($_POST['vaciar_carrito'])) {
    // Eliminar todos los elementos del carrito
    unset($_SESSION['cart']);
}

// Redirigir de nuevo a la página del carrito
header("Location: ../PHP/verCarrito.php");
exit();
?>
