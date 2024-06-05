-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 09:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mundovinilo`
--

-- --------------------------------------------------------

--
-- Table structure for table `artistas`
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
-- Dumping data for table `artistas`
--

INSERT INTO `artistas` (`ID`, `Nombre_Artistico`, `Nombre`, `Apellido1`, `Apellido2`, `Descripción`, `Foto`) VALUES
(1, 'Tote King', 'Manuel', 'González', 'Rodríguez', 'Icono del rap español reconocido por su ingenio lírico y su capacidad para narrar historias vívidas a través de sus canciones. Conocido por su estilo único y su habilidad para combinar letras inteligentes con ritmos pegadizos, Tote King ha dejado una marca indeleble en la escena musical española. Desde sus primeros trabajos con el grupo \"La Alta Escuela\" hasta su carrera en solitario, ha sido aclamado por la crítica y ha ganado una base de seguidores leales. Sus álbumes, como \"El lado oscuro de Ghandi\", \"Un Tipo Cualquiera\" y \"78\", exploran una amplia gama de temas, desde la vida cotidiana hasta la política y la cultura. En su ya último álbum, \"Luces Fuera\", demuestra que sigue siendo una figura influyente en el panorama del rap español, destacando por su habilidad para evolucionar y mantenerse relevante a lo largo de los años.', '../../Mi-Proyecto/Imagenes/BD/Tote.jpg'),
(3, 'Cruz Cafuné', 'Carlos', 'Bruñas', 'Zamorín', 'El talentoso rapero de las Islas Canarias se destaca por su estilo fresco y auténtico que ha conquistado la escena musical. Sus letras, que exploran la vida urbana y la juventud, están impregnadas de un profundo sentido de autenticidad y honestidad. Fusionando el rap con influencias de R&B y reggae, crea un sonido único y atrapante que resuena en sus seguidores. Con unas liricas descriptivas que a menudo hablan sobre su situación personal, Cruz Cafuné cautiva a su audiencia, transmitiendo su pasión por la música y creando un antes y un después en la música canaria, siendo el guía de muchos artistas como para Quevedo o Lucho RK.', '../../Mi-Proyecto/Imagenes/BD/Cruzzi.jpg'),
(4, 'Hoke', ' Héctor', ' ', ' ', 'Si hay que hablar de un rookie, artista revelación, en el panorama del rap español su nombre es Hoke. A sus 26 años se consagra como una de las grandes promesas de habla hispana. Sin una multinacional, ni grandes distribuidoras detrás ha conseguido hacerse un hueco entre los artistas más laureados por los oyentes, y por los propios artistas. Hoke se ha consagrado este año como uno de los referentes de la “nueva” escena del rap en España. Mucho futuro por delante (y sobre todo presente) y proyectos nuevos acompañarán al valenciano en su carrera “en el barrio cogiendo cardio” o “repitiendo cuarto”.', '../../Mi-Proyecto/Imagenes/BD/Hoke.jpg'),
(5, 'C. Tangana', 'Antón', 'Álvarez', 'Alfaro', 'Es un reconocido cantante, compositor y productor musical español. Con un estilo único que fusiona el rap, el trap y elementos de otros géneros, C. Tangana ha dejado una marca indeleble en la escena musical contemporánea. Sus letras provocativas y su habilidad para abordar temas sociales y personales con una perspectiva fresca y directa lo han convertido en una figura destacada en la industria. Con álbumes aclamados como \"El Madrileño\" y colaboraciones con artistas de renombre internacional, C. Tangana continúa desafiando las expectativas y consolidándose como uno de los artistas más influyentes de la música urbana en España y más allá.', '../../Mi-Proyecto/Imagenes/BD/CTangana.jpg'),
(6, 'SFDK', 'Saturnino ', 'Rey', 'García', 'SFDK, acrónimo de \"Siempre Fuertes De Conciencia\", es un dúo de rap formado en Sevilla, España, en 1993 por Zatu y Acción Sánchez. Han sido pioneros del rap en español y han dejado una marca indeleble en la escena hip-hop de habla hispana con su estilo único.  Su música aborda una amplia gama de temas sociales, políticos y personales, fusionando líricas ingeniosas con ritmos innovadores. Con un estilo único y energético, SFDK ha ganado un seguimiento devoto y ha influido significativamente en la evolución del rap español contemporáneo.', '../../Mi-Proyecto/Imagenes/BD/SFDK.jpg'),
(7, 'Abhir ', 'Abhir ', 'Hathiramani', ' ', 'Abhir es un artista indo-canario que se abre paso y deja huella gracias a la pureza de su carácter y visión artística. Con su naturaleza bilingüe, encontró inspiración en la escena de Toronto y el rap estadounidense. Consigue llevarse estos sonidos a su estilo, dándole una vuelta al cómo cuenta su identidad, su origen y toda su herencia cultural.\r\nComo si de un pintor se tratase, Abhir utiliza sus letras para crear paisajes completamente descriptivos que fusiona con elementos del trap, R&B y electrónica, con pura maestría. Abhir ha destacado gracias a su enfoque artístico genuino y su habilidad para transmitir emociones auténticas a través de su música. Su talento y su capacidad para fusionar géneros musicales le han permitido dejar una marca significativa en el mercado.', '../../Mi-Proyecto/Imagenes/BD/Abhir.jpg'),
(8, 'Kaze', 'Cristian ', 'Carrión', ' Chacón', 'Es un rapero y productor musical español que lleva en la escena hip hop de su país desde 2007. Nació el 6 de junio de 1993 en Cartagena, España. Antes de empezar con el rap escribía trovos, que son un tipo de poemas que se acompañan con guitarra. Desde sus inicios en la música ya gozaba con cierto reconocimiento de modo que a la edad de 16 años ya empezaba a formar parte de carteles con otros grandes exponentes de la escena nacional de aquel entonces como Gordo Master, Duo Kie, Piezas, Xhelazz o Sho-Hai. Actualmente es considerado uno de los mejores raperos, tanto de su ciudad natal Cartagena, como en el panorama nacional. Una de las tantas razones por las que también se le conoce es por su increíble doble tempo en DAMN, una radio de hip hop argentina. No estamos seguros si batió algún record, pero como mínimo estuvo bastante cerca.', '../../Mi-Proyecto/Imagenes/BD/Kaze.jpg'),
(9, 'Fernando Costa', 'Fernando ', 'Costa ', 'Morales', 'Nació en 1995 en Ibiza y actualmente es uno de los raperos españoles que más duro está golpeando en la escena. Tras la salida de su primer disco, Yipiyou, su carrera musical no ha hecho nada más que crecer a pasos agigantados. El 16 de marzo finalizó la exitosa gira de dicho disco, en la cual recorrió prácticamente toda España con soldouts en casi todas las salas. Además del disco mencionado, también cabe destacar un gran número de canciones en solitario, como Malamanera o Warriors entre otras muchas, y en colaboración con, por ejemplo, Ayax y Prok, Natos y Waor o Sacrificio y Pasta.', '../../Mi-Proyecto/Imagenes/BD/Fernandito.jpg'),
(10, 'Kase O', 'Javier ', 'Ibarra ', 'Ramos', 'Miembro, junto con Sho-Hai (Hate), Lírico y R de Rumba, del mítico grupo Violadores del verso (Doble  V). Natural del barrio de la Jota en Zaragoza, se inicia en el mundo del rap por su hermano mayor Brutal, miembro de grupo Gangsta Squad junto con Lírico, y con 13 años empieza a hacer ruido con su primera maqueta, en cinta de casete, Rompecabezas. Dos años más tarde publicaría su segunda maqueta Dos rombos, que incluía el tema Soy de Aragón. Con Violadores (Doble V), Kase.O alcanza su madurez artística y la fama internacional. Sacarían 7 álbumes hasta 2006, siendo el primer grupo de rap español en sacar DVDs de conciertos. Desde 2009 el grupo está inactivo, pero cada miembro sigue con su carrera en solitario.', '../../Mi-Proyecto/Imagenes/BD/kase.jpg');

--
-- Triggers `artistas`
--
DELIMITER $$
CREATE TRIGGER `after_delete_artistas` AFTER DELETE ON `artistas` FOR EACH ROW BEGIN
    DELETE FROM `copia_seguridad_mv`.`artistas`
    WHERE ID = OLD.ID;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_artistas` AFTER INSERT ON `artistas` FOR EACH ROW BEGIN
    INSERT INTO `copia_seguridad_mv`.`artistas` 
    VALUES (NEW.ID, NEW.Nombre_Artistico, NEW.Nombre, NEW.Apellido1, NEW.Apellido2, NEW.Descripción, NEW.Foto);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_artistas` AFTER UPDATE ON `artistas` FOR EACH ROW BEGIN
    UPDATE `copia_seguridad_mv`.`artistas`
    SET Nombre_Artistico = NEW.Nombre_Artistico, 
        Nombre = NEW.Nombre, 
        Apellido1 = NEW.Apellido1, 
        Apellido2 = NEW.Apellido2, 
        Descripción = NEW.Descripción, 
        Foto = NEW.Foto
    WHERE ID = NEW.ID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Triggers `carrito`
--
DELIMITER $$
CREATE TRIGGER `after_delete_carrito` AFTER DELETE ON `carrito` FOR EACH ROW BEGIN
    DELETE FROM `copia_seguridad_mv`.`carrito`
    WHERE id_carrito = OLD.id_carrito;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_carrito` AFTER INSERT ON `carrito` FOR EACH ROW BEGIN
    INSERT INTO `copia_seguridad_mv`.`carrito` 
    VALUES (NEW.id_carrito, NEW.id_usuario, NEW.id_producto, NEW.cantidad);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_carrito` AFTER UPDATE ON `carrito` FOR EACH ROW BEGIN
    UPDATE `copia_seguridad_mv`.`carrito`
    SET id_usuario = NEW.id_usuario, 
        id_producto = NEW.id_producto, 
        cantidad = NEW.cantidad
    WHERE id_carrito = NEW.id_carrito;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detalles_pedidos`
--

CREATE TABLE `detalles_pedidos` (
  `id_pedido` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `detalles_pedidos`
--

INSERT INTO `detalles_pedidos` (`id_pedido`, `ID`, `id_producto`, `cantidad`, `precio`) VALUES
(3, 4, 1, 1, 20),
(3, 5, 16, 1, 40),
(4, 6, 1, 1, 20),
(4, 7, 4, 1, 18),
(5, 8, 7, 1, 12),
(5, 9, 20, 2, 15),
(6, 10, 1, 1, 20),
(6, 11, 3, 1, 8),
(7, 12, 1, 2, 20),
(9, 15, 1, 3, 20),
(10, 16, 1, 3, 20),
(10, 17, 2, 1, 12),
(11, 18, 1, 1, 20),
(11, 19, 2, 1, 12);

--
-- Triggers `detalles_pedidos`
--
DELIMITER $$
CREATE TRIGGER `after_delete_detalles_pedidos` AFTER DELETE ON `detalles_pedidos` FOR EACH ROW BEGIN
    DELETE FROM `copia_seguridad_mv`.`detalles_pedidos`
    WHERE ID = OLD.ID;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_detalles_pedidos` AFTER INSERT ON `detalles_pedidos` FOR EACH ROW BEGIN
    INSERT INTO `copia_seguridad_mv`.`detalles_pedidos` 
    VALUES (NEW.id_pedido, NEW.ID, NEW.id_producto, NEW.cantidad, NEW.precio);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_detalles_pedidos` AFTER UPDATE ON `detalles_pedidos` FOR EACH ROW BEGIN
    UPDATE `copia_seguridad_mv`.`detalles_pedidos`
    SET id_pedido = NEW.id_pedido, 
        id_producto = NEW.id_producto, 
        cantidad = NEW.cantidad,
        precio = NEW.precio
    WHERE ID = NEW.ID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `discos`
--

CREATE TABLE `discos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripción` varchar(2000) NOT NULL,
  `Precio` float NOT NULL,
  `Existencias` int(3) NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `EnlaceSpotify` varchar(500) NOT NULL,
  `ID_Artista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discos`
--

INSERT INTO `discos` (`ID`, `Nombre`, `Descripción`, `Precio`, `Existencias`, `Foto`, `EnlaceSpotify`, `ID_Artista`) VALUES
(1, 'BBO', 'El esperado álbum debut del talentoso rapero Hoke, que ha estado ganando reconocimiento en la escena underground con su estilo fresco y líricas impactantes. \r\nSi este álbum resulta tan especial no es solo por el salto a nivel musical que supone respecto de otras referencias de un género que peca demasiado de ombliguismo y falta de evolución; sino por revivir el espíritu de un rap clásico \"underground\" donde, desde hace tiempo, la originalidad estaba reñida con la autenticidad.', 20, 30, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloBBO.png', 'spotify:album:0ofRuEkUDbOtzmxqeZs8Pw', 4),
(2, 'Brown Boy', 'Un disco que gana con cada escucha, y su profundidad es de esas en las que no haces pie ni aunque quieras. El ruido a su alrededor le habrá puesto en el punto de mira, pero Abhir quiere ser el ojo del huracán, y eso no hay quien lo pueda crear salvo él mismo.', 12, 20, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloBrownBoy.png', 'spotify:album:7uUv4tpHPGzcw8NDv5H7Yx', 7),
(3, 'Heroe', 'Una década después del primer trabajo conjunto mano a mano de Toteking & Shotta titulado “Tu madre es una foca”, los hermanos sevillanos vuelven a reunirse para entregar un nuevo álbum hasta arriba de cabreo, hostias y crítica social a borbotones. “Héroe” es una pieza exhaustiva de compromiso lírico sin precedentes, pues tal y como reza en el interior del disco por recuerdo del Nobel de Literatura de 1915 Romain Rolland: “un héroe es todo aquel que hace lo que puede”.', 8, 10, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloHeroe.png', 'spotify:album:3pbWxKnA1OPy3OYvgsG5qQ', 1),
(4, 'Nombre Direccion', 'Este nuevo trabajo marca un hito en la carrera del artista, introduciendo elementos electrónicos y percusiones inusuales en el mundo del rap, creando así una experiencia sonora única que ya ha sido catalogada como uno de los discos del año. El artista, conocido por su estilo inconfundible y líricas impactantes, decidió dar un giro radical en su música. Con más de 200 canciones previas en su haber, Kaze buscaba reinventarse y sorprenderse a sí mismo.', 18, 40, '../../Mi-Proyecto/Imagenes/BD/ViniloNombreDireccion.png', 'spotify:album:1JjX0ZugqeC1QXPLqSi1pu', 8),
(5, 'YIPIYOU', 'Un álbum que destaca por su frescura y originalidad en la escena del rap en español. Costa presenta un trabajo enérgico y lleno de personalidad, donde fusiona habilidades líricas con una producción musical vibrante y variada.\r\n\r\nUna de las fortalezas de \"Yipiyou\" radica en la versatilidad de Costa como artista. Desde pistas con ritmos contagiosos que invitan al movimiento hasta canciones más introspectivas que exploran temas profundos y personales, el álbum ofrece una gama completa de emociones y experiencias.', 10, 10, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloYIPIYOU.png', 'spotify:album:0QlYj53TIFDRDq6E7GrRXH', 9),
(6, 'El Madrileño', 'Generando un revuelo popular como no se había visto en los últimos tiempos en nuestro país con el lanzamiento de ningún disco, el poder transformador de Puchito empieza en sí mismo y ha alcanzado, esta vez, a toda España.\r\nDe todos los giros en la carrera de C. Tangana, este era el más arriesgado y, de momento, el que mejor le está saliendo. Las grandes obras (artísticas y no) de la historia tienen todas algo en común: saben leer el mundo en el que son concebidas para transformarlo.', 10, 20, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloElMadrileño.png', 'spotify:album:52QyC9nSbgtHFXyQRHsXJ9', 5),
(7, 'Maracucho Bueno Muere Chiquito', 'Un proyecto en el que todos los aspectos (producciones, letras, marketing, videoclips y hasta el orden de las canciones) están cuidados al detalle para que entendamos mejor a los dos Cruzzi (la persona y el artista). A través de los 15 cortes el de Tacoronte demuestra su versatilidad al ofrecer un amplio abanico de estilos y de géneros, pasando por el reggaeton y el dancehall en Coquito la pieza o el sonido clásico West Coast en temas como Chivatos, canción en la que Cruz Cafuné se confirma como un gran habilidoso del storytelling y cuenta con uno de los mejores estribillos de los últimos tiempos.', 12, 20, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloMaracuchoBueno.png', 'spotify:album:7dThD0ZbftpiMw5kChXpC5', 3),
(9, 'MMCD', 'Asentado en el top 3 de Discos en España un mes después de su lanzamiento, ‘Me muevo con Dios’ suena como el disco definitivo de Cruz Cafuné. Del R&B al rap, pasando por el reggaeton y el tecnho, es una ambiciosa obra de 23 pistas y más de 1 hora de duración, en la que junto a productores como Lex Luthorz, el canario encuentra un enfoque único y personal a la hora de hacer canciones. Una de sus grandes bazas a la hora de desgranar un imaginario donde la noche y el lujo bien entendido son igual de importantes que la autenticidad, Dios, la familia o los valores.', 20, 50, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloMMCD.png', 'spotify:album:7yvmtCjHcBe9DqIVl7AwQT', 3),
(16, 'Luces Fuera', 'El rapero sevillano, después de mantenerse durante más de dos décadas como uno de los pilares que sujetaba el panorama del hip-hop español, decide poner punto y final a su carrera con ”Luces Fuera”, un álbum lleno de colaboraciones con viejos amigos y también con algunas nuevas promesas, pero sobre todo con la esencia del clásico e inigualable Toteking.', 40, 100, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloLucesFuera.png', 'spotify:album:4ZdVjircdr00BoV0XoYgh9', 1),
(17, 'Inkebrantable', 'Es la referencia que marca un nuevo inicio para SFDK, que se han cansado de lo fácil y buscan tender puentes entre otros géneros. Han invitado a compañeros de profesión como Lia Kali, Kase.O, Bejo, Natos y Waor, Sara Socas o Juanito Makandé. También reciben de nuevo, y por partida doble, la participación de un Kaze que brilló con «Agua Pasá» en su anterior trabajo.', 25, 60, '../../Mi-Proyecto/Imagenes/BD/ViniloInkebrantable.png', 'spotify:album:2rWMEx26W79N05xBT5uEF4', 6),
(19, 'Tirititando', 'El nuevo largo de Fernando es un sólido álbum, donde el Ibicenco prueba con nuevos ritmos y sigue en forma en cuanto a barras se refiere. Este disco confirma a Fernando como uno de los exponentes más importantes del rap patrio en la actualidad. ', 25, 80, '../../Mi-Proyecto/Imagenes/BD/ViniloTiritirando.png', 'spotify:album:6DfZ9xZKkGM2GmvSz2mIw3', 9),
(20, 'Moonlight922', 'Cruz Cafuné brilla más en libertad, y las producciones de la mixtape (hermanas de las del “Bruno” de Choclock, artífice junto a KIDDO, Dano y Lex Luthorz, entre otros, del sonido de \"Moonlight922\") respiran y dejan el espacio necesario para que el canario desborde y se confirme, a nivel de fraseo, manejo de códigos, lírica, versatilidad y storytelling, como uno de los mejores de su generación.', 15, 30, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloMoonlight.png', 'spotify:album:7z44Enk09spyCdKwxPJ5xG', 3);

--
-- Triggers `discos`
--
DELIMITER $$
CREATE TRIGGER `after_delete_discos` AFTER DELETE ON `discos` FOR EACH ROW BEGIN
    DELETE FROM `copia_seguridad_mv`.`discos`
    WHERE ID = OLD.ID;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_discos` AFTER INSERT ON `discos` FOR EACH ROW BEGIN
    INSERT INTO `copia_seguridad_mv`.`discos` 
    VALUES (NEW.ID, NEW.Nombre, NEW.Descripción, NEW.Precio, NEW.Existencias, NEW.Foto, NEW.EnlaceSpotify, NEW.ID_Artista);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_discos` AFTER UPDATE ON `discos` FOR EACH ROW BEGIN
    UPDATE `copia_seguridad_mv`.`discos`
    SET Nombre = NEW.Nombre, 
        Descripción = NEW.Descripción, 
        Precio = NEW.Precio, 
        Existencias = NEW.Existencias, 
        Foto = NEW.Foto, 
        EnlaceSpotify = NEW.EnlaceSpotify, 
        ID_Artista = NEW.ID_Artista
    WHERE ID = NEW.ID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(50) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_usuario`, `fecha`, `estado`, `total`) VALUES
(3, 2, '2024-05-15 08:53:50', 'Pagado', 60.00),
(4, 2, '2024-05-15 08:55:30', 'Pagado', 38.00),
(5, 2, '2024-05-16 07:57:44', 'Pagado', 42.00),
(6, 3, '2024-05-16 08:04:35', 'Pagado', 28.00),
(7, 2, '2024-05-18 18:59:54', 'Pagado', 40.00),
(9, 2, '2024-05-28 11:42:30', 'Pagado', 60.00),
(10, 2, '2024-05-28 14:38:13', 'Pagado', 72.00),
(11, 2, '2024-06-01 15:20:22', 'Pagado', 32.00);

--
-- Triggers `pedidos`
--
DELIMITER $$
CREATE TRIGGER `after_delete_pedidos` AFTER DELETE ON `pedidos` FOR EACH ROW BEGIN
    DELETE FROM `copia_seguridad_mv`.`pedidos`
    WHERE id_pedido = OLD.id_pedido;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_pedidos` AFTER INSERT ON `pedidos` FOR EACH ROW BEGIN
    INSERT INTO `copia_seguridad_mv`.`pedidos` 
    VALUES (NEW.id_pedido, NEW.id_usuario, NEW.fecha, NEW.estado, NEW.total);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_pedidos` AFTER UPDATE ON `pedidos` FOR EACH ROW BEGIN
    UPDATE `copia_seguridad_mv`.`pedidos`
    SET id_usuario = NEW.id_usuario, 
        fecha = NEW.fecha, 
        estado = NEW.estado,
        total = NEW.total
    WHERE id_pedido = NEW.id_pedido;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido1`, `Apellido2`, `Correo`, `Contraseña`) VALUES
(1, 'root', '', '', 'root@mundovinilo.com', '$2y$10$5bw6bwXoYHPCe'),
(2, 'Alejandro', 'Martín', 'Rodríguez', 'Alejandro12@gmail.com', '$2y$10$fAUliCi.VZPYd/WK8U.BCepOCHumGdTMMpmh9RBWDtrvFT5nW79pe'),
(3, 'Javier', 'Martin', 'Rodriguez', 'Javi10@gmail.com', '$2y$10$LZxnVrHHHerAcDjeyg8TE.M8a95NxInYNsKohQZEfHfgn1XiWgulS'),
(4, 'Teresa', 'Rodriguez', 'Garrido', 'tere12@gmail.com', '$2y$10$wb5gktiWlssTgd6s6zvv..Y9rnyPnjCRJeA3KpyJ70xXnn3U2J9oC'),
(5, 'Ricardo', 'Gironda', 'Cuéllar', 'Richi20@gmail.com', '$2y$10$BD6l4JJFcqRZqPbKSf.uo.Qp7VioG.ZZtg6JVNclbNEvKBSDBxg9u');

--
-- Triggers `usuarios`
--
DELIMITER $$
CREATE TRIGGER `after_delete_usuarios` AFTER DELETE ON `usuarios` FOR EACH ROW BEGIN
    DELETE FROM `copia_seguridad_mv`.`usuarios`
    WHERE ID = OLD.ID;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_usuarios` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN
    INSERT INTO `copia_seguridad_mv`.`usuarios` 
    VALUES (NEW.ID, NEW.Nombre, NEW.Apellido1, NEW.Apellido2, NEW.Correo, NEW.Contraseña);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_usuarios` AFTER UPDATE ON `usuarios` FOR EACH ROW BEGIN
    UPDATE `copia_seguridad_mv`.`usuarios`
    SET Nombre = NEW.Nombre, 
        Apellido1 = NEW.Apellido1, 
        Apellido2 = NEW.Apellido2,
        Correo = NEW.Correo,
        Contraseña = NEW.Contraseña
    WHERE ID = NEW.ID;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indexes for table `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indexes for table `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Artista_Disco_Cascade` (`ID_Artista`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artistas`
--
ALTER TABLE `artistas`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `discos`
--
ALTER TABLE `discos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`ID`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `discos` (`ID`);

--
-- Constraints for table `detalles_pedidos`
--
ALTER TABLE `detalles_pedidos`
  ADD CONSTRAINT `detalles_pedidos_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`),
  ADD CONSTRAINT `detalles_pedidos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `discos` (`ID`);

--
-- Constraints for table `discos`
--
ALTER TABLE `discos`
  ADD CONSTRAINT `FK_Artista_Disco` FOREIGN KEY (`ID_Artista`) REFERENCES `artistas` (`ID`),
  ADD CONSTRAINT `FK_Artista_Disco_Cascade` FOREIGN KEY (`ID_Artista`) REFERENCES `artistas` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
