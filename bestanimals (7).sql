-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2023 a las 04:56:18
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bestanimals`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(1) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `documento` int(25) NOT NULL,
  `celular` bigint(30) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `rol_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellidos`, `documento`, `celular`, `direccion`, `ciudad`, `email`, `clave`, `rol_id`) VALUES
(312, 'FRANCISCO JOSE', 'oyola', 1001092227, 3026694852, 'CALLE 129 NO 56 A 16', 'BOGOTA', 'oyola294@gmail.com', '1001092227', 1),
(318, 'eduardo', 'Camavinga', 79906123, 3003380725, 'calle 25 26 a 21', 'BOGOTA', 'eduardo@gmail.com', 'Tulio3000', 3),
(347, 'paolo', 'vega', 302214445, 365411122, 'calle 25 26 a 21', 'BOGOTA', 'vega@gmail.com', '10012322454', 5),
(349, 'pedro', 'martinez', 79906232, 3023651520, 'calle 57 con 15', 'BOGOTA', 'pedritogg@gmail.com', 'pedro123456789', 5),
(350, 'didier', 'guarin', 2147483647, 3203521236, 'calle 178 no 26 b 12', 'BOGOTA', 'didier123@gmail.com', 'Mg123456789', 3),
(351, 'andrea', 'zuñiga', 523123344, 3053216589, 'calle 134 no 24', 'BOGOTA', 'andreita@gmail.com', 'Jpg123', 4),
(352, 'camila', 'cortez', 2147483647, 325123456, 'calle 127 no 16 a 32', 'BOGOTA', 'Cml12345@gmail.com', 'Cml1234565677', 3),
(353, 'julian', 'valderrama', 790364521, 3269856321, 'calle 63 con tercera', 'BOGOTA', 'julianRpte@outlook.com', '123456789', 3),
(354, 'william', 'trujillo', 789644112, 302654420, 'calle 25 26 a 21', 'BOGOTA', 'william@gmail.com', '25311545', 5),
(355, 'juliana', 'vargas', 522115451, 3023658965, 'carrera septima con 50', 'BOGOTA', 'july12345@hotmail.com', 'vendor123456789', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historias_clinicas`
--

CREATE TABLE `historias_clinicas` (
  `id_acta` int(10) NOT NULL,
  `nombre_mascota` varchar(100) NOT NULL,
  `sexo_mascota` varchar(100) NOT NULL,
  `peso_mascota` varchar(100) NOT NULL,
  `especie_mascota` varchar(100) NOT NULL,
  `edad_mascota` varchar(30) NOT NULL,
  `esterilizar_mascota` varchar(20) NOT NULL,
  `raza_mascota` varchar(30) NOT NULL,
  `color_mascota` varchar(50) NOT NULL,
  `medicina_preventiva` varchar(200) NOT NULL,
  `nombre_dueño` varchar(200) NOT NULL,
  `telefono_dueño` varchar(50) NOT NULL,
  `direccion_dueño` varchar(100) NOT NULL,
  `fc` varchar(50) NOT NULL,
  `fr` varchar(50) NOT NULL,
  `temperatura` varchar(100) NOT NULL,
  `llenado_capilar` varchar(100) NOT NULL,
  `pulso` varchar(50) NOT NULL,
  `diagnostico_diferencial` varchar(300) NOT NULL,
  `diagnostico_final` varchar(300) NOT NULL,
  `test_laboratorio` varchar(300) NOT NULL,
  `tratamiento` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historias_clinicas`
--

INSERT INTO `historias_clinicas` (`id_acta`, `nombre_mascota`, `sexo_mascota`, `peso_mascota`, `especie_mascota`, `edad_mascota`, `esterilizar_mascota`, `raza_mascota`, `color_mascota`, `medicina_preventiva`, `nombre_dueño`, `telefono_dueño`, `direccion_dueño`, `fc`, `fr`, `temperatura`, `llenado_capilar`, `pulso`, `diagnostico_diferencial`, `diagnostico_final`, `test_laboratorio`, `tratamiento`) VALUES
(23, 'axel', 'masculino', '8.6 kilogramos', 'gato', '7 años', 'si', 'angora', 'gris', 'No', 'andres vargas', '3142563011', 'carrera 7 con 26 no 10', '12%', '15%', '35 grados', 'no', 'estable', 'el paciente esta relativamente sano', 'el paciente no requiere ninguna atencion general\r\nsolo es un chequeo de rutina', 'ninguno', 'el paciente no requiere tratamiento'),
(27, 'Pony', 'Macho', '5,6 kilogramos', 'Pony', '2 años', 'No', 'Caballo enano', 'Café con blanco', 'No', 'Luis Suárez', '3026694915', 'Calle 129 no 56 a 16', 'No', 'Si', '25.8 grados', 'Si', 'Estable', 'El paciente está en un estado delicado', 'El paciente se encuentra en un estado delicado por lo que tiene que estar hospitalizado hasta que mejore a su vez se le cuidara con la mejor calidad que se le pueda brindar', 'No requiere', 'El paciente tiene que tomar pastillas cada 24 horas por tres meses'),
(28, 'firulais', 'masculino', '52.2 kilogramos', 'golden retriever', '20 años', 'si', 'canino', 'amarillo', 'No', 'manuel ortiz', '3256547712', 'calle 134 no a 21', 'si', 'no', '32 grados', 'si', 'estable', 'el paciente requiere un cheque de rutina por precaución.', 'El paciente esta en un buen estado de salud por lo que se requiere que venga el siguiente mes a un chequeo de rutina', 'No requiere', 'No requiere');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_mascota`
--

CREATE TABLE `info_mascota` (
  `id_info_mascota` int(4) NOT NULL,
  `propietario` varchar(100) NOT NULL,
  `nombre_paciente` varchar(100) NOT NULL,
  `especie` varchar(100) NOT NULL,
  `raza` varchar(100) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `historia_breve` varchar(200) NOT NULL,
  `veterinario_solicitante` varchar(100) NOT NULL,
  `clinica` varchar(100) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `preparacion_del_paciente` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(20) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `peso` decimal(6,2) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `precio` decimal(6,3) NOT NULL,
  `ubicacion` int(20) NOT NULL,
  `vencimiento` varchar(60) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `marca`, `peso`, `stock`, `precio`, `ubicacion`, `vencimiento`, `imagen`) VALUES
(1036, 'comida para  perro', 'pedigree', '55.20', 'DISPONIBLE', '2.250', 0, '23 de diciembre de 2024', 'shop_server/1036.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(1) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'administrador'),
(2, 'usuario'),
(3, 'auxiliar_bodega'),
(4, 'veterinario'),
(5, 'caja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `documento` int(12) NOT NULL,
  `celular` int(12) NOT NULL,
  `direccion` varchar(10) NOT NULL,
  `ciudad` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `rol_id` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `documento`, `celular`, `direccion`, `ciudad`, `email`, `clave`, `rol_id`) VALUES
(17, 'francisco', 'oyola gali', 1001092227, 2147483647, 'calle 129 ', 'bogota', 'oyola294@g', '1001092227', 2),
(18, 'francisco', 'oyola galindo', 1001092227, 2147483647, 'calle 129 ', 'bogota', 'oyola294@gmail.com', 'hjkhskhsjkshkjsa', 2),
(26, 'Andres', 'Ortiz', 7272727, 306595959, 'Calle 34', 'Bogotá', 'mama@jqjaj.x', 'oliva', 2),
(27, 'Andres', 'Ortiz', 65456765, 352896523, 'Calle 13', 'Bogota', 'ort@gmail.com', '123456789', 2),
(29, 'aaaa', 'aaaaaaaaaa', 0, 1111, '1111111111', '1111111111', '1111111111111111@111', '11111111111111', 2),
(30, 'Maikol', 'Cortes', 7272727, 2147483647, 'Calle 34', 'Bogotá', 'maikol@gmail.com', 'roberto20q7', 2),
(31, '', '', 0, 0, '', '', '', '', 2),
(32, 'franciscoa', 'aaaaaa', 0, 52455252, '2542452454', '542552', '4@a1a1', 'aaa', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `historias_clinicas`
--
ALTER TABLE `historias_clinicas`
  ADD PRIMARY KEY (`id_acta`);

--
-- Indices de la tabla `info_mascota`
--
ALTER TABLE `info_mascota`
  ADD PRIMARY KEY (`id_info_mascota`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;

--
-- AUTO_INCREMENT de la tabla `historias_clinicas`
--
ALTER TABLE `historias_clinicas`
  MODIFY `id_acta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `info_mascota`
--
ALTER TABLE `info_mascota`
  MODIFY `id_info_mascota` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1037;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
