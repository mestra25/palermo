
CREATE TABLE `categoria` (
  `descripcion` varchar(250) NOT NULL,
`id_categoria` int(20) NOT NULL,
  `observacion` varchar(20) NOT NULL,
  `fcreado` varchar(20) NOT NULL,
  `fmodificado` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;


CREATE TABLE  `cliente` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE  `movimiento_inventario` (
`id_consecutivo` int(20) NOT NULL,
  `tipo_movimiento` varchar(20) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `id_cliente` int(20) NOT NULL,
  `id_factura` int(20) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `valor` int(20) NOT NULL,
  `impuesto` int(20) NOT NULL,
  `valor_venta` int(20) NOT NULL,
  `reserva` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE `producto` (
`id_producto` int(20) NOT NULL,
  `id_categoria` int(20) NOT NULL,
  `id_subcategoria` int(20) NOT NULL,
  `id_proveedor` int(20) NOT NULL,
  `codigo` varchar(20) NOT NULL,
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
  `observacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE  `proveedor` (
`id_proveedor` int(255) NOT NULL,
  `nit` varchar(50) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `telefono` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL,
  `contac` varchar(50) NOT NULL,
  `replegal` varchar(50) NOT NULL,
  `cedRep` int(50) NOT NULL,
  `celRep` int(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;


CREATE TABLE  `subcategoria` (
`id_subcategoria` int(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `observacion` varchar(20) NOT NULL,
  `fcreado` varchar(20) NOT NULL,
  `fmodificado` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


CREATE TABLE  `usuario` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `categoria`
 ADD PRIMARY KEY (`id_categoria`);

ALTER TABLE `cliente`
 ADD PRIMARY KEY (`cedula`);

ALTER TABLE `movimiento_inventario`
 ADD PRIMARY KEY (`id_consecutivo`);

ALTER TABLE `producto`
 ADD PRIMARY KEY (`id_producto`);

ALTER TABLE `proveedor`
 ADD PRIMARY KEY (`id_proveedor`);

ALTER TABLE `subcategoria`
 ADD PRIMARY KEY (`id_subcategoria`);

ALTER TABLE `usuario`
 ADD PRIMARY KEY (`cedula`);

ALTER TABLE `categoria`
MODIFY `id_categoria` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;

ALTER TABLE `movimiento_inventario`
MODIFY `id_consecutivo` int(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `producto`
MODIFY `id_producto` int(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `proveedor`
MODIFY `id_proveedor` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;

ALTER TABLE `subcategoria`
MODIFY `id_subcategoria` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
