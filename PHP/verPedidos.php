<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Mis Pedidos</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Agregamos los archivos CSS -->
    <link rel="stylesheet" href="../CSS/Reset.css">
    <link rel="stylesheet" href="../CSS/MisPedidos.css">

    <!-- Agregamos los archivos JS -->
    <script src="../JS/BarraNavegacionVertical.js"></script>
</head>

<body>

    <!-- Header de la página -->
    <header>
        <?php require('Header.php'); ?>
    </header>

    <!-- Cuerpo de la página -->
    <main>
        <h1>Mis Pedidos</h1>

        <div class="contenedor-pedidos">
            <?php
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
                require('../../Mi-Proyecto/PHP/conexionBDD.php');
                $sql = "SELECT * FROM pedidos WHERE id_usuario = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param("i", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='pedido'>";
                        echo "<p><strong>ID del Pedido:</strong> " . $row['id_pedido'] . "</p>";
                        echo "<p><strong>Fecha del Pedido:</strong> " . $row['fecha'] . "</p>";
                        echo "<p><strong>Estado:</strong> " . $row['estado'] . "</p>";
                        echo "<p><strong>Total:</strong> $" . $row['total'] . "</p>";
                        echo "<form action='../PHP/detallesPedido.php' method='GET'>";
                        echo "<input type='hidden' name='id_pedido' value='" . $row['id_pedido'] . "'>";
                        echo "<button type='submit' class='boton-detalles'>Ver Detalles</button>";
                        echo "</form>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='realizar-pedidos'>";
                    echo "<p>Puedes realizar tu primer pedido pinchando <strong><a href='../PHP/Discos.php'>aquí</a></strong></p>";
                    echo "</div>";
                }

                $conexion->close();
            } else {
                echo "<p class='Debes-iniciar-sesion'>Debes iniciar sesión para ver tus pedidos.</p>";
            }
            ?>
        </div>
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

</body>

</html>