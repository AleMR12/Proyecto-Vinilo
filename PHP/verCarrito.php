<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Carrito</title>
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Agregamos los archivos JS -->
    <script src="../JS/BarraNavegacionVertical.js"></script>
</head>

<body>
    <header>
        <?php require('Header.php'); ?>
    </header>

    <main>
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
                        <?php foreach ($_SESSION['cart'] as $product_id => $product) : ?>
                            <tr>
                                <td><?= htmlspecialchars($product['name']) ?></td>
                                <td>$<?= number_format($product['price'], 2) ?></td>
                                <td><?= $product['quantity'] ?></td>
                                <td>$<?= number_format($product['price'] * $product['quantity'], 2) ?></td>
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

                <div>
                    <form action="pasarela_pago.php" method="post">
                        <input type="submit" value="Proceder al Pago">
                    </form>
                </div>

            <?php else : ?>
                <div id="realizar-pedido-aqui" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                    <p style="margin: 0;">Puedes realizar tu primer pedido pinchando <span id="miEnlace" style="cursor: pointer; color: black; text-decoration: none; font-weight:bold;">aquí</span></p>
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