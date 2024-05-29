<?php
session_start();
session_set_cookie_params(0); // La sesión expirará al cerrar el navegador

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Aquí añadimos el ID del producto al array del carrito
    $itemArray = array(
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => 1
    );

    if (!empty($_SESSION['cart'])) {
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity']++;
        } else {
            $_SESSION['cart'][$product_id] = $itemArray;
        }
    } else {
        $_SESSION['cart'][$product_id] = $itemArray;
    }

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}

