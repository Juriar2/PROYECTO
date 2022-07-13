-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 23:28:15
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
(191, 1, 1, '2021-11-03 23:11:34', 1),
(192, 1, 2, '2021-11-03 23:11:34', 1),
(193, 1, 3, '2021-11-03 23:11:34', 1),
(194, 1, 4, '2021-11-03 23:11:34', 1),
(195, 2, 4, '2021-11-03 23:16:50', 1),
(196, 3, 4, '2021-11-03 23:16:56', 1),
(197, 31, 19, '2022-07-06 11:44:04', 1),
(198, 31, 4, '2022-07-06 16:42:29', 1),
(199, 32, 4, '2022-07-08 12:52:47', 1),
(200, 32, 19, '2022-07-08 12:52:48', 1),
(201, 32, 22, '2022-07-08 12:52:48', 1),
(202, 31, 22, '2022-07-08 12:57:44', 1);

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
(10, 'Introduccio a javascrip', '2022-07-03 14:28:18', 1);

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
(29, 0, 'Maria hernandez perez', 'introducrion a javascrip', '2022-07-06', '2022-07-06', 0, '../../public/1.png', '2022-07-06 11:25:10', 1),
(30, 0, 'Maria hernandez perez', 'otro', '2022-07-07', '2022-07-08', 0, '../../public/1.png', '2022-07-06 11:27:13', 1),
(31, 10, 'Javascrip', 'curso', '2022-07-06', '2022-07-07', 9, '../../public/1268183608.png', '2022-07-06 11:41:28', 1),
(32, 10, 'JavaScript', 'para la web', '2022-07-06', '2022-07-07', 10, '../../public/1.png', '2022-07-06 11:47:41', 1);

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
(8, 'JUAN', 'TORREZ', 'JIMENEZ', 'JUAN@HOTMAIL.CO', 'M', '9321137425', '2022-07-01 13:07:47', 0),
(9, 'Juan ', 'perez', 'perez', 'juan@gmail.com', 'M', '9321137432', '2022-07-01 14:10:11', 1),
(10, 'YURI', 'halo', 'halo', 'RPALMA@TEST.COM.PE', 'F', '9321103951', '2022-07-04 15:42:30', 1);

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
  `usu_pass` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `usu_sex` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `usu_telf` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `usu_matri` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`usu_id`, `usu_nom`, `usu_apep`, `usu_apem`, `usu_correo`, `usu_pass`, `usu_sex`, `usu_telf`, `rol_id`, `usu_matri`, `fech_crea`, `est`) VALUES
(2, 'DAVIS', 'CASTILLO', 'FUJIMORI', 'FUJICASTI@HOTMAIL.COM', '123456', 'M', '989898989', 1, '4445462', '2021-04-26 20:14:08', 0),
(3, 'BULMA', 'VEGETA', 'SAYAYIN', 'GOKU@GMAIL.COM', '123456', 'F', '989898989', 1, '2233445', '2021-04-26 20:14:08', 0),
(4, '', 'Torrez ', 'Jimenez', 'yuriar2000@hotmail.com', '12345678', 'M', '9321137432', 1, '19E30458', '2021-04-26 20:14:08', 1),
(9, 'USU2', 'USU2', 'USU2', 'USU2@ADMIN.COM', '123456', 'M', '989898989', 1, '4445465', '2021-04-26 20:14:08', 0),
(10, 'USU3', 'USU3', 'USU3', 'USU3@ADMIN.COM', '123456', 'M', '989898989', 1, '4445466', '2021-04-26 20:14:08', 0),
(11, 'USU4', 'USU4', 'USU4', '4@ADMIN.COM', '123456', 'M', '989898989', 1, '4445467', '2021-04-26 20:14:08', 0),
(12, 'USU5', 'USU5', 'USU5', '5@ADMIN.COM', '123456', 'M', '989898989', 1, '4445468', '2021-04-26 20:14:08', 0),
(13, '', '', '', '', '', '', '', 0, '', '2022-06-27 12:14:22', 0),
(14, '', 'TORREZ', 'HERNEDEZ', 'halo@hotmail.com', '123456', 'M', '989898988', 1, '19E30454', '2022-06-27 13:04:07', 0),
(15, '', '', '', '', '', '', '', 0, '', '2022-06-27 13:28:48', 0),
(16, '', '', '', '', '', '', '', 0, '', '2022-06-27 22:15:13', 0),
(17, '', '', '', '', '', '', '', 0, '', '2022-06-28 15:28:50', 0),
(18, 'juriar', 'Torrez ', 'Jimenez', 'yuriar2000@hotmail.com', '123', 'F', '9321137432', 1, '19E3045', '2022-06-29 13:24:27', 0),
(19, 'Fabiola', 'hernandez', 'Cruz', 'fabi123z@hotmail.com', '123456', 'F', '9321137432', 1, '19e30457', '2022-06-29 13:51:54', 1),
(20, 'Karla', 'Ayala', 'Guzman', 'Karla23@gmail.com', '123456', 'M', '9321137437', 2, '19E30457', '2022-06-30 09:20:45', 0),
(21, '', '', '', '', '', '', '', 0, '', '2022-06-30 10:16:53', 0),
(22, 'Juan', 'Pérez ', 'Hernández ', 'yuriar200@hotmail.com', '123456', 'M', '9321137433', 2, '155564477', '2022-07-05 11:36:50', 1),
(23, '', '', '', '', '', '', '', 0, '', '2022-07-07 11:40:52', 0),
(24, '', '', '', '', '', '', '', 0, '', '2022-07-07 11:59:02', 0),
(25, '', '', '', '', '', '', '', 0, '', '2022-07-07 12:03:36', 0),
(26, '', '', '', '', '', '', '', 0, '', '2022-07-07 12:08:43', 0),
(27, '', '', '', '', '', '', '', 0, '', '2022-07-07 12:14:48', 0),
(28, '', '', '', '', '', '', '', 0, '', '2022-07-07 12:15:48', 0),
(29, '', '', '', '', '', '', '', 0, '', '2022-07-07 12:17:16', 0),
(30, '', '', '', '', '', '', '', 0, '', '2022-07-07 12:18:05', 0),
(31, '', '', '', '', '', '', '', 0, '', '2022-07-07 12:18:09', 0),
(32, '', '', '', '', '', '', '', 0, '', '2022-07-07 12:20:36', 0),
(33, '', '', '', '', '', '', '', 0, '', '2022-07-07 12:35:56', 0),
(34, '', '', '', '', '', '', '', 0, '', '2022-07-07 13:12:02', 0),
(35, '', '', '', '', '', '', '', 0, '', '2022-07-07 13:14:41', 0),
(36, '', '', '', '', '', '', '', 0, '', '2022-07-07 13:16:02', 0),
(37, '', '', '', '', '', '', '', 0, '', '2022-07-07 13:17:22', 0),
(38, '', '', '', '', '', '', '', 0, '', '2022-07-07 13:18:51', 0),
(39, '', '', '', '', '', '', '', 0, '', '2022-07-11 13:07:26', 1),
(40, 'vcvc', '', '', '', '', '', '', 0, '', '2022-07-11 13:10:28', 1),
(41, 'ssss', 'dfdfdhdd', '', '', '', '', '', 0, '', '2022-07-11 13:11:52', 1),
(42, 'Juriar Abirzabit', '', '', '', '', '', '', 0, '', '2022-07-11 13:16:23', 1),
(43, 'Juriar Abirzabit', '', '', '', '', '', '', 0, '', '2022-07-11 13:20:06', 1);

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
  MODIFY `curd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tm_curso`
--
ALTER TABLE `tm_curso`
  MODIFY `cur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tm_instructor`
--
ALTER TABLE `tm_instructor`
  MODIFY `inst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
