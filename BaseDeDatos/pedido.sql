-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2020 a las 09:26:13
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pedido`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `cp` int(50) NOT NULL,
  `cu` int(50) NOT NULL,
  `asignado` text COLLATE latin1_spanish_ci NOT NULL,
  `transporte` text COLLATE latin1_spanish_ci NOT NULL,
  `producto` text COLLATE latin1_spanish_ci NOT NULL,
  `precio` text COLLATE latin1_spanish_ci NOT NULL,
  `envio` text COLLATE latin1_spanish_ci NOT NULL,
  `total` text COLLATE latin1_spanish_ci NOT NULL,
  `hora_asig` text COLLATE latin1_spanish_ci NOT NULL,
  `hora_ent` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`cp`, `cu`, `asignado`, `transporte`, `producto`, `precio`, `envio`, `total`, `hora_asig`, `hora_ent`) VALUES
(4, 1, 'Paola Chura', 'Bus', 'Computadora', '16000', '3000', '19000', '16:00', '20:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cu` int(50) NOT NULL,
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `celular` text COLLATE latin1_spanish_ci NOT NULL,
  `correo` text COLLATE latin1_spanish_ci NOT NULL,
  `usuario` text COLLATE latin1_spanish_ci NOT NULL,
  `contrasenia` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cu`, `nombre`, `celular`, `correo`, `usuario`, `contrasenia`) VALUES
(1, 'Josue Lanza', '69994444', 'jlanza@gmail.com', 'josue', 'josue123'),
(2, 'Jesus Rocha', '70681258', 'jesus@gmail.com', 'jesus', 'jesus123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`cp`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `cp` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
