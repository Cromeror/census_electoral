-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-08-2015 a las 17:38:18
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `censo_votacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alianza`
--

CREATE TABLE IF NOT EXISTS `alianza` (
  `id_alianza` int(11) NOT NULL,
  `cc_candidato1er` int(11) NOT NULL,
  `cc_candidato2do` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspiracion`
--

CREATE TABLE IF NOT EXISTS `aspiracion` (
  `id_aspiracion` int(11) NOT NULL,
  `aspiracion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aspiracion`
--

INSERT INTO `aspiracion` (`id_aspiracion`, `aspiracion`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE IF NOT EXISTS `candidato` (
  `cc_candidato` int(11) NOT NULL,
  `nombre_candidato` text NOT NULL,
  `apellido_candidato` text NOT NULL,
  `id_aspiracion` int(11) NOT NULL,
  `id_partido_politico` int(11) NOT NULL,
  `tel_candidato` int(11) DEFAULT NULL,
  `cel_candidato` bigint(11) DEFAULT NULL,
  `dir_candidato` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`cc_candidato`, `nombre_candidato`, `apellido_candidato`, `id_aspiracion`, `id_partido_politico`, `tel_candidato`, `cel_candidato`, `dir_candidato`) VALUES
(45553, 'ALVARO ANATONIO', 'RODRIGUEZ BECERRA', 1, 1, 23, 2, 'CORDOBA DONDE ALVARO'),
(1047445333, 'REGULO', 'RODRIGUEZ BEJARANO', 1, 1, 6687621, 3002456721, 'CORDOBA BOLIVAR CALLE 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divipol`
--

CREATE TABLE IF NOT EXISTS `divipol` (
  `id_divipol` int(11) NOT NULL,
  `departamento` text NOT NULL,
  `municipio` text NOT NULL,
  `corregimiento` text
) ENGINE=InnoDB AUTO_INCREMENT=431 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `divipol`
--

INSERT INTO `divipol` (`id_divipol`, `departamento`, `municipio`, `corregimiento`) VALUES
(1, 'BOLIVAR', 'CARTAGENA', 'CARTAGENA'),
(2, 'BOLIVAR', 'CARTAGENA', 'C.E. SANTA CRUZ DEL ISLOTE'),
(3, 'BOLIVAR', 'CARTAGENA', 'BARU'),
(4, 'BOLIVAR', 'CARTAGENA', 'BOCACHICA'),
(5, 'BOLIVAR', 'CARTAGENA', 'CANO DE LORO'),
(6, 'BOLIVAR', 'CARTAGENA', 'ISLA FUERTE'),
(7, 'BOLIVAR', 'CARTAGENA', 'ISLAS DEL ROSARIO'),
(8, 'BOLIVAR', 'CARTAGENA', 'SANTA ANA'),
(9, 'BOLIVAR', 'CARTAGENA', 'TIERRABOMBA'),
(10, 'BOLIVAR', 'CARTAGENA', 'ARROYO GRANDE'),
(11, 'BOLIVAR', 'CARTAGENA', 'ARROYO DE PIEDRA'),
(12, 'BOLIVAR', 'CARTAGENA', 'BAYUNCA'),
(13, 'BOLIVAR', 'CARTAGENA', 'LA BOQUILLA'),
(14, 'BOLIVAR', 'CARTAGENA', 'PONTEZUELA'),
(15, 'BOLIVAR', 'CARTAGENA', 'PUNTA CANOA'),
(16, 'BOLIVAR', 'CARTAGENA', 'PASACABALLOS'),
(17, 'BOLIVAR', 'ACHI', 'ACHI'),
(18, 'BOLIVAR', 'ACHI', 'BOYACA'),
(19, 'BOLIVAR', 'ACHI', 'BUENAVISTA'),
(20, 'BOLIVAR', 'ACHI', 'BUENOS AIRES'),
(21, 'BOLIVAR', 'ACHI', 'CENTRO ALEGRE'),
(22, 'BOLIVAR', 'ACHI', 'EL ALGARROBO'),
(23, 'BOLIVAR', 'ACHI', 'EL GALLEGO'),
(24, 'BOLIVAR', 'ACHI', 'GUACAMAYO'),
(25, 'BOLIVAR', 'ACHI', 'GUAMO'),
(26, 'BOLIVAR', 'ACHI', 'LOS NISPEROS'),
(27, 'BOLIVAR', 'ACHI', 'NUEVA ESPERANZA'),
(28, 'BOLIVAR', 'ACHI', 'PALENQUILLO'),
(29, 'BOLIVAR', 'ACHI', 'PAYANDE'),
(30, 'BOLIVAR', 'ACHI', 'PLAYA ALTA'),
(31, 'BOLIVAR', 'ACHI', 'PUERTO VENECIA'),
(32, 'BOLIVAR', 'ACHI', 'PUERTO ISABEL'),
(33, 'BOLIVAR', 'ACHI', 'PROVIDENCIA'),
(34, 'BOLIVAR', 'ACHI', 'RIONEGRO'),
(35, 'BOLIVAR', 'ACHI', 'SANTA LUCIA'),
(36, 'BOLIVAR', 'ACHI', 'TACUYALTA'),
(37, 'BOLIVAR', 'ACHI', 'TRES CRUCES'),
(38, 'BOLIVAR', 'ARENAL', 'ARENAL'),
(39, 'BOLIVAR', 'ARENAL', 'BUENAVISTA'),
(40, 'BOLIVAR', 'ARENAL', 'CARNIZALA'),
(41, 'BOLIVAR', 'ARENAL', 'SAN RAFAEL'),
(42, 'BOLIVAR', 'ALTOS DEL ROSARIO', 'ALTOS DEL ROSARIO'),
(43, 'BOLIVAR', 'ALTOS DEL ROSARIO', 'EL RUBIO'),
(44, 'BOLIVAR', 'ALTOS DEL ROSARIO', 'LA PACHA'),
(45, 'BOLIVAR', 'ALTOS DEL ROSARIO', 'SAN ISIDRO'),
(46, 'BOLIVAR', 'ALTOS DEL ROSARIO', 'SANTA LUCIA'),
(47, 'BOLIVAR', 'ARJONA', 'ARJONA'),
(48, 'BOLIVAR', 'ARJONA', 'PUERTO BADEL (CANO SALADO)'),
(49, 'BOLIVAR', 'ARJONA', 'GAMBOTE'),
(50, 'BOLIVAR', 'ARJONA', 'ROCHA'),
(51, 'BOLIVAR', 'ARJONA', 'SINCERIN'),
(52, 'BOLIVAR', 'ARROYO HONDO', 'ARROYO HONDO'),
(53, 'BOLIVAR', 'ARROYO HONDO', 'MACHADO'),
(54, 'BOLIVAR', 'ARROYO HONDO', 'MONROY'),
(55, 'BOLIVAR', 'ARROYO HONDO', 'PILON'),
(56, 'BOLIVAR', 'ARROYO HONDO', 'SATO'),
(57, 'BOLIVAR', 'ARROYO HONDO', 'SAN FRANCISCO'),
(58, 'BOLIVAR', 'ARROYO HONDO', 'SOLABANDA'),
(59, 'BOLIVAR', 'BARRANCO DE LOBA', 'BARRANCO DE LOBA'),
(60, 'BOLIVAR', 'BARRANCO DE LOBA', 'LOS CERRITOS'),
(61, 'BOLIVAR', 'BARRANCO DE LOBA', 'RIONUEVO'),
(62, 'BOLIVAR', 'BARRANCO DE LOBA', 'SAN ANTONIO'),
(63, 'BOLIVAR', 'BARRANCO DE LOBA', 'LAS MINAS DE SANTA CRUZ'),
(64, 'BOLIVAR', 'BARRANCO DE LOBA', 'LAS DELICIAS'),
(65, 'BOLIVAR', 'BARRANCO DE LOBA', 'PUEBLITO MEJIA'),
(66, 'BOLIVAR', 'CALAMAR', 'CALAMAR'),
(67, 'BOLIVAR', 'CALAMAR', 'BARRANCA NUEVA'),
(68, 'BOLIVAR', 'CALAMAR', 'BARRANCA VIEJA'),
(69, 'BOLIVAR', 'CALAMAR', 'HATO VIEJO'),
(70, 'BOLIVAR', 'CALAMAR', 'SAN PEDRITO'),
(71, 'BOLIVAR', 'CALAMAR', 'YUCAL'),
(72, 'BOLIVAR', 'CANTAGALLO', 'CANTAGALLO'),
(73, 'BOLIVAR', 'CANTAGALLO', 'BRISAS DE BOLIVAR'),
(74, 'BOLIVAR', 'CANTAGALLO', 'LAVICTORIA'),
(75, 'BOLIVAR', 'CANTAGALLO', 'SAN LORENZO'),
(76, 'BOLIVAR', 'CICUCO', 'CICUCO'),
(77, 'BOLIVAR', 'CICUCO', 'CAMPO SERENO'),
(78, 'BOLIVAR', 'CICUCO', 'LA PENA'),
(79, 'BOLIVAR', 'CICUCO', 'PUEBLO NUEVO'),
(80, 'BOLIVAR', 'CICUCO', 'SAN FRANCISCO DE LOBA'),
(81, 'BOLIVAR', 'CICUCO', 'SAN JAVIER'),
(82, 'BOLIVAR', 'CORDOBA', 'CABECERA MUNICIPAL'),
(83, 'BOLIVAR', 'CORDOBA', 'GUAIMARAL'),
(84, 'BOLIVAR', 'CORDOBA', 'SAN ANDRES'),
(85, 'BOLIVAR', 'CORDOBA', 'SINCELEJITO'),
(86, 'BOLIVAR', 'CORDOBA', 'TACAMOCHO'),
(87, 'BOLIVAR', 'CORDOBA', 'MARTIN ALONZO'),
(88, 'BOLIVAR', 'CORDOBA', 'PUEBLO NUEVO'),
(89, 'BOLIVAR', 'CORDOBA', 'SANTA LUCIA'),
(90, 'BOLIVAR', 'CORDOBA', 'TACAMOCHITO'),
(91, 'BOLIVAR', 'CLEMENCIA', 'CLEMENCIA'),
(92, 'BOLIVAR', 'CLEMENCIA', 'EL PENIQUE'),
(93, 'BOLIVAR', 'CLEMENCIA', 'LAS CARAS'),
(94, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'EL CARMEN DE BOLIVAR'),
(95, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'BAJO GRANDE'),
(96, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'CARACOLI'),
(97, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'CENTRO ALEGRE'),
(98, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'EL HOBO'),
(99, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'EL SALADO'),
(100, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'GUAMANGA'),
(101, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'HATO NUEVO'),
(102, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'JESUS DEL MONTE'),
(103, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'CANZONA'),
(104, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'LA SIERRA'),
(105, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'MACAYEPO'),
(106, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'LAZARO'),
(107, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'ARENAS'),
(108, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'RAIZAL SANTA LUCIA'),
(109, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'SAN CARLOS'),
(110, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'SAN ISIDRO'),
(111, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'SANTO DOMINGO DE MEZA'),
(112, 'BOLIVAR', 'EL CARMEN DE BOLIVAR', 'VERDUM'),
(113, 'BOLIVAR', 'EL GUAMO', 'EL GUAMO'),
(114, 'BOLIVAR', 'EL GUAMO', 'LA ENEA'),
(115, 'BOLIVAR', 'EL GUAMO', 'LATA'),
(116, 'BOLIVAR', 'EL GUAMO', 'NERVITI'),
(117, 'BOLIVAR', 'EL GUAMO', 'ROBLES'),
(118, 'BOLIVAR', 'EL GUAMO', 'TASAJERA'),
(119, 'BOLIVAR', 'HATILLO DE LOBA', 'HATILLO DE LOBA'),
(120, 'BOLIVAR', 'HATILLO DE LOBA', 'CERRO DE LAS AGUADAS'),
(121, 'BOLIVAR', 'HATILLO DE LOBA', 'EL POZON'),
(122, 'BOLIVAR', 'HATILLO DE LOBA', 'JUANA SANCHEZ'),
(123, 'BOLIVAR', 'HATILLO DE LOBA', 'LA RIBONA'),
(124, 'BOLIVAR', 'HATILLO DE LOBA', 'LA VICTORIA'),
(125, 'BOLIVAR', 'HATILLO DE LOBA', 'LAS BRISAS'),
(126, 'BOLIVAR', 'HATILLO DE LOBA', 'PUEBLO NUEVO'),
(127, 'BOLIVAR', 'HATILLO DE LOBA', 'SAN MIGUEL'),
(128, 'BOLIVAR', 'EL PENON', 'EL PENON'),
(129, 'BOLIVAR', 'EL PENON', 'BUENOS AIRES'),
(130, 'BOLIVAR', 'EL PENON', 'CASTANAL'),
(131, 'BOLIVAR', 'EL PENON', 'CHAPETONA'),
(132, 'BOLIVAR', 'EL PENON', 'LA HUMAREDA'),
(133, 'BOLIVAR', 'EL PENON', 'EL JAPON'),
(134, 'BOLIVAR', 'EL PENON', 'PENONCITO'),
(135, 'BOLIVAR', 'MAGANGUE', 'MAGANGUE'),
(136, 'BOLIVAR', 'MAGANGUE', 'BARRANCA DE YUCA'),
(137, 'BOLIVAR', 'MAGANGUE', 'BETANIA'),
(138, 'BOLIVAR', 'MAGANGUE', 'BOCAS DE SAN ANTONIO'),
(139, 'BOLIVAR', 'MAGANGUE', 'CASCAJAL'),
(140, 'BOLIVAR', 'MAGANGUE', 'CEIBAL'),
(141, 'BOLIVAR', 'MAGANGUE', 'COYONGAL'),
(142, 'BOLIVAR', 'MAGANGUE', 'EL CUATRO'),
(143, 'BOLIVAR', 'MAGANGUE', 'GUAZO'),
(144, 'BOLIVAR', 'MAGANGUE', 'HENEQUEN'),
(145, 'BOLIVAR', 'MAGANGUE', 'EMAUS'),
(146, 'BOLIVAR', 'MAGANGUE', 'ISLA GRANDE'),
(147, 'BOLIVAR', 'MAGANGUE', 'JUAN ARIAS'),
(148, 'BOLIVAR', 'MAGANGUE', 'LA PASCUALA'),
(149, 'BOLIVAR', 'MAGANGUE', 'LAS BRISAS'),
(150, 'BOLIVAR', 'MAGANGUE', 'MADRID'),
(151, 'BOLIVAR', 'MAGANGUE', 'PANSEGUITA'),
(152, 'BOLIVAR', 'MAGANGUE', 'PALMARITO'),
(153, 'BOLIVAR', 'MAGANGUE', 'PINALITO'),
(154, 'BOLIVAR', 'MAGANGUE', 'PLAYA DE LAS FLORES'),
(155, 'BOLIVAR', 'MAGANGUE', 'PUERTO KENNEDY'),
(156, 'BOLIVAR', 'MAGANGUE', 'PUNTA DE CARTAGENA'),
(157, 'BOLIVAR', 'MAGANGUE', 'EL RETIRO'),
(158, 'BOLIVAR', 'MAGANGUE', 'PUERTO NARINO'),
(159, 'BOLIVAR', 'MAGANGUE', 'ROMA'),
(160, 'BOLIVAR', 'MAGANGUE', 'SAN ANTONITO'),
(161, 'BOLIVAR', 'MAGANGUE', 'SAN JOSE DE LAS MARTAS'),
(162, 'BOLIVAR', 'MAGANGUE', 'SAN RAFAEL DE CORTINA'),
(163, 'BOLIVAR', 'MAGANGUE', 'SAN SEBASTIAN DE BUENAVISTA'),
(164, 'BOLIVAR', 'MAGANGUE', 'SANTA COITA'),
(165, 'BOLIVAR', 'MAGANGUE', 'SANTA FE'),
(166, 'BOLIVAR', 'MAGANGUE', 'SANTA LUCIA'),
(167, 'BOLIVAR', 'MAGANGUE', 'SANTA MONICA'),
(168, 'BOLIVAR', 'MAGANGUE', 'SANTA PABLA'),
(169, 'BOLIVAR', 'MAGANGUE', 'SITIONUEVO'),
(170, 'BOLIVAR', 'MAGANGUE', 'TACALOA'),
(171, 'BOLIVAR', 'MAGANGUE', 'TACASALUMA'),
(172, 'BOLIVAR', 'MAGANGUE', 'TRES PUNTAS'),
(173, 'BOLIVAR', 'MAGANGUE', 'TOLU'),
(174, 'BOLIVAR', 'MAGANGUE', 'LA VENTURA'),
(175, 'BOLIVAR', 'MAGANGUE', 'SABANETA'),
(176, 'BOLIVAR', 'MAHATES', 'MAHATES'),
(177, 'BOLIVAR', 'MAHATES', 'EVITAR'),
(178, 'BOLIVAR', 'MAHATES', 'GAMERO'),
(179, 'BOLIVAR', 'MAHATES', 'MALAGANA'),
(180, 'BOLIVAR', 'MAHATES', 'MANDINGA'),
(181, 'BOLIVAR', 'MAHATES', 'SAN BASILIO DEL PALENQUE'),
(182, 'BOLIVAR', 'MAHATES', 'SAN JOAQUIN'),
(183, 'BOLIVAR', 'MARGARITA', 'MARGARITA'),
(184, 'BOLIVAR', 'MARGARITA', 'BOTON DE LEIVA'),
(185, 'BOLIVAR', 'MARGARITA', 'CAUSADO'),
(186, 'BOLIVAR', 'MARGARITA', 'CANTERA'),
(187, 'BOLIVAR', 'MARGARITA', 'CANO MONO'),
(188, 'BOLIVAR', 'MARGARITA', 'COROCITO'),
(189, 'BOLIVAR', 'MARGARITA', 'CHILLOA'),
(190, 'BOLIVAR', 'MARGARITA', 'DONA JUANA'),
(191, 'BOLIVAR', 'MARGARITA', 'GUATACA SUR'),
(192, 'BOLIVAR', 'MARGARITA', 'LA MONTANA'),
(193, 'BOLIVAR', 'MARGARITA', 'MAMONCITO'),
(194, 'BOLIVAR', 'MARGARITA', 'SAN JOSE'),
(195, 'BOLIVAR', 'MARGARITA', 'SANDOVAL'),
(196, 'BOLIVAR', 'MARIA LA BAJA', 'MARIA LA BAJA'),
(197, 'BOLIVAR', 'MARIA LA BAJA', 'CORREA'),
(198, 'BOLIVAR', 'MARIA LA BAJA', 'EL NISPERO'),
(199, 'BOLIVAR', 'MARIA LA BAJA', 'FLAMENCO'),
(200, 'BOLIVAR', 'MARIA LA BAJA', 'LOS BELLOS'),
(201, 'BOLIVAR', 'MARIA LA BAJA', 'MAMPUJAN'),
(202, 'BOLIVAR', 'MARIA LA BAJA', 'MATUYA'),
(203, 'BOLIVAR', 'MARIA LA BAJA', 'NUEVA FLORIDA'),
(204, 'BOLIVAR', 'MARIA LA BAJA', 'NANGUMA'),
(205, 'BOLIVAR', 'MARIA LA BAJA', 'RETIRO NUEVO'),
(206, 'BOLIVAR', 'MARIA LA BAJA', 'SAN JOSE DEL PLAYON'),
(207, 'BOLIVAR', 'MARIA LA BAJA', 'SAN PABLO'),
(208, 'BOLIVAR', 'MONTECRISTO', 'MONTECRISTO'),
(209, 'BOLIVAR', 'MONTECRISTO', 'BETANIA'),
(210, 'BOLIVAR', 'MONTECRISTO', 'CAMPO ALEGRE'),
(211, 'BOLIVAR', 'MONTECRISTO', 'EL PARAISO'),
(212, 'BOLIVAR', 'MONTECRISTO', 'EL DORADO'),
(213, 'BOLIVAR', 'MONTECRISTO', 'PLATANAL'),
(214, 'BOLIVAR', 'MONTECRISTO', 'PUEBLO LINDO'),
(215, 'BOLIVAR', 'MONTECRISTO', 'PUERTO ESPANA'),
(216, 'BOLIVAR', 'MONTECRISTO', 'REGENERACION'),
(217, 'BOLIVAR', 'MONTECRISTO', 'SAN AGUSTIN'),
(218, 'BOLIVAR', 'MONTECRISTO', 'SAN MATEO'),
(219, 'BOLIVAR', 'MONTECRISTO', 'TABURETERA'),
(220, 'BOLIVAR', 'MONTECRISTO', 'VILLA ESPERANZA'),
(221, 'BOLIVAR', 'MONTECRISTO', 'VILLA URIBE'),
(222, 'BOLIVAR', 'MOMPOS', 'MOMPOS'),
(223, 'BOLIVAR', 'MOMPOS', 'CALDERA'),
(224, 'BOLIVAR', 'MOMPOS', 'ANCON'),
(225, 'BOLIVAR', 'MOMPOS', 'CANDELARIA'),
(226, 'BOLIVAR', 'MOMPOS', 'EL CARMEN DE CICUCO'),
(227, 'BOLIVAR', 'MOMPOS', 'EL ROSARIO'),
(228, 'BOLIVAR', 'MOMPOS', 'BOMBA'),
(229, 'BOLIVAR', 'MOMPOS', 'GUAIMARAL'),
(230, 'BOLIVAR', 'MOMPOS', 'GUATACA'),
(231, 'BOLIVAR', 'MOMPOS', 'LA LOBATA'),
(232, 'BOLIVAR', 'MOMPOS', 'LA RINCONADA'),
(233, 'BOLIVAR', 'MOMPOS', 'LA JAGUA'),
(234, 'BOLIVAR', 'MOMPOS', 'LA TRAVESIA'),
(235, 'BOLIVAR', 'MOMPOS', 'LAS BOQUILLAS'),
(236, 'BOLIVAR', 'MOMPOS', 'LOMA DE SIMON'),
(237, 'BOLIVAR', 'MOMPOS', 'LOS PINONES'),
(238, 'BOLIVAR', 'MOMPOS', 'PUEBLO NUEVO'),
(239, 'BOLIVAR', 'MOMPOS', 'SAN IGNACIO'),
(240, 'BOLIVAR', 'MOMPOS', 'SAN LUIS'),
(241, 'BOLIVAR', 'MOMPOS', 'SAN NICOLAS'),
(242, 'BOLIVAR', 'MOMPOS', 'SANTA CRUZ'),
(243, 'BOLIVAR', 'MOMPOS', 'SANTA ELENA'),
(244, 'BOLIVAR', 'MOMPOS', 'SANTA ROSA'),
(245, 'BOLIVAR', 'MOMPOS', 'SANTA TERESITA'),
(246, 'BOLIVAR', 'MOMPOS', 'VILLANUEVA'),
(247, 'BOLIVAR', 'MORALES', 'MORALES'),
(248, 'BOLIVAR', 'MORALES', 'BOCA DE LA HONDA'),
(249, 'BOLIVAR', 'MORALES', 'BODEGA CENTRAL'),
(250, 'BOLIVAR', 'MORALES', 'EL DIQUE'),
(251, 'BOLIVAR', 'MORALES', 'CORCOBADO'),
(252, 'BOLIVAR', 'MORALES', 'LA PALMA'),
(253, 'BOLIVAR', 'MORALES', 'LA ESMERALDA'),
(254, 'BOLIVAR', 'MORALES', 'LAS PAILAS'),
(255, 'BOLIVAR', 'MORALES', 'MICOAHUMADO'),
(256, 'BOLIVAR', 'MORALES', 'MINA GALLO'),
(257, 'BOLIVAR', 'MORALES', 'PAREDES DE ORORIA'),
(258, 'BOLIVAR', 'NOROSI', 'NOROSI'),
(259, 'BOLIVAR', 'NOROSI', 'BUENA SENA'),
(260, 'BOLIVAR', 'NOROSI', 'CASA DE BARRO'),
(261, 'BOLIVAR', 'NOROSI', 'OLIVARES'),
(262, 'BOLIVAR', 'NOROSI', 'SANTA ELENA'),
(263, 'BOLIVAR', 'NOROSI', 'MINA BRISA'),
(264, 'BOLIVAR', 'PINILLOS', 'PINILLOS'),
(265, 'BOLIVAR', 'PINILLOS', 'ARMENIA'),
(266, 'BOLIVAR', 'PINILLOS', 'BUENOS AIRES'),
(267, 'BOLIVAR', 'PINILLOS', 'EL LIBANO'),
(268, 'BOLIVAR', 'PINILLOS', 'LA RUFINA'),
(269, 'BOLIVAR', 'PINILLOS', 'LA UNION'),
(270, 'BOLIVAR', 'PINILLOS', 'LAS CONCHITAS'),
(271, 'BOLIVAR', 'PINILLOS', 'LAS FLORES'),
(272, 'BOLIVAR', 'PINILLOS', 'LA UNION (CABECERA)'),
(273, 'BOLIVAR', 'PINILLOS', 'LA VICTORIA'),
(274, 'BOLIVAR', 'PINILLOS', 'MANTEQUERA'),
(275, 'BOLIVAR', 'PINILLOS', 'NICARAGUA'),
(276, 'BOLIVAR', 'PINILLOS', 'PALENQUITO'),
(277, 'BOLIVAR', 'PINILLOS', 'PALOMINO'),
(278, 'BOLIVAR', 'PINILLOS', 'PUERTO LOPEZ'),
(279, 'BOLIVAR', 'PINILLOS', 'PUERTO NUEVO'),
(280, 'BOLIVAR', 'PINILLOS', 'PUERTO BELLO'),
(281, 'BOLIVAR', 'PINILLOS', 'SANTA COA'),
(282, 'BOLIVAR', 'PINILLOS', 'SAN FRANCISCO'),
(283, 'BOLIVAR', 'PINILLOS', 'SANTA ELENA (EL ESTOPAL)'),
(284, 'BOLIVAR', 'PINILLOS', 'SANTA ROSA'),
(285, 'BOLIVAR', 'PINILLOS', 'TAPOA'),
(286, 'BOLIVAR', 'PINILLOS', 'VIDA TRANQUILA'),
(287, 'BOLIVAR', 'PINILLOS', 'LOS LIMONES'),
(288, 'BOLIVAR', 'PINILLOS', 'MONTECELIO'),
(289, 'BOLIVAR', 'REGIDOR', 'REGIDOR'),
(290, 'BOLIVAR', 'REGIDOR', 'EL PINAL'),
(291, 'BOLIVAR', 'REGIDOR', 'LOS CAIMANES'),
(292, 'BOLIVAR', 'REGIDOR', 'SAN ANTONIO'),
(293, 'BOLIVAR', 'REGIDOR', 'SAN CAYETANO'),
(294, 'BOLIVAR', 'REGIDOR', 'SANTA TERESA'),
(295, 'BOLIVAR', 'RIOVIEJO', 'RIOVIEJO'),
(296, 'BOLIVAR', 'RIOVIEJO', 'CAMPO ALEGRE'),
(297, 'BOLIVAR', 'RIOVIEJO', 'COBADILLO'),
(298, 'BOLIVAR', 'RIOVIEJO', 'CAIMITAL'),
(299, 'BOLIVAR', 'RIOVIEJO', 'HATILLO'),
(300, 'BOLIVAR', 'RIOVIEJO', 'MACEDONIA'),
(301, 'BOLIVAR', 'SAN ESTANISLAO', 'SAN ESTANISLAO'),
(302, 'BOLIVAR', 'SAN ESTANISLAO', 'BAYANO'),
(303, 'BOLIVAR', 'SAN ESTANISLAO', 'LAS PIEDRAS'),
(304, 'BOLIVAR', 'SAN CRISTOBAL', 'SAN CRISTOBAL'),
(305, 'BOLIVAR', 'SAN CRISTOBAL', 'HIGUERETAL'),
(306, 'BOLIVAR', 'SAN FERNANDO', 'SAN FERNANDO'),
(307, 'BOLIVAR', 'SAN FERNANDO', 'GUASIMAL'),
(308, 'BOLIVAR', 'SAN FERNANDO', 'EL PALMAR'),
(309, 'BOLIVAR', 'SAN FERNANDO', 'EL GATO'),
(310, 'BOLIVAR', 'SAN FERNANDO', 'MENCHIQUEJO'),
(311, 'BOLIVAR', 'SAN FERNANDO', 'JOLON'),
(312, 'BOLIVAR', 'SAN FERNANDO', 'PORVENIR'),
(313, 'BOLIVAR', 'SAN FERNANDO', 'PUNTA DE HORNOS'),
(314, 'BOLIVAR', 'SAN FERNANDO', 'SANTA ROSA'),
(315, 'BOLIVAR', 'SAN FERNANDO', 'EL CONTADERO'),
(316, 'BOLIVAR', 'SAN FERNANDO', 'LA GUADUA'),
(317, 'BOLIVAR', 'SAN FERNANDO', 'LAS CUEVAS'),
(318, 'BOLIVAR', 'SAN FERNANDO', 'PAMPANILLO'),
(319, 'BOLIVAR', 'SAN JACINTO', 'SAN JACINTO'),
(320, 'BOLIVAR', 'SAN JACINTO', 'ARENAS'),
(321, 'BOLIVAR', 'SAN JACINTO', 'BAJO GRANDE'),
(322, 'BOLIVAR', 'SAN JACINTO', 'EL PARAISO'),
(323, 'BOLIVAR', 'SAN JACINTO', 'LAS CHARQUITAS'),
(324, 'BOLIVAR', 'SAN JACINTO', 'LAS PALMAS'),
(325, 'BOLIVAR', 'SAN JACINTO', 'LAS MERCEDES'),
(326, 'BOLIVAR', 'SAN JACINTO', 'SAN CRISTOBAL'),
(327, 'BOLIVAR', 'SAN JACINTO DEL CAUCA', 'SAN JACINTO DEL CAUCA'),
(328, 'BOLIVAR', 'SAN JACINTO DEL CAUCA', 'ASTILLEROS'),
(329, 'BOLIVAR', 'SAN JACINTO DEL CAUCA', 'BERMUDEZ'),
(330, 'BOLIVAR', 'SAN JACINTO DEL CAUCA', 'CAIMETAL'),
(331, 'BOLIVAR', 'SAN JACINTO DEL CAUCA', 'GALINDO'),
(332, 'BOLIVAR', 'SAN JACINTO DEL CAUCA', 'LA RAYA'),
(333, 'BOLIVAR', 'SAN JACINTO DEL CAUCA', 'TENCHE'),
(334, 'BOLIVAR', 'SAN JACINTO DEL CAUCA', 'MEJICO'),
(335, 'BOLIVAR', 'SAN JUAN NEPOMUCENO', 'SAN JUAN NEPOMUCENO'),
(336, 'BOLIVAR', 'SAN JUAN NEPOMUCENO', 'CORRALITO'),
(337, 'BOLIVAR', 'SAN JUAN NEPOMUCENO', 'SAN PEDRO CONSOLADO'),
(338, 'BOLIVAR', 'SAN JUAN NEPOMUCENO', 'LA HAYA'),
(339, 'BOLIVAR', 'SAN JUAN NEPOMUCENO', 'SAN JOSE DEL PENON'),
(340, 'BOLIVAR', 'SAN JUAN NEPOMUCENO', 'SAN AGUSTIN'),
(341, 'BOLIVAR', 'SAN JUAN NEPOMUCENO', 'SAN CAYETANO'),
(342, 'BOLIVAR', 'SAN MARTIN DE LOBA', 'SAN MARTIN DE LOBA'),
(343, 'BOLIVAR', 'SAN MARTIN DE LOBA', 'CHIMI'),
(344, 'BOLIVAR', 'SAN MARTIN DE LOBA', 'EL VARAL'),
(345, 'BOLIVAR', 'SAN MARTIN DE LOBA', 'PAPAYAL'),
(346, 'BOLIVAR', 'SAN MARTIN DE LOBA', 'PLAYITAS'),
(347, 'BOLIVAR', 'SAN MARTIN DE LOBA', 'PUEBLO NVO CERRO DE JULIO'),
(348, 'BOLIVAR', 'SAN PABLO', 'SAN PABLO'),
(349, 'BOLIVAR', 'SAN PABLO', 'CANALETAL'),
(350, 'BOLIVAR', 'SAN PABLO', 'VALLECITO'),
(351, 'BOLIVAR', 'SAN PABLO', 'AGUASUCIA'),
(352, 'BOLIVAR', 'SAN PABLO', 'EL CARMEN'),
(353, 'BOLIVAR', 'SAN PABLO', 'CANABRAVAL'),
(354, 'BOLIVAR', 'SAN PABLO', 'EL SOCORRO'),
(355, 'BOLIVAR', 'SAN PABLO', 'LA VIRGENCITA'),
(356, 'BOLIVAR', 'SAN PABLO', 'POZO AZUL'),
(357, 'BOLIVAR', 'SAN PABLO', 'CERRO AZUL'),
(358, 'BOLIVAR', 'SAN PABLO', 'SANTO DOMINGO'),
(359, 'BOLIVAR', 'SAN PABLO', 'VILLANUEVA'),
(360, 'BOLIVAR', 'SANTA CATALINA', 'SANTA CATALINA'),
(361, 'BOLIVAR', 'SANTA CATALINA', 'PUEBLO NUEVO'),
(362, 'BOLIVAR', 'SANTA CATALINA', 'COLORADO'),
(363, 'BOLIVAR', 'SANTA CATALINA', 'GALERAZAMBA'),
(364, 'BOLIVAR', 'SANTA CATALINA', 'JOBO'),
(365, 'BOLIVAR', 'SANTA CATALINA', 'LOMA DE ARENA'),
(366, 'BOLIVAR', 'SANTA ROSA', 'SANTA ROSA'),
(367, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'SANTA ROSA DEL SUR'),
(368, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'BUENAVISTA'),
(369, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'SAN FRANCISCO'),
(370, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'FATIMA'),
(371, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'LOS ARRAYANES'),
(372, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'LOS CANELOS'),
(373, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'SAN ISIDRO'),
(374, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'SAN JUAN DE RIOGRANDE'),
(375, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'SAN JOSE'),
(376, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'SAN PEDRO FRIO'),
(377, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'SAN LUCAS'),
(378, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'SANTA ISABEL'),
(379, 'BOLIVAR', 'SANTA ROSA DEL SUR', 'VILLA FLOR'),
(380, 'BOLIVAR', 'SIMITI', 'SIMITI'),
(381, 'BOLIVAR', 'SIMITI', 'ANIMAS ALTAS'),
(382, 'BOLIVAR', 'SIMITI', 'ANIMAS BAJAS'),
(383, 'BOLIVAR', 'SIMITI', 'CAMPO PALLARES'),
(384, 'BOLIVAR', 'SIMITI', 'EL DIAMANTE'),
(385, 'BOLIVAR', 'SIMITI', 'EL PARAISO'),
(386, 'BOLIVAR', 'SIMITI', 'EL GARZAL'),
(387, 'BOLIVAR', 'SIMITI', 'LAS BRISAS'),
(388, 'BOLIVAR', 'SIMITI', 'ORORIA'),
(389, 'BOLIVAR', 'SIMITI', 'MONTERREY'),
(390, 'BOLIVAR', 'SIMITI', 'SAN BLAS'),
(391, 'BOLIVAR', 'SIMITI', 'SAN JOAQUIN'),
(392, 'BOLIVAR', 'SIMITI', 'SAN LUIS'),
(393, 'BOLIVAR', 'SIMITI', 'SANTA LUCIA'),
(394, 'BOLIVAR', 'SIMITI', 'VERACRUZ (CERRO DE BURGOS)'),
(395, 'BOLIVAR', 'SOPLAVIENTO', 'SOPLAVIENTO'),
(396, 'BOLIVAR', 'TALAIGUA NUEVO', 'TALAIGUA NUEVO'),
(397, 'BOLIVAR', 'TALAIGUA NUEVO', 'CANO HONDO'),
(398, 'BOLIVAR', 'TALAIGUA NUEVO', 'EL PORVENIR'),
(399, 'BOLIVAR', 'TALAIGUA NUEVO', 'EL VESUBIO'),
(400, 'BOLIVAR', 'TALAIGUA NUEVO', 'LAS MARIAS'),
(401, 'BOLIVAR', 'TALAIGUA NUEVO', 'LOS MANGOS'),
(402, 'BOLIVAR', 'TALAIGUA NUEVO', 'PATICO'),
(403, 'BOLIVAR', 'TALAIGUA NUEVO', 'PENON DE DURAN'),
(404, 'BOLIVAR', 'TALAIGUA NUEVO', 'SAN MARTIN (LA LADERA DE TALA'),
(405, 'BOLIVAR', 'TALAIGUA NUEVO', 'TUPE'),
(406, 'BOLIVAR', 'TALAIGUA NUEVO', 'TALAIGUA VIEJO'),
(407, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'TIQUISIO (PTO. RICO)'),
(408, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'AGUAS NEGRAS'),
(409, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'BOCAS DE SOLIS'),
(410, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'COLORADO'),
(411, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'DOS BOCAS'),
(412, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'EL SUDAN'),
(413, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'LA VENTURA'),
(414, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'MINA SECA'),
(415, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'PALMA ESTERAL'),
(416, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'PUERTO COCA'),
(417, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'QUEBRADA DEL MEDIO'),
(418, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'SABANAS DEL FIRME'),
(419, 'BOLIVAR', 'TIQUISIO (PTO. RICO)', 'TIQUISIO NUEVO'),
(420, 'BOLIVAR', 'TURBACO', 'TURBACO'),
(421, 'BOLIVAR', 'TURBACO', 'CANAVERAL'),
(422, 'BOLIVAR', 'TURBACO', 'CHIQUITO'),
(423, 'BOLIVAR', 'TURBANA', 'TURBANA'),
(424, 'BOLIVAR', 'TURBANA', 'BALLESTAS'),
(425, 'BOLIVAR', 'TURBANA', 'COVADO - PUEBLO NUEVO'),
(426, 'BOLIVAR', 'VILLANUEVA', 'VILLANUEVA'),
(427, 'BOLIVAR', 'VILLANUEVA', 'CIPACOA'),
(428, 'BOLIVAR', 'VILLANUEVA', 'ALGARROBO'),
(429, 'BOLIVAR', 'ZAMBRANO', 'ZAMBRANO'),
(430, 'BOLIVAR', 'ZAMBRANO', 'JESUS DEL RIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_anulada`
--

CREATE TABLE IF NOT EXISTS `inscripcion_anulada` (
  `id_inscripcion` int(11) NOT NULL,
  `cc_votante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_candidato`
--

CREATE TABLE IF NOT EXISTS `inscripcion_candidato` (
  `id_inscripcion` int(11) NOT NULL,
  `cc_candidato` int(11) NOT NULL,
  `id_aspiracion` int(11) NOT NULL,
  `id_partido` int(11) NOT NULL,
  `departamento` text NOT NULL,
  `municipio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripcion_candidato`
--

INSERT INTO `inscripcion_candidato` (`id_inscripcion`, `cc_candidato`, `id_aspiracion`, `id_partido`, `departamento`, `municipio`) VALUES
(0, 40, 1, 1, 'BOLIVAR', 'CORDOBA'),
(1, 40, 1, 1, 'BOLIVAR', 'CORDOBA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lider`
--

CREATE TABLE IF NOT EXISTS `lider` (
  `cc_lider` int(11) NOT NULL,
  `nombre_lider` text NOT NULL,
  `apellido_lider` text NOT NULL,
  `tel_lider` int(11) DEFAULT NULL,
  `cel_lider` bigint(11) DEFAULT NULL,
  `dir_lider` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lider`
--

INSERT INTO `lider` (`cc_lider`, `nombre_lider`, `apellido_lider`, `tel_lider`, `cel_lider`, `dir_lider`) VALUES
(80, 'LUISA', 'TRUJILLO', 876, 87, 'kjk'),
(81, 'PEDRO', 'MARTINEZ', 78585, 987, 'SFSD'),
(82, 'VICTOR', 'ZARAGOCILLA', 986, 987, 'knjbkjn'),
(1047445333, 'REGULO', 'RODRIGUEZ BEJARANO', 6687621, 3002456721, 'CORDOBA BOLIVAR CALLE 3'),
(1049453283, 'IVAN JOSE', 'VILLAMIL OCHOA', 6633790, 3002493031, 'CARTAGENA MANGA'),
(1049453668, 'AMARANTO TERCERO', 'VILLAMIL OCHOA', 6606068, 3003471149, 'CARTAGENA, BARRIO MANGA, EDIFICIO ACIPAYA APT 201');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_candidato_lider`
--

CREATE TABLE IF NOT EXISTS `lista_candidato_lider` (
  `id_lista` int(11) NOT NULL,
  `cc_candidato` int(11) NOT NULL,
  `cc_lider` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista_candidato_lider`
--

INSERT INTO `lista_candidato_lider` (`id_lista`, `cc_candidato`, `cc_lider`) VALUES
(1, 1047445333, 80),
(2, 1047445333, 81),
(3, 1047445333, 82),
(5, 1047445333, 1049453668),
(7, 1047445333, 1047445333),
(8, 1047445333, 1049453283);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_votante_lider`
--

CREATE TABLE IF NOT EXISTS `lista_votante_lider` (
  `id_lista` int(11) NOT NULL,
  `cc_votante` int(11) NOT NULL,
  `cc_lider` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista_votante_lider`
--

INSERT INTO `lista_votante_lider` (`id_lista`, `cc_votante`, `cc_lider`) VALUES
(1, 10, 1049453283),
(2, 11, 1049453283),
(3, 12, 80),
(4, 13, 1049453283),
(10, 14, 1049453283),
(11, 15, 81),
(12, 16, 81),
(13, 17, 1049453283);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_votante_partido`
--

CREATE TABLE IF NOT EXISTS `lista_votante_partido` (
  `id_lista` int(11) NOT NULL,
  `cc_votante` int(11) NOT NULL,
  `id_partido` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista_votante_partido`
--

INSERT INTO `lista_votante_partido` (`id_lista`, `cc_votante`, `id_partido`) VALUES
(1, 1, 2),
(2, 4, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(11) NOT NULL,
  `cc_usuario` int(11) NOT NULL,
  `contrasena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `cc_usuario`, `contrasena`) VALUES
(1, 40, 123),
(2, 1047445333, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido_politico`
--

CREATE TABLE IF NOT EXISTS `partido_politico` (
  `id_partido_politico` int(11) NOT NULL,
  `partido_politico` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partido_politico`
--

INSERT INTO `partido_politico` (`id_partido_politico`, `partido_politico`) VALUES
(1, 'PARTIDO LIBERAL COLOMBIANO'),
(2, 'PARTIDO CONSERVADOR'),
(3, 'PARTIDO DE U'),
(4, 'ALIANZA VERDE'),
(5, 'PARTIDO DEMOCRATICO'),
(6, 'PARTIDO OPCION CIUDADANA'),
(7, 'PARTIDO POLO DEMOCRATICO ALTERNATIVO'),
(8, 'PARTIDO SOCIAL DE UNIDAD NACIONAL PARTIDO DE LA U'),
(9, 'PARTIDO CAMBIO RADICAL'),
(10, 'PARTIDO ALIANZA SOCIAL INDEPENDIENTE ASI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto_votacion`
--

CREATE TABLE IF NOT EXISTS `puesto_votacion` (
  `id_puesto_votacion` int(11) NOT NULL,
  `departamento` text NOT NULL,
  `municipio` text NOT NULL,
  `puesto` text NOT NULL,
  `direccion` text NOT NULL,
  `mesa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto_votacion`
--

INSERT INTO `puesto_votacion` (`id_puesto_votacion`, `departamento`, `municipio`, `puesto`, `direccion`, `mesa`) VALUES
(1, 'BOLIVAR', 'CORDOBA', 'CABECERA MUNICIPAL', 'I.E.OSWALDO OCHOA BECERRA', 1),
(2, 'BOLIVAR', 'CORDOBA', 'CABECERA MUNICIPAL', 'I.E.OSWALDO OCHOA BECERRA', 2),
(3, 'BOLIVAR', 'CORDOBA', 'CABECERA MUNICIPAL', 'I.E.OSWALDO OCHOA BECERRA', 3),
(4, 'BOLIVAR', 'CORDOBA', 'CABECERA MUNICIPAL', 'I.E.OSWALDO OCHOA BECERRA', 12),
(5, 'BOLIVAR', 'CORDOBA', 'TACAMOCHO', 'TACAMOCHO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votante`
--

CREATE TABLE IF NOT EXISTS `votante` (
  `cc_votante` int(11) NOT NULL,
  `nombre_votante` text NOT NULL,
  `apellido_votante` text NOT NULL,
  `tel_votante` int(11) DEFAULT NULL,
  `cel_votante` bigint(11) DEFAULT NULL,
  `dir_votante` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `votante`
--

INSERT INTO `votante` (`cc_votante`, `nombre_votante`, `apellido_votante`, `tel_votante`, `cel_votante`, `dir_votante`) VALUES
(10, 'VICTOR', 'PEREZ', 6606068, 6606068, 'CARTAGENA'),
(11, 'MANUEL', 'CABALLERO', 6606068, 6606068, 'TURBACO'),
(12, 'IVANA', 'GONZALES', 6606068, 6606068, 'CORDOBA'),
(13, 'SUSANA', 'ALVEAR', 6606068, 6606068, 'TURBANA'),
(14, 'MARIA', 'VILLAMIL', 123, 1234, 'CORDOBA CR 4'),
(15, 'CRISTOBAL', 'ROMERO', 8765, 876, 'KBKJHG'),
(16, 'JESUS', 'ALVEAR', 876, 876, 'JBKJNH'),
(17, 'MARIA', 'OCHOA', 543, 543, 'KBH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonificacion`
--

CREATE TABLE IF NOT EXISTS `zonificacion` (
  `id_zonificacion` int(11) NOT NULL,
  `cc_votante` int(11) NOT NULL,
  `id_puesto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zonificacion`
--

INSERT INTO `zonificacion` (`id_zonificacion`, `cc_votante`, `id_puesto`) VALUES
(1, 10, 1),
(2, 11, 2),
(3, 12, 3),
(4, 13, 4),
(5, 14, 1),
(6, 15, 1),
(7, 16, 1),
(8, 17, 5),
(9, 81, 2),
(10, 80, 1),
(11, 1047445333, 3),
(12, 82, 4),
(13, 1049453668, 3),
(14, 1049453283, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alianza`
--
ALTER TABLE `alianza`
  ADD PRIMARY KEY (`id_alianza`);

--
-- Indices de la tabla `aspiracion`
--
ALTER TABLE `aspiracion`
  ADD PRIMARY KEY (`id_aspiracion`);

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`cc_candidato`),
  ADD UNIQUE KEY `cc_candidato` (`cc_candidato`);

--
-- Indices de la tabla `divipol`
--
ALTER TABLE `divipol`
  ADD PRIMARY KEY (`id_divipol`);

--
-- Indices de la tabla `inscripcion_anulada`
--
ALTER TABLE `inscripcion_anulada`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD UNIQUE KEY `id_inscripcion` (`id_inscripcion`);

--
-- Indices de la tabla `inscripcion_candidato`
--
ALTER TABLE `inscripcion_candidato`
  ADD PRIMARY KEY (`id_inscripcion`);

--
-- Indices de la tabla `lider`
--
ALTER TABLE `lider`
  ADD PRIMARY KEY (`cc_lider`),
  ADD UNIQUE KEY `cc_lider` (`cc_lider`),
  ADD UNIQUE KEY `cc_lider_2` (`cc_lider`);

--
-- Indices de la tabla `lista_candidato_lider`
--
ALTER TABLE `lista_candidato_lider`
  ADD PRIMARY KEY (`id_lista`);

--
-- Indices de la tabla `lista_votante_lider`
--
ALTER TABLE `lista_votante_lider`
  ADD PRIMARY KEY (`id_lista`);

--
-- Indices de la tabla `lista_votante_partido`
--
ALTER TABLE `lista_votante_partido`
  ADD PRIMARY KEY (`id_lista`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `partido_politico`
--
ALTER TABLE `partido_politico`
  ADD PRIMARY KEY (`id_partido_politico`);

--
-- Indices de la tabla `puesto_votacion`
--
ALTER TABLE `puesto_votacion`
  ADD PRIMARY KEY (`id_puesto_votacion`),
  ADD UNIQUE KEY `id_puesto_votacion` (`id_puesto_votacion`);

--
-- Indices de la tabla `votante`
--
ALTER TABLE `votante`
  ADD PRIMARY KEY (`cc_votante`),
  ADD UNIQUE KEY `cc_votante` (`cc_votante`);

--
-- Indices de la tabla `zonificacion`
--
ALTER TABLE `zonificacion`
  ADD PRIMARY KEY (`id_zonificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alianza`
--
ALTER TABLE `alianza`
  MODIFY `id_alianza` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `aspiracion`
--
ALTER TABLE `aspiracion`
  MODIFY `id_aspiracion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `divipol`
--
ALTER TABLE `divipol`
  MODIFY `id_divipol` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=431;
--
-- AUTO_INCREMENT de la tabla `lista_candidato_lider`
--
ALTER TABLE `lista_candidato_lider`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `lista_votante_lider`
--
ALTER TABLE `lista_votante_lider`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `lista_votante_partido`
--
ALTER TABLE `lista_votante_partido`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `partido_politico`
--
ALTER TABLE `partido_politico`
  MODIFY `id_partido_politico` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `puesto_votacion`
--
ALTER TABLE `puesto_votacion`
  MODIFY `id_puesto_votacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `zonificacion`
--
ALTER TABLE `zonificacion`
  MODIFY `id_zonificacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
