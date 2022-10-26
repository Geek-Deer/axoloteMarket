-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-05-2020 a las 04:29:35
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id13850927_ajolote_shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `inventario` int(11) NOT NULL,
  `cat` varchar(100) CHARACTER SET utf8 NOT NULL,
  `subcat` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `foto`, `descripcion`, `precio`, `inventario`, `cat`, `subcat`) VALUES
(1, 'Paseo en el lago', 'pintura1.jpg', 'Pintura al óleo hecha a mano, 100% mexicana. ', 467, 0, 'pintura', 'oleo'),
(2, 'Llegó la primavera', 'pintura2.jpg', 'Arte mexicano al óleo, cuadro de 50x30, hecho a mano. ', 330, 8, 'pintura', 'oleo'),
(3, 'Vela', 'pintura3.jpg', 'Pintura al óleo, 100% mexicana, cuadro de 30x15. ', 269, 8, 'pintura', 'oleo'),
(4, 'Arte abstracto', 'pintura4.jpg', 'Pintura abstracta realizada al óleo, 100% mexicana, hecha a mano. ', 450, 10, 'pintura', 'oleo'),
(5, 'Alebrije estilo 1', 'alebrije_1.jpg', 'Artesanía realizada a mano, 100% mexicana, elaborada con materiales como madera y pintura acrílica. ', 158, 10, 'recuerdos', 'alebrije'),
(6, 'Alebrije estilo 2', 'alebrije_2.jpg', 'Artesanía elaborada por manos mexicanas utilizando materiales como pintura acrílica y madera. ', 140, 10, 'recuerdos', 'alebrije'),
(7, 'Alebrije estilo 3', 'alebrije_3.jpg', 'Artesanía realizada a mano, 100% mexicana, elaborada con materiales como madera y pintura acrílica.', 170, 10, 'recuerdos', 'alebrije'),
(8, 'Catrina de barro', 'barro1.jpg', 'Artesanía moldeada a mano, 100% mexicana, elaborada con barro. ', 300, 10, 'figura', 'barro'),
(9, 'Jarras ', 'barro2.jpg', 'Jarras de barro moldeadas a mano, 100% mexicanas, elaboradas con barro. ', 290, 9, 'figura', 'barro'),
(10, 'Gato negro', 'barro3.jpg', 'Artesanía moldeada a mano, 100% mexicana, elaborada con barro y pintura acrílica. ', 100, 10, 'figura', 'barro'),
(11, 'Blusa modelo 1', 'blusa_1.jpg', 'Blusa elaborada por artesanos mexicanos, 100% algodón. ', 90, 10, 'bordado', 'blusa'),
(12, 'Blusa estilo 2', 'blusa_2.jpg', 'Blusa elaborada por artesanos mexicanos, 100% algodón. ', 90, 10, 'bordado', 'blusa'),
(13, 'Collar ', 'collar_1.jpg', 'Collar de recuerdo realizado por artesanos mexicanos, hecho a mano. ', 30, 10, 'accesorio', 'collar'),
(14, 'Set de figuras de cristal esti', 'cristal1.jpg', 'Figuras de cristal hechas en México por artesanos locales. ', 280, 10, 'figura', 'cristal'),
(15, 'Set de figuras de cristal esti', 'cristal2.jpeg', 'Figuras de cristal hechas en México por artesanos locales. ', 300, 10, 'figura', 'cristal'),
(16, 'Llavero de calavera', 'llavero_1.jpg', 'Recuerdito realizado en México. ', 25, 10, 'recuerdos', 'llavero'),
(17, 'Llavero de corazón', 'llavero_2.jpg', 'Recuerdito realizado en México. ', 25, 10, 'recuerdos', 'llavero'),
(18, 'Silla para muñecas', 'madera1.jpg', 'Artesanía realizada a base de madera y pintura acrílica, 100% mexicana.  ', 99, 10, 'figura', 'madera'),
(19, 'Figura de pájaro ', 'madera2.jpg', 'Artesanía realizada a base de madera y pintura acrílica, 100% mexicana.  ', 40, 10, 'figura', 'madera'),
(20, 'Set de figuras de cerámica', 'ceramica1.jpeg', 'Artesanía realizada a base de cerámica, 100% mexicana.  ', 300, 10, 'figura', 'ceramica'),
(21, 'Calavera', 'ceramica2.jpg', 'Artesanía realizada a base de cerámica, 100% mexicana.  ', 99, 10, 'figura', 'ceramica'),
(22, 'Elefante', 'ceramica3.jpg', 'Artesanía realizada a base de cerámica, 100% mexicana.  ', 200, 10, 'figura', 'ceramica'),
(23, 'Mantel estilo 1', 'mantel_1.jpg', 'Mantel bordado a mano por artesanos mexicanos, 100% algodón. ', 100, 10, 'bordado', 'mantel'),
(24, 'Mantel estilo 2', 'mantel_2.jpg', 'Mantel bordado a mano por artesanos mexicanos, 100% algodón. ', 100, 10, 'bordado', 'mantel'),
(25, 'Muñeca estilo 1', 'muneca_1.jpg', 'Recuerdito realizado a mano, 100% algodón. ', 40, 10, 'recuerdos', 'muneca'),
(26, 'Muñeca estilo 2', 'muneca_2.jpg', 'Recuerdito realizado a mano, 100% algodón. ', 40, 10, 'recuerdos', 'muneca'),
(28, 'Pulsera estilo 1', 'pulsera1.jpg', 'Accesorio elaborado en México por artesanos locales.', 25, 10, 'accesorio', 'pulsera'),
(27, 'Pulsera estilo 2', 'pulsera2.jpg', 'Accesorio elaborado en México por artesanos locales.', 25, 10, 'accesorio', 'pulsera'),
(29, 'Servilleta estilo 1', 'servilleta_1.jpg', 'Servilleta bordada a mano realizada por artesanos mexicanos, 100% algodón.', 100, 10, 'bordado', 'servilleta'),
(30, 'Servilleta estilo 2', 'servilleta_2.jpg', 'Servilleta bordada a mano realizada por artesanos mexicanos, 100% algodón.', 100, 10, 'bordado', 'servilleta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `numero` varchar(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `numero`, `correo`, `pass`) VALUES
(1, 'Diego Sanchez Luna', '6442188945', 'sanchez.diego.cbtis37@gmail.com', 'Lomitos'),
(11, 'UsuarioEjemplo', '6441202020', 'usuarioejemplo@gmail.com', 'usuario'),
(4, 'Diego Sanchez Luna', '3454657645', 'Aristogato@gmail.com', '1234'),
(10, 'Ramón', '6442550001', 'ramondanzos@outlook.com', '1234'),
(6, 'Alejandra ', '6441512615', 'ale@gmail.com', '12345678'),
(7, 'Karla', '6442556677', 'chikoritaa51@gmail.com', 'holabb12'),
(9, 'a21', '1', 'a@f', 'f123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
