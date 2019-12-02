-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-12-2019 a las 16:07:29
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombreCategoria`) VALUES
(6, 'Revolver'),
(15, 'test'),
(11, 'Pistola');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `codigoProducto`, `precioProdcuto`, `descuentoProducto`, `stockMinimo`, `stockActual`, `categoriaProducto`, `fotoProducto`, `videoProducto`, `descripcionCortaProducto`, `descripcionLargaProducto`, `destacadoProducto`, `onSaleProducto`, `mostrarHomeProducto`) VALUES
(5, 'Beretta', '45', 600, 5, 45, 65, 'Pistola', 'beretta-92-fs-inox11-1bd413eeef64a75c5f15379976167381-1024-1024.jpg', 'jhk', 'Arma', 'Arma', 1, 1, 0),
(6, 'Bersa', '689', 4085, 4, 8, 7, 'Revolver', 'descarga.jpg', 'jkl', 'jkl', 'jkl', 1, 1, 1),
(7, 'Magnum', 'dfg', 98, 45, 5, 45, 'Pistola', 'descarga.jpg', 'lo', 'jkl', 'jkl', 1, 0, 1),
(8, 'producto test', '123456', 9005, 452, 1, 5, 'test', 'descarga (1).jpg', '111', 'desc corta', 'desc larga', 1, 0, 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`idSlider`, `fotoSlider`, `textoSlider`) VALUES
(23, 'descarga (1).jpg', 'Magnum');

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
