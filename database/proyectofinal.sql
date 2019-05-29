-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2019 a las 02:58:15
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE `avisos` (
  `id` int(11) NOT NULL,
  `contenido` mediumtext,
  `autor` varchar(100) DEFAULT NULL,
  `difusion` int(1) DEFAULT NULL,
  `caducidad` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`id`, `contenido`, `autor`, `difusion`, `caducidad`) VALUES
(1, 'Este aviso es una prueba', 'Diosito', 3, '2019-05-31'),
(13, 'Este es otro aviso de prueba', 'El Jefe De Jefes', 3, '2019-05-29'),
(14, 'Este es un mensaje de prueba para los alumnos', 'El Jefe De Jefes', 1, '2019-05-29'),
(15, 'Este es un aviso de un profesor para los alumnos', 'Jose Godinez Gonzales', 1, '2019-05-29'),
(16, 'Este es un aviso solo para los profesores', 'El Jefe De Jefes', 2, '2019-05-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `numControl` varchar(8) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rol_id` int(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ApPaterno` varchar(50) NOT NULL,
  `ApMaterno` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`numControl`, `password`, `rol_id`, `nombre`, `ApPaterno`, `ApMaterno`) VALUES
('11231695', '12345', 1, 'Jose', 'Godinez', 'Gonzales'),
('16241095', '12345', 2, 'Diego', 'Valadez', 'Olmos'),
('11112222', '12345', 3, 'El Jefe', 'De', 'Jefes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`numControl`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



----Creación e inserción de tabla materias
CREATE TABLE IF NOT EXISTS `materia`(
``idMateria` INT NOT NULL,
`nombre` VARCHAR(60) NOT NULL,
`semestre` VARCHAR(30) NOT NULL,
`creditos` VARCHAR(2) NOT NULL,
`horas` VARCHAR(2) NOT NULL,
`registrado` VARCHAR(10) NOT NULL,
PRIMARY KEY (`idMateria`)
);
INSERT INTO `materia` (`idMateria`, `nombre`, `semestre`,`creditos`, `horas`, `registrado`) VALUES 
('4130', 'TALLER DE INVESTIGACION I','Sem. 7', '4','4', 'y');
INSERT INTO `materia` (`idMateria`, `nombre`, `semestre`,`creditos`, `horas`, `registrado`) VALUES 
('4028', 'CONMUTACION Y ENRUTAMIENTO EN REDES DE DATOS','Sem. 7', '5','5', 'y');
INSERT INTO `materia` (`idMateria`, `nombre`, `semestre`,`creditos`, `horas`, `registrado`) VALUES 
('4065', 'BASES DE DATOS AVANZADAS','Sem. 7', '5','5', 'y');
INSERT INTO `materia` (`idMateria`, `nombre`, `semestre`,`creditos`, `horas`, `registrado`) VALUES 
('4119', 'PROGRAMACION WEB','Sem. 8', '5','5', 'y');
INSERT INTO `materia` (`idMateria`, `nombre`, `semestre`,`creditos`, `horas`, `registrado`) VALUES 
('4075', 'LEANGUAJES DE INTERFAZ','Sem. 6', '4','4'. 'y');
INSERT INTO `materia` (`idMateria`, `nombre`, `semestre`,`creditos`, `horas`, `registrado`) VALUES 
('4022', 'INGENIERIA DE SOFTWARE','Sem. 6', '5','5', 'y');
INSERT INTO `materia` (`idMateria`, `nombre`, `semestre`,`creditos`, `horas`, `registrado`) VALUES 
('4066', 'PROGRAMACION LOGICA Y FUNCIONAL','Sem. 8', '4','4','n');
INSERT INTO `materia` (`idMateria`, `nombre`, `semestre`,`creditos`, `horas`, `registrado`) VALUES 
('4044', 'LENGUAJES Y AUTOMATAS II','Sem. 7', '5','5', 'n');
INSERT INTO `materia` (`idMateria`, `nombre`, `semestre`,`creditos`, `horas`, `registrado`) VALUES 
('4057', 'TALLER DE SISTEMAS OPERATIVOS','Sem. 6', '4','4','n');
