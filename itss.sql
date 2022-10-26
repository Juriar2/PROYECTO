-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2022 a las 04:48:08
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `td_curso_usuario`
--

CREATE TABLE `td_curso_usuario` (
  `curd_id` int(11) NOT NULL,
  `cur_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `fech_crea` datetime NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `td_curso_usuario`
--

INSERT INTO `td_curso_usuario` (`curd_id`, `cur_id`, `usu_id`, `fech_crea`, `est`) VALUES
(1, 1, 1, '2022-10-21 22:19:32', 0),
(2, 1, 3, '2022-10-21 22:19:38', 0),
(3, 1, 1, '2022-10-21 22:22:40', 0),
(4, 2, 1, '2022-10-21 22:23:55', 0),
(5, 2, 2, '2022-10-21 22:23:55', 1),
(6, 1, 2, '2022-10-21 22:24:16', 1),
(7, 1, 4, '2022-10-22 11:49:46', 1),
(8, 2, 4, '2022-10-22 11:51:18', 1),
(9, 1, 17, '2022-10-22 20:51:31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_categoria`
--

CREATE TABLE `tm_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_categoria`
--

INSERT INTO `tm_categoria` (`cat_id`, `cat_nom`, `fech_crea`, `est`) VALUES
(1, 'JS', '2022-10-21 22:18:30', 1),
(2, 'larabel', '2022-10-21 22:18:38', 1),
(3, 'Introduciion a php', '2022-10-22 11:31:38', 1),
(4, 'g', '2022-10-24 09:11:50', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_curso`
--

CREATE TABLE `tm_curso` (
  `cur_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `cur_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cur_descrip` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `cur_fechini` date DEFAULT NULL,
  `cur_fechfin` date DEFAULT NULL,
  `inst_id` int(11) NOT NULL,
  `cur_img` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_curso`
--

INSERT INTO `tm_curso` (`cur_id`, `cat_id`, `cur_nom`, `cur_descrip`, `cur_fechini`, `cur_fechfin`, `inst_id`, `cur_img`, `fech_crea`, `est`) VALUES
(1, 3, 'Php', 'php', '2022-11-20', '2022-12-22', 1, '../../public/1831808378.png', '2022-10-21 22:19:05', 1),
(2, 3, 'Introducion a php', 'Introducir a php', '2022-10-25', '2022-10-20', 1, '../../public/1746633764.png', '2022-10-21 22:23:00', 1),
(3, 1, 'Js', 'js', '2022-10-23', '2022-10-24', 1, '../../public/2110863101.png', '2022-10-23 10:12:27', 1),
(4, 1, 'a', 'a', '2022-11-02', '2022-10-20', 1, '../../public/', '2022-10-24 09:12:06', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_instructor`
--

CREATE TABLE `tm_instructor` (
  `inst_id` int(11) NOT NULL,
  `inst_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `inst_apep` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `inst_apem` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `inst_correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `inst_sex` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `inst_telf` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_instructor`
--

INSERT INTO `tm_instructor` (`inst_id`, `inst_nom`, `inst_apep`, `inst_apem`, `inst_correo`, `inst_sex`, `inst_telf`, `fech_crea`, `est`) VALUES
(1, 'juan', 'perez', 'hernandez', 'juan@hotmail.com', 'M', '1111', '2022-10-21 22:18:14', 1),
(2, 'hola', 'hola', 'hola', 'hola@hotmail.com', 'F', '932211374', '2022-10-24 09:11:35', 1),
(3, 'q', 'q', '1', 'e@hotmail.com', 'M', '93222114446', '2022-10-25 19:08:02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

CREATE TABLE `tm_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_apep` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_apem` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_pass` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `usu_sex` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `usu_telf` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `usu_gra` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `usu_grup` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `usu_matri` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`usu_id`, `usu_nom`, `usu_apep`, `usu_apem`, `usu_correo`, `usu_pass`, `usu_sex`, `usu_telf`, `usu_gra`, `usu_grup`, `rol_id`, `usu_matri`, `fech_crea`, `est`) VALUES
(6, 'Juriar', 'Torrez ', 'Jimenez', 'yuriar2000@hotmail.com', '123', 'M', '3', 'Primer_semestre', 'B', 2, '19e307432', '2022-10-25 19:23:40', 1),
(8, 'a', 'a', 'a', 'q@hotmail.com', '123', 'M', '111111', 'Primer_semestre', 'A', 1, '2', '2022-10-25 19:28:01', 1),
(9, 'a', 'a', 'a', 'a@hotmail.com', 'a', 'F', '', 'Tercer_semestre', 'A', 1, '2111111', '2022-10-25 19:40:43', 1),
(10, 'a', 'a', 'a', 'aa@hotmail.com', 'qby5hHpTz3th5Rd', 'M', '111111', 'Primer_semestre', 'A', 1, '2', '2022-10-25 19:42:17', 1),
(11, 'a', 'a', 'a', 'a@hotmail.com', '1222', 'M', '1111111111', 'Quinto_semetre', 'B', 1, 'aaaaa', '2022-10-25 21:32:23', 1),
(12, 'a', 'a', 'a', 'ah@hotmail.com', '1222', 'M', '1111111111', 'Quinto_semetre', 'B', 1, 'aaaaa', '2022-10-25 21:32:53', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `td_curso_usuario`
--
ALTER TABLE `td_curso_usuario`
  ADD PRIMARY KEY (`curd_id`);

--
-- Indices de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  ADD PRIMARY KEY (`cur_id`);

--
-- Indices de la tabla `tm_instructor`
--
ALTER TABLE `tm_instructor`
  ADD PRIMARY KEY (`inst_id`);

--
-- Indices de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `td_curso_usuario`
--
ALTER TABLE `td_curso_usuario`
  MODIFY `curd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  MODIFY `cur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tm_instructor`
--
ALTER TABLE `tm_instructor`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
