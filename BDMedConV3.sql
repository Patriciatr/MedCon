-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3305
-- Tiempo de generación: 06-02-2021 a las 23:56:35
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

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
-- Estructura de tabla para la tabla `consultacovid`
--

CREATE TABLE `consultacovid` (
  `ID` varchar(11) NOT NULL,
  `fecha` date NOT NULL,
  `respondida` tinyint(1) NOT NULL,
  `asuntoConsulta` varchar(40) NOT NULL,
  `textoConsulta` varchar(100) NOT NULL,
  `DNIpaciente` varchar(9) NOT NULL,
  `consultaPadre` int(11) DEFAULT NULL,
  `malestar_general` tinyint(1) NOT NULL,
  `temperatura` float NOT NULL,
  `mucosidad` tinyint(1) NOT NULL,
  `dolor_tragar` tinyint(1) NOT NULL,
  `cambio_voz` tinyint(1) NOT NULL,
  `tos` tinyint(1) NOT NULL,
  `falta_aire` tinyint(1) NOT NULL,
  `perdida_olf_gust` tinyint(1) NOT NULL,
  `dolor_muscular` tinyint(1) NOT NULL,
  `diarrea` tinyint(1) NOT NULL,
  `enfermedad_cron` tinyint(1) NOT NULL,
  `contacto_positivo` tinyint(1) NOT NULL,
  `embarazo` tinyint(1) NOT NULL,
  `sanitario_FFAA_SSEE` tinyint(1) NOT NULL,
  `hab_residencia` tinyint(1) NOT NULL,
  `fumador` tinyint(1) NOT NULL,
  `zona_riesgo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultacovid`
--

INSERT INTO `consultacovid` (`ID`, `fecha`, `respondida`, `asuntoConsulta`, `textoConsulta`, `DNIpaciente`, `consultaPadre`, `malestar_general`, `temperatura`, `mucosidad`, `dolor_tragar`, `cambio_voz`, `tos`, `falta_aire`, `perdida_olf_gust`, `dolor_muscular`, `diarrea`, `enfermedad_cron`, `contacto_positivo`, `embarazo`, `sanitario_FFAA_SSEE`, `hab_residencia`, `fumador`, `zona_riesgo`) VALUES
('c1', '2011-01-11', 1, 'Posible COVID', '', '16541029Q', NULL, 0, 39.98, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1, 1, 0, 1, 1, 0),
('c2', '2013-09-24', 0, 'Posible COVID', 'No creo que tenga COVID, creo que es un resfriado, pero por si acaso te consulto', '16250403T', NULL, 0, 41.34, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('c3', '2011-03-24', 0, 'Posible COVID', '', '16241211Y', NULL, 0, 41.65, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0),
('c4', '2016-01-28', 1, 'Posible COVID', '', '16320930O', NULL, 1, 36.35, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1),
('c5', '2014-05-01', 0, 'Posible COVID', 'Creo que tengo COVID', '16360120P', NULL, 1, 37.2, 1, 0, 1, 1, 0, 1, 1, 1, 0, 1, 0, 1, 0, 1, 0),
('c6', '2014-12-03', 0, 'Posible COVID', 'En mi trabajo ha habido un brote de COVID y tengo algun sintoma', '16000916A', NULL, 1, 38.22, 0, 1, 0, 1, 1, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0),
('c7', '2017-03-18', 1, 'Posible COVID', 'No creo que tenga COVID, creo que es un resfriado, pero por si acaso te consulto', '16131206S', NULL, 0, 37.62, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 1, 0, 1),
('c8', '2014-05-01', 1, 'Posible COVID', 'En mi trabajo ha habido un brote de COVID y tengo algun sintoma', '16570422D', NULL, 1, 36.74, 1, 0, 1, 1, 1, 0, 0, 1, 0, 1, 0, 0, 1, 0, 1),
('c9', '2013-10-16', 1, 'Posible COVID', 'Creo que tengo COVID', '16260403F', NULL, 0, 40.97, 0, 0, 0, 1, 1, 0, 1, 1, 0, 1, 1, 1, 0, 0, 1),
('c10', '2018-03-25', 1, 'Posible COVID', '', '16471212G', NULL, 1, 39.12, 0, 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 1, 0, 1),
('c11', '2016-08-16', 1, 'Posible COVID', 'Mi padre paso el COVID recientemente y creo que me lo contagio', '16880630H', NULL, 0, 40.5, 0, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 1, 0, 1, 0),
('c12', '2016-05-11', 1, 'Posible COVID', 'Creo que tengo COVID porque llevo muchos dias enfermo', '16100301K', NULL, 0, 37.83, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1),
('c13', '2018-04-12', 0, 'Posible COVID', 'Creo que tengo COVID porque llevo muchos dias enfermo', '16580529X', NULL, 1, 35.18, 0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0),
('c14', '2016-07-28', 0, 'Posible COVID', 'Creo que tengo COVID', '16020721C', NULL, 0, 37.35, 0, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 0, 1, 1, 0),
('c15', '2011-09-20', 0, 'Posible COVID', '', '16430830M', NULL, 1, 41.2, 1, 1, 0, 1, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 0),
('c16', '2015-04-18', 1, 'Posible COVID', 'Creo que tengo COVID porque llevo muchos dias enfermo', '16601022R', NULL, 0, 40.14, 0, 1, 1, 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1),
('c17', '2018-07-29', 0, 'Posible COVID', '', '16640714Y', NULL, 0, 41.51, 1, 0, 1, 1, 1, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0),
('c18', '2017-10-11', 0, 'Posible COVID', 'No creo que tenga COVID, creo que es un resfriado, pero por si acaso te consulto', '16871121U', NULL, 1, 38.69, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultaotra`
--

CREATE TABLE `consultaotra` (
  `ID` varchar(11) NOT NULL,
  `fecha` date NOT NULL,
  `respondida` tinyint(1) NOT NULL,
  `asuntoConsulta` varchar(40) NOT NULL,
  `textoConsulta` varchar(200) NOT NULL,
  `DNIpaciente` varchar(9) NOT NULL,
  `consultaPadre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultaotra`
--

INSERT INTO `consultaotra` (`ID`, `fecha`, `respondida`, `asuntoConsulta`, `textoConsulta`, `DNIpaciente`, `consultaPadre`) VALUES
('o84', '2018-05-19', 1, 'Analisis sanguineo', 'Me gustaria hacerme una analitica. ¿Tengo que pedir cita para que me la mandes?', '16541029Q', NULL),
('o85', '2019-03-18', 1, 'Dosis pastillas', 'Hola, no recuerdo si el ibuprofeno que me recetaste tiene que ser dos o tres veces al dia.', '16730807R', NULL),
('o86', '2013-03-10', 0, 'Alergia a crema', 'Me mando una crema moratones y me escuece al echarla. ¿Dejo de usarla?', '16730807R', NULL),
('o87', '2010-09-13', 1, 'Prueba alergia', 'Hola, ha llegado la primavera y no paro de estornudar. Nunca he tenido alergia pero creo que ahora puede que tenga. ¿Tengo que pedir cita para hacerme las pruebas?', '16241211Y', NULL),
('o88', '2018-06-26', 0, 'Analisis sanguineo', 'Me gustaria hacerme una analitica. ¿Tengo que pedir cita para que me la mandes?', '16241211Y', NULL),
('o89', '2012-10-19', 0, 'Problema con pastillas', 'Buenas, me mando unas pastillas en la ultima cita, pero en las farmacias me han dicho que esas en concreto estan en produccion y van a tardar. ¿Me las podria cambiar?', '16321002U', NULL),
('o90', '2016-02-17', 0, 'Problema con pastillas', 'Buenas, me mando unas pastillas en la ultima cita, pero he visto que tengo alergia a uno de los ingredientes. ¿Me cambia la receta?', '16320930O', NULL),
('o92', '2015-07-06', 1, 'Esguince', 'Hola, me hice un esguince leve y me dijeron que me quitara el vendaje en 10 dias, lo he hecho pero me sigue doliendo. ¿Voy a que me lo revisen o es normal?', '16360120P', NULL),
('o93', '2011-09-11', 1, 'Analisis sanguineo', 'Me gustaria hacerme una analitica. ¿Tengo que pedir cita para que me la mandes?', '16131206S', NULL),
('o94', '2014-04-09', 1, 'Alergia a crema', 'Me mando una crema moratones y me escuece al echarla. ¿Dejo de usarla?', '16260403F', NULL),
('o95', '2014-10-25', 0, 'Dosis pastillas', 'Hola, no recuerdo si el ibuprofeno que me recetaste tiene que ser dos o tres veces al dia.', '16260403F', NULL),
('o96', '2011-03-20', 0, 'Analisis sanguineo', 'Buenas, hace 10 dias me hice una analitica y querria conocer los resultados.', '16471212G', NULL),
('o97', '2016-12-05', 1, 'Duda medicamentos', 'Hola, me recetaste un antibiotico y tras acabar el tratamiento sigo con sintomas. ¿Vuelvo a pedir cita?', '16880630H', NULL),
('o98', '2015-06-21', 0, 'Problema con pastillas', 'Buenas, me mando unas pastillas en la ultima cita, pero en las farmacias me han dicho que esas en concreto estan en produccion y van a tardar. ¿Me las podria cambiar?', '16100301K', NULL),
('o99', '2012-02-29', 1, 'Analisis sanguineo', 'Me gustaria hacerme una analitica. ¿Tengo que pedir cita para que me la mandes?', '16100301K', NULL),
('o100', '2015-09-19', 0, 'Alergia a crema', 'Me mando una crema moratones y me escuece al echarla. ¿Dejo de usarla?', '16950101L', NULL),
('o101', '2017-05-08', 1, 'Duda medicamentos', 'Hola, me recetaste un antibiotico y tras acabar el tratamiento sigo con sintomas. ¿Vuelvo a pedir cita?', '16950101L', NULL),
('o102', '2019-04-23', 1, 'Analisis sanguineo', 'Me gustaria hacerme una analitica. ¿Tengo que pedir cita para que me la mandes?', '16580529X', NULL),
('o103', '2018-04-03', 1, 'Dosis pastillas', 'Hola, no recuerdo si el ibuprofeno que me recetaste tiene que ser dos o tres veces al dia.', '16020721C', NULL),
('o104', '2017-05-18', 1, 'Alergia a crema', 'Me mando una crema moratones y me escuece al echarla. ¿Dejo de usarla?', '16780709V', NULL),
('o105', '2011-01-03', 1, 'Analisis sanguineo', 'Me gustaria hacerme una analitica. ¿Tengo que pedir cita para que me la mandes?', '16721201B', NULL),
('o106', '2017-10-22', 0, 'Prueba alergia', 'Hola, ha llegado la primavera y no paro de estornudar. Nunca he tenido alergia pero creo que ahora puede que tenga. ¿Tengo que pedir cita para hacerme las pruebas?', '16690928H', NULL),
('o107', '2013-06-25', 1, 'Esguince', 'Hola, me pusieron un vendaje de esguince hace cuatro dias y se me esta despegando. ¿Que hago?', '16120727Q', NULL),
('o108', '2011-01-29', 0, 'Prueba alergia', 'Hola, ha llegado la primavera y no paro de estornudar. Nunca he tenido alergia pero creo que ahora puede que tenga. ¿Tengo que pedir cita para hacerme las pruebas?', '16601022R', NULL),
('o109', '2017-11-08', 1, 'Analisis sanguineo', 'Me gustaria hacerme una analitica. ¿Tengo que pedir cita para que me la mandes?', '16520527T', NULL),
('o110', '2013-07-07', 1, 'Problema con pastillas', 'Buenas, me mando unas pastillas en la ultima cita, pero en las farmacias me han dicho que esas en concreto estan en produccion y van a tardar. ¿Me las podria cambiar?', '16520527T', NULL),
('o111', '2010-11-30', 1, 'Dosis pastillas', 'Hola, no recuerdo si el ibuprofeno que me recetaste tiene que ser dos o tres veces al dia.', '16640714Y', NULL),
('o112', '2012-03-03', 1, 'Analisis sanguineo', 'Hola, ya no me hace falta la analítica', '16100301K', 99),
('o113', '2014-10-25', 0, 'Dosis pastillas', 'me he acordado. ¿Eran dos veces, verdad?', '16260403F', 95);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultaperiodica`
--

CREATE TABLE `consultaperiodica` (
  `ID` varchar(11) NOT NULL,
  `fecha` date NOT NULL,
  `respondida` tinyint(1) NOT NULL,
  `tema` varchar(30) NOT NULL,
  `asuntoConsulta` varchar(40) NOT NULL,
  `textoConsulta` varchar(100) NOT NULL,
  `DNIpaciente` varchar(9) NOT NULL,
  `consultaPadre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultaperiodica`
--

INSERT INTO `consultaperiodica` (`ID`, `fecha`, `respondida`, `tema`, `asuntoConsulta`, `textoConsulta`, `DNIpaciente`, `consultaPadre`) VALUES
('p2', '2014-10-13', 0, 'Renovacion Simvastatina', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Simvastatina', '16541029Q', NULL),
('p3', '2012-06-16', 0, 'Renovacion Ibuprofeno', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Ibuprofeno 600', '16280120W', NULL),
('p4', '2012-01-31', 0, 'Renovacion Enantyum', 'Renovacion prescripcion', '¿Podria renovar mi receta de Enantyum?', '16280120W', NULL),
('p5', '2018-03-10', 0, 'Renovacion Simvastatina', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Simvastatina', '16730807R', NULL),
('p6', '2013-08-22', 0, 'Renovacion Simvastatina', 'Renovacion prescripcion', '¿Podria renovar mi receta de Simvastatina?', '16730807R', NULL),
('p7', '2011-10-22', 0, 'Renovacion Eutirox', 'Renovacion prescripcion', '¿Podria renovar mi receta de Eutirox?', '16250403T', NULL),
('p8', '2017-12-19', 1, 'Renovacion Simvastatina', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Simvastatina', '16241211Y', NULL),
('p9', '2012-02-16', 1, 'Renovacion Propanolol', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Propanolol', '16241211Y', NULL),
('p10', '2016-06-03', 1, 'Renovacion Propanolol', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Propanolol', '16210308I', NULL),
('p11', '2011-05-11', 0, 'Renovacion Metamizol', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Metamizol', '16210308I', NULL),
('p12', '2013-01-16', 0, 'Renovacion Ventolin', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Ventolin', '16320930O', NULL),
('p13', '2012-01-10', 1, 'Renovacion Adiro', 'Renovacion prescripcion', '¿Podria renovar mi receta de Adiro?', '16360120P', NULL),
('p14', '2013-02-04', 0, 'Renovacion Metamizol', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Metamizol', '16000916A', NULL),
('p15', '2017-01-13', 0, 'Renovacion Eutirox', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Eutirox', '16000916A', NULL),
('p16', '2012-06-25', 1, 'Renovacion Metamizol', 'Renovacion prescripcion', '¿Podria renovar mi receta de Metamizol?', '16570422D', NULL),
('p17', '2010-11-01', 1, 'Renovacion Enantyum', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Enantyum', '16260403F', NULL),
('p18', '2018-05-13', 1, 'Renovacion Metamizol', 'Renovacion prescripcion', '¿Podria renovar mi receta de Metamizol?', '16880630H', NULL),
('p19', '2019-01-13', 0, 'Renovacion Eutirox', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Eutirox', '16480712J', NULL),
('p20', '2014-08-25', 0, 'Renovacion Ibuprofeno', 'Renovacion prescripcion', '¿Podria renovar mi receta de Ibuprofeno?', '16480712J', NULL),
('p21', '2011-03-06', 1, 'Renovacion Sintrom', 'Renovacion prescripcion', '¿Podria renovar mi receta de Sintrom?', '16100301K', NULL),
('p22', '2010-08-29', 1, 'Renovacion Enantyum', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Enantyum', '16950101L', NULL),
('p23', '2012-11-04', 1, 'Renovacion Adiro', 'Renovacion prescripcion', '¿Podria renovar mi receta de Adiro?', '16700830Z', NULL),
('p24', '2013-08-05', 0, 'Renovacion Ventolin', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Ventolin', '16700830Z', NULL),
('p25', '2018-04-27', 1, 'Renovacion Omeprazol', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Omeprazol', '16580529X', NULL),
('p26', '2017-06-29', 1, 'Renovacion Eutirox', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Eutirox', '16580529X', NULL),
('p27', '2014-09-14', 1, 'Renovacion Metformina', 'Renovacion prescripcion', '¿Podria renovar mi receta de Metformina?', '16020721C', NULL),
('p28', '2019-04-01', 1, 'Renovacion Enantyum', 'Renovacion prescripcion', '¿Podria renovar mi receta de Enantyum?', '16780709V', NULL),
('p29', '2011-01-22', 1, 'Renovacion Propanolol', 'Renovacion prescripcion', '¿Podria renovar mi receta de Propanolol?', '16780709V', NULL),
('p30', '2015-08-18', 0, 'Renovacion Adiro', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Adiro', '16721201B', NULL),
('p31', '2016-06-09', 0, 'Renovacion Omeprazol', 'Renovacion prescripcion', '¿Podria renovar mi receta de Omeprazol?', '16721201B', NULL),
('p32', '2018-09-01', 0, 'Renovacion Ventolin', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Ventolin', '16690928H', NULL),
('p33', '2016-12-21', 0, 'Renovacion Sintrom', 'Renovacion prescripcion', '¿Podria renovar mi receta de Sintrom?', '16430830M', NULL),
('p34', '2018-03-24', 0, 'Renovacion Omeprazol', 'Renovacion prescripcion', '¿Podria renovar mi receta de Omeprazol?', '16120727Q', NULL),
('p35', '2012-11-02', 0, 'Renovacion Ibuprofeno', 'Renovacion prescripcion', '¿Podria renovar mi receta de Ibuprofeno?', '16601022R', NULL),
('p36', '2011-09-26', 1, 'Renovacion Propanolol', 'Renovacion prescripcion', 'Me gustaria que me renovara mi receta de Propanolol', '16601022R', NULL),
('p37', '2010-12-12', 1, 'Renovacion Ibuprofeno', 'Renovacion prescripcion', '¿Podria renovar mi receta de Ibuprofeno?', '16640714Y', NULL),
('p38', '2011-12-12', 0, 'Renovacion Sintrom', 'Renovacion prescripcion', '¿Podria renovar mi receta de Sintrom?', '16640714Y', NULL);

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
  `Sexo` varchar(255) DEFAULT NULL,
  `Medico` int(11) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `DNI`, `Password`, `Nombre`, `Apellidos`, `NumSS`, `Sexo`, `Medico`, `Direccion`, `Telefono`) VALUES
(1, '16541029Q', 'DQE22GUC2TA', 'Brittany', 'Barnes', '169609179214', 'Mujer', 2, 'Camiño Lugo, 22', '613985765'),
(2, '16280120W', 'SLN81MJH8LP', 'Roma', 'Perez', '165801229187', 'Hombre', 4, 'Avenida Ávalos, 0, Bajo 5º', '975028105'),
(3, '16690206E', 'VHP92GEC7HG', 'Maria', 'nzales', '161909083857', 'Mujer', 1, 'Paseo Fernando, 1, 03º C', '626205478'),
(4, '16730807R', 'OXV90QGB6MS', 'Lorena', 'Jense', '163405128053', 'Mujer', 3, 'Carrer Dávila, 1, 51º D', '927137041'),
(5, '16250403T', 'IQU02MFG8UI', 'Manuel', 'Delacruz', '166707245020', 'Hombre', 3, 'Plaza Javier, 0, 32º E', '651423314'),
(6, '16241211Y', 'XZI93FAJ2QX', 'Clara', 'Vargas', '169610139215', 'Mujer', 4, 'Carrer Garrido, 366, 9º B', '966053523'),
(7, '16321002U', 'FJM60PHZ4JL', 'Ana', 'Pittma', '162104188459', 'Mujer', 2, 'Camiño Villanueva, 552, 67º 1º', '690300940'),
(8, '16210308I', 'JSL96BKJ9PY', 'Matilda', 'Walto', '165703122696', 'Mujer', 1, 'Passeig Puente, 43, 3º D', '697828656'),
(9, '16320930O', 'JJN26HZN6D', 'Kiara', 'Marti', '162804306625', 'Mujer', 2, 'Ruela Arteaga, 20, 02º D', '665866177'),
(10, '16360120P', 'ZFC60MTE3CF', 'Darrel', 'Larso', '168705024233', 'Mujer', 4, 'Paseo Sergio, 9, Bajos', '658538312'),
(11, '16000916A', 'AAZ51GTN8YV', 'Antonio', 'Hopkins', '162010104772', 'Hombre', 1, 'Camino Maestas, 5, 34º C', '930310611'),
(12, '16131206S', 'OBM99EBS6W', 'Pedro', 'Kent', '163810223085', 'Hombre', 3, 'Paseo Alexandra, 30, 6º C', '601343027'),
(13, '16570422D', 'OWJ52WXL6MH', 'Tad', 'Ochoa', '160208292946', 'Hombre', 4, 'Plaza Núñez, 83, 0º 3º', '950559902'),
(14, '16260403F', 'OQL04TQN0EE', 'Daniel', 'Garcia', '164402205530', 'Hombre', 1, 'Ruela Lola, 35, Ático 9º', '658576416'),
(15, '16471212G', 'BPK87FPC6QS', 'Summer', 'Ma', '169911052554', 'Mujer', 3, 'Camiño Rodrigo, 042, 6º 3º', '688631079'),
(16, '16880630H', 'KMV36HIO1QK', 'Lucia', 'Frazier', '163107050498', 'Mujer', 2, 'Paseo Valdez, 131, 9º', '687702588'),
(17, '16480712J', 'INH45BTW6QW', 'Daniel', 'Glass', '169409171999', 'Hombre', 2, 'Calle Víctor, 14, 43º A', '939198380'),
(18, '16100301K', 'QNG07TYR2U', 'Carolina', 'Lee', '162909156180', 'Mujer', 1, 'Rúa Botello, 362, 5º A', '916906181'),
(19, '16950101L', 'VRW31CVS6RG', 'Jackso', 'Small', '164410140117', 'Hombre', 3, 'Calle Biel, 638, 30º E', '679818425'),
(20, '16700830Z', 'FLC41LIL1BS', 'Victoria', 'Reilly', '164708245198', 'Mujer', 4, 'Avenida Galván, 605, Bajo 7º', '990533207'),
(21, '16580529X', 'PXX88AHX6YF', 'Aira', 'Valverde', '167909037256', 'Hombre', 1, 'Plaza Aitor, 480, 1º', '664103383'),
(22, '16020721C', 'FLZ48WFX1AV', 'Neville', 'Oneal', '165606033180', 'Hombre', 2, 'Avenida Guillem, 456, Ático 9º', '615394813'),
(23, '16780709V', 'JJY85DUX7SQ', 'Kenia', 'Nielse', '165405196568', 'Mujer', 3, 'Calle Hernando, 89, 9º C', '603369959'),
(24, '16721201B', 'JLQ72ZWZ5GA', 'Andrea', 'Mendez', '164603192172', 'Mujer', 4, 'Rúa Borrego, 750, 32º F', '931027806'),
(25, '16690928T', 'COT76ZXR1IO', 'Taylor', 'Swift', '160909110983', 'Mujer', 4, 'Ruela Nicolás, 68, Entre suelo 5º', '617616855'),
(26, '16430830M', 'MUG05BKI6X', 'Ronaldo', 'Todd', '169407097626', 'Hombre', 3, 'Plaça Cuevas, 6, Entre suelo 8º', '638036000'),
(27, '16120727Q', 'RVO45NIS9JT', 'Mao', 'Lang', '165703298124', 'Hombre', 2, 'Ronda Arroyo, 375, Ático 1º', '617702850'),
(28, '16521226E', 'NAF46AHV5FC', 'Ines', 'Whitehead', '165707266689', 'Mujer', 1, 'Travesía Nicolás, 5, 6º E', '643479530'),
(29, '16601022R', 'LHW41ZNV2LK', 'Calvi', 'Colema', '168503242995', 'Hombre', 4, 'Carrer Ocasio, 191, 0º C', '668588067'),
(30, '16520527T', 'BXM55GFW2RI', 'Eva', 'Gibbs', '168707280916', 'Mujer', 3, 'Plaza Mata, 359, 4º', '699753000'),
(31, '16640714Y', 'SND40PSW6LG', 'Elena', 'Campos', '160906068986', 'Mujer', 2, 'Plaza Dario, 42, 0º F', '641046231'),
(32, '16871121U', 'LWC72WMJ0NZ', 'Mara', 'Coffey', '167309193790', 'Mujer', 1, 'Praza Hugo, 7, 1º E', '976054437');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `ID` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `texto` varchar(200) NOT NULL,
  `imagenes` varchar(50) DEFAULT NULL,
  `archivos` varchar(50) DEFAULT NULL,
  `DNImedico` int(11) NOT NULL,
  `IDconsulta` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`ID`, `fecha`, `texto`, `imagenes`, `archivos`, `DNImedico`, `IDconsulta`) VALUES
(1, '2011-01-12', 'Presenta síntomas relacionados con el covid. Por favor, aíslese en un cuarto e intente interaccionar lo menos posible con el resto de personas de su entorno. Hoy o mañana recibirá una llamada para ind', NULL, NULL, 2, 'c1'),
(4, '2016-01-29', 'Sus síntomas parecen indicar que no tiene covid. Aún así, haga cuarentena la próxima semana y si tiene fiebre, vuelva a escribir una consulta.', NULL, NULL, 2, 'c4'),
(7, '2017-03-19', 'Presenta síntomas relacionados con el covid. Por favor, aíslese en un cuarto e intente interaccionar lo menos posible con el resto de personas de su entorno. Hoy o mañana recibirá una llamada para ind', NULL, NULL, 3, 'c7'),
(8, '2014-05-01', 'Sus síntomas parecen indicar que no tiene covid. Aún así, haga cuarentena la próxima semana y si tiene fiebre, vuelva a escribir una consulta.', NULL, NULL, 4, 'c8'),
(9, '2013-10-17', 'Presenta síntomas relacionados con el covid. Por favor, aíslese en un cuarto e intente interaccionar lo menos posible con el resto de personas de su entorno. Hoy o mañana recibirá una llamada para ind', NULL, NULL, 1, 'c9'),
(10, '2018-03-25', 'Presenta síntomas relacionados con el covid. Por favor, aíslese en un cuarto e intente interaccionar lo menos posible con el resto de personas de su entorno. Hoy o mañana recibirá una llamada para ind', NULL, NULL, 3, 'c10'),
(11, '2016-08-17', 'Presenta síntomas relacionados con el covid. Por favor, aíslese en un cuarto e intente interaccionar lo menos posible con el resto de personas de su entorno. Hoy o mañana recibirá una llamada para ind', NULL, NULL, 2, 'c11'),
(12, '2016-05-12', 'Presenta síntomas relacionados con el covid. Por favor, aíslese en un cuarto e intente interaccionar lo menos posible con el resto de personas de su entorno. Hoy o mañana recibirá una llamada para ind', NULL, NULL, 1, 'c12'),
(16, '2015-04-19', 'Presenta síntomas relacionados con el covid. Por favor, aíslese en un cuarto e intente interaccionar lo menos posible con el resto de personas de su entorno. Hoy o mañana recibirá una llamada para ind', NULL, NULL, 4, 'c16'),
(19, '2018-05-20', 'Hola, le doy cita para hacer la analítica de sangre para el 2018-05-25 a las 8:45 en su ambulatorio asignado. Le enviaré los resultados de su analítica en una semana', NULL, NULL, 2, 'o84'),
(20, '2018-05-27', 'Hola, le adjunto los resultados de su analítica. Todo está en orden.', NULL, NULL, 2, 'o84'),
(21, '2019-03-22', 'Buenas, he visto su historia clínica y le receté 3 veces al día durante seis días.', NULL, NULL, 3, 'o85'),
(22, '2010-09-13', 'Hola, le doy cita para hacer la prueba de alergía para el 2010-09-15 a las 11:00 en su ambulatorio asignado', NULL, NULL, 4, 'o87'),
(23, '2018-06-27', 'Hola, le doy cita para hacer la analítica de sangre para el 2018-06-30 a las 8:45 en su ambulatorio asignado. Le enviaré los resultados de su analítica en una semana', NULL, NULL, 4, 'o88'),
(24, '2012-10-20', 'Hola, voy a comprobar esa información y buscar otro medicamento adecuado', NULL, NULL, 2, 'o89'),
(25, '2015-07-07', 'Buenas, podría ser un esguince mal curado. Le doy cita para el día 2015-07-07 a las 10:15 en su ambulatorio asignado', NULL, NULL, 4, 'o92'),
(26, '2011-09-12', 'Hola, le doy cita para hacer la analítica de sangre para el 2011-09-16 a las 8:45 en su ambulatorio asignado. Le enviaré los resultados de su analítica en una semana', NULL, NULL, 3, 'o93'),
(27, '2014-04-09', 'Hola, voy a comprobar esa información y buscar otro medicamento adecuado', NULL, NULL, 1, 'o94'),
(28, '2014-04-10', 'Hola, es cierto que el medicamento no está disponible en farmacias. Le he recetado una pomada similar llamada Levitán. Ya está introducida en su tarjeta. Tiene que aplicarse poca cantidad dos veces al', NULL, NULL, 1, 'o94'),
(29, '2011-03-22', 'Hola, le doy cita para hacer la analítica de sangre para el 2011-03-25 a las 8:45 en su ambulatorio asignado. Le enviaré los resultados de su analítica en una semana', NULL, NULL, 3, 'o96'),
(30, '2016-12-06', 'Sí, te doy cita para el día 2016-12-07 a las 12:30', NULL, NULL, 2, 'o97'),
(31, '2012-02-29', 'Hola, le doy cita para hacer la analítica de sangre para el 2012-03-03 a las 8:45 en su ambulatorio asignado. Le enviaré los resultados de su analítica en una semana', NULL, NULL, 1, 'o99'),
(32, '2018-05-27', 'Hola, le adjunto los resultados de su analítica. Todo está en orden.', NULL, NULL, 1, 'o99'),
(33, '2015-09-19', 'Hola, voy a comprobar esa información y buscar otro medicamento adecuado', NULL, NULL, 3, 'o100'),
(34, '2017-05-09', 'Sí, te doy cita para el día 2017-05-10 a las 12:30', NULL, NULL, 3, 'o101'),
(35, '2019-04-25', 'Hola, le doy cita para hacer la analítica de sangre para el 2019-04-29 a las 8:45 en su ambulatorio asignado. Le enviaré los resultados de su analítica en una semana', NULL, NULL, 1, 'o102'),
(36, '2019-04-30', 'Hola, le adjunto los resultados de su analítica. Todo está en orden.', NULL, NULL, 1, 'o102'),
(37, '2018-04-03', 'Buenas, he visto su historia clínica y le receté 3 veces al día durante seis días.', NULL, NULL, 2, 'o103'),
(38, '2017-05-18', 'Hola, voy a comprobar esa información y buscar otro medicamento adecuado', NULL, NULL, 3, 'o104'),
(39, '2017-05-19', 'Hola, es cierto que el medicamento no está disponible en farmacias. Le he recetado una pomada similar llamada Levitán. Ya está introducida en su tarjeta. Tiene que aplicarse poca cantidad dos veces al', NULL, NULL, 3, 'o104'),
(40, '2011-01-04', 'Hola, le doy cita para hacer la analítica de sangre para el 2011-01-10 a las 8:45 en su ambulatorio asignado. Le enviaré los resultados de su analítica en una semana', NULL, NULL, 4, 'o105'),
(41, '2011-01-11', 'Hola, le adjunto los resultados de su analítica. Todo está en orden.', NULL, NULL, 4, 'o105'),
(42, '2013-06-26', 'Buenas, ya debería poder andar con relativa normalidad sin vendaje. Si le duele, compre una tobillera.', NULL, NULL, 2, 'o107'),
(43, '2017-11-08', 'Hola, le doy cita para hacer la analítica de sangre para el 2017-11-14 a las 8:45 en su ambulatorio asignado. Le enviaré los resultados de su analítica en una semana', NULL, NULL, 3, 'o109'),
(44, '2017-11-16', 'Hola, le adjunto los resultados de su analítica. Todo está en orden.', NULL, NULL, 3, 'o109'),
(45, '2013-07-08', 'Hola, voy a comprobar esa información y buscar otro medicamento adecuado', NULL, NULL, 3, 'o110'),
(46, '2013-07-09', 'Hola, es cierto que el medicamento no está disponible en farmacias. Le he recetado unas pastillas similares llamadas Levitán. Ya está introducida en su tarjeta. Tiene que tomar una dos veces al día.', NULL, NULL, 3, 'o110'),
(47, '2010-11-30', 'Buenas, he visto su historia clínica y le receté 3 veces al día durante seis días.', NULL, NULL, 2, 'o111'),
(48, '2012-03-04', 'Hola, le doy cita para hacer la analítica de sangre para el 2012-03-08 a las 8:45 en su ambulatorio asignado. Le enviaré los resultados de su analítica en una semana', NULL, NULL, 1, 'o112'),
(49, '2017-11-16', 'Hola, le adjunto los resultados de su analítica. Todo está en orden.', NULL, NULL, 1, 'o112'),
(50, '2017-12-19', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 4, 'p8'),
(51, '2012-02-16', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 4, 'p9'),
(52, '2016-06-03', 'Buenas, considero oportuno darle cita para ver si es necesario renovar su tratamiento. La cita será el día 2016-06-06 a las 12:15.', NULL, NULL, 1, 'p10'),
(53, '2012-01-10', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 4, 'p13'),
(54, '2012-06-25', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 4, 'p16'),
(55, '2010-11-01', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 1, 'p17'),
(56, '2018-05-13', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 2, 'p18'),
(57, '2011-03-06', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 1, 'p21'),
(58, '2010-08-29', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 3, 'p22'),
(59, '2012-11-04', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 4, 'p23'),
(60, '2018-04-27', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 1, 'p25'),
(61, '2017-06-29', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 1, 'p26'),
(62, '2014-09-14', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 2, 'p27'),
(63, '2019-04-01', 'Buenas, he renovado la receta de su tratamiento.', NULL, NULL, 3, 'p28'),
(64, '2011-01-22', 'Buenas, considero oportuno darle cita para ver si es necesario renovar su tratamiento. La cita será el día 2011-01-24 a las 12:15.', NULL, NULL, 3, 'p29'),
(65, '2011-09-26', 'Buenas, considero oportuno darle cita para ver si es necesario renovar su tratamiento. La cita será el día 2011-09-28 a las 12:15.', NULL, NULL, 4, 'p36'),
(66, '2010-12-12', 'Buenas, considero oportuno darle cita para ver si es necesario renovar su tratamiento. La cita será el día 2010-12-15 a las 12:15.', NULL, NULL, 2, 'p37');

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
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`ID`);

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

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
