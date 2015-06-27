-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2015 a las 23:34:25
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `matrix`
--
CREATE DATABASE IF NOT EXISTS `matrix` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `matrix`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE IF NOT EXISTS `carrera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigoCarrera` varchar(45) NOT NULL,
  `nombreCarrera` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `codigoCarrera`, `nombreCarrera`) VALUES
(7, 'IE', 'Informática Empresarial'),
(8, 'OC', 'Otra Carrera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(10) NOT NULL,
  `nombre_curso` varchar(45) NOT NULL,
  `creditos` int(11) NOT NULL,
  `carrera_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_curso_Carrera1_idx` (`carrera_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `sigla`, `nombre_curso`, `creditos`, `carrera_id`) VALUES
(13, 'IF100', 'Introduccion a Informatica', 4, 7),
(14, 'IF200', 'Programacion I', 4, 7),
(15, 'IF300', 'Programacion II', 4, 7),
(16, 'CSR', 'Curso Sin Requisitos', 1, 7),
(17, 'COC', 'Curso Otra Carrera', 1, 8),
(18, 'CSG', 'Curso Sin Grupo', 1, 7),
(19, 'CC1', 'Curso Corequisito', 1, 7),
(20, 'CC2', 'Curso Corequisito2', 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_corequisito`
--

DROP TABLE IF EXISTS `curso_corequisito`;
CREATE TABLE IF NOT EXISTS `curso_corequisito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso_id` int(11) DEFAULT NULL,
  `corequisito_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_curso_has_curso_curso4_idx` (`corequisito_id`),
  KEY `fk_curso_has_curso_curso3_idx` (`curso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `curso_corequisito`
--

INSERT INTO `curso_corequisito` (`id`, `curso_id`, `corequisito_id`) VALUES
(1, 19, 20),
(2, 20, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_requisito`
--

DROP TABLE IF EXISTS `curso_requisito`;
CREATE TABLE IF NOT EXISTS `curso_requisito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso_id` int(11) DEFAULT NULL,
  `requisito_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_curso_has_curso_curso2_idx` (`requisito_id`),
  KEY `fk_curso_has_curso_curso1_idx` (`curso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `curso_requisito`
--

INSERT INTO `curso_requisito` (`id`, `curso_id`, `requisito_id`) VALUES
(5, 15, 14),
(6, 14, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_grupo`
--

DROP TABLE IF EXISTS `estudiante_grupo`;
CREATE TABLE IF NOT EXISTS `estudiante_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  `nota` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_has_grupo_grupo1_idx` (`grupo_id`),
  KEY `fk_usuario_has_grupo_usuario1_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `estudiante_grupo`
--

INSERT INTO `estudiante_grupo` (`id`, `usuario_id`, `grupo_id`, `nota`) VALUES
(4, 12, 11, 100),
(5, 12, 12, 50),
(29, 12, 12, 70),
(30, 12, 12, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso_id` int(11) DEFAULT NULL,
  `numeroGrupo` int(11) NOT NULL,
  `profesor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_grupo_curso1_idx` (`curso_id`),
  KEY `fk_grupo_usuario1_idx` (`profesor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `curso_id`, `numeroGrupo`, `profesor_id`) VALUES
(11, 13, 1, 14),
(12, 14, 1, 14),
(13, 15, 1, 14),
(14, 16, 1, 14),
(15, 17, 1, 15),
(16, 13, 2, 14),
(17, 14, 2, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

DROP TABLE IF EXISTS `horario`;
CREATE TABLE IF NOT EXISTS `horario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dia` enum('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo') NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `dia`, `horaInicio`, `horaFin`) VALUES
(11, 'Lunes', '08:00:00', '11:00:00'),
(12, 'Lunes', '13:00:00', '16:00:00'),
(13, 'Viernes', '13:00:00', '16:00:00'),
(14, 'Martes', '08:00:00', '11:00:00'),
(15, 'Miércoles', '13:00:00', '16:00:00'),
(16, 'Jueves', '13:00:00', '19:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_grupo`
--

DROP TABLE IF EXISTS `horario_grupo`;
CREATE TABLE IF NOT EXISTS `horario_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `horario_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_horario_has_grupo_grupo1_idx` (`grupo_id`),
  KEY `fk_horario_has_grupo_horario1_idx` (`horario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `horario_grupo`
--

INSERT INTO `horario_grupo` (`id`, `horario_id`, `grupo_id`) VALUES
(10, 14, 11),
(11, 16, 11),
(12, 12, 16),
(13, 11, 12),
(14, 14, 12),
(15, 13, 12),
(16, 16, 17),
(17, 14, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(12) NOT NULL,
  `contrasena` varchar(14) NOT NULL,
  `rol` enum('Administrador','Profesor','Estudiante') NOT NULL,
  `nombreCompleto` varchar(45) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `carne` varchar(7) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `direccion` longtext,
  `carrera_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  KEY `fk_usuario_Carrera1_idx` (`carrera_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`, `rol`, `nombreCompleto`, `cedula`, `carne`, `telefono`, `direccion`, `carrera_id`) VALUES
(9, 'Administrado', '123', 'Administrador', 'admin', '123', '123', '123', '123', 8),
(12, 'Estudiante I', '123', 'Estudiante', 'Estudiante Info', '456', '123', '123', '123', 7),
(13, 'Estudiante O', '123', 'Estudiante', 'Estudiante Otra', '789', '123', '123', '123', 8),
(14, 'Profesor I', '123', 'Profesor', 'Profesor Info', '321', '123', '123', '123', 7),
(15, 'Profesor O', '123', 'Profesor', 'Profesor Otra', '654', '123', '123', '123', 8);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_curso_Carrera1` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_corequisito`
--
ALTER TABLE `curso_corequisito`
  ADD CONSTRAINT `fk_curso_has_curso_curso3` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_curso_has_curso_curso4` FOREIGN KEY (`corequisito_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_requisito`
--
ALTER TABLE `curso_requisito`
  ADD CONSTRAINT `fk_curso_has_curso_curso1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_curso_has_curso_curso2` FOREIGN KEY (`requisito_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudiante_grupo`
--
ALTER TABLE `estudiante_grupo`
  ADD CONSTRAINT `fk_usuario_has_grupo_grupo1` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_grupo_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `fk_grupo_curso1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_usuario1` FOREIGN KEY (`profesor_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horario_grupo`
--
ALTER TABLE `horario_grupo`
  ADD CONSTRAINT `fk_horario_has_grupo_grupo1` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horario_has_grupo_horario1` FOREIGN KEY (`horario_id`) REFERENCES `horario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_Carrera1` FOREIGN KEY (`carrera_id`) REFERENCES `carrera` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
