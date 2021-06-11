-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2021 a las 03:10:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE apartamentos;

USE apartamentos;

--
-- Base de datos: `apartamentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartment`
--

CREATE TABLE `apartment` (
  `id_apartment` int(11) NOT NULL,
  `city` varchar(75) NOT NULL,
  `department` varchar(75) NOT NULL,
  `country` varchar(75) NOT NULL,
  `direction` varchar(200) NOT NULL,
  `maps_ubication` varchar(400) NOT NULL,
  `rooms` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `value_night` int(11) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apartment`
--

INSERT INTO `apartment` (`id_apartment`, `city`, `department`, `country`, `direction`, `maps_ubication`, `rooms`, `image`, `image1`, `image2`, `value_night`, `review`, `active`) VALUES
(4, 'Medellin', 'Antioquia', 'Colombia', 'C|||#|||-|||', 'https://goo.gl/maps/FGw8vPVUFVXCDLre9', 2, 'http://localhost/WebApartamentos/public/uploads/images/1623371199_179dea32a4b449606ea1.jpg', 'http://localhost/WebApartamentos/public/uploads/images/1623371199_9d1b7a647745ed4dbcc0.jpg', 'http://localhost/WebApartamentos/public/uploads/images/1623371199_822e10c2344730ad3282.jpg', 34000, 'Reseña', 1),
(5, 'Medellin2', 'Antioquia2', 'Colombia2', 'C|||#|||-||| Test1', 'https://goo.gl/maps/BXggpMLrFKnEJJNf6', 3, 'http://localhost/WebApartamentos/public/uploads/images/1623372467_e6339e3fdecf3b543fac.jpg', 'http://localhost/WebApartamentos/public/uploads/images/1623372467_41793b55db44273eba86.jpg', 'http://localhost/WebApartamentos/public/uploads/images/1623372467_e1c045665fd6db5ccb78.jpg', 24000, 'ReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaRes', 1),
(6, 'bbb', 'Valle del Cauca', 'Test', 'C|||#|||-||| Test1', 'https://www.google.com', 4, 'http://localhost/WebApartamentos/public/uploads/images/1623372669_2b661ffefd0d4face081.jpg', 'http://localhost/WebApartamentos/public/uploads/images/1623372669_a3a0887a99dd7a1a4f4d.jpg', 'http://localhost/WebApartamentos/public/uploads/images/1623372669_3f7e842713624046c5c5.jpg', 25000, 'ReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaReseñaRes', 1),
(7, 'TestCiudad', 'TestDepartamento', 'TestPais', 'Test direccion', 'https://goo.gl/maps/mZZ1NLuq5pRmEAcQ9', 2, 'http://localhost/WebApartamentos/public/uploads/images/1623208069_6b25a1419981d58e5ab6.png', 'http://localhost/WebApartamentos/public/uploads/images/1623208069_306a24139bd792900974.png', 'http://localhost/WebApartamentos/public/uploads/images/1623208069_dfc8e5da80130c2b90fa.png', 40000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur amet harum quos tempore officia laudantium ut voluptas odit ratione? Veniam architecto sit aliquam in totam saepe natus repudiandae maxime corporis.\r\nLorem ipsum dolor sit amet consectet', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartment_user`
--

CREATE TABLE `apartment_user` (
  `id_apartment_user` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_apartment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apartment_user`
--

INSERT INTO `apartment_user` (`id_apartment_user`, `id_user`, `id_apartment`) VALUES
(6, 1, 4),
(8, 5, 5),
(9, 2, 6),
(10, 5, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `name`, `active`) VALUES
(1, 'Anfitrion', 1),
(2, 'Invitado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `country` varchar(75) NOT NULL,
  `department` varchar(75) NOT NULL,
  `city` varchar(75) NOT NULL,
  `review` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `username`, `full_name`, `email`, `country`, `department`, `city`, `review`, `url_image`, `password`, `active`, `id_rol`) VALUES
(1, 'Sanchez', 'Daniel Sanchez', 'sanchezd0528@gmail.com', 'pais', 'Departamento', 'Medellin', 'hola', 'http://localhost/WebApartamentos/public/uploads/images/1623373452_942364c5d6fd5528674f.png', 'pass', 1, 1),
(2, 'Sanchez01', 'Daniel Sanchez Zapata', 'sanchez@gmail.com', 'pais', 'Departamento', 'Medellin', 'hola q tal', 'http://localhost/WebApartamentos/public/uploads/images/1623373545_4fc5e5ba90eda579d0da.png', 'pass', 1, 1),
(5, 'Test1', 'Test1', 'Test1@gmail.com', 'pais', 'Departamento', 'Ciudad', 'Reseña', 'http://localhost/WebApartamentos/public/uploads/images/1623373349_c468e3dd1e13c4a92961.png', 'Pass12345*', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`id_apartment`);

--
-- Indices de la tabla `apartment_user`
--
ALTER TABLE `apartment_user`
  ADD PRIMARY KEY (`id_apartment_user`),
  ADD KEY `fk_apartmentuser_apartment` (`id_apartment`),
  ADD KEY `fk_apartmentuser_user` (`id_user`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_user_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartment`
--
ALTER TABLE `apartment`
  MODIFY `id_apartment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `apartment_user`
--
ALTER TABLE `apartment_user`
  MODIFY `id_apartment_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apartment_user`
--
ALTER TABLE `apartment_user`
  ADD CONSTRAINT `fk_apartmentuser_apartment` FOREIGN KEY (`id_apartment`) REFERENCES `apartment` (`id_apartment`),
  ADD CONSTRAINT `fk_apartmentuser_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_USER_ROL` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
