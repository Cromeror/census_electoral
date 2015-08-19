-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-08-2015 a las 21:12:30
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
  `tel_candidato` int(11) NOT NULL,
  `cel_candidato` int(11) NOT NULL,
  `dir_candidato` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`cc_candidato`, `nombre_candidato`, `apellido_candidato`, `id_aspiracion`, `id_partido_politico`, `tel_candidato`, `cel_candidato`, `dir_candidato`) VALUES
(40, 'IVAN JOSE', 'VILLAMIL OCHOA', 1, 1, 0, 0, ''),
(45553, 'juan', 'sasdds', 1, 0, 23, 2, 'asasdds');

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
  `tel_lider` int(11) NOT NULL,
  `cel_lider` int(11) NOT NULL,
  `dir_lider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lider`
--

INSERT INTO `lider` (`cc_lider`, `nombre_lider`, `apellido_lider`, `tel_lider`, `cel_lider`, `dir_lider`) VALUES
(80, 'ivan', 'villamil', 876, 87, 'kjk'),
(81, 'PEDRO', 'MARTINEZ', 78585, 987, 'SFSD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_candidato_lider`
--

CREATE TABLE IF NOT EXISTS `lista_candidato_lider` (
  `id_lista` int(11) NOT NULL,
  `cc_candidato` int(11) NOT NULL,
  `cc_lider` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista_candidato_lider`
--

INSERT INTO `lista_candidato_lider` (`id_lista`, `cc_candidato`, `cc_lider`) VALUES
(1, 40, 80),
(2, 40, 81);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_candidato_votante`
--

CREATE TABLE IF NOT EXISTS `lista_candidato_votante` (
  `id_lista` int(11) NOT NULL,
  `cc_candidato` int(11) NOT NULL,
  `cc_votante` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista_candidato_votante`
--

INSERT INTO `lista_candidato_votante` (`id_lista`, `cc_candidato`, `cc_votante`) VALUES
(1, 5, 23),
(3, 1, 6),
(9, 81, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_votante_lider`
--

CREATE TABLE IF NOT EXISTS `lista_votante_lider` (
  `id_lista` int(11) NOT NULL,
  `cc_votante` int(11) NOT NULL,
  `cc_lider` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista_votante_lider`
--

INSERT INTO `lista_votante_lider` (`id_lista`, `cc_votante`, `cc_lider`) VALUES
(1, 10, 80),
(2, 11, 80),
(3, 12, 80),
(4, 13, 80),
(10, 14, 80);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto_votacion`
--

INSERT INTO `puesto_votacion` (`id_puesto_votacion`, `departamento`, `municipio`, `puesto`, `direccion`, `mesa`) VALUES
(1, 'bolivar', 'cordoba', 'cabecera mucipal', 'ieo', 1),
(2, 'bolivar', 'cordoba', 'cabecera mucipal', 'ieo', 2),
(3, 'bolivar', 'cordoba', 'cabecera mucipal', 'ieo', 3),
(4, 'bolivar', 'cordoba', 'cabecera mucipal', 'ieo', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votante`
--

CREATE TABLE IF NOT EXISTS `votante` (
  `cc_votante` int(11) NOT NULL,
  `nombre_votante` text NOT NULL,
  `apellido_votante` text NOT NULL,
  `tel_votante` int(11) NOT NULL,
  `cel_votante` int(11) NOT NULL,
  `dir_votante` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `votante`
--

INSERT INTO `votante` (`cc_votante`, `nombre_votante`, `apellido_votante`, `tel_votante`, `cel_votante`, `dir_votante`) VALUES
(10, 'victor', 'perez', 6606068, 6606068, 'cartagena'),
(11, 'manuel', 'caballero', 6606068, 6606068, 'turbaco'),
(12, 'ivana', 'gonzales', 6606068, 6606068, 'cordoba'),
(13, 'susana', 'alvear', 6606068, 6606068, 'turbana'),
(14, 'MARIA', 'VILLAMIL', 123, 1234, 'CORDOBA CR 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonificacion`
--

CREATE TABLE IF NOT EXISTS `zonificacion` (
  `id_zonificacion` int(11) NOT NULL,
  `cc_votante` int(11) NOT NULL,
  `id_puesto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zonificacion`
--

INSERT INTO `zonificacion` (`id_zonificacion`, `cc_votante`, `id_puesto`) VALUES
(1, 10, 1),
(2, 11, 2),
(3, 12, 3),
(4, 13, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aspiracion`
--
ALTER TABLE `aspiracion`
  ADD PRIMARY KEY (`id_aspiracion`);

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`cc_candidato`);

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
  ADD UNIQUE KEY `cc_lider` (`cc_lider`);

--
-- Indices de la tabla `lista_candidato_lider`
--
ALTER TABLE `lista_candidato_lider`
  ADD PRIMARY KEY (`id_lista`);

--
-- Indices de la tabla `lista_candidato_votante`
--
ALTER TABLE `lista_candidato_votante`
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
  ADD PRIMARY KEY (`id_puesto_votacion`);

--
-- Indices de la tabla `votante`
--
ALTER TABLE `votante`
  ADD PRIMARY KEY (`cc_votante`);

--
-- Indices de la tabla `zonificacion`
--
ALTER TABLE `zonificacion`
  ADD PRIMARY KEY (`id_zonificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aspiracion`
--
ALTER TABLE `aspiracion`
  MODIFY `id_aspiracion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `lista_candidato_lider`
--
ALTER TABLE `lista_candidato_lider`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `lista_candidato_votante`
--
ALTER TABLE `lista_candidato_votante`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `lista_votante_lider`
--
ALTER TABLE `lista_votante_lider`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `lista_votante_partido`
--
ALTER TABLE `lista_votante_partido`
  MODIFY `id_lista` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `partido_politico`
--
ALTER TABLE `partido_politico`
  MODIFY `id_partido_politico` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `puesto_votacion`
--
ALTER TABLE `puesto_votacion`
  MODIFY `id_puesto_votacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `zonificacion`
--
ALTER TABLE `zonificacion`
  MODIFY `id_zonificacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
