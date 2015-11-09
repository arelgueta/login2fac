-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2015 a las 13:12:51
-- Versión del servidor: 5.5.44-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `pass` char(40) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `token` char(16) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `user`, `pass`, `telefono`, `token`) VALUES
(1, 'atilio', 'a7755ed3c23a21a97b4896e31469cfa73b741019', '+542615973115', 'OQB6ZZGYHCPSX4AK'),
(2, 'otro', '7c4a8d09ca3762af61e59520943dc26494f8941b', '+542615973115', 'OQB6ZZGYHCPSX5AK'),
(3, 'pepe', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, 'OQB6ZZGYHCPSX5BU'),
(4, 'vuy', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, 'OQBYZZGYHGPSX5BM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
