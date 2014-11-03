
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(20) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  `observacion` varchar(20) NOT NULL,
  `fcreado` varchar(20) NOT NULL,
  `fmodificado` varchar(20) NOT NULL,
  `nueva` varchar(20) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `medida` (
  `id_medida` int(20) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  `nueva` varchar(20) NOT NULL,
  PRIMARY KEY (`id_medida`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

CREATE TABLE IF NOT EXISTS `movimiento_inventario` (
  `id_consecutivo` int(20) NOT NULL AUTO_INCREMENT,
  `codigo` int(20) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `v_costo` int(20) NOT NULL,
  `impuesto` int(20) NOT NULL,
  `valor_venta` int(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`id_consecutivo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;



CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(20) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(20) NOT NULL,
  `id_subcategoria` int(20) NOT NULL,
  `id_proveedor` int(20) NOT NULL,
  `codigo` int(20) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `v_costo` int(20) NOT NULL,
  `venta_1` int(20) NOT NULL,
  `venta_2` int(20) NOT NULL,
  `venta_3` int(20) NOT NULL,
  `venta_4` int(20) NOT NULL,
  `p_utilidad` int(20) NOT NULL,
  `medida` varchar(20) NOT NULL,
  `p_descuento` int(20) NOT NULL,
  `stock_min` int(20) NOT NULL,
  `stock_max` int(20) NOT NULL,
  `fcreado` varchar(20) NOT NULL,
  `fmodificado` varchar(20) NOT NULL,
  `existencia` int(20) NOT NULL,
  `reserva` int(20) NOT NULL,
  `observacion` varchar(20) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-
CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(50) NOT NULL AUTO_INCREMENT,
  `nit` varchar(20) NOT NULL,
  `nombre_empresa` varchar(20) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `telefono` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL,
  `contac` varchar(50) NOT NULL,
  `numcontac` int(20) NOT NULL,
  `replegal` varchar(50) NOT NULL,
  `cedRep` int(50) NOT NULL,
  `celRep` int(50) NOT NULL,
  `nueva` varchar(20) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


CREATE TABLE IF NOT EXISTS `subcategoria` (
  `id_subcategoria` int(50) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fcreado` varchar(20) NOT NULL,
  `fmodificado` varchar(20) NOT NULL,
  `observacion` varchar(250) NOT NULL,
  `nueva` varchar(20) NOT NULL,
  PRIMARY KEY (`id_subcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;


CREATE TABLE IF NOT EXISTS `usuario` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `usuario` (`cedula`, `nombre`, `apellido`, `celular`, `direccion`, `email`, `rol`, `password`) VALUES
(1, 'administrador', 'administrador', 0, '31233', 'ff', 'administrador', '202cb962ac59075b964b07152d234b70'),
(9, 'diego', 'mestra', 2123, 'direc', 'mail', 'usuario', '45c48cce2e2d7fbdea1afc51c7c6ad26'),
(33, '', '', 0, '3333', '', 'usuario', 'd41d8cd98f00b204e9800998ecf8427e'),
(999, '', '', 0, '', '', 'usuario', '202cb962ac59075b964b07152d234b70'),
(4444, 'admin', 'admin', 321, '', '', 'administrador', '202cb962ac59075b964b07152d234b70'),
(12345, 'diego', 'narvaez', 0, '1234', 'ww', 'usuario', '81dc9bdb52d04dc20036dbd8313ed055'),
(1234567, 'ub', 'UIB', 0, '1223', 'JKB', 'usuario', '8d89b2b19a82c263835047655378629c');

