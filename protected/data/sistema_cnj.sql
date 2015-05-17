-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2015 a las 16:46:32
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema_cnj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `NOMBRE_A` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `APELLIDO_A` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`RUT_A`, `NOMBRE_A`, `APELLIDO_A`) VALUES
('14.616.949-k', 'Juan ', 'Perez'),
('16.818.192-2', 'Marcelo', 'Sáez tapia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `userid` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `bizrule` text COLLATE utf8_spanish2_ci,
  `data` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('ADMINISTRADOR', '14.616.949-k', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish2_ci,
  `bizrule` text COLLATE utf8_spanish2_ci,
  `data` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('ADMINISTRADOR', 2, NULL, NULL, NULL),
('PROFESOR', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) COLLATE utf8_spanish2_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursa`
--

CREATE TABLE IF NOT EXISTS `cursa` (
`ID` int(11) NOT NULL,
  `RUT_A` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_C` varchar(4) COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cursa`
--

INSERT INTO `cursa` (`ID`, `RUT_A`, `ID_C`, `ANIO_C`) VALUES
(1, '16.818.192-2', '1', 2014),
(5, '14.616.949-k', '1', 2014);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `ID_C` varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `NOMBRE_C` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`ID_C`, `NOMBRE_C`) VALUES
('', 'Kinder A'),
('1', 'Kinder B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imparte`
--

CREATE TABLE IF NOT EXISTS `imparte` (
`id` int(11) NOT NULL,
  `RUT_P` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_C` varchar(4) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `imparte`
--

INSERT INTO `imparte` (`id`, `RUT_P`, `ID_C`) VALUES
(1, '14.616.949-k', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `RUT_P` varchar(12) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `NOMBRE_P` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `APELLIDO_P` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TIPO_P` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PASS` varchar(128) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`RUT_P`, `NOMBRE_P`, `APELLIDO_P`, `TIPO_P`, `PASS`) VALUES
('14.616.949-k', 'Paula', 'Saez', 'Administrador', '81dc9bdb52d04dc20036dbd8313ed055'),
('16.818.192-2', 'Marcelo', 'Jara', 'ADMINISTRADOR', 'a970a7e3b359f88a4732b56050822888');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla1`
--

CREATE TABLE IF NOT EXISTS `tabla1` (
`ID_T1` int(11) NOT NULL,
  `ID_cursa` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) NOT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla1`
--

INSERT INTO `tabla1` (`ID_T1`, `ID_cursa`, `RUT_A`, `ANIO_C`, `A1_E1`, `A1_E2`, `A1_E3`, `A2_E1`, `A2_E2`, `A2_E3`, `A3_E1`, `A3_E2`, `A3_E3`, `A4_E1`, `A4_E2`, `A4_E3`, `A5_E1`, `A5_E2`, `A5_E3`, `A6_E1`, `A6_E2`, `A6_E3`, `A7_E1`, `A7_E2`, `A7_E3`, `A8_E1`, `A8_E2`, `A8_E3`, `A9_E1`, `A9_E2`, `A9_E3`, `A10_E1`, `A10_E2`, `A10_E3`, `A11_E1`, `A11_E2`, `A11_E3`, `A12_E1`, `A12_E2`, `A12_E3`, `E1`, `E2`, `E3`) VALUES
(3, 5, '14.616.949-k', 2014, 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'EG1', 'EG1', 'EG1'),
(4, 1, '16.818.192-2', 2014, 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'EG1', 'EG1', 'EG1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla2`
--

CREATE TABLE IF NOT EXISTS `tabla2` (
`ID_T2` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) NOT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla2`
--

INSERT INTO `tabla2` (`ID_T2`, `ID_CURSA`, `RUT_A`, `ANIO_C`, `A1_E1`, `A1_E2`, `A1_E3`, `A2_E1`, `A2_E2`, `A2_E3`, `A3_E1`, `A3_E2`, `A3_E3`, `A4_E1`, `A4_E2`, `A4_E3`, `A5_E1`, `A5_E2`, `A5_E3`, `A6_E1`, `A6_E2`, `A6_E3`, `A7_E1`, `A7_E2`, `A7_E3`, `A8_E1`, `A8_E2`, `A8_E3`, `E1`, `E2`, `E3`) VALUES
(2, 5, '14.616.949-k', 2014, 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', '0', '0', '0', 'NT2', 'NT2', 'NT2'),
(3, 1, '16.818.192-2', 2014, 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'EG1', 'EG1', 'EG1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla3`
--

CREATE TABLE IF NOT EXISTS `tabla3` (
`ID_T3` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) NOT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla3`
--

INSERT INTO `tabla3` (`ID_T3`, `ID_CURSA`, `RUT_A`, `ANIO_C`, `A1_E1`, `A1_E2`, `A1_E3`, `A2_E1`, `A2_E2`, `A2_E3`, `A3_E1`, `A3_E2`, `A3_E3`, `A4_E1`, `A4_E2`, `A4_E3`, `A5_E1`, `A5_E2`, `A5_E3`, `A6_E1`, `A6_E2`, `A6_E3`, `A7_E1`, `A7_E2`, `A7_E3`, `A8_E1`, `A8_E2`, `A8_E3`, `E1`, `E2`, `E3`) VALUES
(2, 1, '16.818.192-2', 2014, 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'EG1', 'EG1', 'EG1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla4`
--

CREATE TABLE IF NOT EXISTS `tabla4` (
`ID_T4` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) NOT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla5`
--

CREATE TABLE IF NOT EXISTS `tabla5` (
`ID_T5` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) NOT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla6`
--

CREATE TABLE IF NOT EXISTS `tabla6` (
`ID_T6` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) NOT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla7`
--

CREATE TABLE IF NOT EXISTS `tabla7` (
`ID_T7` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) NOT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla8`
--

CREATE TABLE IF NOT EXISTS `tabla8` (
`ID_T8` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) DEFAULT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla9`
--

CREATE TABLE IF NOT EXISTS `tabla9` (
`ID_T9` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) DEFAULT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `A13_E1` varchar(2) DEFAULT NULL,
  `A13_E2` varchar(2) DEFAULT NULL,
  `A13_E3` varchar(2) DEFAULT NULL,
  `A14_E1` varchar(2) DEFAULT NULL,
  `A14_E2` varchar(2) DEFAULT NULL,
  `A14_E3` varchar(2) DEFAULT NULL,
  `A15_E1` varchar(2) DEFAULT NULL,
  `A15_E2` varchar(2) DEFAULT NULL,
  `A15_E3` varchar(2) DEFAULT NULL,
  `A16_E1` varchar(2) DEFAULT NULL,
  `A16_E2` varchar(2) DEFAULT NULL,
  `A16_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla10`
--

CREATE TABLE IF NOT EXISTS `tabla10` (
`ID_T10` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) DEFAULT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla11`
--

CREATE TABLE IF NOT EXISTS `tabla11` (
`ID_T11` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) DEFAULT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `A13_E1` varchar(2) DEFAULT NULL,
  `A13_E2` varchar(2) DEFAULT NULL,
  `A13_E3` varchar(2) DEFAULT NULL,
  `A14_E1` varchar(2) DEFAULT NULL,
  `A14_E2` varchar(2) DEFAULT NULL,
  `A14_E3` varchar(2) DEFAULT NULL,
  `A15_E1` varchar(2) DEFAULT NULL,
  `A15_E2` varchar(2) DEFAULT NULL,
  `A15_E3` varchar(2) DEFAULT NULL,
  `A16_E1` varchar(2) DEFAULT NULL,
  `A16_E2` varchar(2) DEFAULT NULL,
  `A16_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla12`
--

CREATE TABLE IF NOT EXISTS `tabla12` (
`ID_T12` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) DEFAULT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla13`
--

CREATE TABLE IF NOT EXISTS `tabla13` (
`ID_T13` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) DEFAULT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `A13_E1` varchar(2) DEFAULT NULL,
  `A13_E2` varchar(2) DEFAULT NULL,
  `A13_E3` varchar(2) DEFAULT NULL,
  `A14_E1` varchar(2) DEFAULT NULL,
  `A14_E2` varchar(2) DEFAULT NULL,
  `A14_E3` varchar(2) DEFAULT NULL,
  `A15_E1` varchar(2) DEFAULT NULL,
  `A15_E2` varchar(2) DEFAULT NULL,
  `A15_E3` varchar(2) DEFAULT NULL,
  `A16_E1` varchar(2) DEFAULT NULL,
  `A16_E2` varchar(2) DEFAULT NULL,
  `A16_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla14`
--

CREATE TABLE IF NOT EXISTS `tabla14` (
`ID_T14` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) DEFAULT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `A13_E1` varchar(2) DEFAULT NULL,
  `A13_E2` varchar(2) DEFAULT NULL,
  `A13_E3` varchar(2) DEFAULT NULL,
  `A14_E1` varchar(2) DEFAULT NULL,
  `A14_E2` varchar(2) DEFAULT NULL,
  `A14_E3` varchar(2) DEFAULT NULL,
  `A15_E1` varchar(2) DEFAULT NULL,
  `A15_E2` varchar(2) DEFAULT NULL,
  `A15_E3` varchar(2) DEFAULT NULL,
  `A16_E1` varchar(2) DEFAULT NULL,
  `A16_E2` varchar(2) DEFAULT NULL,
  `A16_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla15`
--

CREATE TABLE IF NOT EXISTS `tabla15` (
`ID_T15` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) DEFAULT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `A13_E1` varchar(2) DEFAULT NULL,
  `A13_E2` varchar(2) DEFAULT NULL,
  `A13_E3` varchar(2) DEFAULT NULL,
  `A14_E1` varchar(2) DEFAULT NULL,
  `A14_E2` varchar(2) DEFAULT NULL,
  `A14_E3` varchar(2) DEFAULT NULL,
  `A15_E1` varchar(2) DEFAULT NULL,
  `A15_E2` varchar(2) DEFAULT NULL,
  `A15_E3` varchar(2) DEFAULT NULL,
  `A16_E1` varchar(2) DEFAULT NULL,
  `A16_E2` varchar(2) DEFAULT NULL,
  `A16_E3` varchar(2) DEFAULT NULL,
  `A17_E1` varchar(2) DEFAULT NULL,
  `A17_E2` varchar(2) DEFAULT NULL,
  `A17_E3` varchar(2) DEFAULT NULL,
  `A18_E1` varchar(2) DEFAULT NULL,
  `A18_E2` varchar(2) DEFAULT NULL,
  `A18_E3` varchar(2) DEFAULT NULL,
  `A19_E1` varchar(2) DEFAULT NULL,
  `A19_E2` varchar(2) DEFAULT NULL,
  `A19_E3` varchar(2) DEFAULT NULL,
  `A20_E1` varchar(2) DEFAULT NULL,
  `A20_E2` varchar(2) DEFAULT NULL,
  `A20_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla16`
--

CREATE TABLE IF NOT EXISTS `tabla16` (
`ID_T16` int(11) NOT NULL,
  `ID_CURSA` int(11) NOT NULL,
  `RUT_A` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ANIO_C` int(11) DEFAULT NULL,
  `A1_E1` varchar(2) DEFAULT NULL,
  `A1_E2` varchar(2) DEFAULT NULL,
  `A1_E3` varchar(2) DEFAULT NULL,
  `A2_E1` varchar(2) DEFAULT NULL,
  `A2_E2` varchar(2) DEFAULT NULL,
  `A2_E3` varchar(2) DEFAULT NULL,
  `A3_E1` varchar(2) DEFAULT NULL,
  `A3_E2` varchar(2) DEFAULT NULL,
  `A3_E3` varchar(2) DEFAULT NULL,
  `A4_E1` varchar(2) DEFAULT NULL,
  `A4_E2` varchar(2) DEFAULT NULL,
  `A4_E3` varchar(2) DEFAULT NULL,
  `A5_E1` varchar(2) DEFAULT NULL,
  `A5_E2` varchar(2) DEFAULT NULL,
  `A5_E3` varchar(2) DEFAULT NULL,
  `A6_E1` varchar(2) DEFAULT NULL,
  `A6_E2` varchar(2) DEFAULT NULL,
  `A6_E3` varchar(2) DEFAULT NULL,
  `A7_E1` varchar(2) DEFAULT NULL,
  `A7_E2` varchar(2) DEFAULT NULL,
  `A7_E3` varchar(2) DEFAULT NULL,
  `A8_E1` varchar(2) DEFAULT NULL,
  `A8_E2` varchar(2) DEFAULT NULL,
  `A8_E3` varchar(2) DEFAULT NULL,
  `A9_E1` varchar(2) DEFAULT NULL,
  `A9_E2` varchar(2) DEFAULT NULL,
  `A9_E3` varchar(2) DEFAULT NULL,
  `A10_E1` varchar(2) DEFAULT NULL,
  `A10_E2` varchar(2) DEFAULT NULL,
  `A10_E3` varchar(2) DEFAULT NULL,
  `A11_E1` varchar(2) DEFAULT NULL,
  `A11_E2` varchar(2) DEFAULT NULL,
  `A11_E3` varchar(2) DEFAULT NULL,
  `A12_E1` varchar(2) DEFAULT NULL,
  `A12_E2` varchar(2) DEFAULT NULL,
  `A12_E3` varchar(2) DEFAULT NULL,
  `E1` varchar(5) DEFAULT NULL,
  `E2` varchar(5) DEFAULT NULL,
  `E3` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`RUT_A`);

--
-- Indices de la tabla `authassignment`
--
ALTER TABLE `authassignment`
 ADD PRIMARY KEY (`itemname`,`userid`);

--
-- Indices de la tabla `authitem`
--
ALTER TABLE `authitem`
 ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `authitemchild`
--
ALTER TABLE `authitemchild`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indices de la tabla `cursa`
--
ALTER TABLE `cursa`
 ADD PRIMARY KEY (`ID`), ADD KEY `cursa_ibfk_1` (`RUT_A`), ADD KEY `cursa_ibfk_2` (`ID_C`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`ID_C`);

--
-- Indices de la tabla `imparte`
--
ALTER TABLE `imparte`
 ADD PRIMARY KEY (`id`), ADD KEY `imparte_ibfk_1` (`RUT_P`), ADD KEY `imparte_ibfk_2` (`ID_C`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
 ADD PRIMARY KEY (`RUT_P`);

--
-- Indices de la tabla `tabla1`
--
ALTER TABLE `tabla1`
 ADD PRIMARY KEY (`ID_T1`), ADD KEY `tabla1_ibfk_2` (`ID_cursa`), ADD KEY `tabla1_ibfk_3` (`RUT_A`);

--
-- Indices de la tabla `tabla2`
--
ALTER TABLE `tabla2`
 ADD PRIMARY KEY (`ID_T2`), ADD KEY `tabla2_ibfk_1` (`ID_CURSA`), ADD KEY `tabla2_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla3`
--
ALTER TABLE `tabla3`
 ADD PRIMARY KEY (`ID_T3`), ADD KEY `tabla3_ibfk_1` (`ID_CURSA`), ADD KEY `tabla3_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla4`
--
ALTER TABLE `tabla4`
 ADD PRIMARY KEY (`ID_T4`), ADD KEY `tabla4_ibfk_1` (`ID_CURSA`), ADD KEY `tabla4_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla5`
--
ALTER TABLE `tabla5`
 ADD PRIMARY KEY (`ID_T5`), ADD KEY `tabla5_ibfk_1` (`ID_CURSA`), ADD KEY `tabla5_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla6`
--
ALTER TABLE `tabla6`
 ADD PRIMARY KEY (`ID_T6`), ADD KEY `tabla6_ibfk_1` (`ID_CURSA`), ADD KEY `tabla6_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla7`
--
ALTER TABLE `tabla7`
 ADD PRIMARY KEY (`ID_T7`), ADD KEY `tabla7_ibfk_1` (`ID_CURSA`), ADD KEY `tabla7_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla8`
--
ALTER TABLE `tabla8`
 ADD PRIMARY KEY (`ID_T8`), ADD KEY `tabla8_ibfk_1` (`ID_CURSA`), ADD KEY `tabla8_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla9`
--
ALTER TABLE `tabla9`
 ADD PRIMARY KEY (`ID_T9`), ADD KEY `tabla9_ibfk_1` (`ID_CURSA`), ADD KEY `tabla9_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla10`
--
ALTER TABLE `tabla10`
 ADD PRIMARY KEY (`ID_T10`), ADD KEY `tabla10_ibfk_1` (`ID_CURSA`), ADD KEY `tabla10_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla11`
--
ALTER TABLE `tabla11`
 ADD PRIMARY KEY (`ID_T11`), ADD KEY `tabla11_ibfk_1` (`ID_CURSA`), ADD KEY `tabla11_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla12`
--
ALTER TABLE `tabla12`
 ADD PRIMARY KEY (`ID_T12`), ADD KEY `tabla12_ibfk_1` (`ID_CURSA`), ADD KEY `tabla12_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla13`
--
ALTER TABLE `tabla13`
 ADD PRIMARY KEY (`ID_T13`), ADD KEY `tabla13_ibfk_1` (`ID_CURSA`), ADD KEY `tabla13_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla14`
--
ALTER TABLE `tabla14`
 ADD PRIMARY KEY (`ID_T14`), ADD KEY `tabla14_ibfk_1` (`ID_CURSA`), ADD KEY `tabla14_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla15`
--
ALTER TABLE `tabla15`
 ADD PRIMARY KEY (`ID_T15`), ADD KEY `tabla15_ibfk_1` (`ID_CURSA`), ADD KEY `tabla15_ibfk_2` (`RUT_A`);

--
-- Indices de la tabla `tabla16`
--
ALTER TABLE `tabla16`
 ADD PRIMARY KEY (`ID_T16`), ADD KEY `tabla16_ibfk_1` (`ID_CURSA`), ADD KEY `tabla16_ibfk_2` (`RUT_A`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursa`
--
ALTER TABLE `cursa`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `imparte`
--
ALTER TABLE `imparte`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tabla1`
--
ALTER TABLE `tabla1`
MODIFY `ID_T1` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tabla2`
--
ALTER TABLE `tabla2`
MODIFY `ID_T2` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tabla3`
--
ALTER TABLE `tabla3`
MODIFY `ID_T3` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tabla4`
--
ALTER TABLE `tabla4`
MODIFY `ID_T4` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla5`
--
ALTER TABLE `tabla5`
MODIFY `ID_T5` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla6`
--
ALTER TABLE `tabla6`
MODIFY `ID_T6` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla7`
--
ALTER TABLE `tabla7`
MODIFY `ID_T7` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla8`
--
ALTER TABLE `tabla8`
MODIFY `ID_T8` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla9`
--
ALTER TABLE `tabla9`
MODIFY `ID_T9` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla10`
--
ALTER TABLE `tabla10`
MODIFY `ID_T10` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla11`
--
ALTER TABLE `tabla11`
MODIFY `ID_T11` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla12`
--
ALTER TABLE `tabla12`
MODIFY `ID_T12` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla13`
--
ALTER TABLE `tabla13`
MODIFY `ID_T13` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla14`
--
ALTER TABLE `tabla14`
MODIFY `ID_T14` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla15`
--
ALTER TABLE `tabla15`
MODIFY `ID_T15` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tabla16`
--
ALTER TABLE `tabla16`
MODIFY `ID_T16` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `authassignment`
--
ALTER TABLE `authassignment`
ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `authitemchild`
--
ALTER TABLE `authitemchild`
ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cursa`
--
ALTER TABLE `cursa`
ADD CONSTRAINT `cursa_ibfk_1` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cursa_ibfk_2` FOREIGN KEY (`ID_C`) REFERENCES `curso` (`ID_C`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imparte`
--
ALTER TABLE `imparte`
ADD CONSTRAINT `imparte_ibfk_1` FOREIGN KEY (`RUT_P`) REFERENCES `profesor` (`RUT_P`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `imparte_ibfk_2` FOREIGN KEY (`ID_C`) REFERENCES `curso` (`ID_C`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla1`
--
ALTER TABLE `tabla1`
ADD CONSTRAINT `tabla1_ibfk_1` FOREIGN KEY (`ID_cursa`) REFERENCES `cursa` (`ID`),
ADD CONSTRAINT `tabla1_ibfk_2` FOREIGN KEY (`ID_cursa`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla1_ibfk_3` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla2`
--
ALTER TABLE `tabla2`
ADD CONSTRAINT `tabla2_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla2_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla3`
--
ALTER TABLE `tabla3`
ADD CONSTRAINT `tabla3_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla3_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla4`
--
ALTER TABLE `tabla4`
ADD CONSTRAINT `tabla4_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla4_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla5`
--
ALTER TABLE `tabla5`
ADD CONSTRAINT `tabla5_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla5_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla6`
--
ALTER TABLE `tabla6`
ADD CONSTRAINT `tabla6_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla6_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla7`
--
ALTER TABLE `tabla7`
ADD CONSTRAINT `tabla7_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla7_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla8`
--
ALTER TABLE `tabla8`
ADD CONSTRAINT `tabla8_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla8_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla9`
--
ALTER TABLE `tabla9`
ADD CONSTRAINT `tabla9_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla9_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla10`
--
ALTER TABLE `tabla10`
ADD CONSTRAINT `tabla10_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla10_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla11`
--
ALTER TABLE `tabla11`
ADD CONSTRAINT `tabla11_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla11_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla12`
--
ALTER TABLE `tabla12`
ADD CONSTRAINT `tabla12_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla12_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla13`
--
ALTER TABLE `tabla13`
ADD CONSTRAINT `tabla13_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla13_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla14`
--
ALTER TABLE `tabla14`
ADD CONSTRAINT `tabla14_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla14_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla15`
--
ALTER TABLE `tabla15`
ADD CONSTRAINT `tabla15_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla15_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tabla16`
--
ALTER TABLE `tabla16`
ADD CONSTRAINT `tabla16_ibfk_1` FOREIGN KEY (`ID_CURSA`) REFERENCES `cursa` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tabla16_ibfk_2` FOREIGN KEY (`RUT_A`) REFERENCES `alumno` (`RUT_A`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
