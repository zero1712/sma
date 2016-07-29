-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2016 at 06:53 AM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma`
--

-- --------------------------------------------------------

--
-- Table structure for table `administracion`
--

CREATE TABLE `administracion` (
  `id_administracion` int(11) NOT NULL,
  `tipo_de_escrito` int(11) NOT NULL,
  `seguimiento` varchar(1000) NOT NULL,
  `remitente` varchar(1000) NOT NULL,
  `cargo` varchar(1000) NOT NULL,
  `dependencia` varchar(300) NOT NULL,
  `destinatario` varchar(1000) NOT NULL,
  `asunto` varchar(1000) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `fecha_entrada` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agenda_eventos`
--

CREATE TABLE `agenda_eventos` (
  `id_agenda_eventos` int(11) NOT NULL,
  `fecha_de_evento` date NOT NULL,
  `calle_y_numero` varchar(500) NOT NULL,
  `hora` time NOT NULL,
  `municipio` varchar(300) NOT NULL,
  `asistentes_aproximados` int(11) NOT NULL,
  `tipo_de_evento` int(11) NOT NULL,
  `nombre_evento` varchar(700) NOT NULL,
  `descripcion_evento` varchar(1000) NOT NULL,
  `remitente` varchar(100) NOT NULL,
  `cargo` varchar(200) NOT NULL,
  `dependencia` varchar(300) NOT NULL,
  `telefono_contacto` varchar(10) NOT NULL,
  `colonia_evento` varchar(500) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `fecha_entrada` datetime NOT NULL,
  `allDay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda_eventos`
--

INSERT INTO `agenda_eventos` (`id_agenda_eventos`, `fecha_de_evento`, `calle_y_numero`, `hora`, `municipio`, `asistentes_aproximados`, `tipo_de_evento`, `nombre_evento`, `descripcion_evento`, `remitente`, `cargo`, `dependencia`, `telefono_contacto`, `colonia_evento`, `id_documento`, `fecha_entrada`, `allDay`) VALUES
(1, '2016-07-12', 'HACIENDA 4 CIENEGAS 31', '23:30:00', 'METEPEC', 200, 1, 'CAMINATA A MARTE', 'LLEVAR TRAJE', 'JUAN MANUEL PEDROZO DIAZ', 'PRESIDENTE DIF METEPEC', 'DIF METEPEC', '7222168129', 'INFONAVIT SAN FRANCISCO', 4, '2016-07-12 07:21:29', 'false'),
(2, '2016-07-13', 'SADSAD', '11:55:00', 'San Mateo Atenco', 122, 1, 'CAPTURA POKEMON', 'SASFSA', 'JUAN MANUEL PEDROZO DIAZ', 'ENTRENADOR POKEMON MASTER', 'BUSCARV', '7225859981', 'San Pedro', 5, '2016-07-12 23:27:16', ''),
(3, '2016-07-19', 'LA MAGDALENA S/N', '07:50:00', 'San Mateo Atenco', 1000, 3, 'CONVIVIO POKEMON', 'ATRAPAR POKEMONS Y COMAN', 'ERICK CADENA', 'EL CHALAN', 'BUSCARV', '7225859981', 'San Pedro', 8, '2016-07-12 23:59:37', ''),
(4, '2016-07-25', 'SADASDAD', '09:30:00', 'San Mateo Atenco', 112412, 4, 'SDASDSDA', 'DASDASD', 'SADSAD', 'ASDSAD', 'SADSA', '7225859881', 'San Francisco', 9, '2016-07-13 00:10:53', ''),
(5, '2016-08-18', 'SADASDAD', '09:30:00', 'San Mateo Atenco', 112412, 2, 'SDASDSDA', 'DASDASD', 'SADSAD', 'ASDSAD', 'SADSA', '7225859881', 'San Francisco', 10, '2016-07-13 03:35:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `audiencias`
--

CREATE TABLE `audiencias` (
  `id_audiencia` int(11) NOT NULL,
  `asunto_de_audiencia` varchar(500) NOT NULL,
  `fecha_audiencia` date NOT NULL,
  `seguimiento` varchar(1000) NOT NULL,
  `id_datos_generales` int(11) NOT NULL,
  `fecha_entrada` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audiencias`
--

INSERT INTO `audiencias` (`id_audiencia`, `asunto_de_audiencia`, `fecha_audiencia`, `seguimiento`, `id_datos_generales`, `fecha_entrada`) VALUES
(1, '', '0000-00-00', '', 1, '2016-07-12 04:51:59'),
(2, '', '0000-00-00', '', 2, '2016-07-12 04:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `datos_generales`
--

CREATE TABLE `datos_generales` (
  `id_datos_generales` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `ap_paterno` varchar(200) NOT NULL,
  `ap_materno` varchar(200) NOT NULL,
  `cargo` varchar(300) NOT NULL,
  `tel_celular` varchar(10) NOT NULL,
  `tel_casa` varchar(10) NOT NULL,
  `calle_y_numero` varchar(500) NOT NULL,
  `colonia` varchar(300) NOT NULL,
  `municipio` varchar(300) NOT NULL,
  `fecha_entrada` datetime NOT NULL,
  `microfecha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datos_generales`
--

INSERT INTO `datos_generales` (`id_datos_generales`, `nombre`, `ap_paterno`, `ap_materno`, `cargo`, `tel_celular`, `tel_casa`, `calle_y_numero`, `colonia`, `municipio`, `fecha_entrada`, `microfecha`) VALUES
(1, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-12 04:51:59', ''),
(2, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-12 04:57:26', ''),
(3, 'ASDSAD', 'SADASD', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 06:11:00', ''),
(4, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 00:11:23', ''),
(5, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 00:12:24', ''),
(6, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 00:20:36', ''),
(7, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 00:20:36', ''),
(8, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 00:20:38', ''),
(9, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 00:20:39', ''),
(10, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 00:31:37', ''),
(11, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 00:53:43', 'microfecha'),
(12, '', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 00:55:25', 'microfecha'),
(13, 'Q', '', '', '', '', '', '', '0', 'San Mateo Atenco', '2016-07-22 00:58:22', '2016072200582276782100'),
(14, 'CARLOS', 'CADENA', 'ESPINOSA', 'DDT', '7225859981', '7222168129', 'HACIENDA 4 CIENEGAS', 'INFONAVIT SAN FRANCISCO', 'METEPEC', '2016-07-25 22:43:17', '2016072522431755591900');

-- --------------------------------------------------------

--
-- Table structure for table `documento`
--

CREATE TABLE `documento` (
  `id_documento` int(11) NOT NULL,
  `fecha_documento` date NOT NULL,
  `tipo_documento` int(11) NOT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `folio_documento` varchar(300) NOT NULL,
  `fecha_entrada` datetime NOT NULL,
  `microfecha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documento`
--

INSERT INTO `documento` (`id_documento`, `fecha_documento`, `tipo_documento`, `numero_documento`, `folio_documento`, `fecha_entrada`, `microfecha`) VALUES
(1, '0000-00-00', 1, '', '', '2016-07-12 04:59:00', ''),
(2, '0000-00-00', 1, '', '', '2016-07-12 04:59:12', ''),
(3, '0000-00-00', 1, '', '', '2016-07-12 04:59:18', ''),
(4, '2016-07-22', 1, '1', '1', '2016-07-12 07:21:29', ''),
(5, '2016-07-25', 1, '1', '1', '2016-07-12 23:27:15', ''),
(6, '0000-00-00', 1, '2', '2', '2016-07-12 23:58:21', ''),
(7, '0000-00-00', 1, '2', '2', '2016-07-12 23:58:26', ''),
(8, '2016-07-26', 1, '5', '5', '2016-07-12 23:59:37', ''),
(9, '2016-07-25', 1, '8', '8', '2016-07-13 00:10:51', ''),
(10, '2016-07-25', 1, '9', '9', '2016-07-13 03:35:12', ''),
(11, '0000-00-00', 3, '', '', '2016-07-22 05:47:26', ''),
(12, '0000-00-00', 3, '', '', '2016-07-22 06:10:26', ''),
(13, '2016-07-20', 3, 'WSSDSA', 'S', '2016-07-22 06:11:00', ''),
(14, '0000-00-00', 3, '', '', '2016-07-22 06:12:19', ''),
(15, '0000-00-00', 3, '', '', '2016-07-22 06:14:05', ''),
(16, '0000-00-00', 3, '', '', '2016-07-22 06:14:05', ''),
(17, '0000-00-00', 3, '', '', '2016-07-22 06:14:05', ''),
(18, '0000-00-00', 3, '', '', '2016-07-22 06:14:05', ''),
(19, '0000-00-00', 3, '', '', '2016-07-22 06:14:05', ''),
(20, '0000-00-00', 3, '', '', '2016-07-22 06:14:06', ''),
(21, '0000-00-00', 3, '', '', '2016-07-22 06:14:06', ''),
(22, '0000-00-00', 3, '', '', '2016-07-22 06:14:06', ''),
(23, '0000-00-00', 3, '', '', '2016-07-22 06:14:06', ''),
(24, '0000-00-00', 3, '', '', '2016-07-22 06:14:06', ''),
(25, '0000-00-00', 3, '', '', '2016-07-22 06:23:57', ''),
(26, '0000-00-00', 3, '', '', '2016-07-22 06:24:04', ''),
(27, '0000-00-00', 3, '', '', '2016-07-22 06:24:31', ''),
(28, '0000-00-00', 3, '', '', '2016-07-21 23:27:39', ''),
(29, '2016-07-22', 3, '', '', '2016-07-22 00:11:23', '2016072200112320683800'),
(30, '2016-07-22', 3, '', '', '2016-07-22 00:12:24', '2016072200122447572300'),
(31, '2016-07-22', 3, '', '', '2016-07-22 00:20:36', '2016072200203608286800'),
(32, '2016-07-22', 3, '', '', '2016-07-22 00:20:36', '2016072200203622515300'),
(33, '2016-07-22', 3, '', '', '2016-07-22 00:20:36', '2016072200203689094400'),
(34, '2016-07-22', 3, '', '', '2016-07-22 00:20:36', '2016072200203699478800'),
(35, '2016-07-18', 3, '1', '1', '2016-07-22 00:31:37', '2016072200313771312800'),
(36, '0000-00-00', 3, '1', '', '2016-07-22 00:49:38', '2016072200493858725600'),
(37, '0000-00-00', 3, '1', '', '2016-07-22 00:49:48', '2016072200494885990100'),
(38, '0000-00-00', 3, '1', '1', '2016-07-22 00:50:41', '2016072200504146256900'),
(39, '2016-07-12', 3, '', '', '2016-07-22 00:53:43', '2016072200534369953500'),
(40, '0000-00-00', 3, '1', '', '2016-07-22 00:54:00', '201607220054070014800'),
(41, '0000-00-00', 3, '1', '', '2016-07-22 00:55:25', '2016072200552531801400'),
(42, '2016-07-20', 3, '12', '1', '2016-07-22 00:58:22', '2016072200582262135100'),
(43, '2016-07-26', 3, '22', '22', '2016-07-25 22:43:17', '2016072522431741012500');

-- --------------------------------------------------------

--
-- Table structure for table `peticiones`
--

CREATE TABLE `peticiones` (
  `id_peticiones` int(11) NOT NULL,
  `tipo_de_peticion` int(11) DEFAULT NULL,
  `peticion` varchar(1000) NOT NULL,
  `concepto` varchar(500) DEFAULT NULL,
  `unidad_de_medida` varchar(300) DEFAULT NULL,
  `rubro` varchar(300) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `prioridad` int(11) DEFAULT NULL,
  `observaciones` varchar(700) DEFAULT NULL,
  `id_datos_generales` int(11) DEFAULT NULL,
  `id_documento` int(11) NOT NULL,
  `fecha_entrada` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peticiones`
--

INSERT INTO `peticiones` (`id_peticiones`, `tipo_de_peticion`, `peticion`, `concepto`, `unidad_de_medida`, `rubro`, `cantidad`, `prioridad`, `observaciones`, `id_datos_generales`, `id_documento`, `fecha_entrada`, `status`) VALUES
(1, 0, '', '', '', '0', 0, 0, '', 3, 13, '2016-07-22 06:11:00', 0),
(2, 0, '', '', '', '0', 0, 0, '', 4, 29, '2016-07-22 00:11:23', 0),
(3, 0, '', '', '', '0', 0, 0, '', 5, 30, '2016-07-22 00:12:24', 0),
(4, 0, '', '', '', '0', 0, 0, '', 6, 31, '2016-07-22 00:20:36', 0),
(5, 0, '', '', '', '0', 0, 0, '', 7, 32, '2016-07-22 00:20:36', 0),
(6, 0, '', '', '', '0', 0, 0, '', 8, 34, '2016-07-22 00:20:38', 0),
(7, 0, '', '', '', '0', 0, 0, '', 9, 33, '2016-07-22 00:20:39', 0),
(8, 0, '', '', '', '0', 0, 0, '', 10, 35, '2016-07-22 00:31:37', 0),
(9, 0, '', '', '', '0', 0, 0, '', 11, 39, '2016-07-22 00:53:43', 0),
(10, 0, '', '', '', '0', 0, 0, '', 12, 41, '2016-07-22 00:55:25', 0),
(11, 2, 'A', '', '', '0', 0, 1, 'A', 13, 42, '2016-07-22 00:58:22', 0),
(12, 1, 'ESTO ES UNA PRUEBA', 'PRUEBA', 'Pieza', 'Educación', 1, 1, 'NADA ES UNA PRUEBA', 14, 43, '2016-07-25 22:43:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `privilegio` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `password`, `privilegio`) VALUES
(1, 'test@buscarv.com.mx', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administracion`
--
ALTER TABLE `administracion`
  ADD PRIMARY KEY (`id_administracion`),
  ADD KEY `ref_administracion_documento` (`id_documento`);

--
-- Indexes for table `agenda_eventos`
--
ALTER TABLE `agenda_eventos`
  ADD PRIMARY KEY (`id_agenda_eventos`),
  ADD KEY `ref_agenda_eventos_documento` (`id_documento`);

--
-- Indexes for table `audiencias`
--
ALTER TABLE `audiencias`
  ADD PRIMARY KEY (`id_audiencia`),
  ADD KEY `ref_audiencias_datosgral` (`id_datos_generales`);

--
-- Indexes for table `datos_generales`
--
ALTER TABLE `datos_generales`
  ADD PRIMARY KEY (`id_datos_generales`);

--
-- Indexes for table `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indexes for table `peticiones`
--
ALTER TABLE `peticiones`
  ADD PRIMARY KEY (`id_peticiones`),
  ADD KEY `ref_peticiones_documento` (`id_documento`),
  ADD KEY `ref_peticiones_datosgral` (`id_datos_generales`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administracion`
--
ALTER TABLE `administracion`
  MODIFY `id_administracion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agenda_eventos`
--
ALTER TABLE `agenda_eventos`
  MODIFY `id_agenda_eventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `audiencias`
--
ALTER TABLE `audiencias`
  MODIFY `id_audiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `datos_generales`
--
ALTER TABLE `datos_generales`
  MODIFY `id_datos_generales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `peticiones`
--
ALTER TABLE `peticiones`
  MODIFY `id_peticiones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `administracion`
--
ALTER TABLE `administracion`
  ADD CONSTRAINT `ref_administracion_documento` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`) ON DELETE CASCADE;

--
-- Constraints for table `agenda_eventos`
--
ALTER TABLE `agenda_eventos`
  ADD CONSTRAINT `ref_agenda_eventos_documento` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`) ON DELETE CASCADE;

--
-- Constraints for table `audiencias`
--
ALTER TABLE `audiencias`
  ADD CONSTRAINT `ref_audiencias_datosgral` FOREIGN KEY (`id_datos_generales`) REFERENCES `datos_generales` (`id_datos_generales`) ON DELETE CASCADE;

--
-- Constraints for table `peticiones`
--
ALTER TABLE `peticiones`
  ADD CONSTRAINT `ref_peticiones_datosgral` FOREIGN KEY (`id_datos_generales`) REFERENCES `datos_generales` (`id_datos_generales`) ON DELETE CASCADE,
  ADD CONSTRAINT `ref_peticiones_documento` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
