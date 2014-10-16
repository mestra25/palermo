-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2014 a las 16:29:17
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `datasistemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `descripcion` varchar(250) NOT NULL,
  `id_categoria` int(20) NOT NULL AUTO_INCREMENT,
  `observacion` varchar(20) NOT NULL,
  `fcreado` varchar(20) NOT NULL,
  `fmodificado` varchar(20) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`descripcion`, `id_categoria`, `observacion`, `fcreado`, `fmodificado`) VALUES
('jn', 1, 'jn', 'jn', 'jnn'),
('descripcion ', 2, 'kn', 'kn', 'kn'),
('descripcion ', 3, 'kn', 'kn', 'kn'),
('descripcion ', 4, 'kn', 'kn', 'kn'),
('descripcion ', 5, 'kn', 'kn', 'kn'),
('', 6, '', '', ''),
('', 7, '', '', ''),
('', 8, '', '', ''),
('mk', 9, 'mk', 'mk', 'mk'),
('o', 10, 'o', 'o', 'o'),
('o', 11, 'o', '', 'o'),
('o', 12, 'o', '', 'o'),
('o', 13, 'o', 'o', 'o'),
('o', 14, 'o', '', 'o'),
('o', 15, 'o', '', 'o'),
('o', 16, 'o', '', 'o'),
('bb', 17, 'b', 'b', 'b'),
('bb', 18, 'b', 'b', 'b'),
('', 19, '', '', ''),
('', 20, '', '', ''),
('', 21, '', '', ''),
('', 22, '', '', ''),
('', 23, '', '', ''),
('j', 24, 'j', 'j', 'j'),
('j', 25, 'j', 'j', 'j');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula`, `nombre`, `apellido`, `celular`, `direccion`, `email`) VALUES
(0, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_inventario`
--

CREATE TABLE IF NOT EXISTS `movimiento_inventario` (
  `id_consecutivo` int(20) NOT NULL AUTO_INCREMENT,
  `tipo_movimiento` varchar(20) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `id_cliente` int(20) NOT NULL,
  `id_factura` int(20) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `valor` int(20) NOT NULL,
  `impuesto` int(20) NOT NULL,
  `valor_venta` int(20) NOT NULL,
  `reserva` int(20) NOT NULL,
  PRIMARY KEY (`id_consecutivo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(255) NOT NULL AUTO_INCREMENT,
  `nit` varchar(50) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `telefono` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL,
  `contac` varchar(50) NOT NULL,
  `replegal` varchar(50) NOT NULL,
  `cedRep` int(50) NOT NULL,
  `celRep` int(50) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nit`, `direccion`, `telefono`, `email`, `web`, `contac`, `replegal`, `cedRep`, `celRep`) VALUES
(1, 'diego', '', 0, '', '', '', '', 0, 0),
(2, 'diego', 'caracoli', 567, 'kmkm', 'km', 'km', 'km', 0, 0),
(3, 'diego', 'caracoli', 567, 'kmkm', 'km', 'km', 'km', 90, 909),
(4, '2345678', 'vjhv', 677766, 'uygvyu', 'ytfvtyvty', 'ytcytc', 'trxfxgf', 234567, 34567),
(5, '', '', 0, '', '', '', '', 0, 0),
(6, '', '', 0, '', '', '', '', 0, 0),
(7, '', '', 0, '', '', '', '', 0, 0),
(8, '', '', 0, '', '', '', '', 0, 0),
(9, '1', '', 0, '', '', '', '', 0, 0),
(10, '1', '', 0, '', '', '', '', 0, 0),
(11, '1234567890', 'tyryr', 23456, 'uvjhv', 'jhv', 'jhv', 'jhv', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE IF NOT EXISTS `subcategoria` (
  `id_subcategoria` int(50) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fcreado` date NOT NULL,
  `fmodificado` date NOT NULL,
  `observacion` varchar(250) NOT NULL,
  PRIMARY KEY (`id_subcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `apellido`, `celular`, `direccion`, `email`, `rol`) VALUES
(8787, 'jbjbjb', 'jb', 0, 'jb', 'jb', 'jb');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
