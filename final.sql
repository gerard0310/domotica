-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2015 a las 07:39:13
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_usuario`
--

CREATE TABLE IF NOT EXISTS `casa_usuario` (
  `ID_CASA` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_HABITACION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion_pin`
--

CREATE TABLE IF NOT EXISTS `funcion_pin` (
  `ID_FUNCION` int(11) NOT NULL,
  `ID_PIN` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `HORA` time NOT NULL,
  `ESTADO` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE IF NOT EXISTS `habitacion` (
  `ID_HABITACION` int(11) NOT NULL,
  `ID_FUNCION` int(11) NOT NULL,
  `DESC_HABITACION` int(11) NOT NULL,
  `ESTADO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pin`
--

CREATE TABLE IF NOT EXISTS `pin` (
  `ID_PIN` int(11) NOT NULL,
  `DESC_PIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `ID_REGISTRO` int(11) NOT NULL,
  `NOMBRE` text NOT NULL,
  `APP` text NOT NULL,
  `APM` text NOT NULL,
  `EMAIL` text NOT NULL,
  `TELEFONO` text NOT NULL,
  `SEXO` enum('MASCULINO','FEMENINO','SIN ESPECIFICAR') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `ID_REPORTE` int(11) NOT NULL,
  `ID_HABITACION` int(11) NOT NULL,
  `HORA` time NOT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_REGISTRO` int(11) NOT NULL,
  `NOM_USU` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `ESTADO` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casa_usuario`
--
ALTER TABLE `casa_usuario`
  ADD PRIMARY KEY (`ID_CASA`);

--
-- Indices de la tabla `funcion_pin`
--
ALTER TABLE `funcion_pin`
  ADD PRIMARY KEY (`ID_FUNCION`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`ID_HABITACION`);

--
-- Indices de la tabla `pin`
--
ALTER TABLE `pin`
  ADD PRIMARY KEY (`ID_PIN`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID_REGISTRO`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`ID_REPORTE`),
  ADD KEY `ID_REPORTE` (`ID_REPORTE`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casa_usuario`
--
ALTER TABLE `casa_usuario`
  MODIFY `ID_CASA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `funcion_pin`
--
ALTER TABLE `funcion_pin`
  MODIFY `ID_FUNCION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `ID_HABITACION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pin`
--
ALTER TABLE `pin`
  MODIFY `ID_PIN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID_REGISTRO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `ID_REPORTE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
