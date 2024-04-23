<?php
require('Header.php');

// Verificar si hay elementos en el carrito
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    // Obtener los productos del carrito
    $cart_items = $_SESSION['cart'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Ponemos el icono en la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">
</head>

<body>
    <div class="container">
        <h1>Carrito de Compras</h1>
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart_items as $product_id => $product) : ?>
                        <tr>
                            <td><?= $product['name'] ?></td>
                            <td>$<?= $product['price'] ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td>$<?= $product['price'] * $product['quantity'] ?></td>
                            <td>
                                <form method="post" action="modificar_cantidad.php" class="quantity-form">
                                    <input type="hidden" name="product_id" value="<?= $product_id ?>">
                                    <input type="number" name="new_quantity" value="<?= $product['quantity'] ?>" min="1" class="quantity-input">
                                    <button type="submit" name="update_quantity" class="update-button">Modificar</button>
                                </form>
                                <a href="eliminar_producto.php?product_id=<?= $product_id ?>" class="delete-link">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <form method="post" action="vaciar_carrito.php" class="clear-cart-form">
                <button type="submit" name="vaciar_carrito" class="clear-cart-button">Vaciar Carrito</button>
            </form>
        <?php else : ?>
            <p class="empty-cart-message">El carrito está vacío</p>
        <?php endif; ?>
    </div>
</body>

</html>
