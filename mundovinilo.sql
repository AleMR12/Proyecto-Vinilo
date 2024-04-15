-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2024 at 12:44 PM
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
  `Apellido2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artistas`
--

INSERT INTO `artistas` (`ID`, `Nombre_Artistico`, `Nombre`, `Apellido1`, `Apellido2`) VALUES
(2, 'Tote King', 'Manuel', 'González', 'Rodríguez');

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
  `ID_Artista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discos`
--

INSERT INTO `discos` (`ID`, `Nombre`, `Descripción`, `Precio`, `Existencias`, `Foto`, `ID_Artista`) VALUES
(1, 'BBO', '\"BBO\" es el esperado álbum debut del talentoso rapero Hoke, que ha estado ganando reconocimiento en la escena underground con su estilo fresco y líricas impactantes.', 15, 30, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloBBO.png', NULL),
(2, 'MMCD', 'Asentado en el top 3 de Discos en España un mes después de su lanzamiento, ‘Me muevo con Dios’ suena como el disco definitivo de Cruz Cafuné. Lejos de aquel pop comercial o del reggaeton de piezas como ‘Coquito la Pieza’, ‘Me muevo con Dios’ es una ambiciosa obra de 23 pistas y más de 1 hora de duración, en la que junto a productores como Lex Luthorz, Cruzzi explora géneros como el hip hop de los años 2000.', 20, 50, 'C:/xampp/htdocs/Proyectos/Mi-Proyecto/Imagenes/BD/ViniloMMCD.png', NULL);

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
  `Contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido1`, `Apellido2`, `Correo`, `Contraseña`) VALUES
(1, 'root', '', '', 'root@mundovinilo.com', '$2y$10$5bw6bwXoYHPCe'),
(2, 'Alejandro', ' ', ' Rodríguez', 'alejandro@gmail.com', '$2y$10$S5kTw0obPgJt0'),
(5, 'Pericoo', ' ', ' ', 'peri@perico.com', '$2y$10$GAIJBmJt5G.yt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Artista_Disco_Cascade` (`ID_Artista`);

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
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discos`
--
ALTER TABLE `discos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `discos`
--
ALTER TABLE `discos`
  ADD CONSTRAINT `FK_Artista_Disco` FOREIGN KEY (`ID_Artista`) REFERENCES `artistas` (`ID`),
  ADD CONSTRAINT `FK_Artista_Disco_Cascade` FOREIGN KEY (`ID_Artista`) REFERENCES `artistas` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
