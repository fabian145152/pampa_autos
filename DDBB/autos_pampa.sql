-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2024 a las 16:41:39
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autos_pampa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `id` int(11) NOT NULL,
  `numero` int(4) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `dominio` varchar(10) NOT NULL,
  `dominio_f` varchar(50) NOT NULL,
  `dominio_fecha` date NOT NULL,
  `color` varchar(15) NOT NULL,
  `año` int(4) NOT NULL,
  `foto_1` varchar(50) DEFAULT NULL,
  `foto_2` varchar(50) DEFAULT NULL,
  `titulo` varchar(2) NOT NULL,
  `cedula_verde` varchar(2) NOT NULL,
  `titulo_f` varchar(50) DEFAULT NULL,
  `titulo_d` varchar(50) DEFAULT NULL,
  `licencia_f` varchar(50) DEFAULT NULL,
  `licencia_d` varchar(50) DEFAULT NULL,
  `licencia_vto` date NOT NULL,
  `seguro_f` varchar(50) DEFAULT NULL,
  `seguro_vto` date NOT NULL,
  `vtv_f` varchar(50) DEFAULT NULL,
  `vtv_vto` date NOT NULL,
  `vtv_renueva` date NOT NULL,
  `gas_f` varchar(50) DEFAULT NULL,
  `gas_d` varchar(50) DEFAULT NULL,
  `gas_vto` date NOT NULL,
  `hab_f` varchar(50) DEFAULT NULL,
  `hab_d` varchar(50) DEFAULT NULL,
  `hab_vto` date NOT NULL,
  `chofer` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`id`, `numero`, `marca`, `modelo`, `dominio`, `dominio_f`, `dominio_fecha`, `color`, `año`, `foto_1`, `foto_2`, `titulo`, `cedula_verde`, `titulo_f`, `titulo_d`, `licencia_f`, `licencia_d`, `licencia_vto`, `seguro_f`, `seguro_vto`, `vtv_f`, `vtv_vto`, `vtv_renueva`, `gas_f`, `gas_d`, `gas_vto`, `hab_f`, `hab_d`, `hab_vto`, `chofer`) VALUES
(188, 0, '', 'SURAN', 'PBX573', '', '0000-00-00', '', 0, '', '', 'si', 'si', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '2024-11-05', '0000-00-00', '', '', '2025-08-30', '', '', '2025-05-29', 0),
(233, 0, '', 'SURAN', 'PBX153', '', '0000-00-00', '', 0, NULL, NULL, 'si', 'si', NULL, NULL, NULL, NULL, '0000-00-00', NULL, '0000-00-00', NULL, '2023-09-30', '0000-00-00', NULL, NULL, '2025-05-30', NULL, NULL, '0000-00-00', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
