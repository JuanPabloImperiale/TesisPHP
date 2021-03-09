-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-07-2017 a las 15:17:42
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `slparking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `a_usuario` varchar(300) NOT NULL,
  `a_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`a_usuario`, `a_password`) VALUES
('adm', 'pw001xyKtDq2k');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alerta`
--

CREATE TABLE `alerta` (
  `a_administrador` varchar(300) NOT NULL,
  `a_latitud` varchar(300) NOT NULL,
  `a_longitud` varchar(300) NOT NULL,
  `a_fecha` date NOT NULL,
  `a_hora` varchar(300) NOT NULL,
  `a_minuto` varchar(300) NOT NULL,
  `a_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alerta`
--

INSERT INTO `alerta` (`a_administrador`, `a_latitud`, `a_longitud`, `a_fecha`, `a_hora`, `a_minuto`, `a_id`) VALUES
('adm', '-33.31235600000001', '-66.31963999999999', '2017-05-22', '20', '4', 1),
('adm', '-33.3123522', '-66.31967', '2017-05-22', '20', '8', 2),
('adm', '-33.2912117', '-66.3385411', '2017-05-23', '19', '17', 3),
('adm', '-33.3123223', '-66.31963879999999', '2017-05-25', '18', '27', 4),
('adm', '-33.3123441', '-66.3196048', '2017-05-25', '18', '30', 5),
('adm', '-33.31239800000001', '-66.3196737', '2017-05-25', '18', '34', 6),
('adm', '-33.3123964', '-66.31966969999999', '2017-05-25', '18', '35', 7),
('adm', '-33.3123812', '-66.3196597', '2017-05-25', '18', '36', 8),
('adm', '-33.312322099999996', '-66.3196105', '2017-05-25', '18', '39', 9),
('adm', '-33.3123927', '-66.3196711', '2017-05-25', '18', '41', 10),
('adm', '-33.312317', '-66.31964719999999', '2017-06-04', '19', '1', 11),
('', '-33.2912343', '-66.3386522', '2017-06-27', '20', '27', 12),
('', 'LL', 'TT', '2017-06-27', '20', '27', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `email`
--

CREATE TABLE `email` (
  `e_nombre` varchar(300) NOT NULL,
  `e_email` varchar(300) NOT NULL,
  `e_telefono` int(255) NOT NULL,
  `e_correo` varchar(300) NOT NULL,
  `e_mensaje` varchar(600) NOT NULL,
  `e_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `email`
--

INSERT INTO `email` (`e_nombre`, `e_email`, `e_telefono`, `e_correo`, `e_mensaje`, `e_id`) VALUES
('juan pablo', 'jua@gmail.com', 2147483647, 'almafuerte620', 'hola mensaje de contacto 1', 1),
('Agustin', 'ferrariagustin93@gmail.com', 2147483647, '1Âº de Mayo 1661', 'Tiene muchos errores de ortografÃ­a en un aplicaciÃ³n, por favor arrÃ©glelos.\r\nSaludos', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `p_usuario` varchar(300) NOT NULL,
  `p_patente` varchar(300) NOT NULL,
  `p_estado` varchar(300) NOT NULL,
  `p_fecha` date NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_mes` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`p_usuario`, `p_patente`, `p_estado`, `p_fecha`, `p_id`, `p_mes`) VALUES
('lore', 'aaa111', 'NP', '2017-05-25', 2, '5'),
('juanpi', 'abc123', 'NP', '2017-05-30', 3, '5'),
('juanpi', 'abc123', 'NP', '2017-05-30', 4, '5'),
('Agustin', 'ASD123', 'NP', '2017-06-27', 5, '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `r_patente` varchar(300) NOT NULL,
  `r_administrador` varchar(300) NOT NULL,
  `r_fecha` date NOT NULL,
  `r_mensaje` varchar(600) NOT NULL,
  `r_hora` varchar(300) NOT NULL,
  `r_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`r_patente`, `r_administrador`, `r_fecha`, `r_mensaje`, `r_hora`, `r_id`) VALUES
('zzz999', 'adm', '2017-05-22', 'mal estacionamiento', '19', 1),
('zzz999', 'adm', '2017-05-22', 'reporte2', '19', 4),
('abc1234', 'adm', '2017-05-22', 'mal estacionamiento reporte general', '19', 5),
('zzz999', 'adm', '2017-05-23', 'estaciona linea amarrilla', '19', 6),
('hjd125', 'adm', '2017-05-23', 'jfrofjrsfipsj', '19', 7),
('zzz999', 'adm', '2017-06-04', 'lugljlgljglj', '18', 8),
('hgk547', 'adm', '2017-06-04', 'gkhgkhgkvhk', '18', 9),
('ASD123', 'adm', '2017-06-27', 'El vehÃ­culo se encuentra mal estacionado sobre cordÃ³n amarillo. Debe ser multado.\r\nSaludos, cccccc', '20', 10),
('ASD122', 'adm', '2017-06-27', 'CruzÃ³ en rojo', '20', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `t_usuario` varchar(300) NOT NULL,
  `t_patente` varchar(300) NOT NULL,
  `t_zona` varchar(300) NOT NULL,
  `t_horaInicio` varchar(300) NOT NULL,
  `t_horaFin` varchar(300) NOT NULL,
  `t_fecha` date NOT NULL,
  `t_numeo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`t_usuario`, `t_patente`, `t_zona`, `t_horaInicio`, `t_horaFin`, `t_fecha`, `t_numeo`) VALUES
('test', 'zzz999', '2', '19', '20', '2017-05-22', 1),
('adm', 'abc123', '1', '19', '20', '2017-05-22', 2),
('test', 'zzz999', '7', '23', '24', '2017-05-22', 3),
('test', 'zzz999', '2', '19', '20', '2017-05-23', 4),
('adm', 'jii234', '1', '19', '20', '2017-05-23', 5),
('adm', 'hdi212', '2', '19', '20', '2017-05-23', 6),
('test', 'zzz999', '2', '18', '19', '2017-05-25', 7),
('test', 'zzz999', '4', '18', '19', '2017-05-25', 8),
('test', 'zzz999', '2', '18', '19', '2017-05-25', 9),
('test', 'zzz999', '1', '18', '19', '2017-05-25', 10),
('test', 'zzz999', '1', '18', '19', '2017-05-25', 11),
('test', 'zzz999', '3', '18', '19', '2017-05-25', 12),
('test', 'zzz999', '4', '18', '19', '2017-05-25', 13),
('test', 'zzz999', '5', '18', '19', '2017-05-25', 14),
('test', 'zzz999', '6', '18', '19', '2017-05-25', 15),
('test', 'zzz999', '7', '18', '19', '2017-05-25', 16),
('test', 'zzz999', '8', '18', '19', '2017-05-25', 17),
('adm', 'hdh123', '2', '21', '23', '2017-05-30', 18),
('juanpi', 'abc123', '2', '21', '23', '2017-05-30', 19),
('juanpi', 'abc123', '1', '22', '23', '2017-05-30', 20),
('juanpi', 'abc123', '2', '22', '23', '2017-05-30', 21),
('juanpi', 'abc123', '1', '23', '24', '2017-05-30', 22),
('test', 'zzz999', '4', '17', '19', '2017-06-04', 23),
('adm', 'fdr124', '2', '19', '20', '2017-06-04', 24),
('Agustin', 'ASD123', '1', '20', '22', '2017-06-27', 25),
('adm', 'ASD123', '1', '20', '21', '2017-06-27', 26),
('test', 'zzz999', '1', '19', '21', '2017-07-04', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `u_nombre` varchar(300) NOT NULL,
  `u_apellido` varchar(300) NOT NULL,
  `u_patente` varchar(300) NOT NULL,
  `u_numeroChasis` int(255) NOT NULL,
  `u_usuario` varchar(300) NOT NULL,
  `u_password` varchar(300) NOT NULL,
  `u_saldo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`u_nombre`, `u_apellido`, `u_patente`, `u_numeroChasis`, `u_usuario`, `u_password`, `u_saldo`) VALUES
('Lucas', 'Ferrari', '123123', 0, 'Lucas', 'pwqYAkzakUiyM', 0),
('lorena', 'baigorria', 'aaa111', 134141, 'lore', 'pw001xyKtDq2k', 20),
('juan pablo', 'imperiale', 'abc123', 3837272, 'juanpi', 'pw001xyKtDq2k', 0),
('Agustin', 'Ferrari', 'ASD123', 0, 'Agustin', 'pwoMjbwLxWv1s', 0),
('marcos', 'picco', 'jdjd72', 347373, 'marcos', 'pw001xyKtDq2k', 0),
('tester', 'tester', 'zzz999', 1262627, 'test', 'pw001xyKtDq2k', 9820);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`a_usuario`);

--
-- Indices de la tabla `alerta`
--
ALTER TABLE `alerta`
  ADD PRIMARY KEY (`a_id`);

--
-- Indices de la tabla `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`e_id`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`p_id`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`r_id`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`t_numeo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`u_patente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alerta`
--
ALTER TABLE `alerta`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `email`
--
ALTER TABLE `email`
  MODIFY `e_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `t_numeo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
