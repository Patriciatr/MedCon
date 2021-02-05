-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2021 a las 23:53:40
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmedcon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id` int(11) NOT NULL,
  `DNI` varchar(13) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Apellidos` varchar(255) DEFAULT NULL,
  `medicoJefe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id`, `DNI`, `Password`, `Nombre`, `Apellidos`, `medicoJefe`) VALUES
(1, '16040618D', 'QBB00OYR6WU', 'Pedro', 'Cortez', '0'),
(2, '16820120G', 'CWV65NQL4MN', 'Lucia', 'Garrison', '0'),
(3, '16440603H', 'IDJ87OKV1CK', 'Isadora', 'Robinson', '1'),
(4, '16370510K', 'FNX45JDV9RE', 'Maia', 'Anderson', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `DNI` varchar(13) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Apellidos` varchar(255) DEFAULT NULL,
  `NumSS` varchar(13) DEFAULT NULL,
  `Sexo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `DNI`, `Password`, `Nombre`, `Apellidos`, `NumSS`, `Sexo`) VALUES
(1, '16541029Q', 'DQE22GUC2TA', 'Brittany', 'Barnes', '169609179214', 'Mujer'),
(2, '16280120W', 'SLN81MJH8LP', 'Roma', 'Perez', '165801229187', 'Hombre'),
(3, '16690206E', 'VHP92GEC7HG', 'Maria', 'nzales', '161909083857', 'Mujer'),
(4, '16730807R', 'OXV90QGB6MS', 'Lorena', 'Jense', '163405128053', 'Mujer'),
(5, '16250403T', 'IQU02MFG8UI', 'Manuel', 'Delacruz', '166707245020', 'Hombre'),
(6, '16241211Y', 'XZI93FAJ2QX', 'Clara', 'Vargas', '169610139215', 'Mujer'),
(7, '16321002U', 'FJM60PHZ4JL', 'Ana', 'Pittma', '162104188459', 'Mujer'),
(8, '16210308I', 'JSL96BKJ9PY', 'Matilda', 'Walto', '165703122696', 'Mujer'),
(9, '16320930O', 'JJN26HZN6D', 'Kiara', 'Marti', '162804306625', 'Mujer'),
(10, '16360120P', 'ZFC60MTE3CF', 'Darrel', 'Larso', '168705024233', 'Mujer'),
(11, '16000916A', 'AAZ51GTN8YV', 'Antonio', 'Hopkins', '162010104772', 'Hombre'),
(12, '16131206S', 'OBM99EBS6W', 'Pedro', 'Kent', '163810223085', 'Hombre'),
(13, '16570422D', 'OWJ52WXL6MH', 'Tad', 'Ochoa', '160208292946', 'Hombre'),
(14, '16260403F', 'OQL04TQN0EE', 'Daniel', 'Garcia', '164402205530', 'Hombre'),
(15, '16471212G', 'BPK87FPC6QS', 'Summer', 'Ma', '169911052554', 'Mujer'),
(16, '16880630H', 'KMV36HIO1QK', 'Lucia', 'Frazier', '163107050498', 'Mujer'),
(17, '16480712J', 'INH45BTW6QW', 'Daniel', 'Glass', '169409171999', 'Hombre'),
(18, '16100301K', 'QNG07TYR2U', 'Carolina', 'Lee', '162909156180', 'Mujer'),
(19, '16950101L', 'VRW31CVS6RG', 'Jackso', 'Small', '164410140117', 'Hombre'),
(20, '16700830Z', 'FLC41LIL1BS', 'Victoria', 'Reilly', '164708245198', 'Mujer'),
(21, '16580529X', 'PXX88AHX6YF', 'Aira', 'Valverde', '167909037256', 'Hombre'),
(22, '16020721C', 'FLZ48WFX1AV', 'Neville', 'Oneal', '165606033180', 'Hombre'),
(23, '16780709V', 'JJY85DUX7SQ', 'Kenia', 'Nielse', '165405196568', 'Mujer'),
(24, '16721201B', 'JLQ72ZWZ5GA', 'Andrea', 'Mendez', '164603192172', 'Mujer'),
(25, '16690928', 'COT76ZXR1IO', 'Taylor', 'Swift', '160909110983', 'Mujer'),
(26, '16430830M', 'MUG05BKI6X', 'Ronaldo', 'Todd', '169407097626', 'Hombre'),
(27, '16120727Q', 'RVO45NIS9JT', 'Mao', 'Lang', '165703298124', 'Hombre'),
(28, '16521226E', 'NAF46AHV5FC', 'Ines', 'Whitehead', '165707266689', 'Mujer'),
(29, '16601022R', 'LHW41ZNV2LK', 'Calvi', 'Colema', '168503242995', 'Hombre'),
(30, '16520527T', 'BXM55GFW2RI', 'Eva', 'Gibbs', '168707280916', 'Mujer'),
(31, '16640714Y', 'SND40PSW6LG', 'Elena', 'Campos', '160906068986', 'Mujer'),
(32, '16871121U', 'LWC72WMJ0NZ', 'Mara', 'Coffey', '167309193790', 'Mujer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
