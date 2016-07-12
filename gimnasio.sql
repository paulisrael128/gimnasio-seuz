-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2016 a las 03:39:15
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gimnasio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` varchar(10) NOT NULL DEFAULT '',
  `nombre` varchar(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sucursal` varchar(20) NOT NULL,
  `alergias` varchar(20) NOT NULL,
  `enfermedades` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `estado` varchar(50) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula`, `nombre`, `fechaNacimiento`, `sucursal`, `alergias`, `enfermedades`, `genero`, `estado`) VALUES
('0506667891', 'maria', '1994-05-03', 'Latacunga', 'ninguna', 'ninguna', 'Femenino', 'Activo'),
('0987654321', 'Mercedes Pacheco', '1991-01-30', 'BaÃ±os', 'Ninguna', 'Ninguna', 'Femenino', 'Pasivo'),
('1234567890', 'Marco Lopez', '1993-03-04', 'Ambato', 'Ninguna', 'Ninguna', 'Femenino', 'Activo'),
('1236547895', 'Juan', '1992-05-05', 'Ambato', 'Ninguna', 'Ninguna', 'Masculino', 'Activo'),
('1722660121', 'paul', '1994-05-30', 'Latacunga', 'abejas', 'ninguna', 'Masculino', 'Activo'),
('ded', '', '0000-00-00', 'Ambato', '', '', 'Femenino', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre2` varchar(20) NOT NULL,
  `costo` int(11) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contrata` (`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `disciplina`
--

INSERT INTO `disciplina` (`id`, `nombre2`, `costo`, `cedula`) VALUES
(3, 'SISTEMA ABE', 20, '0506667891'),
(4, 'G.A.P', 20, '0506667891'),
(5, 'G.A.P', 20, '0506667891'),
(6, 'SISTEMA ABE', 20, '1234567890'),
(7, 'PILATES', 20, '0987654321'),
(9, 'FULL CONTACT', 20, '1234567890'),
(11, 'PILATES', 20, '1234567890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL DEFAULT '0',
  `pasadmin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `pasadmin`, `password`, `user`, `email`) VALUES
(0, 'paul', '12', 'dwa', ''),
(1, '1234', '', 'admin', 'admin@gmail.com'),
(2, '', '12345', 'Luis', 'luis@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE IF NOT EXISTS `pago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `pagoMensual` varchar(25) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `realiza` (`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `fecha`, `pagoMensual`, `cedula`) VALUES
(1, '2016-05-05', '', '1234567890'),
(2, '2016-05-05', '', '1234567890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `cedula` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `realizan` (`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `fecha`, `hora`, `cedula`) VALUES
(2, '2016-05-11', '22:22:00', '0506667891'),
(3, '2016-05-05', '11:11:00', '0506667891'),
(4, '2016-05-12', '03:03:00', '0506667891'),
(16, '2016-05-28', '00:00:17', '0506667891'),
(19, '2016-05-31', '00:00:21', '1722660121'),
(20, '2016-06-07', '00:00:16', '1722660121'),
(21, '2016-06-08', '00:00:17', '0987654321'),
(22, '2016-06-08', '00:00:17', '1722660121');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `disciplina`
--
ALTER TABLE `disciplina`
  ADD CONSTRAINT `contrata` FOREIGN KEY (`cedula`) REFERENCES `cliente` (`cedula`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `cancela` FOREIGN KEY (`cedula`) REFERENCES `cliente` (`cedula`),
  ADD CONSTRAINT `realiza` FOREIGN KEY (`cedula`) REFERENCES `cliente` (`cedula`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `realizan` FOREIGN KEY (`cedula`) REFERENCES `cliente` (`cedula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
