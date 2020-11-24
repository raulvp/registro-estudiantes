-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2020 a las 07:55:04
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
-- Base de datos: `bdestudiante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL,
  `nombcarrera` varchar(50) NOT NULL,
  `codcarrera` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `idest` int(11) NOT NULL,
  `idusu` int(11) NOT NULL,
  `nombreest` varchar(50) NOT NULL,
  `appaterno` varchar(70) DEFAULT NULL,
  `apmaterno` varchar(70) DEFAULT NULL,
  `cedulaid` varchar(15) NOT NULL,
  `fechaNac` date DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correoe` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idest`, `idusu`, `nombreest`, `appaterno`, `apmaterno`, `cedulaid`, `fechaNac`, `direccion`, `sexo`, `telefono`, `correoe`) VALUES
(19, 1, 'Raul', 'Vera', 'Portanda', '5698631', '1987-11-11', 'Av. Capitan Ustariz', 'hombre', 77945625, 'raulvp9@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regestudiante`
--

CREATE TABLE `regestudiante` (
  `idRegEst` int(11) NOT NULL,
  `idest` int(11) NOT NULL,
  `idcarrera` int(11) NOT NULL,
  `idusu` int(11) NOT NULL,
  `fechaReg` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusu` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusu`, `usuario`, `password`) VALUES
(4, 'raul@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idcarrera`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idest`,`idusu`),
  ADD KEY `RefUsuario4` (`idusu`);

--
-- Indices de la tabla `regestudiante`
--
ALTER TABLE `regestudiante`
  ADD PRIMARY KEY (`idRegEst`,`idest`,`idcarrera`,`idusu`),
  ADD KEY `RefEstudiante2` (`idest`,`idusu`),
  ADD KEY `RefCarrera3` (`idcarrera`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idcarrera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `idest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `regestudiante`
--
ALTER TABLE `regestudiante`
  MODIFY `idRegEst` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
