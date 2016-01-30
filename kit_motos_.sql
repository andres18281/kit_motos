-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2016 at 03:48 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kit_motos_`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes_kit_motos`
--

CREATE TABLE `clientes_kit_motos` (
  `Usua_id` int(11) NOT NULL,
  `Usua_nomb` varchar(30) NOT NULL,
  `Usua_apelli` varchar(30) NOT NULL,
  `Usua_tel` int(11) DEFAULT NULL,
  `Usua_cel` int(11) DEFAULT NULL,
  `Usua_direc` varchar(40) NOT NULL,
  `email_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes_kit_motos`
--

INSERT INTO `clientes_kit_motos` (`Usua_id`, `Usua_nomb`, `Usua_apelli`, `Usua_tel`, `Usua_cel`, `Usua_direc`, `email_user`) VALUES
(114412506, 'Claudio', 'Giraldo', 34499, 34499, 'kra  7c', 'andres18281@hotmai.com');

-- --------------------------------------------------------

--
-- Table structure for table `descripcion_factura`
--

CREATE TABLE `descripcion_factura` (
  `id` int(11) NOT NULL,
  `cod_produc` varchar(10) NOT NULL,
  `cantidad` int(2) NOT NULL,
  `id_solicitud` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producto_kit`
--

CREATE TABLE `producto_kit` (
  `Produc_id` varchar(10) NOT NULL,
  `Produc_descr_id` int(5) NOT NULL,
  `Produc_marc_id` int(5) NOT NULL,
  `Produc_referen_id` int(5) NOT NULL,
  `Tipo_id` int(5) DEFAULT NULL,
  `Precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produc_cantidad_producto`
--

CREATE TABLE `produc_cantidad_producto` (
  `Id` varchar(10) NOT NULL,
  `id_product` varchar(10) NOT NULL,
  `Cant_product` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produc_descripcion_`
--

CREATE TABLE `produc_descripcion_` (
  `Descri_id` int(5) NOT NULL,
  `Descri_nomb` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produc_imagen_`
--

CREATE TABLE `produc_imagen_` (
  `Id_imagen` int(5) NOT NULL,
  `Nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produc_marca`
--

CREATE TABLE `produc_marca` (
  `Marca_id` int(5) NOT NULL,
  `Marca_nomb` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produc_marca`
--

INSERT INTO `produc_marca` (`Marca_id`, `Marca_nomb`) VALUES
(1, 'HONDA');

-- --------------------------------------------------------

--
-- Table structure for table `produc_precio`
--

CREATE TABLE `produc_precio` (
  `Precio_id_` varchar(10) NOT NULL,
  `Precio_cost` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produc_referencia`
--

CREATE TABLE `produc_referencia` (
  `Referen_id` int(5) NOT NULL,
  `Referenc_nomb` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produc_tipo_producto`
--

CREATE TABLE `produc_tipo_producto` (
  `Tip_pro_id` int(5) NOT NULL,
  `Tip_nomb` varchar(40) NOT NULL,
  `Tip_imagen` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `solicitud_facturacion`
--

CREATE TABLE `solicitud_facturacion` (
  `Id_factura` int(10) NOT NULL,
  `id_client` int(10) NOT NULL,
  `Total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_count`
--

CREATE TABLE `users_count` (
  `Id_users` int(10) NOT NULL,
  `passwrd_` varchar(42) NOT NULL,
  `tipo_rol` enum('cliente','empleado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes_kit_motos`
--
ALTER TABLE `clientes_kit_motos`
  ADD PRIMARY KEY (`Usua_id`);

--
-- Indexes for table `descripcion_factura`
--
ALTER TABLE `descripcion_factura`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cod_produc` (`cod_produc`),
  ADD KEY `id_solicitud` (`id_solicitud`),
  ADD KEY `id_solicitud_2` (`id_solicitud`);

--
-- Indexes for table `producto_kit`
--
ALTER TABLE `producto_kit`
  ADD PRIMARY KEY (`Produc_id`),
  ADD UNIQUE KEY `Produc_descr_id` (`Produc_descr_id`),
  ADD KEY `Produc_marc_id` (`Produc_marc_id`),
  ADD KEY `Produc_descr_id_2` (`Produc_descr_id`),
  ADD KEY `Produc_referen_id` (`Produc_referen_id`),
  ADD KEY `Tipo_id` (`Tipo_id`),
  ADD KEY `Produc_referen_id_2` (`Produc_referen_id`),
  ADD KEY `Produc_marc_id_2` (`Produc_marc_id`),
  ADD KEY `Produc_descr_id_3` (`Produc_descr_id`);

--
-- Indexes for table `produc_cantidad_producto`
--
ALTER TABLE `produc_cantidad_producto`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `id_product` (`id_product`);

--
-- Indexes for table `produc_descripcion_`
--
ALTER TABLE `produc_descripcion_`
  ADD PRIMARY KEY (`Descri_id`);

--
-- Indexes for table `produc_imagen_`
--
ALTER TABLE `produc_imagen_`
  ADD PRIMARY KEY (`Id_imagen`);

--
-- Indexes for table `produc_marca`
--
ALTER TABLE `produc_marca`
  ADD PRIMARY KEY (`Marca_id`);

--
-- Indexes for table `produc_precio`
--
ALTER TABLE `produc_precio`
  ADD PRIMARY KEY (`Precio_id_`),
  ADD UNIQUE KEY `Precio_id_` (`Precio_id_`);

--
-- Indexes for table `produc_referencia`
--
ALTER TABLE `produc_referencia`
  ADD PRIMARY KEY (`Referen_id`);

--
-- Indexes for table `produc_tipo_producto`
--
ALTER TABLE `produc_tipo_producto`
  ADD PRIMARY KEY (`Tip_pro_id`),
  ADD UNIQUE KEY `Tip_imagen` (`Tip_imagen`);

--
-- Indexes for table `solicitud_facturacion`
--
ALTER TABLE `solicitud_facturacion`
  ADD PRIMARY KEY (`Id_factura`);

--
-- Indexes for table `users_count`
--
ALTER TABLE `users_count`
  ADD PRIMARY KEY (`Id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `descripcion_factura`
--
ALTER TABLE `descripcion_factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produc_descripcion_`
--
ALTER TABLE `produc_descripcion_`
  MODIFY `Descri_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produc_imagen_`
--
ALTER TABLE `produc_imagen_`
  MODIFY `Id_imagen` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produc_marca`
--
ALTER TABLE `produc_marca`
  MODIFY `Marca_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `produc_referencia`
--
ALTER TABLE `produc_referencia`
  MODIFY `Referen_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produc_tipo_producto`
--
ALTER TABLE `produc_tipo_producto`
  MODIFY `Tip_pro_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `solicitud_facturacion`
--
ALTER TABLE `solicitud_facturacion`
  MODIFY `Id_factura` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_count`
--
ALTER TABLE `users_count`
  MODIFY `Id_users` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `descripcion_factura`
--
ALTER TABLE `descripcion_factura`
  ADD CONSTRAINT `Descripcion_factura_ibfk_1` FOREIGN KEY (`cod_produc`) REFERENCES `producto_kit` (`Produc_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Descripcion_factura_ibfk_2` FOREIGN KEY (`id_solicitud`) REFERENCES `descripcion_factura` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `producto_kit`
--
ALTER TABLE `producto_kit`
  ADD CONSTRAINT `Producto_kit_ibfk_1` FOREIGN KEY (`Produc_descr_id`) REFERENCES `produc_descripcion_` (`Descri_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Producto_kit_ibfk_2` FOREIGN KEY (`Produc_marc_id`) REFERENCES `produc_marca` (`Marca_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Producto_kit_ibfk_3` FOREIGN KEY (`Produc_referen_id`) REFERENCES `produc_referencia` (`Referen_id`),
  ADD CONSTRAINT `Producto_kit_ibfk_4` FOREIGN KEY (`Tipo_id`) REFERENCES `produc_tipo_producto` (`Tip_pro_id`);

--
-- Constraints for table `produc_cantidad_producto`
--
ALTER TABLE `produc_cantidad_producto`
  ADD CONSTRAINT `Produc_cantidad_producto_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `producto_kit` (`Produc_id`) ON UPDATE CASCADE;

--
-- Constraints for table `produc_precio`
--
ALTER TABLE `produc_precio`
  ADD CONSTRAINT `Produc_Precio_ibfk_1` FOREIGN KEY (`Precio_id_`) REFERENCES `producto_kit` (`Produc_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
