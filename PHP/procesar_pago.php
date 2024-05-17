<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Pago Realizado</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">
</head>

<header>
    <?php
    require('Header.php');
    require('conexionBDD.php');
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../HTML/LogIn.html");
        exit();
    }
    ?>
</header>

<body>
    <main>
        <?php
        // Le damos el valor del ID de usuario para posteriormente poder guardar la información del pedido relativo al usuario en la base de datos
        $id_usuario = $_SESSION['user_id'];

        // Verificación adicional: Comprobar si el ID de usuario existe en la tabla `usuarios`
        $sql = "SELECT ID FROM usuarios WHERE ID = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id_usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            echo "El ID de usuario no existe en la tabla `usuarios`.";
            exit();
        }

        // Iniciar la transacción
        $conexion->begin_transaction();

        try {
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                $total = 0;
                $productos = [];

                foreach ($_SESSION['cart'] as $product_id => $product) {
                    $total += $product['price'] * $product['quantity'];
                    $productos[] = $product;
                }

                // Insertar el pedido en la tabla `pedidos`
                $sql = "INSERT INTO pedidos (id_usuario, fecha, estado, total) VALUES (?, NOW(), 'Pagado', ?)";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("id", $id_usuario, $total);
                $stmt->execute();
                $id_pedido = $stmt->insert_id;

                // Insertar los detalles del pedido en la tabla `detalles_pedidos`
                $sql = "INSERT INTO detalles_pedidos (id_pedido, id_producto, cantidad, precio) VALUES (?, ?, ?, ?)";
                $stmt = $conexion->prepare($sql);

                foreach ($productos as $producto) {
                    $stmt->bind_param("iiid", $id_pedido, $producto['id'], $producto['quantity'], $producto['price']);
                    $stmt->execute();
                }

                // Vaciar el carrito del usuario en la sesión
                unset($_SESSION['cart']);

                // Confirmar la transacción
                $conexion->commit();

                header("Location: detallesPedido.php?id_pedido=" . $id_pedido);
                
            } else {
                throw new Exception("El carrito está vacío.");
            }
        } catch (Exception $e) {
            // Revertir la transacción en caso de error
            $conexion->rollback();
            echo "Error al procesar la compra: " . $e->getMessage();
        }

        $conexion->close();
        ?>
    </main>

    <footer>
        <?php
        require('footer.php');
        ?>
    </footer>

</body>