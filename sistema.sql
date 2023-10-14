-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2023 a las 03:19:14
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`) VALUES
(5, 'vv', 'vbbbbbbbbbbbbbbbbb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `rut` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`rut`, `nombre`, `direccion`, `telefono`) VALUES
(6, 'Yoel', 'Tarija', 7565678),
(7, 'Cristian', 'Tarija', 7565678),
(8, 'Cristian', 'Campo Univercitario', 74638474),
(9, 'Carlos', 'yyyyyyyyyy', 6545435),
(11, 'Yoel', 'EEEEEEEEEEEE', 333333),
(12, 'Yoel', 'Tarija', 7565678);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_ubit` int(11) NOT NULL,
  `nivex` int(11) NOT NULL,
  `ultac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `id_producto`, `id_ubit`, `nivex`, `ultac`) VALUES
(1, 0, 10, 5, '2023-10-11'),
(2, 43, 11, 6, '2023-10-11'),
(3, 42, 10, 7, '2023-11-04'),
(4, 47, 12, 3, '2023-10-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `id_categoria`, `precio`, `id_proveedor`, `imagen`) VALUES
(47, 'taller', 'holahhhhhhhh', 5, '1200.00', 4, '../fotos/phone15.jpg'),
(48, 'hole', 'ggg', 5, '12.00', 4, '../fotos/camisa.png'),
(49, 'jj', 'jj', 4, '88.00', 4, '../fotos/camisa.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `direccion`, `contacto`) VALUES
(4, 'Cristian', 'Campo Univercitario', 74638474),
(5, 'Cristian', 'Tarija', 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`id`, `nombre`, `direccion`) VALUES
(1, '0', '0'),
(2, '0', '0'),
(3, '0', '0'),
(4, '0', '0'),
(5, '0', '0'),
(6, '0', '0'),
(7, '0', '0'),
(8, '0', '0'),
(9, '0', '0'),
(10, 'Cristian', 'wwwwwwwww'),
(11, 'Cristian', 'Tarija'),
(12, 'AA AA', 'wwwwwwwww'),
(13, 'Cristian', 'Tarija'),
(14, 'Cristian', 'Campo Univercitario'),
(15, 'Cristian', 'yyyyyyyyyy'),
(16, 'ddad', 'Campo Univercitario'),
(17, 'Cristian', 'Campo Univercitario ttttttt'),
(18, 'Cristian', 'mmmmmmmmmmmm'),
(19, 'ddad', 'Tarija');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE `transacciones` (
  `id` int(11) NOT NULL,
  `id cliente` int(11) NOT NULL,
  `id producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `rut_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `rut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tiendas`
--
ALTER TABLE `tiendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
