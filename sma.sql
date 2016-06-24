-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2016 a las 06:32:46
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administracion`
--

CREATE TABLE IF NOT EXISTS `administracion` (
`id_administracion` int(11) NOT NULL,
  `tipo_de_escrito` int(11) NOT NULL,
  `seguimiento` varchar(1000) NOT NULL,
  `remitente` varchar(1000) NOT NULL,
  `cargo` varchar(1000) NOT NULL,
  `destinatario` varchar(1000) NOT NULL,
  `asunto` varchar(1000) NOT NULL,
  `id_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_eventos`
--

CREATE TABLE IF NOT EXISTS `agenda_eventos` (
`id_agenda_eventos` int(11) NOT NULL,
  `fecha_de_evento` date NOT NULL,
  `calle_y_numero` varchar(500) NOT NULL,
  `hora` time NOT NULL,
  `municipio` int(11) NOT NULL,
  `asistentes_aproximados` int(11) NOT NULL,
  `tipo_de_evento` int(11) NOT NULL,
  `nombre_evento` varchar(700) NOT NULL,
  `descripcion_evento` varchar(1000) NOT NULL,
  `remitente` varchar(100) NOT NULL,
  `cargo` varchar(200) NOT NULL,
  `telefono_contacto` varchar(10) NOT NULL,
  `colonia_evento` int(11) NOT NULL,
  `colonia_otro` varchar(100) NOT NULL,
  `id_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audiencias`
--

CREATE TABLE IF NOT EXISTS `audiencias` (
`id_audiencia` int(11) NOT NULL,
  `asunto_de_audiencia` varchar(500) NOT NULL,
  `fecha_audiencia` date NOT NULL,
  `seguimiento` varchar(1000) NOT NULL,
  `id_datos_generales` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `audiencias`
--

INSERT INTO `audiencias` (`id_audiencia`, `asunto_de_audiencia`, `fecha_audiencia`, `seguimiento`, `id_datos_generales`) VALUES
(1, 'NECESITA ALGO', '2016-06-22', 'GIRAR AL PARTICULAR', 18),
(2, 'SADASD', '2016-06-21', 'SADASD', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_generales`
--

CREATE TABLE IF NOT EXISTS `datos_generales` (
`id_datos_generales` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `ap_paterno` varchar(200) NOT NULL,
  `ap_materno` varchar(200) NOT NULL,
  `cargo` varchar(300) NOT NULL,
  `tel_celular` varchar(10) NOT NULL,
  `tel_casa` varchar(10) NOT NULL,
  `calle_y_numero` varchar(10) NOT NULL,
  `colonia` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_generales`
--

INSERT INTO `datos_generales` (`id_datos_generales`, `nombre`, `ap_paterno`, `ap_materno`, `cargo`, `tel_celular`, `tel_casa`, `calle_y_numero`, `colonia`) VALUES
(1, 'Carlos', 'Cadena', 'Espinosa', 'Nadie', '7225859981', '7222168129', 'Hacienda 4', 13),
(2, 'JONATHAN', 'CADENA', 'ESPINOSA', 'DDT', '7222585998', '7222168129', 'HACIENDA 4', 6),
(3, 'JONATHAN', 'CADENA', 'ESPINOSA', 'DDT', '7222585998', '7222168129', 'HACIENDA 4', 6),
(4, 'CAROLINA', 'MIRANDA', 'ARIZMENDI', 'DDT', '7225859981', '7222168129', 'HACIENDA 4', 5),
(5, 'GISSEL', 'MIRANDA', 'ARIZMEND', 'ESTUDIANTE', '7225859981', '7222168129', 'HACIENDA 4', 15),
(6, 'GISSEL', 'MIRANDA', 'ARIZMEND', 'ESTUDIANTE', '7225859981', '7222168129', 'HACIENDA 4', 15),
(7, 'sadasd', 'sadasd', 'sdasd', 'asdadsa', '7225859981', '7222585998', 'sdasd', 18),
(8, 'asdasd', 'sadasd', 'sadasda', 'dasdasd', '7222585998', '7225859981', 'asdsad', 10),
(9, 'sadasdasd', 'sadasda', 'sdasdas', 'sadasd', '7225859981', '7225859881', 'sdasd', 15),
(10, 'ALEJANDRA', 'CADENA', 'SANCHEZ', 'NO TIENE', '7225859981', '7225859981', 'ADSAD', 18),
(11, 'SFDASDASD', 'SDSDAD', 'DASFD', 'SADASDAS', '7225859981', '7225859981', 'SADSAD', 18),
(12, 'dasdasd', 'asdasd', 'wadsada', 'dsasdas', '7225859981', '7222168129', 'sda', 2),
(13, 'sadasdasd', 'asdasda', 'sadasdsad', 'asdasdsad', '7225859981', '7225859981', 'sdsad', 2),
(14, 'sadasd', 'sadasdasfd', 'asfasfsa', 'asfsaf', '11111', '11111', 'sadadas', 7),
(15, 'sadasdasd', 'sdadafds', 'dfsddsfadb', 'asdasdasd', '722585981', '722216812', 'asdasdasd', 2),
(16, 'sadasd', 'sdsadad', 'daadsf', 'asdasdas', '2222', '2222', 'sadasdasd', 2),
(17, 'sadasdasd', 'adasdA', 'FDASFA', 'ASDASD', '7225859981', '7222168129', 'ADSD', 15),
(18, 'JUAN MANUEL', 'PEDROZO', 'DIAZ', 'EX PRESI DIF', '7225859981', '', 'PORFIRIO D', 27),
(19, 'JUAN MANUEL', 'sadsdf', 'sadf', 'EXPRESI DIF', '7225859981', '7222168129', 'ADASD', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
`id_documento` int(11) NOT NULL,
  `fecha_documento` date NOT NULL,
  `tipo_documento` int(11) NOT NULL,
  `numero_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE IF NOT EXISTS `peticiones` (
`id_peticiones` int(11) NOT NULL,
  `tipo_de_peticion` int(11) DEFAULT NULL,
  `concepto` varchar(500) DEFAULT NULL,
  `unidad_de_medida` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `prioridad` int(11) DEFAULT NULL,
  `observaciones` varchar(700) DEFAULT NULL,
  `id_datos_generales` int(11) DEFAULT NULL,
  `id_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administracion`
--
ALTER TABLE `administracion`
 ADD PRIMARY KEY (`id_administracion`), ADD KEY `ref_administracion_documento` (`id_documento`);

--
-- Indices de la tabla `agenda_eventos`
--
ALTER TABLE `agenda_eventos`
 ADD PRIMARY KEY (`id_agenda_eventos`), ADD KEY `ref_agenda_eventos_documento` (`id_documento`);

--
-- Indices de la tabla `audiencias`
--
ALTER TABLE `audiencias`
 ADD PRIMARY KEY (`id_audiencia`), ADD KEY `ref_audiencias_datosgral` (`id_datos_generales`);

--
-- Indices de la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
 ADD PRIMARY KEY (`id_datos_generales`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
 ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `peticiones`
--
ALTER TABLE `peticiones`
 ADD PRIMARY KEY (`id_peticiones`), ADD KEY `ref_peticiones_documento` (`id_documento`), ADD KEY `ref_peticiones_datosgral` (`id_datos_generales`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administracion`
--
ALTER TABLE `administracion`
MODIFY `id_administracion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `agenda_eventos`
--
ALTER TABLE `agenda_eventos`
MODIFY `id_agenda_eventos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `audiencias`
--
ALTER TABLE `audiencias`
MODIFY `id_audiencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
MODIFY `id_datos_generales` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `peticiones`
--
ALTER TABLE `peticiones`
MODIFY `id_peticiones` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administracion`
--
ALTER TABLE `administracion`
ADD CONSTRAINT `ref_administracion_documento` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `agenda_eventos`
--
ALTER TABLE `agenda_eventos`
ADD CONSTRAINT `ref_agenda_eventos_documento` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `audiencias`
--
ALTER TABLE `audiencias`
ADD CONSTRAINT `ref_audiencias_datosgral` FOREIGN KEY (`id_datos_generales`) REFERENCES `datos_generales` (`id_datos_generales`) ON DELETE CASCADE;

--
-- Filtros para la tabla `peticiones`
--
ALTER TABLE `peticiones`
ADD CONSTRAINT `ref_peticiones_datosgral` FOREIGN KEY (`id_datos_generales`) REFERENCES `datos_generales` (`id_datos_generales`) ON DELETE CASCADE,
ADD CONSTRAINT `ref_peticiones_documento` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
