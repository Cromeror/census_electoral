-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 19-08-2015 a las 16:31:51
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `censo_votacion`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `aspiracion`
-- 

CREATE TABLE `aspiracion` (
  `id_aspiracion` int(11) NOT NULL auto_increment,
  `aspiracion` text NOT NULL,
  PRIMARY KEY  (`id_aspiracion`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Volcar la base de datos para la tabla `aspiracion`
-- 

INSERT INTO `aspiracion` VALUES (1, '');
INSERT INTO `aspiracion` VALUES (2, '');
INSERT INTO `aspiracion` VALUES (3, '');
INSERT INTO `aspiracion` VALUES (4, '');
INSERT INTO `aspiracion` VALUES (5, '');
INSERT INTO `aspiracion` VALUES (6, '');
INSERT INTO `aspiracion` VALUES (7, '');
INSERT INTO `aspiracion` VALUES (8, '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `candidato`
-- 

CREATE TABLE `candidato` (
  `cc_candidato` int(11) NOT NULL,
  `nombre_candidato` text NOT NULL,
  `apellido_candidato` text NOT NULL,
  `id_aspiracion` int(11) NOT NULL,
  `id_partido_politico` int(11) NOT NULL,
  `tel_candidato` int(11) NOT NULL,
  `cel_candidato` int(11) NOT NULL,
  `dir_candidato` text NOT NULL,
  PRIMARY KEY  (`cc_candidato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `candidato`
-- 

INSERT INTO `candidato` VALUES (40, 'IVAN JOSE', 'VILLAMIL OCHOA', 1, 1, 0, 0, '');
INSERT INTO `candidato` VALUES (45553, 'juan', 'sasdds', 1, 0, 23, 2, 'asasdds');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `inscripcion_anulada`
-- 

CREATE TABLE `inscripcion_anulada` (
  `id_inscripcion` int(11) NOT NULL,
  `cc_votante` int(11) NOT NULL,
  PRIMARY KEY  (`id_inscripcion`),
  UNIQUE KEY `id_inscripcion` (`id_inscripcion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `inscripcion_anulada`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `inscripcion_candidato`
-- 

CREATE TABLE `inscripcion_candidato` (
  `id_inscripcion` int(11) NOT NULL,
  `cc_candidato` int(11) NOT NULL,
  `id_aspiracion` int(11) NOT NULL,
  `id_partido` int(11) NOT NULL,
  `departamento` text NOT NULL,
  `municipio` text NOT NULL,
  PRIMARY KEY  (`id_inscripcion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `inscripcion_candidato`
-- 

INSERT INTO `inscripcion_candidato` VALUES (0, 40, 1, 1, 'BOLIVAR', 'CORDOBA');
INSERT INTO `inscripcion_candidato` VALUES (1, 40, 1, 1, 'BOLIVAR', 'CORDOBA');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `lider`
-- 

CREATE TABLE `lider` (
  `cc_lider` int(11) NOT NULL,
  `nombre_lider` text NOT NULL,
  `apellido_lider` text NOT NULL,
  `tel_lider` int(11) NOT NULL,
  `cel_lider` int(11) NOT NULL,
  `dir_lider` text NOT NULL,
  PRIMARY KEY  (`cc_lider`),
  UNIQUE KEY `cc_lider` (`cc_lider`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `lider`
-- 

INSERT INTO `lider` VALUES (80, 'ivan', 'villamil', 876, 87, 'kjk');
INSERT INTO `lider` VALUES (81, 'PEDRO', 'MARTINEZ', 78585, 987, 'SFSD');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `lista_candidato_lider`
-- 

CREATE TABLE `lista_candidato_lider` (
  `id_lista` int(11) NOT NULL auto_increment,
  `cc_candidato` int(11) NOT NULL,
  `cc_lider` int(11) NOT NULL,
  PRIMARY KEY  (`id_lista`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `lista_candidato_lider`
-- 

INSERT INTO `lista_candidato_lider` VALUES (1, 40, 80);
INSERT INTO `lista_candidato_lider` VALUES (2, 40, 81);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `lista_candidato_votante`
-- 

CREATE TABLE `lista_candidato_votante` (
  `id_lista` int(11) NOT NULL auto_increment,
  `cc_candidato` int(11) NOT NULL,
  `cc_votante` int(11) NOT NULL,
  PRIMARY KEY  (`id_lista`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Volcar la base de datos para la tabla `lista_candidato_votante`
-- 

INSERT INTO `lista_candidato_votante` VALUES (1, 5, 23);
INSERT INTO `lista_candidato_votante` VALUES (3, 1, 6);
INSERT INTO `lista_candidato_votante` VALUES (9, 81, 14);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `lista_votante_lider`
-- 

CREATE TABLE `lista_votante_lider` (
  `id_lista` int(11) NOT NULL auto_increment,
  `cc_votante` int(11) NOT NULL,
  `cc_lider` int(11) NOT NULL,
  PRIMARY KEY  (`id_lista`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `lista_votante_lider`
-- 

INSERT INTO `lista_votante_lider` VALUES (1, 10, 80);
INSERT INTO `lista_votante_lider` VALUES (2, 11, 80);
INSERT INTO `lista_votante_lider` VALUES (3, 12, 80);
INSERT INTO `lista_votante_lider` VALUES (4, 13, 80);
INSERT INTO `lista_votante_lider` VALUES (10, 14, 80);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `lista_votante_partido`
-- 

CREATE TABLE `lista_votante_partido` (
  `id_lista` int(11) NOT NULL auto_increment,
  `cc_votante` int(11) NOT NULL,
  `id_partido` int(11) NOT NULL,
  PRIMARY KEY  (`id_lista`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `lista_votante_partido`
-- 

INSERT INTO `lista_votante_partido` VALUES (1, 1, 2);
INSERT INTO `lista_votante_partido` VALUES (2, 4, 6);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `login`
-- 

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL auto_increment,
  `cc_usuario` int(11) NOT NULL,
  `contrasena` int(11) NOT NULL,
  PRIMARY KEY  (`id_login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `login`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `partido_politico`
-- 

CREATE TABLE `partido_politico` (
  `id_partido_politico` int(11) NOT NULL auto_increment,
  `partido_politico` text NOT NULL,
  PRIMARY KEY  (`id_partido_politico`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `partido_politico`
-- 

INSERT INTO `partido_politico` VALUES (1, 'PARTIDO LIBERAL COLOMBIANO');
INSERT INTO `partido_politico` VALUES (2, 'PARTIDO CONSERVADOR');
INSERT INTO `partido_politico` VALUES (3, 'PARTIDO DE U');
INSERT INTO `partido_politico` VALUES (4, 'ALIANZA VERDE');
INSERT INTO `partido_politico` VALUES (5, 'PARTIDO DEMOCRATICO');
INSERT INTO `partido_politico` VALUES (6, 'PARTIDO OPCION CIUDADANA');
INSERT INTO `partido_politico` VALUES (7, 'PARTIDO POLO DEMOCRATICO ALTERNATIVO');
INSERT INTO `partido_politico` VALUES (8, 'PARTIDO SOCIAL DE UNIDAD NACIONAL PARTIDO DE LA U');
INSERT INTO `partido_politico` VALUES (9, 'PARTIDO CAMBIO RADICAL');
INSERT INTO `partido_politico` VALUES (10, 'PARTIDO ALIANZA SOCIAL INDEPENDIENTE ASI');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `puesto_votacion`
-- 

CREATE TABLE `puesto_votacion` (
  `id_puesto_votacion` int(11) NOT NULL auto_increment,
  `departamento` text NOT NULL,
  `municipio` text NOT NULL,
  `puesto` text NOT NULL,
  `direccion` text NOT NULL,
  `mesa` int(11) NOT NULL,
  PRIMARY KEY  (`id_puesto_votacion`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `puesto_votacion`
-- 

INSERT INTO `puesto_votacion` VALUES (1, 'bolivar', 'cordoba', 'cabecera mucipal', 'ieo', 1);
INSERT INTO `puesto_votacion` VALUES (2, 'bolivar', 'cordoba', 'cabecera mucipal', 'ieo', 2);
INSERT INTO `puesto_votacion` VALUES (3, 'bolivar', 'cordoba', 'cabecera mucipal', 'ieo', 3);
INSERT INTO `puesto_votacion` VALUES (4, 'bolivar', 'cordoba', 'cabecera mucipal', 'ieo', 4);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `votante`
-- 

CREATE TABLE `votante` (
  `cc_votante` int(11) NOT NULL,
  `nombre_votante` text NOT NULL,
  `apellido_votante` text NOT NULL,
  `tel_votante` int(11) NOT NULL,
  `cel_votante` int(11) NOT NULL,
  `dir_votante` text NOT NULL,
  PRIMARY KEY  (`cc_votante`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `votante`
-- 

INSERT INTO `votante` VALUES (10, 'victor', 'perez', 6606068, 6606068, 'cartagena');
INSERT INTO `votante` VALUES (11, 'manuel', 'caballero', 6606068, 6606068, 'turbaco');
INSERT INTO `votante` VALUES (12, 'ivana', 'gonzales', 6606068, 6606068, 'cordoba');
INSERT INTO `votante` VALUES (13, 'susana', 'alvear', 6606068, 6606068, 'turbana');
INSERT INTO `votante` VALUES (14, 'MARIA', 'VILLAMIL', 123, 1234, 'CORDOBA CR 4');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `zonificacion`
-- 

CREATE TABLE `zonificacion` (
  `id_zonificacion` int(11) NOT NULL auto_increment,
  `cc_votante` int(11) NOT NULL,
  `id_puesto` int(11) NOT NULL,
  PRIMARY KEY  (`id_zonificacion`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `zonificacion`
-- 

INSERT INTO `zonificacion` VALUES (1, 10, 1);
INSERT INTO `zonificacion` VALUES (2, 11, 2);
INSERT INTO `zonificacion` VALUES (3, 12, 3);
INSERT INTO `zonificacion` VALUES (4, 13, 4);
