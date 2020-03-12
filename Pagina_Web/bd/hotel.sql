
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



INSERT INTO `habitacion` (`codHabitacion`, `tipo`, `capacidad`, `planta`, `tarifa`,`reservada`) VALUES
(1, 'Individual', 1, 1, 50,'NO'),
(2, 'Individual', 1, 1, 50,'NO'),
(3, 'Individual', 1, 1, 50,'NO'),
(4, 'Individual', 1, 1, 50,'NO'),
(5, 'Individual', 1, 1, 50,'NO'),
(6, 'Individual', 1, 1, 50,'NO'),
(7, 'Individual', 2, 1, 70,'NO'),
(8, 'Individual', 2, 1, 70,'NO'),
(9, 'Individual', 2, 1, 70,'NO'),
(10, 'Individual', 2, 1, 70,'NO'),
(11, 'Individual', 1, 1, 50,'NO'),
(12, 'Individual', 1, 1, 50,'NO'),
(13, 'Individual', 1, 1, 50,'NO'),
(14, 'Individual', 1, 1, 50,'NO'),
(15, 'Individual', 1, 1, 50,'NO'),
(16, 'Individual', 1, 1, 50,'NO'),
(17, 'Individual', 2, 1, 70,'NO'),
(18, 'Individual', 2, 1, 70,'NO'),
(19, 'Individual', 2, 1, 70,'NO'),
(20, 'Individual', 2, 1, 70,'NO'),
(1, 'Individual', 2, 2, 100,'NO'),
(2, 'Individual', 2, 2, 100,'NO'),
(3, 'Individual', 2, 2, 100,'NO'),
(4, 'Individual', 2, 2, 100,'NO'),
(5, 'Doble', 3, 2, 150,'NO'),
(6, 'Doble', 3, 2, 150,'NO'),
(7, 'Doble', 3, 2, 150,'NO'),
(8, 'Doble', 3, 2, 150,'NO'),
(9, 'Doble', 3, 2, 150,'NO'),
(10, 'Doble', 4, 2, 180,'NO'),
(11, 'Individual', 2, 2, 100,'NO'),
(12, 'Individual', 2, 2, 100,'NO'),
(13, 'Individual', 2, 2, 100,'NO'),
(14, 'Individual', 2, 2, 100,'NO'),
(15, 'Doble', 3, 2, 150,'NO'),
(16, 'Doble', 3, 2, 150,'NO'),
(17, 'Doble', 3, 2, 150,'NO'),
(18, 'Doble', 3, 2, 150,'NO'),
(19, 'Doble', 3, 2, 150,'NO'),
(20, 'Doble', 4, 2, 180,'NO'),
(1, 'Doble', 4, 3, 220,'NO'),
(2, 'Doble', 4, 3, 220,'NO'),
(3, 'Doble', 2, 3, 80,'NO'),
(4, 'Doble', 2, 3, 80,'NO'),
(5, 'Doble', 2, 3, 80,'NO'),
(6, 'Test', 1, 3, 10,'NO'),
(7, 'Doble', 2, 3, 80,'NO'),
(8, 'Doble', 2, 3, 80,'NO'),
(9, 'Doble', 2, 3, 80,'NO'),
(10, 'Test', 1, 3, 10,'NO'),
(11, 'Doble', 4, 3, 220,'NO'),
(12, 'Doble', 4, 3, 220,'NO'),
(13, 'Doble', 2, 3, 80,'NO'),
(14, 'Doble', 2, 3, 80,'NO'),
(15, 'Doble', 2, 3, 80,'NO'),
(16, 'Test', 1, 3, 10,'NO'),
(17, 'Doble', 2, 3, 80,'NO'),
(18, 'Doble', 2, 3, 80,'NO'),
(19, 'Doble', 2, 3, 80,'NO'),
(20, 'Test', 1, 3, 10,'NO'),
(1, 'Doble', 4, 4, 220,'NO'),
(2, 'Doble', 4, 4, 220,'NO'),
(3, 'Doble', 2, 4, 80,'NO'),
(4, 'Doble', 2, 4, 80,'NO'),
(5, 'Doble', 2, 4, 80,'NO'),
(6, 'Test', 1, 4, 10,'NO'),
(7, 'Doble', 2, 4, 80,'NO'),
(8, 'Doble', 2, 4, 80,'NO'),
(9, 'Doble', 2, 4, 80,'NO'),
(10, 'Test', 1, 4, 10,'NO'),
(11, 'Doble', 4, 4, 220,'NO'),
(12, 'Doble', 4, 4, 220,'NO'),
(13, 'Doble', 2, 4, 80,'NO'),
(14, 'Doble', 2, 4, 80,'NO'),
(15, 'Doble', 2, 4, 80,'NO'),
(16, 'Test', 1, 4, 10,'NO'),
(17, 'Doble', 2, 4, 80,'NO'),
(18, 'Doble', 2, 4, 80,'NO'),
(19, 'Doble', 2, 4, 80,'NO'),
(20, 'Test', 1, 4, 10,'NO');
COMMIT;
