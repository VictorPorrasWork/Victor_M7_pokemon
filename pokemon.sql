-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-05-2023 a las 16:41:13
-- Versión del servidor: 8.0.22-0ubuntu0.20.04.3
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenadors`
--

CREATE TABLE `entrenadors` (
  `id_entrenador` int NOT NULL,
  `sobrenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `medalles` int NOT NULL,
  `id_region` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `entrenadors`
--

INSERT INTO `entrenadors` (`id_entrenador`, `sobrenom`, `medalles`, `id_region`) VALUES
(1, 'Master Misty', 10, 1),
(2, 'Champion Ash', 12, 2),
(4, 'Master Gary', 10, 2),
(5, 'Maik Towel', 9, 3),
(27, 'Vincyt', 4, 7),
(28, 'sadcsadsadads', 3, 1),
(35, 'Benifacio', 80, 1),
(36, 'Carlitos', 100, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemons`
--

CREATE TABLE `pokemons` (
  `id` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `tipus` varchar(100) NOT NULL,
  `fase_evolucio` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pokemons`
--

INSERT INTO `pokemons` (`id`, `nom`, `tipus`, `fase_evolucio`) VALUES
(1, 'Pikachu', 'Elèctric', 2),
(2, 'Squirtle', 'Aigua', 1),
(4, 'Charmander', 'Foc', 1),
(5, 'Charmaleon', 'Foc', 2),
(6, 'Charizard', 'Foc', 3),
(7, 'Wartortle', 'Foc', 2),
(8, 'Blastoise', 'Aigua', 3),
(12, 'Venusaur', 'planta', 3),
(13, 'Mewto', 'Psíquic', 1),
(14, 'Pichu', 'Electric', 1),
(16, 'Porigon', 'Normal', 2),
(17, 'Ponyta', 'Foc', 1),
(18, 'Pysduc', 'Aigua', 1),
(19, 'pichua', 'electric', 1),
(25, 'aA', 'Aigua', 2),
(26, 'Lugia', 'Gel', 1),
(27, 'Vedrill', 'Planta', 2),
(28, 'new', 'aigua', 1),
(29, 'bartolo', 'Aigua', 1),
(30, 'aSAS', 'Sinistre', 2),
(32, 'aaaaaaaa', 'planta', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regions`
--

CREATE TABLE `regions` (
  `id_region` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `clima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `regions`
--

INSERT INTO `regions` (`id_region`, `nom`, `clima`) VALUES
(1, 'Kanto', 'solejat'),
(2, 'Johto', 'Nuvolat'),
(3, 'Hoenn', 'Boirina'),
(4, 'Sinnoh', 'plujós'),
(5, 'Kalos', 'nevat'),
(6, 'Jontis', 'solejat'),
(7, 'bano', 'solejat'),
(10, 'Ibiza', 'solejadet'),
(15, 'Koli', 'ventos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `te`
--

CREATE TABLE `te` (
  `id_entrenador` int NOT NULL,
  `id_pokemon` int NOT NULL,
  `id_unico` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `te`
--

INSERT INTO `te` (`id_entrenador`, `id_pokemon`, `id_unico`) VALUES
(4, 13, 8),
(2, 8, 15),
(1, 6, 23),
(27, 6, 33),
(5, 18, 37),
(2, 13, 47),
(5, 16, 48),
(27, 13, 49),
(1, 13, 50),
(36, 1, 51);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nom` varchar(25) NOT NULL,
  `cognoms` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nom`, `cognoms`, `email`, `username`, `password`) VALUES
(1, 'Ash', 'Ketchum', 'ash@gmail.com', 'ash', '2852f697a9f8581725c6fc6a5472a2e5'),
(2, 'Gary', 'Oak', 'Garyoak@gmail.com', 'gary', '03b083fd0aadc8883198881ba88111ab'),
(3, 'Misty', 'Kasumi', 'mistykasumi@gmail.com', 'misty', 'c0f5d9ba28ac255953928a67f0ffe4de'),
(15, 'sadsadad', 'yututu', 'asdas', 'asdasd', '8204eb5040bfdec8f97af5ba47154e57'),
(16, 'bbbbbbbb', 'wwwww', 'raaaaaa@gmail.com', 'ggggggg', '71f396e4134a1160d90bb1439876df31'),
(17, 'sdsadada', 'asdasdad', 'j@gmail.com', 'ssssss', '0b4e7a0e5fe84ad35fb5f95b9ceeac79');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrenadors`
--
ALTER TABLE `entrenadors`
  ADD PRIMARY KEY (`id_entrenador`),
  ADD KEY `Relacion1AN` (`id_region`);

--
-- Indices de la tabla `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id_region`);

--
-- Indices de la tabla `te`
--
ALTER TABLE `te`
  ADD PRIMARY KEY (`id_unico`),
  ADD KEY `id_entrenadors` (`id_entrenador`),
  ADD KEY `id_pokemons` (`id_pokemon`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrenadors`
--
ALTER TABLE `entrenadors`
  MODIFY `id_entrenador` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `regions`
--
ALTER TABLE `regions`
  MODIFY `id_region` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `te`
--
ALTER TABLE `te`
  MODIFY `id_unico` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrenadors`
--
ALTER TABLE `entrenadors`
  ADD CONSTRAINT `Relacion1AN` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id_region`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `te`
--
ALTER TABLE `te`
  ADD CONSTRAINT `te_ibfk_1` FOREIGN KEY (`id_entrenador`) REFERENCES `entrenadors` (`id_entrenador`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `te_ibfk_2` FOREIGN KEY (`id_pokemon`) REFERENCES `pokemons` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
