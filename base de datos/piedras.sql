-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2024 a las 07:43:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `piedras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Lunar'),
(2, 'nebula'),
(3, 'Stardust'),
(4, 'lunarite'),
(5, 'Twilight'),
(6, 'Moonbeam'),
(7, 'Celestial'),
(8, 'labradorite'),
(9, 'Cuarzo'),
(10, 'obsidian'),
(11, 'Galaxy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `precio` decimal(12,2) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `imagen`, `precio`, `id_categoria`, `descripcion`) VALUES
(1, 'Luna Agate', 'piedra agate 1.jpg', 25000.00, 1, 'Luna Agate (ID: AGT-001): Luna Agate es una piedra lunar única, caracterizada por su belleza serena y sus sutiles vetas en tonos grises y blancos.\r\nCon su elegante apariencia, esta piedra evoca la misteriosa calma de la luna. Luna Agate es altamente valorada\r\npor su rareza y su capacidad para brindar armonía y estabilidad emocional a quien la posee.'),
(7, 'piedra celestial', 'piedra celestial 2.jpg', 350000.00, 7, 'Una hermosa piedra celestial traida de una galaxia recien encontrada por la humanidad. Se dice que de los materiales de este mundo se avanzara en las construcciones de la civilizacion humana!'),
(8, 'piedra cuarzo', 'piedra agate 1.jpg', 999.00, 1, 'la piedra mas barata de una luna de júpiter!'),
(9, 'nebula', 'nebula 004.jpg', 2000.00, 2, 'Nebula es una piedra muy preciosa y destacada en nuestro catalogo a pesar de encontrarse en gran abundancia es unica en su especie y la mas comprada por todos'),
(10, 'Obsidian', 'obsidian 005.jpg', 1500.00, 10, 'Una piedra preciosa y muy cargada de energía, algo común en el sistema solar pero una piedra muy preciada por los buscadores '),
(11, 'jasper', 'jasper 06.jpg', 4000.00, 6, 'Piedra dificil de encontar y una de las valoradas debido a su disponibilidad.'),
(12, 'pearlite', 'pearlite 07.jpg', 1700.00, 1, 'La piedra diamante muy buscada por nuestros buscadores!'),
(13, 'galaxy celenite', 'galaxy celenite 008.jpg', 8000.00, 11, 'Casi imposible de encontrarla pero si la encuentras tienes una piedra de mucho valor para el mercado , se dice que se creo a principios de la creación de la galaxia y que se encontraba en planetas que no eran habitables hasta que llegaron a aferrarse a las lunas'),
(14, '', 'labradorite 009.jpg', 20000.00, 5, 'Piedra premium casi imposible de conseguir en toda la galaxia , solo hubo registros de una sola luna que contenia muy pocas piedras twilight , se dice que tiene energia como para alimentar muchas ciudades por años , una exotica y peligrosa piedra!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES
('German', 'Delgado'),
('demmy', 'demmy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_productos_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
