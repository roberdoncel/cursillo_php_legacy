-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2017 a las 13:43:45
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `Id` int(11) NOT NULL,
  `Nombre` tinytext NOT NULL,
  `Usuario` tinytext NOT NULL,
  `Password` tinytext NOT NULL,
  `Telefono` varchar(9) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Id`, `Nombre`, `Usuario`, `Password`, `Telefono`, `Fecha`) VALUES
(1, 'Alberto', 'berto', 'rojo', '666777888', '1970-07-18'),
(2, 'Sara', 'ara', 'azul', '555444333', '1974-03-02'),
(3, 'Enrique', 'rique', 'verde', '677777777', '1981-01-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `NumInforme` int(11) NOT NULL,
  `Redactor` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informes`
--

INSERT INTO `informes` (`NumInforme`, `Redactor`) VALUES
(13, 'Juan'),
(27, 'Evaristo'),
(88, 'Pablo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Nif` text NOT NULL,
  `Edad` int(11) NOT NULL,
  `Localidad` text NOT NULL,
  `Provincia` text NOT NULL,
  `E_civil` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Nif`, `Edad`, `Localidad`, `Provincia`, `E_civil`) VALUES
(1, 'Raúl', '12345678P', 27, 'Getafe', 'Madrid', 'soltero'),
(2, 'Manuel', '12345677R', 44, 'Benidorm', 'Alicante', 'casado'),
(3, 'Jose', '12345676S', 39, 'Pinto', 'Madrid', 'soltero'),
(4, 'Ana', '12345675G', 31, 'Barcelona', 'Barcelona', 'casado'),
(5, 'Sonia', '123456784V', 52, 'Toledo', 'Toledo', 'viudo'),
(6, 'Evaristo', '12345673W', 19, 'Badalona', 'Barcelona', 'soltero'),
(7, 'Roberto', '12345672Z', 23, 'Santiago', 'A Coruña', 'casado'),
(8, 'Susana', '12345671F', 28, 'Alcobendas', 'Madrid', 'soltero'),
(10, 'asda', '54464565T', 38, 'Cornellá', 'Barcelona', 'casado'),
(9, 'Manuel', '29829292F', 50, 'Alcoy', 'Madrid', 'casado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
