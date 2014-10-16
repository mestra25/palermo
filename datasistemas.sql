
CREATE TABLE IF NOT EXISTS `categoria` (
  `descripcion` varchar(250) NOT NULL,
`id_categoria` int(20) NOT NULL,
  `observacion` varchar(20) NOT NULL,
  `fcreado` varchar(20) NOT NULL,
  `fmodificado` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;



CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `movimiento_inventario` (
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


CREATE TABLE IF NOT EXISTS `proveedor` (
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

CREATE TABLE IF NOT EXISTS `subcategoria` (
`id_subcategoria` int(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `observacion` varchar(20) NOT NULL,
  `fcreado` date NOT NULL,
  `fmodificado` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `usuario` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `celular` int(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `usuario` (`cedula`, `nombre`, `apellido`, `celular`, `direccion`, `email`, `rol`) VALUES
(8787, 'jbjbjb', 'jb', 0, 'jb', 'jb', 'jb');


ALTER TABLE `categoria`
 ADD PRIMARY KEY (`id_categoria`);

ALTER TABLE `cliente`
 ADD PRIMARY KEY (`cedula`);


ALTER TABLE `movimiento_inventario`
 ADD PRIMARY KEY (`id_consecutivo`);

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

ALTER TABLE `proveedor`
MODIFY `id_proveedor` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;

ALTER TABLE `subcategoria`
MODIFY `id_subcategoria` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
