<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Pago</title>

    <!-- Ponemos el icono en la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <style>

        main{

            margin-top: 1rem;
        }

        .pasarela {

            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>

    <?php
    require('Header.php');
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../HTML/LogIn.html"); // Redirigir al login si el usuario no está autenticado
        exit();
    }
    ?>

    <main>
        <h1>Pasarela de Pago</h1>
        <div class="pasarela">
            <form action="procesar_pago.php" method="post" class="formulario">
                <label for="nombre">Nombre en la tarjeta:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>

                <label for="numero_tarjeta">Número de tarjeta:</label>
                <input type="text" id="numero_tarjeta" name="numero_tarjeta" required><br><br>

                <label for="fecha_expiracion">Fecha de expiración:</label>
                <input type="text" id="fecha_expiracion" name="fecha_expiracion" required><br><br>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required><br><br>

                <input type="submit" value="Pagar">
            </form>
        </div>
    </main>

    <footer>
        <?php
        require('footer.php');
        ?>
    </footer>
</body>

</html>