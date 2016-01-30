-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-01-2016 a las 19:04:45
-- Versión del servidor: 5.6.19-0ubuntu0.14.04.1
-- Versión de PHP: 5.6.14-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kit_motos_`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes_kit_motos`
--

CREATE TABLE IF NOT EXISTS `Clientes_kit_motos` (
  `Usua_id` int(11) NOT NULL,
  `Usua_nomb` varchar(30) NOT NULL,
  `Usua_apelli` varchar(30) NOT NULL,
  `Usua_tel` int(11) DEFAULT NULL,
  `Usua_cel` int(11) DEFAULT NULL,
  `Usua_direc` varchar(40) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  PRIMARY KEY (`Usua_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Clientes_kit_motos`
--

INSERT INTO `Clientes_kit_motos` (`Usua_id`, `Usua_nomb`, `Usua_apelli`, `Usua_tel`, `Usua_cel`, `Usua_direc`, `email_user`) VALUES
(114412506, 'Claudio', 'Giraldo', 34499, 34499, 'kra  7c', 'andres18281@hotmai.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Descripcion_factura`
--

CREATE TABLE IF NOT EXISTS `Descripcion_factura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_produc` varchar(10) NOT NULL,
  `cantidad` int(2) NOT NULL,
  `id_solicitud` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cod_produc` (`cod_produc`),
  KEY `id_solicitud` (`id_solicitud`),
  KEY `id_solicitud_2` (`id_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto_kit`
--

CREATE TABLE IF NOT EXISTS `Producto_kit` (
  `Produc_id` varchar(10) NOT NULL,
  `Produc_descr_id` int(5) NOT NULL,
  `Produc_marc_id` int(5) NOT NULL,
  `Produc_referen_id` int(5) NOT NULL,
  `Tipo_id` int(5) NOT NULL,
  PRIMARY KEY (`Produc_id`),
  UNIQUE KEY `Produc_descr_id` (`Produc_descr_id`),
  KEY `Produc_marc_id` (`Produc_marc_id`),
  KEY `Produc_descr_id_2` (`Produc_descr_id`),
  KEY `Produc_referen_id` (`Produc_referen_id`),
  KEY `Tipo_id` (`Tipo_id`),
  KEY `Produc_referen_id_2` (`Produc_referen_id`),
  KEY `Produc_marc_id_2` (`Produc_marc_id`),
  KEY `Produc_descr_id_3` (`Produc_descr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Producto_kit`
--

INSERT INTO `Producto_kit` (`Produc_id`, `Produc_descr_id`, `Produc_marc_id`, `Produc_referen_id`, `Tipo_id`) VALUES
('233', 14, 1, 2, 2),
('243', 1, 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Produc_cantidad_producto`
--

CREATE TABLE IF NOT EXISTS `Produc_cantidad_producto` (
  `Id` varchar(10) NOT NULL,
  `id_product` varchar(10) NOT NULL,
  `Cant_product` int(5) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Produc_cantidad_producto`
--

INSERT INTO `Produc_cantidad_producto` (`Id`, `id_product`, `Cant_product`) VALUES
('', '233', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Produc_descripcion_`
--

CREATE TABLE IF NOT EXISTS `Produc_descripcion_` (
  `Descri_id` int(5) NOT NULL AUTO_INCREMENT,
  `Descri_nomb` varchar(50) NOT NULL,
  PRIMARY KEY (`Descri_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `Produc_descripcion_`
--

INSERT INTO `Produc_descripcion_` (`Descri_id`, `Descri_nomb`) VALUES
(1, 'descripcion producto wwee'),
(2, 'gfgfg'),
(3, 'fdf'),
(4, 'dfdf'),
(5, 'fdfdf'),
(6, 'fdffff'),
(7, 'fdffff'),
(8, 'fdfdf'),
(9, 'fgfgfg'),
(10, 'fdfdf'),
(11, 'fgfgfg'),
(12, 'fdgfg'),
(13, 'fdfdf'),
(14, 'ffgfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Produc_Imagen_`
--

CREATE TABLE IF NOT EXISTS `Produc_Imagen_` (
  `Id_imagen` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Produc_Marca`
--

CREATE TABLE IF NOT EXISTS `Produc_Marca` (
  `Marca_id` int(5) NOT NULL AUTO_INCREMENT,
  `Marca_nomb` varchar(20) NOT NULL,
  PRIMARY KEY (`Marca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Produc_Marca`
--

INSERT INTO `Produc_Marca` (`Marca_id`, `Marca_nomb`) VALUES
(1, 'HONDA'),
(2, 'YAMAHA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Produc_Precio`
--

CREATE TABLE IF NOT EXISTS `Produc_Precio` (
  `Precio_id_` varchar(10) NOT NULL,
  `Precio_cost` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Precio_id_`),
  UNIQUE KEY `Precio_id_` (`Precio_id_`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Produc_Precio`
--

INSERT INTO `Produc_Precio` (`Precio_id_`, `Precio_cost`) VALUES
('233', 24000),
('243', 23555);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Produc_Referencia`
--

CREATE TABLE IF NOT EXISTS `Produc_Referencia` (
  `Referen_id` int(5) NOT NULL AUTO_INCREMENT,
  `Referenc_nomb` varchar(30) NOT NULL,
  PRIMARY KEY (`Referen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Produc_Referencia`
--

INSERT INTO `Produc_Referencia` (`Referen_id`, `Referenc_nomb`) VALUES
(2, 'AXD'),
(3, 'rtrt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Produc_Tipo_producto`
--

CREATE TABLE IF NOT EXISTS `Produc_Tipo_producto` (
  `Tip_pro_id` int(5) NOT NULL AUTO_INCREMENT,
  `Tip_nomb` varchar(40) NOT NULL,
  `Tip_imagen` int(5) NOT NULL,
  PRIMARY KEY (`Tip_pro_id`),
  UNIQUE KEY `Tip_imagen` (`Tip_imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Produc_Tipo_producto`
--

INSERT INTO `Produc_Tipo_producto` (`Tip_pro_id`, `Tip_nomb`, `Tip_imagen`) VALUES
(2, 'carro bien hecho', 223),
(3, 'Moto bien', 233);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Solicitud_facturacion`
--

CREATE TABLE IF NOT EXISTS `Solicitud_facturacion` (
  `Id_factura` int(10) NOT NULL AUTO_INCREMENT,
  `id_client` int(10) NOT NULL,
  `Total` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Id_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Users_count`
--

CREATE TABLE IF NOT EXISTS `Users_count` (
  `Id_users` int(10) NOT NULL AUTO_INCREMENT,
  `passwrd_` varchar(42) NOT NULL,
  `tipo_rol` enum('cliente','empleado') NOT NULL,
  PRIMARY KEY (`Id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Descripcion_factura`
--
ALTER TABLE `Descripcion_factura`
  ADD CONSTRAINT `Descripcion_factura_ibfk_1` FOREIGN KEY (`cod_produc`) REFERENCES `Producto_kit` (`Produc_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Descripcion_factura_ibfk_2` FOREIGN KEY (`id_solicitud`) REFERENCES `Descripcion_factura` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `Producto_kit`
--
ALTER TABLE `Producto_kit`
  ADD CONSTRAINT `Producto_kit_ibfk_1` FOREIGN KEY (`Produc_descr_id`) REFERENCES `Produc_descripcion_` (`Descri_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Producto_kit_ibfk_2` FOREIGN KEY (`Produc_marc_id`) REFERENCES `Produc_Marca` (`Marca_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Producto_kit_ibfk_3` FOREIGN KEY (`Produc_referen_id`) REFERENCES `Produc_Referencia` (`Referen_id`),
  ADD CONSTRAINT `Producto_kit_ibfk_4` FOREIGN KEY (`Tipo_id`) REFERENCES `Produc_Tipo_producto` (`Tip_pro_id`);

--
-- Filtros para la tabla `Produc_cantidad_producto`
--
ALTER TABLE `Produc_cantidad_producto`
  ADD CONSTRAINT `Produc_cantidad_producto_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `Producto_kit` (`Produc_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `Produc_Precio`
--
ALTER TABLE `Produc_Precio`
  ADD CONSTRAINT `Produc_Precio_ibfk_1` FOREIGN KEY (`Precio_id_`) REFERENCES `Producto_kit` (`Produc_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
