<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Vinilo - Pago</title>

    <!-- Ponemos el icono en la ventana -->
    <link rel="icon" type="image/x-icon" href="../Imagenes/Extras/IsotipoMV.png">

    <!-- Añadimos los archivos JS -->
    <script src="../JS/pasarelapago.js"></script>

    <style>
        main {
            margin-top: 1rem;
        }

        .pasarela {
            display: flex;
            justify-content: center;
        }

        .formulario {
            background-color: #f0f0f0;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        .formulario label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        .formulario input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        .formulario input[type="text"]:hover {
            border-color: #000;
        }

        .formulario input[type="submit"] {
            width: 100%;
            background-color: #b83030;
            color: white;
            padding: 14px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .formulario input[type="submit"]:hover {
            background-color: #9e0505;
        }
    </style>
</head>

<body>

    <header>
        <?php
        require('Header.php');
        if (!isset($_SESSION['usuario'])) {
            header("Location: ../HTML/LogIn.html"); // Redirigir al login si el usuario no está autenticado
            exit();
        }
        ?>
    </header>

    <main>
        <h1 style="text-align: center;">Pasarela de Pago</h1>
        <div class="pasarela">
            <form action="procesar_pago.php" method="post" class="formulario">
                <label for="nombre">Nombre en la tarjeta:</label>
                <input type="text" id="nombre" name="nombre" pattern="[a-zA-Z\s]+" title="El nombre debe contener solo letras y espacios" required>

                <label for="numero_tarjeta">Número de tarjeta:</label>
                <input type="text" id="numero_tarjeta" name="numero_tarjeta" oninput="formatCreditCardNumber(this)" pattern="\d{4}-\d{4}-\d{4}-\d{4}" title="El número de tarjeta debe contener 16 dígitos en el formato XXXX-XXXX-XXXX-XXXX" required>

                <label for="fecha_expiracion">Fecha de expiración (MM/AA):</label>
                <input type="text" id="fecha_expiracion" name="fecha_expiracion" oninput="formatExpirationDate(this)" pattern="(0[1-9]|1[0-2])\/\d{2}" title="El formato debe ser MM/AA" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" oninput="formatCVV(this)" pattern="\d{3}" title="El CVV debe contener 3 dígitos" required>

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