-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-08-2019 a las 00:57:41
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCategoria` varchar(50) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'Armas Cortas'),
(2, 'Armas LArgas'),
(3, 'Revolver'),
(4, 'Pistola'),
(5, 'tumama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(50) NOT NULL,
  `codigoProducto` varchar(50) NOT NULL,
  `precioProdcuto` float NOT NULL,
  `descuentoProducto` float DEFAULT NULL,
  `stockMinimo` int(50) NOT NULL,
  `stockActual` int(50) NOT NULL,
  `categoriaProducto` varchar(50) NOT NULL,
  `fotoProducto` varchar(100) NOT NULL,
  `videoProducto` varchar(100) NOT NULL,
  `descripcionCortaProducto` varchar(200) NOT NULL,
  `descripcionLargaProducto` varchar(300) NOT NULL,
  `destacadoProducto` tinyint(1) NOT NULL,
  `onSaleProducto` tinyint(1) NOT NULL,
  `mostrarHomeProducto` tinyint(1) NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `codigoProducto`, `precioProdcuto`, `descuentoProducto`, `stockMinimo`, `stockActual`, `categoriaProducto`, `fotoProducto`, `videoProducto`, `descripcionCortaProducto`, `descripcionLargaProducto`, `destacadoProducto`, `onSaleProducto`, `mostrarHomeProducto`) VALUES
(2, 'Bersa TPR9', 'gfhb4', 9990, NULL, 45, 45, 'Revolver', 'asd', 'dfg', 'fgh', 'hjk', 1, 1, 0),
(4, 'asd', 'asd', 45, 3, 4, 7, 'TuMama', 'asd', 'asd', 'sdf', 'fghfgj', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `idSlider` int(11) NOT NULL AUTO_INCREMENT,
  `fotoSlider` varchar(100) NOT NULL,
  `textoSlider` varchar(150) NOT NULL,
  PRIMARY KEY (`idSlider`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`idSlider`, `fotoSlider`, `textoSlider`) VALUES
(1, 'TUMAAMA', 'pruebin'),
(2, 'dsfgdf', 'pruebin'),
(3, 'TUMAAMA', 'pruebin'),
(5, 'TUMAAMA', 'pruebin'),
(6, 'TUMAAMA', 'pruebin'),
(7, 'TUMAAMA', 'pruebin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `mailUsuario` varchar(80) NOT NULL,
  `ConstrasenaUsuario` varchar(50) NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL,
  `apellidoUsuario` varchar(50) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `mailUsuario`, `ConstrasenaUsuario`, `nombreUsuario`, `apellidoUsuario`) VALUES
(1, 'JEJEJE', 'e2512172abf8cc9f67fdd49eb6cacf2df71bbad3', 'dfgdfcg', 'sdfsdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
