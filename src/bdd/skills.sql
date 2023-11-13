-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 19:22:12
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `skills1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persones`
--

CREATE TABLE `persones` (
  `id` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Cognoms` varchar(100) DEFAULT NULL,
  `DataNaixement` date DEFAULT NULL,
  `Adreca` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persones`
--

INSERT INTO `persones` (`id`, `Nom`, `Cognoms`, `DataNaixement`, `Adreca`) VALUES
(1, 'Luis', 'Arauz', '2004-02-17', 'Av,Miquel'),
(3, 'Pep', 'Guardiola', '2222-02-17', 'Barcelona'),
(4, 'Alejandro', 'Espinoza', '2005-04-02', '123'),
(5, 'Alejandro', 'Espinoza', '2005-04-02', '123'),
(6, 'Alejandro', 'Espinoza', '2005-04-02', '123'),
(7, 'Alejandro', 'Es', '2023-02-01', 'Add'),
(8, 'Pop', '12', '2012-11-12', 'prova'),
(9, 'Pop', '2', '2012-11-11', '12'),
(10, 'awd', 'awdawd', '0000-00-00', '12'),
(11, 'pep', '123', '2020-12-12', '12'),
(12, 'awda', 'awdaw', '1111-12-12', '12'),
(13, 'aWD', 'awd', '0000-00-00', '121'),
(14, '123', '1241', '1211-04-12', '1241'),
(15, '123', '1241', '1211-04-12', '1241'),
(16, 'pa', 'aw', '0002-12-12', '121'),
(17, 'pa', 'aw', '0002-12-12', '121'),
(18, 'awd', 'awdaw', '2023-11-23', 'adaw'),
(19, 'Pop', '124', '0012-12-21', '124'),
(20, 'Prova', 'P', '2004-02-17', 'Av,Miquel'),
(21, 'Prova', 'P', '2004-02-17', 'Av,Miquel'),
(22, 'Prova', 'P', '2004-02-17', 'Av,Miquel'),
(23, 'Prova', 'P', '2004-02-17', 'Av,Miquel'),
(24, 'Prova Nova 2', '12', '2002-12-12', 'adwaw');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persones`
--
ALTER TABLE `persones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persones`
--
ALTER TABLE `persones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
