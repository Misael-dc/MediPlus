-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2022 a las 22:30:35
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL,
  `cargo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `cargo`) VALUES
(1, 'Farmacéutico titular'),
(3, 'Farmacéutico co-titular'),
(4, 'Farmacéutico regente'),
(5, 'Farmacéutico sustituto'),
(6, 'Farmacéutico adjunto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `id_clasificacion` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`id_clasificacion`, `nombre`, `descripcion`) VALUES
(1, 'Antipiréticos', 'Su objetivo es reducir la fiebre'),
(2, 'Antialérgicos', 'Estos medicamentos están destinados a combatir los efectos negativos producidos por una hipersensibi'),
(3, 'Analgésicos', 'Son todos los fármacos que tienen como finalidad aliviar el dolor físico'),
(4, 'Antiinfecciosos', 'Este tipo de medicamentos están recetados para hacer frente a infecciones'),
(5, 'Antiinflamatorios', 'Reducen la fiebre y la inflamación y alivian el dolor.'),
(6, 'Analgesicos y Antipireticos', 'Son todos los fármacos que tienen como finalidad aliviar el dolor físico'),
(7, 'Antigripal', 'Contra los sinotmas de gripe'),
(8, 'Antihistaminico', 'Dsiminuye y ataca los sintomas de una garganta irirtada'),
(9, 'Vitaminas', 'Grupo de sustancias que son necesarias para el funcionamiento celular, el crecimiento y el desarroll');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `paterno` varchar(45) NOT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `paterno`, `materno`, `ciudad`, `cedula`, `estado`) VALUES
(1, 'Dayana', 'Torres', 'Linares', NULL, '654', 1),
(2, 'Ale', 'Quiroga', '', NULL, '654', 1),
(3, 'uno', 'Sachez', '', NULL, '654', 1),
(4, 'Delier', 'Zambrano', 'Dominguez', 'oruro', '1234', 1),
(5, 'Danitza', 'Dom', 'Dest', 'La paz', '1456', 1),
(20, 'nombre', 'Juares', 'Primero', 'oruro', '7854', 1),
(23, 'Yesica', 'Lopez', 'lopez', 'oruro', '12345', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compras`
--

CREATE TABLE `detalle_compras` (
  `compra_id_compra` int(11) NOT NULL,
  `proveedor_id_proveedor` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `costo_compra` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_ventas`
--

INSERT INTO `detalle_ventas` (`id_venta`, `id_producto`, `cantidad`, `costo`) VALUES
(2, 3, 4, '8.00'),
(2, 1, 2, '2.00'),
(28, 1, 1, '1.00'),
(28, 2, 1, '2.00'),
(33, 1, 1, '1.00'),
(33, 2, 1, '2.00'),
(34, 1, 1, '1.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `id_cargo` int(11) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fechanacimiento` date NOT NULL,
  `genero` char(4) NOT NULL,
  `aficiones` varchar(200) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `ci`, `nombre`, `paterno`, `materno`, `id_cargo`, `direccion`, `telefono`, `fechanacimiento`, `genero`, `aficiones`, `estado`) VALUES
(1, '85454', 'Yesica', 'Primero', 'suarez', 1, 'la paz', '785456', '1999-05-05', 'F', 'Lectura, Deportes', 1),
(2, '8754531', 'Juan', 'Lopez', 'Perez', 1, 'oruro', '784512', '2022-09-28', 'M', 'Lectura', 1),
(3, '8754531', 'Lupita', 'primero', 'lopez', 4, 'la paz', '784512', '2022-09-23', 'F', 'Lectura, Negocios, Deportes, Videojuegos', 1),
(4, '8754531', 'juan', 'Lopez', 'lopez', 6, 'la paz', '7842312', '2022-09-23', 'M', 'Deportes, Videojuegos', 1),
(5, '8754531', 'Javi', 'Lopez', 'lopez', 3, 'oruro', '78545', '2022-09-23', 'M', 'Negocios, Videojuegos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_clasificacion` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `costo_compra` decimal(12,2) NOT NULL,
  `costo_venta` decimal(12,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `forma` varchar(45) DEFAULT NULL,
  `peso` varchar(45) DEFAULT NULL,
  `laboratorio` varchar(45) DEFAULT NULL,
  `fecha_vencimiento` varchar(45) DEFAULT NULL,
  `unidad_venta` varchar(45) DEFAULT NULL,
  `envase` varchar(45) DEFAULT NULL,
  `imagenProducto` varchar(150) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_clasificacion`, `id_proveedor`, `nombre_producto`, `descripcion`, `costo_compra`, `costo_venta`, `stock`, `forma`, `peso`, `laboratorio`, `fecha_vencimiento`, `unidad_venta`, `envase`, `imagenProducto`, `estado`) VALUES
(1, 6, 1, 'Nodolex Forte 1000Mg Paracetamol X Tableta', 'Contra el dolor y la fiebre', '0.80', '1.00', 43, 'Comprimidos', '1000 mg', 'Bagó', '2030-12-15', 'tabletas', 'aluminio', 'images.jpg', 1),
(2, 6, 4, 'Acetamol 100Mg Paracetamol Gotas X 15Ml', '', '1.50', '2.00', 48, 'Via oral', '100 mg/ml', 'Kern Farma', '2025-07-11 00:00:00', '2', 'vidrio', '220px-Ritalin-SR-20mg-full.jpg', 1),
(3, 5, 4, 'Ibuprofeno 800Mg X Tableta', '', '1.50', '2.00', 142, 'Comprimido', '800 mg', 'Bagó', '2024-09-14 00:00:00', '2', 'aliminio', '220px-Ritalin-SR-20mg-full.jpg', 1),
(4, 6, 1, 'Aspirinetas Acido Acetilsalicilico 100Mg X Tableta', 'Indicaciones terapeuticas: Prevencion cardiovascular. Analgesicos no narcoticos antipireticos.', '0.30', '0.45', 557, 'Comprimidos', '100 mg', 'Bayer', '2025-12-12', 'tabletas', 'aluminio', 'índice.jpg', 1),
(5, 3, 3, 'Dolorsan Unguento X 15Gr', 'Mentol -salicilato de metilo - . Analgesico antiinflamatorio y antirreumatico topico. Alivio inmediato de la tos artritis bronquitis y muscular.', '8.00', '8.80', 60, 'Ungüento', '15 gr', 'Farcos', '2027-04-11 00:00:00', 'lata', 'metalico', 'dolorsan.jpg', 1),
(7, 3, 2, 'Mentisan Unguento Grande X 15Gr', 'Mentol eucaliptol gomenol. Revulsivos percutaneos.', '5.50', '6.40', 100, 'Comprimidos', '15 mg', 'Inti S.A.', '2028-04-02', 'tabletas', 'aluminio', 'índice.jpg', 1),
(8, 7, 2, 'Sanatusin Gel Dia Limon Miel X Sobre', 'Dextrometorfano bromhidrato 20mg-aminosidina sulfato 60mg-paracetamol 500mg', '4.00', '4.90', 150, 'Comprimidos', '15 mg', 'Pacific Pharma Group', '2023-07-12', 'tabletas', 'aluminio', 'images.jpg', 1),
(13, 8, 6, 'Tosalcos Extra Fuerte Dextrometorfano X Sobre', 'Dextrometorfano bromhidrato.T os alcos extra fuerte dextrometorfano x sobre', '2.50', '3.20', 100, 'Via Oral', '15.6 gr', 'Alcos', '2025-04-01 00:00:00', 'sobre', 'blister', 'tosalcos.jpg', 1),
(14, 9, 1, 'Complejo B Vimin Vitamina B1 B6 Y B12 Y Nicotinamida 50Mg X Ampolla', 'Vitamina b1 20mg-vitamina b6 b12 -nicotinamida 50mg. Vitaminas del complejo b + combinaciones', '6.00', '6.70', 120, 'Comprimidos', '20 mg', 'Inti S.A.', '2024-01-19', 'tabletas', 'aluminio', 'images.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `empresa` varchar(150) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `empresa`, `contacto`, `mail`, `telefono`, `direccion`, `estado`) VALUES
(1, 'ARBOR', 'Hugo', 'hugo@example.com', '78451132', 'La Paz', 1),
(2, 'AZ SALUD', 'Luz', 'luz@example.com', '64216355', 'Oruro', 1),
(3, 'BAGO DE BOLIVIA S.A.', 'Sara', 'sara@example.com', '78452132', 'Potosi', 1),
(4, 'BELMED LTDA.', 'Helena2', 'helena@example.com', '65212341', 'La Paz', 1),
(6, 'COFAR S.A.', 'Manuel', 'manu@example.com', '65421231', 'Beni', 1),
(7, 'COFARBOL LTDA.', 'Martín', 'marti@example.com', '74512121', 'Tarija', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Auxiliar'),
(3, 'Revisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_clientes`
--

CREATE TABLE `usuarios_clientes` (
  `id_usuario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_clientes`
--

INSERT INTO `usuarios_clientes` (`id_usuario`, `id_cliente`, `usuario`, `mail`, `password`, `estado`) VALUES
(1, 5, 'algo', 'algo@example.com', '1234', 1),
(2, 1, 'primero1', 'primero@mail.com', '1234', 1),
(3, 5, 'algo', 'algo@example.com', '1234', 1),
(4, 5, 'algo', 'algo@example.com', '1234', 1),
(10, 23, 'yes', 'yes@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_empleados`
--

CREATE TABLE `usuarios_empleados` (
  `id_usuario` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `usuario` varchar(45) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `password` varchar(45) NOT NULL,
  `estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_empleados`
--

INSERT INTO `usuarios_empleados` (`id_usuario`, `id_empleado`, `id_rol`, `usuario`, `mail`, `password`, `estado`) VALUES
(1, 3, 1, 'Lupe12', 'lup@example.com', '81dc9bdb52d04dc20036dbd8313ed055', '1'),
(2, 2, 2, 'juan12', 'jua@example.com', '81dc9bdb52d04dc20036dbd8313ed055', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_empleado`, `id_cliente`, `fecha`) VALUES
(1, 1, 2, '2022-09-19'),
(2, 1, 2, '2022-09-19'),
(28, 1, 23, '2022-10-10'),
(33, 1, 23, '2022-10-10'),
(34, 1, 23, '2022-10-10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`id_clasificacion`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_compra_empleados1_idx` (`id_empleado`),
  ADD KEY `fk_compra_proveedor_idx` (`id_proveedor`);

--
-- Indices de la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  ADD KEY `fk_compra_has_proveedor_proveedor1_idx` (`proveedor_id_proveedor`),
  ADD KEY `fk_compra_has_proveedor_compra1_idx` (`compra_id_compra`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD KEY `fk_venta_has_producto_producto1_idx` (`id_producto`),
  ADD KEY `fk_venta_has_producto_venta1_idx` (`id_venta`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `fk_empleados_cargos1_idx` (`id_cargo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_producto_clasificacion_idx` (`id_clasificacion`),
  ADD KEY `fk_producto_proveedor1_idx` (`id_proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios_clientes`
--
ALTER TABLE `usuarios_clientes`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuarios_clientes_clientes1_idx` (`id_cliente`);

--
-- Indices de la tabla `usuarios_empleados`
--
ALTER TABLE `usuarios_empleados`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuarios_empleados1_idx` (`id_empleado`),
  ADD KEY `fk_usuarios_roles1_idx` (`id_rol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fk_venta_clientes1_idx` (`id_cliente`),
  ADD KEY `fk_venta_empleados1_idx` (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `id_clasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios_clientes`
--
ALTER TABLE `usuarios_clientes`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios_empleados`
--
ALTER TABLE `usuarios_empleados`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_empleados1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compra_proveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_compras`
--
ALTER TABLE `detalle_compras`
  ADD CONSTRAINT `fk_compra_has_proveedor_compra1` FOREIGN KEY (`compra_id_compra`) REFERENCES `compra` (`id_compra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compra_has_proveedor_proveedor1` FOREIGN KEY (`proveedor_id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD CONSTRAINT `fk_venta_has_producto_producto1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_has_producto_venta1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_empleados_cargos1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_clasificacion` FOREIGN KEY (`id_clasificacion`) REFERENCES `clasificacion` (`id_clasificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_proveedor1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios_clientes`
--
ALTER TABLE `usuarios_clientes`
  ADD CONSTRAINT `fk_usuarios_clientes_clientes1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios_empleados`
--
ALTER TABLE `usuarios_empleados`
  ADD CONSTRAINT `fk_usuarios_empleados1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_roles1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_clientes1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_empleados1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
