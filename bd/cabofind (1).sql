-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-12-2018 a las 02:43:14
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cabofind`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--
create database cabofind;
use cabofind;
CREATE TABLE IF NOT EXISTS `categorias` (
  `ID_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_NOMBRE` varchar(30) DEFAULT NULL,
  `ID_RAMO` int(11) DEFAULT NULL,
  `CAT_ESTATUS` varchar(2) DEFAULT NULL,
  `CAT_URL` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_CATEGORIA`),
  KEY `ID_RAMO_idx` (`ID_RAMO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID_CATEGORIA`, `CAT_NOMBRE`, `ID_RAMO`, `CAT_ESTATUS`, `CAT_URL`) VALUES
(1, 'Restaurantes', 1, 'A', 'restaurantes_category.php'),
(2, 'Cafeterías', 1, 'A', 'cafeterias_category.php'),
(3, 'Comida rápida', 1, 'A', ''),
(4, 'Postres', 1, 'A', ''),
(5, 'Snacks', 1, 'D', ''),
(6, 'Reparación', 2, 'A', 'servicios_reparacion.php'),
(7, 'Instalación', 2, 'A', 'servicios_instalacion.php'),
(8, 'Médicos', 2, 'A', 'servicios_medicos.php'),
(9, 'Transporte', 2, 'A', 'servicios_transporte.php'),
(10, 'Renta de salones', 2, 'A', 'servicios_renta_salones.php'),
(15, 'Tiendas de ropa', 3, 'A', 'comercios_tiendas_ropa.php'),
(16, 'Boutiques', 3, 'A', 'comercios_boutiques.php'),
(17, 'Zapaterías', 3, 'A', 'comercios_zapaterias.php'),
(18, 'Antros', 4, 'A', 'party_antros.php'),
(19, 'Bares', 4, 'A', 'party_bares.php'),
(20, 'Billares', 4, 'A', 'party_billares.php'),
(21, 'Conciertos', 5, 'A', 'ocio_conciertos.php'),
(22, 'Teatro', 5, 'A', 'ocio_teagtro.php'),
(23, 'Tours', 5, 'A', 'ocio_tours.php'),
(24, 'Teatro', 5, 'A', 'ocio_teatro.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exposicion`
--

CREATE TABLE IF NOT EXISTS `exposicion` (
  `ID_EXPOSICION` int(11) NOT NULL AUTO_INCREMENT,
  `EXP_NIVEL` varchar(25) NOT NULL,
  `EXP_FECHA_ALTA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EXP_FECHA_CADUCIDAD` varchar(25) NOT NULL,
  `ID_NEGOCIO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_EXPOSICION`),
  KEY `ID_NEGOCIO` (`ID_NEGOCIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `exposicion`
--

INSERT INTO `exposicion` (`ID_EXPOSICION`, `EXP_NIVEL`, `EXP_FECHA_ALTA`, `EXP_FECHA_CADUCIDAD`, `ID_NEGOCIO`) VALUES
(1, 'Alta', '2018-12-16 00:19:09', '2019-3-15 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `ID_GALERIA` int(11) NOT NULL AUTO_INCREMENT,
  `GAL_FOTO` varchar(255) DEFAULT NULL,
  `GAL_TITULO` varchar(45) DEFAULT NULL,
  `ID_NEGOCIO` int(11) DEFAULT NULL,
  `GAL_ESTATUS` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID_GALERIA`),
  KEY `ID_NEGOCIO_idx` (`ID_NEGOCIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios`
--

CREATE TABLE IF NOT EXISTS `negocios` (
  `ID_NEGOCIO` int(11) NOT NULL AUTO_INCREMENT,
  `NEG_NOMBRE` varchar(50) DEFAULT NULL,
  `NEG_RAZONSOCIAL` varchar(45) DEFAULT NULL,
  `NEG_RFC` varchar(45) DEFAULT NULL,
  `NEG_DIRECCION` varchar(80) DEFAULT NULL,
  `NEG_DESCRIPCION` varchar(255) DEFAULT NULL,
  `NEG_RESPONSABLE` varchar(45) DEFAULT NULL,
  `ID_SUBCATEGORIA` int(11) DEFAULT NULL,
  `NEG_ESTATUS` varchar(2) DEFAULT NULL,
  `NEG_ETIQUETAS` varchar(100) NOT NULL,
  `NEG_FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_NEGOCIO`),
  KEY `ID_SUBCATEGORIA_idx` (`ID_SUBCATEGORIA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `negocios`
--

INSERT INTO `negocios` (`ID_NEGOCIO`, `NEG_NOMBRE`, `NEG_RAZONSOCIAL`, `NEG_RFC`, `NEG_DIRECCION`, `NEG_DESCRIPCION`, `NEG_RESPONSABLE`, `ID_SUBCATEGORIA`, `NEG_ESTATUS`, `NEG_ETIQUETAS`, `NEG_FECHA`) VALUES
(1, 'Zeus', 'asdasd', 'ajsdkasjdlk', 'Zona centro asas dasda sda', 'fuefuefeufuezoas', 'Pedro', 1, 'A', 'taller,tv, reparacion,compra de tv, pantallas rotas', '0000-00-00 00:00:00'),
(2, 'AudioCar', 'd1d11', '12d1', 'd12d1d', 'd12d', 'Karla Mendez', 3, 'A', 'sonido estereo, autos, bocinas', '2018-12-15 07:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramos`
--

CREATE TABLE IF NOT EXISTS `ramos` (
  `ID_RAMO` int(11) NOT NULL AUTO_INCREMENT,
  `RAM_NOMBRE` varchar(45) DEFAULT NULL,
  `ESTATUS` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID_RAMO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `ramos`
--

INSERT INTO `ramos` (`ID_RAMO`, `RAM_NOMBRE`, `ESTATUS`) VALUES
(1, '¿Donde comer?', 'A'),
(2, 'Servicios', 'A'),
(3, 'Comercios', 'A'),
(4, 'Party night', 'A'),
(5, 'Ocio', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenas`
--

CREATE TABLE IF NOT EXISTS `resenas` (
  `ID_RESENA` int(11) NOT NULL AUTO_INCREMENT,
  `RES_RESENA` varchar(255) DEFAULT NULL,
  `RES_CALIFICACION` int(11) DEFAULT NULL,
  `RES_FOTO` varchar(255) DEFAULT NULL,
  `RES_ID_NEGOCIO` int(11) DEFAULT NULL,
  `RES_ID_USUARIO` int(11) DEFAULT NULL,
  `RES_ESTATUS` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID_RESENA`),
  KEY `RES_ID_NEGOCIO_idx` (`RES_ID_NEGOCIO`),
  KEY `RES_ID_USUARIO_idx` (`RES_ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE IF NOT EXISTS `subcategoria` (
  `ID_SUBCATEGORIA` int(11) NOT NULL AUTO_INCREMENT,
  `SUB_NOMBRE` varchar(30) DEFAULT NULL,
  `ID_CATEGORIA` int(11) DEFAULT NULL,
  `SUB_ESTATUS` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID_SUBCATEGORIA`),
  KEY `ID_CATEGORIA_idx` (`ID_CATEGORIA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`ID_SUBCATEGORIA`, `SUB_NOMBRE`, `ID_CATEGORIA`, `SUB_ESTATUS`) VALUES
(1, 'Reparacion de televisiones', 6, 'A'),
(2, 'Taller mecánico', 6, 'A'),
(3, 'Instalacion Autoestereos', 7, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `USU_NOMBRE` varchar(35) DEFAULT NULL,
  `USU_APATERNO` varchar(35) DEFAULT NULL,
  `USU_AMATERNO` varchar(35) DEFAULT NULL,
  `USU_USUARIO` varchar(25) DEFAULT NULL,
  `USU_CONTRA` varchar(25) DEFAULT NULL,
  `USU_CORREO` varchar(35) DEFAULT NULL,
  `USU_CELULAR` varchar(15) DEFAULT NULL,
  `USU_FOTOPERFIL` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `ID_RAMO` FOREIGN KEY (`ID_RAMO`) REFERENCES `ramos` (`ID_RAMO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `exposicion`
--
ALTER TABLE `exposicion`
  ADD CONSTRAINT `exposicion_ibfk_1` FOREIGN KEY (`ID_NEGOCIO`) REFERENCES `negocios` (`ID_NEGOCIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `ID_NEGOCIO` FOREIGN KEY (`ID_NEGOCIO`) REFERENCES `negocios` (`ID_NEGOCIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `negocios`
--
ALTER TABLE `negocios`
  ADD CONSTRAINT `ID_SUBCATEGORIA` FOREIGN KEY (`ID_SUBCATEGORIA`) REFERENCES `subcategoria` (`ID_SUBCATEGORIA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `resenas`
--
ALTER TABLE `resenas`
  ADD CONSTRAINT `RES_ID_NEGOCIO` FOREIGN KEY (`RES_ID_NEGOCIO`) REFERENCES `negocios` (`ID_NEGOCIO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `RES_ID_USUARIO` FOREIGN KEY (`RES_ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `ID_CATEGORIA` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categorias` (`ID_CATEGORIA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
