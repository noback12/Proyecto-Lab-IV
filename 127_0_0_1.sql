-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2021 a las 17:39:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `complejo_cinetp`
--
CREATE DATABASE IF NOT EXISTS `complejo_cinetp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `complejo_cinetp`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientos`
--

CREATE TABLE `asientos` (
  `id_asiento` int(11) NOT NULL,
  `letra` char(1) NOT NULL,
  `numero` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asientos`
--

INSERT INTO `asientos` (`id_asiento`, `letra`, `numero`, `id_sala`) VALUES
(1, 'F', 6, 9),
(2, 'A', 1, 9),
(3, 'A', 2, 9),
(4, 'A', 3, 9),
(5, 'B', 1, 9),
(6, 'B', 2, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asiento_funcion`
--

CREATE TABLE `asiento_funcion` (
  `id_af` int(11) NOT NULL,
  `id_asiento` int(11) NOT NULL,
  `id_funcion` int(11) NOT NULL,
  `ocupado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asiento_funcion`
--

INSERT INTO `asiento_funcion` (`id_af`, `id_asiento`, `id_funcion`, `ocupado`) VALUES
(1, 1, 5, 1),
(2, 2, 5, 0),
(3, 3, 5, 1),
(4, 4, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complejos`
--

CREATE TABLE `complejos` (
  `id_complejo` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `cant_salas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `complejos`
--

INSERT INTO `complejos` (`id_complejo`, `direccion`, `nombre`, `precio`, `cant_salas`) VALUES
(1, 'Rue de Rivoli, 75001', 'Colosseum', 700, 30),
(2, 'Balcarce 50, C1064', 'Royal Theatre', 650, 25),
(4, '191 portobello, Notting Hill', 'Electric Cinema', 695, 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `email`, `contraseña`, `dni`, `nombre`, `apellido`) VALUES
(1, 'caputtimartin12@gmail.com', 'hash', 390, 'martin', 'caputti'),
(2, 'sebastianvettel@f1.com', 'hash2 ', 5000000, 'sebastian', 'Vettel'),
(3, 'waynetec@gotham.com', 'thebat', 1, 'Bruce', 'Wayne ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE `funcion` (
  `id_funcion` int(11) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `id_sala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `funcion`
--

INSERT INTO `funcion` (`id_funcion`, `dia`, `hora`, `id_sala`) VALUES
(1, '2021-10-26', '22:10:00', 1),
(2, '2021-10-26', '19:30:00', 8),
(3, '2021-10-29', '12:30:00', 9),
(4, '2021-10-29', '15:20:00', 9),
(5, '2021-10-29', '17:40:00', 9),
(6, '2021-10-29', '21:00:00', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_pelicula` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `duracion` time NOT NULL,
  `sinopsis` varchar(300) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `estreno` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_pelicula`, `nombre`, `duracion`, `sinopsis`, `genero`, `estreno`) VALUES
(1, 'The Dark Knight', '02:32:00', 'Con la ayuda del teniente Jim Gordon y del Fiscal del Distrito Harvey Dent, Batman mantiene a raya el crimen organizado en Gotham. Todo cambia cuando aparece el Joker, un nuevo criminal que desencadena el caos y tiene aterrados a los ciudadanos.', 'Accion', '2008-07-17'),
(2, 'El origen', '02:28:00', 'Dom Cobb es un ladrón con una extraña habilidad para entrar a los sueños de la gente y robarles los secretos de sus subconscientes. Su habilidad lo ha vuelto muy popular en el mundo del espionaje corporativo, pero ha tenido un gran costo en la gente que ama. Cobb obtiene la oportunidad de redimirse ', 'Ciencia ficcion', '2010-07-26'),
(26, 'Dunquerke', '01:46:00', 'En mayo de 1940, durante la Segunda Guerra Mundial, Alemania avanza hacia Francia, atrapando a las tropas aliadas en las playas de Dunkerque. Bajo protección aérea y terrestre de las fuerzas británicas y francesas, las tropas son evacuadas lenta y metódicamente de la playa utilizando cualquier embar', 'belica', '2017-07-19'),
(31, 'Halloween Kills', '01:45:00', 'La saga de Michael Myers y Laurie Strode continúa en el próximo capítulo emocionante de la serie de Halloween', 'terror', '2021-10-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `id_sala` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `id_complejo` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`id_sala`, `numero`, `capacidad`, `id_complejo`, `id_pelicula`) VALUES
(1, 1, 20, 1, 1),
(2, 1, 20, 2, 0),
(3, 1, 10, 4, 0),
(4, 2, 15, 4, 0),
(5, 3, 18, 4, 0),
(6, 4, 22, 4, 0),
(7, 2, 24, 1, 0),
(8, 3, 18, 1, 0),
(9, 2, 10, 2, 0),
(10, 3, 20, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `contraseña`) VALUES
(1, 'lio', 'messi', 'liomessi@psg.com', 'viscabarca'),
(2, 'eren ', 'jaeger', 'eren@aot.com', 'grisha '),
(3, 'peter', 'parker', 'pparker@gmail.com', 'spidey');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD PRIMARY KEY (`id_asiento`);

--
-- Indices de la tabla `asiento_funcion`
--
ALTER TABLE `asiento_funcion`
  ADD PRIMARY KEY (`id_af`);

--
-- Indices de la tabla `complejos`
--
ALTER TABLE `complejos`
  ADD PRIMARY KEY (`id_complejo`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`id_funcion`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_pelicula`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asientos`
--
ALTER TABLE `asientos`
  MODIFY `id_asiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `asiento_funcion`
--
ALTER TABLE `asiento_funcion`
  MODIFY `id_af` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `complejos`
--
ALTER TABLE `complejos`
  MODIFY `id_complejo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `funcion`
--
ALTER TABLE `funcion`
  MODIFY `id_funcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_pelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `salas`
--
ALTER TABLE `salas`
  MODIFY `id_sala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
