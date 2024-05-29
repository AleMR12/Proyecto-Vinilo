<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Pedido</title>

    <!-- Ponemos el icono la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Agregamos los archivos CSS -->
    <link rel="stylesheet" href="../CSS/Reset.css">
    <link rel="stylesheet" href="../CSS/MisPedidos.css">

    <!-- Agregamos los archivo JS -->
    <script src="../JS/BarraNavegacionVertical.js"></script>
    <style>
        .total-pedido-contenedor {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-pedido {
            font-size: 1.2em;
            font-weight: bold;
        }

        .volver {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #b83030;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-top: 1rem;
        }

        .volver:hover {
            background-color: #a12828;
        }

        .volver:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(184, 48, 48, 0.3);
        }


        .detalle-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 2em;
            padding-bottom: 1em;
            font-size: .9rem;
        }

        .detalle-info {
            flex-grow: 2;
            min-width: 15rem;
        }

        .detalle-info p {
            margin-bottom: .8rem;
        }

        .detalle-info p strong {
            color: #000000;
        }

        .descripcion-info {
            flex-grow: 1;
        }

        .descripcion-info p {
            margin-bottom: 0.5em;
            margin-left: .5rem;
        }

        /* Otros estilos existentes */
    </style>

</head>

<body>


    <!-- Header de la página -->
    <header>
        <?php require('Header.php'); ?>
    </header>

    <!-- Cuerpo de la página -->
    <main>
        <div class="contenedor-exterior">
        <h1 class="titulo">Detalles del Pedido</h1>
            <div class="contenedor-detalles-pedido">
            
                <?php
                // Incluir el archivo de conexión a la base de datos
                include("conexionBDD.php");

                // Obtener el ID del pedido desde la solicitud GET
                $idPedido = isset($_GET['id_pedido']) ? intval($_GET['id_pedido']) : 0;

                if ($idPedido > 0) {
                    // Consulta SQL ajustada
                    $query = "
                SELECT 
                    dp.id_pedido,
                    dp.cantidad,
                    d.Foto,
                    d.ID,
                    d.Nombre AS nombre_disco,
                    d.Precio AS precio_disco,
                    d.Descripción AS descripcion_disco,
                    (dp.cantidad * d.Precio) AS total_precio,
                    a.Nombre_Artistico AS nombre_artista, 
                    DATE_FORMAT(DATE_ADD(p.fecha, INTERVAL 1 WEEK), '%d-%m-%y') AS fecha_entrega
                FROM 
                    detalles_pedidos as dp
                    JOIN discos as d ON dp.id_producto = d.ID
                    JOIN artistas as a ON d.ID_Artista = a.ID 
                    JOIN pedidos as p ON p.id_pedido = dp.id_pedido
                WHERE 
                    dp.id_pedido = ?
                ";

                    // Preparar y ejecutar la consulta
                    if ($stmt = $conexion->prepare($query)) {
                        $stmt->bind_param("i", $idPedido);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // Inicializar la variable para el total del precio del pedido
                        $totalPedido = 0;

                        // Verificar si se encontraron registros
                        if ($result->num_rows > 0) {
                            // Mostrar los detalles del pedido
                            while ($row = $result->fetch_assoc()) {
                                $ruta_relativa = str_replace($_SERVER['DOCUMENT_ROOT'], '', $row['Foto']);
                                echo "<div class='detalle-item'>";
                                echo "<img src='" . $ruta_relativa . "' alt='" . $row['nombre_disco'] . "' class='imagen-disco'>";
                                echo "<div class='detalle-info'>";
                                echo "<p><strong>Nombre del Disco:</strong> " . $row['nombre_disco'] . "</p>";
                                echo "<p><strong>Precio:</strong> " . $row['precio_disco'] . "€</p>";
                                echo "<p><strong>Cantidad:</strong> " . $row['cantidad'] . "</p>";
                                echo "<p><strong>Nombre del Artista:</strong> " . $row['nombre_artista'] . "</p>";
                                echo "<p><strong>Fecha de entrega: </strong>" . $row['fecha_entrega'] . "</p>";
                                echo "</div>";
                                echo "<div class='descripcion-info'>";
                                echo "<p><strong>Descripción:</strong> " . $row['descripcion_disco'] . "</p>";
                                echo "</div>";
                                echo "</div>";

                                // Sumar al total del pedido
                                $totalPedido += $row['total_precio'];
                            }

                            // Contenedor para el botón y el total del pedido
                            echo "<div class='total-pedido-contenedor'>";
                            // Botón de volver
                            echo "<a href='../PHP/verPedidos.php' class='volver'>Volver</a>";
                            // Total del pedido
                            echo "<div class='total-pedido'>";
                            echo "<p><strong>Total del Pedido:</strong> " . $totalPedido . "€</p>";
                            echo "</div>";
                            echo "</div>";
                        } else {
                            echo "No se encontraron detalles para este pedido.";
                        }
                        // Cerrar la declaración
                        $stmt->close();
                    } else {
                        echo "Error en la consulta: " . $conexion->error;
                    }

                    // Cerrar la conexión
                    $conexion->close();
                } else {
                    echo "ID de pedido inválido.";
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

    <!-- Footer de la página -->
    <footer>
        <?php require('footer.php'); ?>
    </footer>
</body>

</html>