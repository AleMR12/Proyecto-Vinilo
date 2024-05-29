<?php

require('Header.php');
require('conexionBDD.php');
// Procesamiento de la actualización de la cantidad
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_quantity'])) {
    // Verificar si se reciben los datos correctamente
    // var_dump($_POST);

    // Actualizar la cantidad en el carrito
    if (isset($_POST['product_id']) && isset($_POST['new_quantity'])) {
        $product_id = $_POST['product_id'];
        $new_quantity = $_POST['new_quantity'];

        // Actualizar la cantidad en el carrito
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity'] = $new_quantity;
        }
    }

    // Redirigir a la misma página para actualizar la vista
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Carrito</title>
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Agregamos los archivos JS -->
    <script src="../JS/BarraNavegacionVertical.js"></script>

    <!-- Añadimos los archivos CSS -->
    <link rel="stylesheet" type="text/css" href="../CSS/MisPedidos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <main>
        <div class="container">
            <h1>Carrito de Compras</h1>
            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Total</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['cart'] as $product_id => $product) : ?>
                            <tr class="product-row" data-product-id="<?= $product_id ?>">
                                <td><?= htmlspecialchars($product['name']) ?></td>
                                <td>€<?= number_format($product['price'], 2) ?></td>
                                <td>€<span class="product-total"><?= number_format($product['price'] * $product['quantity'], 2) ?></span></td>
                                <td>
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="quantity-form">
                                        <input type="hidden" name="product_id" value="<?= $product_id ?>">
                                        <input type="number" name="new_quantity" value="<?= $product['quantity'] ?>" min="1" class="quantity-input">
                                        <button type="submit" name="update_quantity" class="update-button">Modificar</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="eliminar_producto.php?product_id=<?= $product_id ?>" class="delete-link">
                                        <span class="material-icons">close</span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <form method="post" action="vaciar_carrito.php" class="clear-cart-form">
                    <button type="submit" name="vaciar_carrito" class="clear-cart-button">Vaciar Carrito</button>
                </form>

                <div>
                    <form action="pasarela_pago.php" method="post">
                        <input type="submit" value="Proceder al Pago" class="proceder-pago">
                    </form>
                </div>

            <?php else : ?>
                <div id="realizar-pedido-aqui" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                    <p style="margin: 0; font-size: 1.5em;">Tu carrito está vacío.</p>
                </div>

                <!-- Ejemplo de productos recomendados -->
                <div class="recommended-products" style="margin-top: 50px;">
                    <h2>Productos Recomendados</h2>
                    <div class="products-list" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                        <!-- Ejemplo de producto recomendado -->
                        <div class="product-item" style="padding: 10px; margin: 10px; text-align: center;">
                            <img src="../Imagenes/Vinilos/ViniloLucesFuera.png" class="imagen-disco">
                            <p>Luces Fuera</p>
                            <p>40.00€</p>
                        </div>
                        <div class="product-item" style="padding: 10px; margin: 10px; text-align: center;">
                            <img src="../Imagenes/Vinilos/ViniloMMCD.png" class="imagen-disco">
                            <p>Me Muevo con Dios</p>
                            <p>20.00€</p>
                        </div>
                    </div>
                </div>

                <div style="display: flex; justify-content: center; align-items: flex-end;">
                    <a href="<?php echo isset($_SESSION['usuario']) ? '../PHP/discos.php' : '../HTML/LogIn.html'; ?>" class="explore-button">
                        Explorar Productos
                    </a>
                </div>
            <?php endif; ?>
        </div>


        <!-- Aplicamos la función de clicado para abrir la barra de navegación vertical -->
        <ul>
            <li id="Menu" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                    </svg></a></li>
        </ul>

        <!-- Aplicamos la funcion de clicado para cerrar la barra de navegación vertical -->
        <div class="Cabecera2">
            <nav>
                <ul class="Sidebar">
                    <li id="CerrarMenu" onclick="closeSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                            </svg></a></li>
                    <?php
                    if (isset($_SESSION['usuario'])) {
                        echo "<li><a href='../PHP/cerrarSesion.php'>CERRAR SESIÓN</a></li>";
                    } else {
                        echo "<li><a href='../HTML/LogIn.html'>INICIAR SESIÓN</a></li>";
                    }
                    ?>
                    <li><a href="../PHP/Index.php">INICIO</a></li>
                    <li><a href="../PHP/discos.php">DISCOS</a></li>
                    <li><a href="../PHP/Artistas.php">ARTISTAS</a></li>
                    <li><a href="../PHP/Conciertos.php">CONCIERTOS</a></li>
                    <li><a href="../PHP/Merchandising.php">MERCHANDISING</a></li>
                    <li><a href="../PHP/Contacto.php">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
    </main>

    <footer>
        <?php require('footer.php'); ?>
    </footer>

    <script>
        // Obtener el elemento que actuará como enlace
        var miEnlace = document.getElementById("miEnlace");

        // Agregar un evento de clic al elemento
        miEnlace.addEventListener("click", function() {
            // Redirigir a la URL deseada
            window.location.href = "../PHP/discos.php";
        });
    </script>
</body>

</html>