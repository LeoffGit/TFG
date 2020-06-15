-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-06-2020 a las 22:11:40
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academiatfg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `id_Estudiante` int(11) NOT NULL,
  `estudios` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Usuarios_idUsuarios`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`Usuarios_idUsuarios`, `id_Estudiante`, `estudios`, `nombre`) VALUES
(2, 1, 'Pocos', 'pepin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `idComentarios` int(11) NOT NULL AUTO_INCREMENT,
  `curso_idcurso` int(11) NOT NULL,
  `comentario` varchar(45) NOT NULL,
  `respuesta` varchar(45) NOT NULL DEFAULT '0',
  `fecha` datetime NOT NULL,
  `Usuarios_idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idComentarios`,`curso_idcurso`),
  KEY `curso_idcurso` (`curso_idcurso`),
  KEY `Usuarios_idUsuarios` (`Usuarios_idUsuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentarios`, `curso_idcurso`, `comentario`, `respuesta`, `fecha`, `Usuarios_idUsuarios`) VALUES
(1, 1, ' Hola soy pepesito', '0', '2020-06-12 21:44:40', 1),
(2, 1, ' Putos', '0', '2020-06-12 21:44:48', 1),
(3, 1, ' ASDASDFIHDGHDSGHSDHJSDFSHDFJHSF', '0', '2020-06-12 21:45:02', 1),
(4, 1, '@pepesito asSs', '3', '2020-06-12 22:03:57', 1),
(5, 1, '@pepesito ASsASs', '3', '2020-06-12 22:04:08', 1),
(6, 1, '@pepesito Tu eres mas puto', '2', '2020-06-12 22:13:23', 1),
(7, 1, '@pepesito Hola', '3', '2020-06-15 21:22:31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `Profesor_Usuarios_idUsuarios` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(3,0) NOT NULL,
  `duracion` decimal(4,0) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(45) NOT NULL,
  `lecciones` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  PRIMARY KEY (`idcurso`),
  KEY `Profesor_Usuarios_idUsuarios` (`Profesor_Usuarios_idUsuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `Profesor_Usuarios_idUsuarios`, `nombre`, `precio`, `duracion`, `descripcion`, `foto`, `lecciones`, `valoracion`) VALUES
(1, 1, 'diseno', '0', '10', '', '', 5, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_adquiridos`
--

DROP TABLE IF EXISTS `cursos_adquiridos`;
CREATE TABLE IF NOT EXISTS `cursos_adquiridos` (
  `Alumno_Usuarios_idUsuarios` int(11) NOT NULL,
  `curso_idcurso` int(11) NOT NULL,
  PRIMARY KEY (`Alumno_Usuarios_idUsuarios`,`curso_idcurso`),
  KEY `curso_idcurso` (`curso_idcurso`),
  KEY `Alumno_Usuarios_idUsuarios` (`Alumno_Usuarios_idUsuarios`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos_adquiridos`
--

INSERT INTO `cursos_adquiridos` (`Alumno_Usuarios_idUsuarios`, `curso_idcurso`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `fecha_compra` datetime NOT NULL,
  `precio` decimal(3,0) NOT NULL,
  `cursos_adquiridos_Alumno_Usuarios_idUsuarios` int(11) NOT NULL,
  `cursos_adquiridos_curso_idcurso` int(11) NOT NULL,
  `cursos_adquiridos_curso_Profesor_Usuarios_idUsuarios` int(11) NOT NULL,
  KEY `cursos_adquiridos_Alumno_Usuarios_idUsuarios` (`cursos_adquiridos_Alumno_Usuarios_idUsuarios`,`cursos_adquiridos_curso_idcurso`,`cursos_adquiridos_curso_Profesor_Usuarios_idUsuarios`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `especialidad` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Usuarios_idUsuarios`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`Usuarios_idUsuarios`, `idProfesor`, `valoracion`, `foto`, `especialidad`, `nombre`) VALUES
(1, 1, 10, 'foo', 'calipos', 'pepesito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nombre`, `foto`, `email`, `contrasena`) VALUES
(1, 'pepesito', 'foo', 'pepe@gmail.com', 'pepe'),
(2, 'pepin', 'pepin.png', 'pepin@gmail.com', 'pepin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
