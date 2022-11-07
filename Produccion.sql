-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 04:09:29
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
  `usu_grup` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `usu_pago` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `usu_matri` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`usu_id`, `usu_nom`, `usu_apep`, `usu_apem`, `usu_correo`, `usu_pass`, `usu_sex`, `usu_telf`, `usu_gra`, `usu_grup`, `rol_id`, `usu_pago`, `usu_matri`, `fech_crea`, `est`) VALUES
(1, 'jauriar', 'torrez', 'torrez', 'admin@admin.com', '123', '', '', '', '2', 2, '', '', '2022-11-06 21:00:03', 1);

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
  MODIFY `curd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  MODIFY `cur_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tm_instructor`
--
ALTER TABLE `tm_instructor`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
