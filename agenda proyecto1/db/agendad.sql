-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2022 a las 22:57:01
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agendad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendad`
--

CREATE TABLE `agendad` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_ini` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `agendad`
--

INSERT INTO `agendad` (`id`, `titulo`, `descripcion`, `fecha_ini`, `fecha_fin`, `imagen`) VALUES
(1, 'Presentacio a Profesor Regis Rivera', 'Presentacion de proyecto', '2022-10-17 13:55:00', '2022-10-17 13:59:00', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendad`
--
ALTER TABLE `agendad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendad`
--
ALTER TABLE `agendad`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
