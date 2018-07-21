-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2018 a las 21:31:08
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms_castro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitales`
--

CREATE TABLE `capitales` (
  `id` int(255) NOT NULL,
  `capital` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capitales`
--

INSERT INTO `capitales` (`id`, `capital`) VALUES
(1, 'Puerto Ayacucho'),
(2, 'Barcelona'),
(3, 'San Fernando de Apure'),
(4, 'Maracay'),
(5, 'Barinas'),
(6, 'Ciudad Bolívar'),
(7, 'Valencia'),
(8, 'San Carlos'),
(9, 'Tucupita'),
(10, 'Coro'),
(11, 'Caracas'),
(12, 'San Juan de los Morros'),
(13, 'Barquisimeto'),
(14, 'Mérida'),
(15, 'Los Teques'),
(16, 'Maturín'),
(17, 'La Asunción'),
(18, 'Guanare'),
(19, 'Cumana'),
(20, 'San Cristobal'),
(21, 'Trujillo'),
(22, 'La Guaira'),
(23, 'San Felipe'),
(24, 'Maracaibo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `comentario`) VALUES
(1, 'jonathan', 'agregando funcionalidad'),
(2, 'jose', 'ok excelente'),
(4, 'maria', 'ok,buen cms'),
(5, 'joseito', 'buena'),
(6, 'Carmen Rosa', 'El sistema me parece muy eficaz lo recomiendo'),
(7, 'camilo', 'buenas.amigos'),
(8, 'petra', 'ok,chevere'),
(9, 'pancho', 'ok esta bueno'),
(10, 'karla', 'dfdf'),
(11, 'maria', 'ok,buenas admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(255) NOT NULL,
  `estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `estado`) VALUES
(1, 'Amazonas'),
(2, 'Anzoátegui'),
(3, 'Apure'),
(4, 'Aragua'),
(5, 'Barinas'),
(6, 'Bolívar'),
(7, 'Carabobo'),
(8, 'Cojedes'),
(9, 'Delta Amacuro'),
(10, 'Falcón'),
(11, 'Distrito Capital'),
(12, 'Guárico'),
(13, 'Lara'),
(14, 'Mérida'),
(15, 'Miranda'),
(16, 'Monagas'),
(17, 'Nueva Esparta'),
(18, 'Portuguesa'),
(19, 'Sucre'),
(20, 'Tachira'),
(21, 'Trujillo'),
(22, 'Vargas'),
(23, 'Yaracuy'),
(24, 'Zulia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotografos`
--

CREATE TABLE `fotografos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fotografias` varchar(255) NOT NULL,
  `ventas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotografos`
--

INSERT INTO `fotografos` (`id`, `nombre`, `apellido`, `fotografias`, `ventas`) VALUES
(1, 'jose', 'kamil', 'monalisa', 10),
(2, 'sancho', 'panza', 'gato gordo', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `contratos` int(255) NOT NULL,
  `ofertas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id`, `nombre`, `apellido`, `contratos`, `ofertas`) VALUES
(1, 'brad', 'pit', 7, 20),
(2, 'cristiano', 'ronaldo', 8, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquias`
--

CREATE TABLE `parroquias` (
  `id` int(255) NOT NULL,
  `capital` varchar(255) NOT NULL,
  `parroquia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parroquias`
--

INSERT INTO `parroquias` (`id`, `capital`, `parroquia`) VALUES
(1, 'Caracas', 'Santa Rosalía	'),
(2, 'Caracas', 'El Valle'),
(3, 'Caracas', 'Coche'),
(4, 'Caracas', 'Caricuao'),
(5, 'Caracas', 'Macarao'),
(6, 'Caracas', 'Antímano'),
(7, 'Caracas', 'La Vega	'),
(8, 'Caracas', 'El Paraíso	'),
(9, 'Caracas', 'El Junquito'),
(10, 'Caracas', 'Sucre	'),
(11, 'Caracas', 'San Juan'),
(12, 'Caracas', 'Santa Teresa'),
(13, 'Caracas', '23 de enero'),
(14, 'Caracas', 'La Pastora'),
(15, 'Caracas', 'Altagracia	'),
(16, 'Caracas', 'San José'),
(17, 'Caracas', 'San Bernardino	'),
(18, 'Caracas', 'Catedral'),
(19, 'Caracas', 'Candelaria'),
(20, 'Caracas', 'San Agustín'),
(21, 'Caracas', 'El Recreo'),
(22, 'Caracas', 'San Pedro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `capital` varchar(255) NOT NULL,
  `parroquia` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `ruta`, `nombre`, `apellido`, `fecha`, `email`, `estado`, `capital`, `parroquia`, `usuario`, `contrasena`, `role`) VALUES
(1, 'user.png', 'jonathan', 'castro', '11-05-2018', 'admin@gmail.com', 'Distrito Capital', 'Caracas', 'El Valle', 'admin', 'admin', 'admin'),
(2, 'user.png', 'maria', 'perez', '11-05-2018', 'maria@hotmail.com', 'Distrito Capital', 'Caracas', 'Candelaria', 'maria', '1234', 'usuario'),
(4, 'user.png', 'carlos', 'ramirez', '21-06-2018', 'carlos@yahoo.com', 'Distrito Capital', 'Caracas', 'parroquia', 'carlos', '1234', 'usuario'),
(5, 'user.png', 'willian', 'ramirez', '01-07-2018', 'ramirez@gmail.com', 'Distrito Capital', 'Caracas', 'parroquia', 'william', '123', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capitales`
--
ALTER TABLE `capitales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotografos`
--
ALTER TABLE `fotografos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capitales`
--
ALTER TABLE `capitales`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `fotografos`
--
ALTER TABLE `fotografos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
