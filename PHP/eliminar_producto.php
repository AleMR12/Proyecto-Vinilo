<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Verificar si el producto existe en el carrito y eliminarlo
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
}

// Redirigir de regreso a la página del carrito
header("Location: ../PHP/verCarrito.php");
exit();
?>
