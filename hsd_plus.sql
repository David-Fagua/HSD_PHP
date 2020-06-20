-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2020 a las 04:18:09
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hsd_plus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id_ciudad` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id_ciudad`, `nombre`) VALUES
(2, 'Medellin'),
(3, 'Cali'),
(4, 'Cartagena'),
(5, 'Boyaca'),
(10, 'Valledupar'),
(17, 'Manizales'),
(20, 'Bogotá'),
(21, 'Santander'),
(23, 'Barranquilla'),
(24, 'Soacha'),
(25, 'Cucuta'),
(26, 'Bucaramanga'),
(27, 'Villavicencio'),
(28, 'Monteria'),
(29, 'Pasto'),
(30, 'Armenia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desechos`
--

CREATE TABLE `desechos` (
  `id_desecho` int(11) NOT NULL,
  `articulo` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `desechos`
--

INSERT INTO `desechos` (`id_desecho`, `articulo`, `fecha`, `cantidad`, `observaciones`, `responsable`) VALUES
(4, 9, '2020-03-04', 40, 'se Daño', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_general`
--

CREATE TABLE `inventario_general` (
  `id_articulo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `preciode_compra` decimal(10,0) NOT NULL,
  `disponibilidad` tinyint(4) DEFAULT NULL,
  `peso_libra` decimal(10,0) DEFAULT NULL,
  `cantidad_unitaria` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `proveedor` int(11) NOT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario_general`
--

INSERT INTO `inventario_general` (`id_articulo`, `nombre`, `fecha_entrada`, `preciode_compra`, `disponibilidad`, `peso_libra`, `cantidad_unitaria`, `color`, `estado`, `proveedor`, `responsable`) VALUES
(9, 'Algodon Perchado', '2020-03-11', '200000', 1, '2000', 500, 'verde', 1, 2, 32),
(10, 'Algodon Ligero', '2020-03-10', '1000000', 1, '100000', 1500, 'blanco', 1, 2, 32),
(11, 'Cono de Hilo', '2020-03-17', '5000000', 1, '5000', 1000, 'cafe', 1, 2, 32),
(12, 'Hilo Croche ', '2020-03-18', '0', 1, '10000', 10000, 'amarillo', 1, 7, 32),
(13, 'Hilo Zelda Form', '2020-03-11', '0', 1, '100', 1000, 'azul', 1, 7, 32),
(15, 'Cono Plastico', '2020-03-09', '2000000', 1, '10000', 100, 'Verde', 1, 2, 35),
(16, 'Algodon Blanco', '2020-03-17', '100000', 1, '2000', 900, 'Blanco', 1, 2, 35),
(17, 'Hilo Fino', '2020-03-10', '0', 1, '2000', 900, 'Rosa', 1, 2, 32),
(18, 'Algodon Polietileno', '2020-03-11', '1000000', 1, '2000', 200, 'Verde', 1, 3, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productofinal_reservas`
--

CREATE TABLE `productofinal_reservas` (
  `id_reserva_reserva` int(11) NOT NULL,
  `id_productofina_final` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productofinal_reservas`
--

INSERT INTO `productofinal_reservas` (`id_reserva_reserva`, `id_productofina_final`) VALUES
(15, 6),
(18, 6),
(18, 7),
(19, 6),
(19, 7),
(26, 6),
(26, 10),
(27, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_final`
--

CREATE TABLE `producto_final` (
  `id_productof` int(11) NOT NULL,
  `articulo` int(11) NOT NULL,
  `grosor` enum('10','20','30','NA') NOT NULL,
  `fecha_promocion` date DEFAULT NULL,
  `disponibilidad` tinyint(1) DEFAULT NULL,
  `existencias` int(11) NOT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_final`
--

INSERT INTO `producto_final` (`id_productof`, `articulo`, `grosor`, `fecha_promocion`, `disponibilidad`, `existencias`, `responsable`) VALUES
(6, 12, '20', '2020-03-18', 1, 1000, 32),
(7, 13, '30', '2020-03-10', 1, 1000, 32),
(10, 12, '20', '2020-03-18', 1, 2000, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_proceso`
--

CREATE TABLE `producto_proceso` (
  `id_proceso` int(11) NOT NULL,
  `fecha_proceso` date DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `articulo_inicial` int(11) DEFAULT NULL,
  `articulo_inicial2` int(11) DEFAULT NULL,
  `producto_final` int(11) NOT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_proceso`
--

INSERT INTO `producto_proceso` (`id_proceso`, `fecha_proceso`, `estado`, `cantidad`, `articulo_inicial`, `articulo_inicial2`, `producto_final`, `responsable`) VALUES
(9, '2020-03-18', 1, 200, 9, 11, 6, 32),
(16, '2020-03-18', 0, 500, 16, 11, 7, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nit` varchar(45) NOT NULL,
  `razon_social` varchar(45) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nit`, `razon_social`, `telefono`, `email`, `direccion`, `ciudad`) VALUES
(2, 'adf2451223', 'Insumos provervios', '2583694', 'provervios@gmail.com', 'calle13#27', 2),
(3, 'asdf123458', 'Cultivos politea', '12345587', 'politea@gmail.com', 'calle45#24', 5),
(7, '6521jhe0dj7', 'Hilanzas Mategam', '1234567890', 'mate@gmail.com', 'Fontiboncentro', 4),
(9, '127632ghed', 'Insumos Papelmax', '12345678', 'PapelMax@gmail.com', 'calle73sur#9-45-7', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_ventas`
--

CREATE TABLE `registro_ventas` (
  `id_venta` int(11) NOT NULL,
  `fecha_venta` date DEFAULT NULL,
  `reserva` int(11) NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `presio_total` decimal(10,0) DEFAULT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_ventas`
--

INSERT INTO `registro_ventas` (`id_venta`, `fecha_venta`, `reserva`, `observaciones`, `cantidad`, `presio_total`, `responsable`) VALUES
(6, '2020-03-11', 15, 'wertyuiop', 600, '30000', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `fecha_reserva` date DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_total` decimal(10,0) DEFAULT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 0,
  `observaciones` varchar(200) NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `fecha_reserva`, `cantidad`, `precio_total`, `estado`, `observaciones`, `cliente`) VALUES
(15, '2020-03-12', 900, '2000', 0, 'tyui', 45),
(18, '2020-03-11', 2000, '20000', 0, 'kjhkjhasd', 32),
(19, '2020-03-11', 2000, '20000', 0, 'kjhkjhasd', 32),
(26, '2020-03-18', 0, '0', 0, 'wertyuiopvb vbnm', 45),
(27, '2020-03-10', 0, '0', 0, 'qwertyuixg', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumentos`
--

CREATE TABLE `tipodocumentos` (
  `id_tdocumento` int(11) NOT NULL,
  `abrebiatura` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipodocumentos`
--

INSERT INTO `tipodocumentos` (`id_tdocumento`, `abrebiatura`, `nombre`) VALUES
(1, 'CC', 'Cedula de ciudadania'),
(2, 'CE', 'Cedula de Extranjeria'),
(3, 'TI', 'Targeta de Identidad'),
(9, 'CM', 'Cedula Militar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `privilegio` int(2) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `password`, `privilegio`, `fecha_registro`) VALUES
(1, 'Cesar Mejia', 'ucesar', 'cesar@eytoo.com', '1234', 1, '2016-08-18 08:59:20'),
(2, 'Alan Mejia', 'ualan', 'cesar@eytoo.com', '1234', 2, '2016-08-18 08:59:20'),
(5, 'Delectus fugit', 'uadmin', 'dyxisev@yahoo.com', 'Pa$$w0rd!', 2, '2016-10-06 11:30:53'),
(6, 'alan', 'asdasd', 'alan@web.co', '12345', 2, '2016-10-06 11:33:37'),
(7, 'Vsadsad', 'asdad', 'qusy@gmail.com', 'Pa$$w0rd!', 2, '2016-10-06 11:34:30'),
(8, 'Alan Vidales', 'udev', 'avidal@dev.com', '1234', 2, '2016-10-06 11:35:32'),
(9, 'Juan David', 'fagu', 'fagua99@gmail.com', '12345', 1, '2020-06-19 21:38:14'),
(10, 'Samuel Salguero', 'sam', 'ssalguero9@misena.edu.co', 'sam', 2, '2020-06-19 22:04:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indices de la tabla `desechos`
--
ALTER TABLE `desechos`
  ADD PRIMARY KEY (`id_desecho`),
  ADD KEY `fkid_desecho_inventario_general` (`articulo`),
  ADD KEY `fkid_desecho_usuarios` (`responsable`);

--
-- Indices de la tabla `inventario_general`
--
ALTER TABLE `inventario_general`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `fkid_articulo_proveedores` (`proveedor`),
  ADD KEY `fkid_articulo_usuarios` (`responsable`);

--
-- Indices de la tabla `productofinal_reservas`
--
ALTER TABLE `productofinal_reservas`
  ADD PRIMARY KEY (`id_reserva_reserva`,`id_productofina_final`),
  ADD KEY `fkproductofinal_reservas_productofinal` (`id_productofina_final`);

--
-- Indices de la tabla `producto_final`
--
ALTER TABLE `producto_final`
  ADD PRIMARY KEY (`id_productof`),
  ADD KEY `fkid_productof_inventario_general` (`articulo`),
  ADD KEY `fkid_productof_usuarios` (`responsable`),
  ADD KEY `fkid_productof_grosor_hilos` (`grosor`);

--
-- Indices de la tabla `producto_proceso`
--
ALTER TABLE `producto_proceso`
  ADD PRIMARY KEY (`id_proceso`),
  ADD KEY `fkid_proceso_inventario_general` (`articulo_inicial`),
  ADD KEY `fk2id_proceso_inventario_general` (`articulo_inicial2`),
  ADD KEY `fkid_proceso_producto_final` (`producto_final`),
  ADD KEY `fkid_proceso_usuarios` (`responsable`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fknit_ciudades` (`ciudad`);

--
-- Indices de la tabla `registro_ventas`
--
ALTER TABLE `registro_ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fkid_venta_reservas` (`reserva`),
  ADD KEY `fk2id_venta_usuarios` (`responsable`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `fkid_reserva_usuarios` (`cliente`);

--
-- Indices de la tabla `tipodocumentos`
--
ALTER TABLE `tipodocumentos`
  ADD PRIMARY KEY (`id_tdocumento`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `desechos`
--
ALTER TABLE `desechos`
  MODIFY `id_desecho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `inventario_general`
--
ALTER TABLE `inventario_general`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `producto_final`
--
ALTER TABLE `producto_final`
  MODIFY `id_productof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `producto_proceso`
--
ALTER TABLE `producto_proceso`
  MODIFY `id_proceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `registro_ventas`
--
ALTER TABLE `registro_ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
