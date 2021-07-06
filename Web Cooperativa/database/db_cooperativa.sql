-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2021 a las 21:37:14
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_cooperativa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartonero`
--

CREATE TABLE `cartonero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `dni` int(9) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `vehiculo` varchar(150) NOT NULL,
  `peso_materiales` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cartonero`
--

INSERT INTO `cartonero` (`id`, `nombre`, `dni`, `direccion`, `vehiculo`, `peso_materiales`) VALUES
(2, 'Carlos Lopez', 30475882, 'Maipú 800', 'auto', NULL),
(3, 'Martina Rodriguez', 37834474, 'Garibaldi 300', 'camioneta', 67),
(6, 'pepe', 125, 'Moreno 21345', 'triciclo con rueditas', NULL),
(7, 'Geralt', 1, 'Rivia', 'Sardinilla', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `entrega` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id`, `tipo`, `entrega`, `imagen`) VALUES
(1, '<b>Botellas de Plástico PET 1:</b> Sólo botellas plásticas transparentes y de color para bebidas, jugo y agua mineral. Identificados como PET 1.', 'Sin restos líquidos u otros materiales en su interior. No se reciben ecoladrillos. Retirar las tapas, disponer en forma separada, plástico específico PP5. Siempre aplastadas, en especial, botellas mayores a 1,5 litros y bidones de agua. Retirar etiquetas plásticas, se recomienda usar cuchillo o tijera para esta labor. Nota, es más fácil hacerlo una vez aplastada la botella. NO SE RECIBEN otros envases PET 1 como botellas de detergente, aceites, vinagre, empaques de pastelería, comida rápida, vasos plásticos y similares.', 'plastico.png'),
(2, '<b>Carton:</b> Envases de cartón liso como cajas de cereal, empaques de licores y cervezas, entre otros Cartulinas, cartón piedra. Cajas de cartón corrugado, empaques de productos.', 'Siempre desarma la caja, usa un cuchillo o tijera, revisa sus uniones, por lo general son muy fáciles de despegar. Con una punta puedes romper fácilmente cintas adhesivas para desarmarlas. No se reciben envases plastificados como de productos congelados o detergente en polvo. Tampoco cajas de huevo y embalajes similares. Revisa que los envases no contengan sobres, restos de comida, cereales o restos de embalajes.', 'carton.png'),
(3, '<b>Aluminio:</b> Latas para bebidas, jugos o cerveza. ', 'Siempre aplastadas, sabias que puedes reducir hasta 8 veces su volumen. Aplastar con el pie, sobre una superficie antideslizante o compactador manual, nunca con las manos puedes sufrir un corte. Sin restos líquidos, dale un pequeño enjuague o déjalas escurrir en el lavaplatos por unos minutos. Evita introducir b', 'aluminio.png'),
(4, '<b>Papel:</b> Diarios, Revistas, Hojas Impresas, Fotocopias y Hojas de Cuaderno.', 'Apilar en forma separada diarios, revistas y hojas impresas. Siempre estirados, evitar armar paquetes o hacer pelotas de papel. Sólo en el caso de hojas blancas trituradas entregar en una bolsa plástica en forma separada. No disponer papeles pequeños, sobres, hojas picadas o despuntes; hojas con tempera, pegamentos u otros elementos contaminantes. Cuadernos sin tapa ni espirales.', 'papel.png'),
(5, '<b>Botellas y frascos de vidrio:</b> Envases de vidrio utilizados para bebidas, jugos, licores y alimentos.', 'SIN RESTOS LIQUIDOS!! O alimentos en su interior (mermeladas, grasas, vinagretas, entre otros). Se recomienda dar un pequeño enjuague y dejar escurrir volteados en el lavaplatos por unos minutos antes de su acopio. Importante, no mezclar con loza, cerámica, ventanas, espejos, vasos, frascos de perfume, estos materiales son contaminantes y deben ser tratados en forma separada.', 'vidrio.png'),
(11, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(30) NOT NULL,
  `franja` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `franja`) VALUES
(6, 'Cami', 'Lopez', 'Urquiza 365', 154321965, 'segundoHorario'),
(7, 'Nicolas', 'Cañada', 'alberdi 661', 123456789, 'primerHorario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `user`, `password`, `admin`) VALUES
(1, 'camilopez@gmail.com', 'camilopez', '$2y$10$IuLcq8idfHlfvFWN3zpg1OfmAUWJ/7iVQcgIyy96Ed1YwWRoGSw4a', 1),
(2, 'cristianamici@gmail.com', 'cristian', '$2y$10$iZDj7CkF1.gLn97Nszdn.eBpphPIKb.QgIOaIhVtUdOqGuY.AEJfy', 0),
(3, 'cristian@gmail.com', 'cristian', '$2y$10$i4Ux.W7DgsfpxzIFt8iv3OGFwu.i15U/FqM5PiWgcKOsyDE4CbLSm', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartonero`
--
ALTER TABLE `cartonero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartonero`
--
ALTER TABLE `cartonero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
