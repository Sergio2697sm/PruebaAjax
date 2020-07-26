-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2020 a las 18:59:05
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Dirección` varchar(50) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `Población` varchar(50) NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Apellidos`, `Telefono`, `Correo`, `Dirección`, `DNI`, `Población`, `Edad`) VALUES
(1, 'Sergio    ', 'Martínez Martinez    ', 648670457, 'sergiomartinez2m@gmail.com', 'Ricardo carillo', '23811889N', 'Lorca', 22),
(2, 'Jose', 'Martinez', 654321456, 'jose@jose.com', 'Jose Marin', '23456789B', 'Lorca', 20),
(3, 'hola', 'adios', 657456123, 'hola@gmail.com', 'kfldj', '2341123N', 'Lorca', 21),
(4, 'hola', 'adios', 657456123, 'hola@gmail.com', 'kfldj', '2341123N', 'Lorca', 21),
(9, 'Alba ', 'Rodríguez Martínez', 654321234, 'alba@gmail.com', 'ofeaoklj', '234532N', 'Lorca', 18);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
