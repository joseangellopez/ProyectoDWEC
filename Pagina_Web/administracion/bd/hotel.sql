
CREATE database hotel;

use hotel;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `cliente` (
  `codCliente` int(10) NOT NULL,
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(25) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(9) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `cliente` (`codCliente`, `DNI`, `nombre`, `apellidos`, `telefono`) VALUES
(143, '52364789y', 'Antonia', 'Lopera', '666666666'),
(83, '78124596K', 'Alberto', 'Perez Martinez', '674125578'),
(142, '78541235u', 'Sergio', 'Rodríguez ', '685414789'),
(141, '26851201e', 'Jose anges', 'De los Santos', '621457789');


CREATE TABLE `habitacion` (
  `codHabitacion` int(10) NOT NULL,
  `tipo` varchar(16) COLLATE utf8_bin NOT NULL,
  `capacidad` int(11) NOT NULL,
  `planta` int(1) NOT NULL,
  `tarifa` double NOT NULL,
  `reservada` varchar(2) COLLATE utf8_bin NOT NULL,
  `Fecha_entrada` date DEFAULT NULL,
  `Fecha_salida` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO `habitacion` (`codHabitacion`, `tipo`, `capacidad`, `planta`, `tarifa`, `reservada`, `Fecha_entrada`, `Fecha_salida`) VALUES
(37, 'rr', 5, 1, 20, 'SI', '2020-03-27', '2020-04-04');

CREATE TABLE `login` (
  `usuario` varchar(25) COLLATE utf8_bin NOT NULL,
  `clave` varchar(100) COLLATE utf8_bin NOT NULL,
  `rol` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `codCliente` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


CREATE TABLE `reserva` (
  `codHabitacion` int(10) NOT NULL,
  `codCliente` int(10) NOT NULL,
  `fechaEntrada` date NOT NULL,
  `fechaSalida` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCliente`);

ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`codHabitacion`,`planta`),
  ADD KEY `planta` (`planta`);

ALTER TABLE `login`
  ADD PRIMARY KEY (`usuario`),
  ADD KEY `codCliente` (`codCliente`);

ALTER TABLE `reserva`
  ADD PRIMARY KEY (`codHabitacion`,`codCliente`,`fechaEntrada`),
  ADD KEY `codCliente` (`codCliente`);


ALTER TABLE `cliente`
  MODIFY `codCliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

ALTER TABLE `habitacion`
  MODIFY `codHabitacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;
