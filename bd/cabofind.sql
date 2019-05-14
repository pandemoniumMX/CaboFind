-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-05-2019 a las 17:42:49
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cabofind`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `ID_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_NOMBRE` varchar(30) DEFAULT NULL,
  `ID_RAMO` int(11) DEFAULT NULL,
  `CAT_ESTATUS` varchar(2) DEFAULT NULL,
  `CAT_URL` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_CATEGORIA`),
  KEY `ID_RAMO_idx` (`ID_RAMO`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID_CATEGORIA`, `CAT_NOMBRE`, `ID_RAMO`, `CAT_ESTATUS`, `CAT_URL`) VALUES
(1, 'Mexican', 1, 'A', 'restaurantes_mex.php'),
(2, 'Italian', 1, 'A', 'restaurantes_ita.php'),
(3, 'Japanese', 1, 'A', 'restaurantes_jap.php'),
(4, 'Chinese', 1, 'A', 'restaurantes_chi.php'),
(5, 'Fast food', 1, 'A', 'restaurantes_fas.php'),
(6, 'Sea food', 1, 'A', 'restaurantes_sea.php'),
(7, 'Cafeteria', 1, 'A', 'restaurantes_caf.php'),
(8, 'Snacks', 1, 'A', 'restaurantes_sna.php'),
(9, 'Theater', 5, 'A', 'freetime_theater.php'),
(10, 'Music events', 5, 'A', 'freetime_music.php'),
(11, 'Actividades', 5, 'A', 'freetime_act.php'),
(12, 'SportBars', 4, 'A', 'bars_sport.php'),
(13, 'Rockbars', 4, 'A', 'bars_rock.php'),
(14, 'Terrace', 4, 'A', 'bars_terrace.php'),
(15, 'Nightclubs', 4, 'A', 'bars_night.php'),
(16, 'Bar restaurant', 4, 'A', 'bars_res.php'),
(17, 'Ladies night', 4, 'A', 'bars_lady.php'),
(18, 'Clothes', 3, 'A', 'shopping_clot.php'),
(19, 'Pharmacy', 3, 'A', 'shopping_pha.php'),
(20, 'Jewelry', 3, 'A', 'shopping_jew.php'),
(21, 'Supermarket', 3, 'A', 'shopping_sup.php'),
(22, 'Autoparts', 3, 'A', 'shopping_auto.php'),
(23, 'Medics', 2, 'A', 'services_med.php'),
(24, 'Technical ', 2, 'A', 'services_tech.php'),
(25, 'Workshop', 2, 'A', 'services_wor.php'),
(26, 'Transport', 2, 'A', 'services_tra.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exposicion`
--

DROP TABLE IF EXISTS `exposicion`;
CREATE TABLE IF NOT EXISTS `exposicion` (
  `ID_EXPOSICION` int(11) NOT NULL AUTO_INCREMENT,
  `EXP_NIVEL` varchar(25) NOT NULL,
  `EXP_FECHA_ALTA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EXP_FECHA_CADUCIDAD` varchar(25) NOT NULL,
  `ID_NEGOCIO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_EXPOSICION`),
  KEY `ID_NEGOCIO` (`ID_NEGOCIO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `exposicion`
--

INSERT INTO `exposicion` (`ID_EXPOSICION`, `EXP_NIVEL`, `EXP_FECHA_ALTA`, `EXP_FECHA_CADUCIDAD`, `ID_NEGOCIO`) VALUES
(1, 'Alta', '2018-12-16 00:19:09', '2019-3-15 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `ID_GALERIA` int(11) NOT NULL AUTO_INCREMENT,
  `GAL_FOTO` varchar(255) DEFAULT NULL,
  `GAL_TITULO` varchar(45) DEFAULT NULL,
  `ID_NEGOCIO` int(11) DEFAULT NULL,
  `GAL_ESTATUS` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID_GALERIA`),
  KEY `ID_NEGOCIO_idx` (`ID_NEGOCIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios`
--

DROP TABLE IF EXISTS `negocios`;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `ramos`;
CREATE TABLE IF NOT EXISTS `ramos` (
  `ID_RAMO` int(11) NOT NULL AUTO_INCREMENT,
  `RAM_NOMBRE` varchar(45) DEFAULT NULL,
  `ESTATUS` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID_RAMO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ramos`
--

INSERT INTO `ramos` (`ID_RAMO`, `RAM_NOMBRE`, `ESTATUS`) VALUES
(1, 'Restaurantes', 'A'),
(2, 'Servicios', 'A'),
(3, 'Shopping', 'A'),
(4, 'Bars', 'A'),
(5, '¿Que hacer?', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenas`
--

DROP TABLE IF EXISTS `resenas`;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

DROP TABLE IF EXISTS `subcategoria`;
CREATE TABLE IF NOT EXISTS `subcategoria` (
  `ID_SUBCATEGORIA` int(11) NOT NULL AUTO_INCREMENT,
  `SUB_NOMBRE` varchar(30) DEFAULT NULL,
  `ID_CATEGORIA` int(11) DEFAULT NULL,
  `SUB_ESTATUS` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID_SUBCATEGORIA`),
  KEY `ID_CATEGORIA_idx` (`ID_CATEGORIA`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`ID_SUBCATEGORIA`, `SUB_NOMBRE`, `ID_CATEGORIA`, `SUB_ESTATUS`) VALUES
(1, ' Water activities', 11, 'A'),
(2, ' Ground activities', 11, 'A'),
(3, 'Air activities', 11, 'A'),
(4, 'Sport', 18, 'A'),
(5, 'Accessories', 18, 'A'),
(6, 'Boutique', 18, 'A'),
(7, 'Hospital public', 23, 'A'),
(8, 'Hospital private', 23, 'A'),
(9, 'Pharmacy', 23, 'A'),
(10, 'Specialties', 23, 'A'),
(11, 'Computers', 24, 'A'),
(12, 'Televisions', 24, 'A'),
(13, 'Audio', 24, 'A'),
(14, 'Vulcanizer', 25, 'A'),
(15, 'General services', 25, 'A'),
(16, ' Body specialty', 25, 'A'),
(17, 'Public', 26, 'A'),
(18, 'Taxy', 26, 'A'),
(19, 'Rent car', 26, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
