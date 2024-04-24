-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2024 a las 12:46:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mundovinilo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `ID` int(3) NOT NULL,
  `Nombre_Artistico` varchar(50) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(20) NOT NULL,
  `Apellido2` varchar(20) NOT NULL,
  `Descripción` varchar(2000) NOT NULL,
  `Foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`ID`, `Nombre_Artistico`, `Nombre`, `Apellido1`, `Apellido2`, `Descripción`, `Foto`) VALUES
(1, 'Tote King', 'Manuel', 'González', 'Rodríguez', 'Conocido artísticamente como Tote King, es un rapero español nacido el 13 de diciembre de 1978 en Sevilla. Es uno de los referentes más destacados del rap en España y ha dejado una huella significativa en la escena musical del país.', '../../Mi-Proyecto/Imagenes/BD/Tote.jpg'),
(3, 'Cruz Cafuné', 'Carlos', 'Bruñas', 'Zamorín', 'El talentoso rapero originario de las Islas Canarias, destaca por su estilo fresco y auténtico. Con letras que exploran la vida urbana y la juventud, su música fusiona el rap con influencias de R&B y reggae, creando un sonido único y atrapante. Con un enfoque genuino y letras reflexivas, Cruz Cafuné cautiva a su audiencia con su autenticidad y pasión por la música.', '../../Mi-Proyecto/Imagenes/BD/Cruzzi.jpg'),
(4, 'Hoke', ' Héctor', ' ', ' ', '', '../../Mi-Proyecto/Imagenes/BD/Hoke.jpg'),
(5, 'C. Tangana', 'Antón', 'Álvarez', 'Alfaro', '', '../../Mi-Proyecto/Imagenes/BD/CTangana.jpg'),
(6, 'SFDK', 'Saturnino ', 'Rey', 'García', '', '../../Mi-Proyecto/Imagenes/BD/SFDK.jpg'),
(7, 'Abhir ', 'Abhir ', 'Hathiramani', ' ', '', '../../Mi-Proyecto/Imagenes/BD/Abhir.jpg'),
(8, 'Kaze', 'Cristian ', 'Carrión', ' Chacón', '', '../../Mi-Proyecto/Imagenes/BD/Kaze.jpg'),
(9, 'Fernando Costa', 'Fernando ', 'Costa ', 'Morales', '', '../../Mi-Proyecto/Imagenes/BD/Fernandito.jpg'),
(10, 'Kase O', 'Javier ', 'Ibarra ', 'Ramos', '', '../../Mi-Proyecto/Imagenes/BD/kase.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_pedidos`
--

CREATE TABLE `detalles_pedidos` (
  `id_detalle` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE `discos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripción` varchar(2000) NOT NULL,
  `Precio` float NOT NULL,
  `Existencias` int(3) NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `EnlaceSpotify` varchar(200) NOT NULL,
  `ID_Artista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `discos`
--

INSERT INTO `discos` (`ID`, `Nombre`, `Descripción`, `Precio`, `Existencias`, `Foto`, `EnlaceSpotify`, `ID_Artista`) VALUES
(1, 'BBO', 'El esperado álbum debut del talentoso rapero Hoke, que ha estado ganando reconocimiento en la escena underground con su estilo fresco y líricas impactantes. \r\nSi este álbum resulta tan especial no es solo por el salto a nivel musical que supone respecto de otras referencias de un género que peca demasiado –como todos los géneros clásicos– de ombliguismo y falta de evolución; sino por revivir el espíritu de un rap clásico underground –subterráneo a la manera beat– donde, desde hace tiempo, la originalidad estaba reñida con la autenticidad.', 20, 30, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloBBO.png', '', 4),
(2, 'Brown Boy', 'Un disco que gana con cada escucha, y su profundidad es de esas en las que no haces pie ni aunque quieras. El ruido a su alrededor le habrá puesto en el punto de mira, pero Abhir quiere ser el ojo del huracán, y eso no hay quien lo pueda crear salvo él mismo.', 12, 20, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloBrownBoy.png', '', 7),
(3, 'Héroe', 'Una década después del primer trabajo conjunto mano a mano de Toteking & Shotta titulado “Tu madre es una foca”, los hermanos sevillanos vuelven a reunirse para entregar un nuevo álbum hasta arriba de cabreo, hostias y crítica social a borbotones. “Héroe” es una pieza exhaustiva de compromiso lírico sin precedentes, pues tal y como reza en el interior del disco por recuerdo del Nobel de Literatura de 1915 Romain Rolland: “un héroe es todo aquel que hace lo que puede”.', 8, 10, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloHeroe.png', '', 1),
(4, 'Nombre Dirección', 'Este nuevo trabajo marca un hito en la carrera del artista, introduciendo elementos electrónicos y percusiones inusuales en el mundo del rap, creando así una experiencia sonora única que ya ha sido catalogada como uno de los discos del año. El artista, conocido por su estilo inconfundible y líricas impactantes, decidió dar un giro radical en su música. Con más de 200 canciones previas en su haber, Kaze buscaba reinventarse y sorprenderse a sí mismo.', 18, 40, '../../Mi-Proyecto/Imagenes/BD/ViniloNombreDireccion.png', '', 8),
(5, 'YIPIYOU', 'Un álbum que destaca por su frescura y originalidad en la escena del rap en español. Costa presenta un trabajo enérgico y lleno de personalidad, donde fusiona habilidades líricas con una producción musical vibrante y variada.\r\n\r\nUna de las fortalezas de \"Yipiyou\" radica en la versatilidad de Costa como artista. Desde pistas con ritmos contagiosos que invitan al movimiento hasta canciones más introspectivas que exploran temas profundos y personales, el álbum ofrece una gama completa de emociones y experiencias.', 10, 10, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloYIPIYOU.png', '', 9),
(6, 'El Madrileño', 'Generando un revuelo popular como no se había visto en los últimos tiempos en nuestro país con el lanzamiento de ningún disco, el poder transformador de Puchito empieza en sí mismo y ha alcanzado, esta vez, a toda España.\r\nDe todos los giros en la carrera de C. Tangana, este era el más arriesgado y, de momento, el que mejor le está saliendo. Las grandes obras (artísticas y no) de la historia tienen todas algo en común: saben leer el mundo en el que son concebidas para transformarlo.', 10, 20, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloElMadrileño.png', '', 5),
(7, 'Maracucho Bueno Muere Chiquito', 'Un proyecto en el que todos los aspectos (producciones, letras, marketing, videoclips y hasta el orden de las canciones) están cuidados al detalle para que entendamos mejor a los dos Cruzzi (la persona y el artista). A través de los 15 cortes el de Tacoronte demuestra su versatilidad al ofrecer un amplio abanico de estilos y de géneros, pasando por el reggaeton y el dancehall en Coquito la pieza o el sonido clásico West Coast en temas como Chivatos, canción en la que Cruz Cafuné se confirma como un gran habilidoso del storytelling y cuenta con uno de los mejores estribillos de los últimos tiempos.', 12, 20, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloMaracuchoBueno.png', '', 3),
(9, 'MMCD', 'Asentado en el top 3 de Discos en España un mes después de su lanzamiento, ‘Me muevo con Dios’ suena como el disco definitivo de Cruz Cafuné. Del R&B al rap, pasando por el reggaeton y el tecnho, ‘Me muevo con Dios’ es una ambiciosa obra de 23 pistas y más de 1 hora de duración, en la que junto a productores como Lex Luthorz, el canario encuentra un enfoque único y personal a la hora de hacer canciones. Una de sus grandes bazas a la hora de desgranar un imaginario donde la noche, el lujo bien entendido, las drogas y la velocidad, son igual de importantes que la autenticidad, Dios, la familia o los valores.', 20, 50, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloMMCD.png', '', 3),
(16, 'Luces Fuera', 'El rapero sevillano, después de mantenerse durante más de dos décadas como uno de los pilares que sujetaba el panorama del hip-hop español, decide poner punto y final a su carrera con ”Luces Fuera”, un álbum lleno de colaboraciones con viejos amigos y también con algunas nuevas promesas, pero sobre todo con la esencia del clásico e inigualable Toteking.', 40, 100, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloLucesFuera.png', 'https://open.spotify.com/intl-es/album/4ZdVjircdr00BoV0XoYgh9?si=9cc4f08e0914496c', 1),
(17, 'Inkebrantable', 'Es la referencia que marca un nuevo inicio para SFDK, que se han cansado de lo fácil y buscan tender puentes entre otros géneros. Han invitado a compañeros de profesión como Lia Kali, Kase.O, Bejo, Natos y Waor, Sara Socas o Juanito Makandé. También reciben de nuevo, y por partida doble, la participación de un Kaze que brilló con «Agua Pasá» en su anterior trabajo.', 25, 60, '../../Mi-Proyecto/Imagenes/BD/ViniloInkebrantable.png', '', 6),
(19, 'Tirititando', 'El nuevo largo de Fernando es un sólido álbum, donde el Ibicenco prueba con nuevos ritmos y sigue en forma en cuanto a barras se refiere. Este disco confirma a Fernando como uno de los exponentes más importantes del rap patrio en la actualidad. ', 25, 80, '../../Mi-Proyecto/Imagenes/BD/ViniloTiritirando.png', '', 9),
(20, 'Moonlight922', 'Cruz Cafuné brilla más en libertad, y las producciones de la mixtape (hermanas de las del “Bruno” de Choclock, artífice junto a KIDDO, Dano y Lex Luthorz, entre otros, del sonido de \"Moonlight922\") respiran y dejan el espacio necesario para que el canario desborde y se confirme, a nivel de fraseo, manejo de códigos, lírica, versatilidad y storytelling, como uno de los mejores de su generación.', 15, 30, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloMoonlight.png', '', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(50) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Existencias` int(11) NOT NULL,
  `Artista` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(20) DEFAULT NULL,
  `Apellido2` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido1`, `Apellido2`, `Correo`, `Contraseña`) VALUES
(1, 'root', '', '', 'root@mundovinilo.com', '$2y$10$5bw6bwXoYHPCe'),
(7, 'Ana', 'fillol', 'florencia', 'aana@pepon.com', '$2y$10$yA9BIwRCAA9n9YuI7i4/bO05TQi8DcXiqpe/VO8kvdXQwy/68llau'),
(9, 'Ale', 'Martin', 'Rodriguez', 'alee@gmail.com', '$2y$10$HMTQxqAYbaL8QHnUbICHC.h4yg.VZ3Zoo1H4TL60XacXUE6phIPWO'),
(10, 'Alberto', 'Ruiz', 'Garcia', 'alber@gmail.com', '$2y$10$E0BqyphzLX8LgHESr1g7a./k7a200I5bi43hDlk1L6495vKoobJ5a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Artista_Disco_Cascade` (`ID_Artista`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `discos`
--
ALTER TABLE `discos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`ID`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `discos` (`ID`);

--
-- Filtros para la tabla `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD CONSTRAINT `detalles_pedidos_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`),
  ADD CONSTRAINT `detalles_pedidos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `discos` (`ID`);

--
-- Filtros para la tabla `discos`
--
ALTER TABLE `discos`
  ADD CONSTRAINT `FK_Artista_Disco` FOREIGN KEY (`ID_Artista`) REFERENCES `artistas` (`ID`),
  ADD CONSTRAINT `FK_Artista_Disco_Cascade` FOREIGN KEY (`ID_Artista`) REFERENCES `artistas` (`ID`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
