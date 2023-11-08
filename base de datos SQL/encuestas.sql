-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 00:57:24
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuestas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_encuesta_candidato`
--

CREATE TABLE `datos_encuesta_candidato` (
  `id_cand` int(11) DEFAULT NULL,
  `candidato` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_encuesta_candidato`
--

INSERT INTO `datos_encuesta_candidato` (`id_cand`, `candidato`) VALUES
(1, 'Javier Milei'),
(2, 'Sergio Massa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_encuesta_comuna`
--

CREATE TABLE `datos_encuesta_comuna` (
  `id_comuna` int(11) DEFAULT NULL,
  `id_comuna_reg` int(11) DEFAULT NULL,
  `comuna` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_encuesta_comuna`
--

INSERT INTO `datos_encuesta_comuna` (`id_comuna`, `id_comuna_reg`, `comuna`) VALUES
(1, 1, 'Arica'),
(2, 1, 'Camarones'),
(3, 1, 'Putre'),
(4, 1, 'General Lagos'),
(5, 2, 'Iquique'),
(6, 2, 'Alto Hospicio'),
(7, 2, 'Pica'),
(8, 2, 'Pozo Almonte'),
(9, 3, 'Antofagasta'),
(10, 3, 'Mejillones'),
(11, 3, 'Sierra Gorda'),
(12, 3, 'Taltal'),
(13, 3, 'Calama'),
(14, 3, 'Ollagüe'),
(15, 3, 'San Pedro de Atacama'),
(16, 3, 'Tocopilla'),
(17, 3, 'María Elena'),
(18, 4, 'Chañaral'),
(19, 4, 'Diego de Almagro'),
(20, 4, 'Copiapó'),
(21, 4, 'Caldera'),
(22, 4, 'Tierra Amarilla'),
(23, 4, 'Vallenar'),
(24, 4, 'Freirina'),
(25, 4, 'Huasco'),
(26, 5, 'La Serena'),
(27, 5, 'Coquimbo'),
(28, 5, 'Andacollo'),
(29, 5, 'La Higuera'),
(30, 5, 'Paihuano'),
(31, 5, 'Vicuña'),
(32, 5, 'Illapel'),
(33, 5, 'Canela'),
(34, 5, 'Los Vilos'),
(35, 5, 'Salamanca'),
(36, 5, 'Ovalle'),
(37, 5, 'Combarbalá'),
(38, 5, 'Monte Patria'),
(39, 5, 'Punitaqui'),
(40, 5, 'Río Hurtado'),
(41, 6, 'Algarrobo'),
(42, 6, 'Cabildo'),
(43, 6, 'Calera'),
(44, 6, 'Calle Larga'),
(45, 6, 'Cartagena'),
(46, 6, 'Casablanca'),
(47, 6, 'Catemu'),
(48, 6, 'Concón'),
(49, 6, 'El Quisco'),
(50, 6, 'El Tabo'),
(51, 6, 'Hijuelas'),
(52, 6, 'Isla de Pascua'),
(53, 6, 'Juan Fernández'),
(54, 6, 'La Cruz'),
(55, 6, 'La Ligua'),
(56, 6, 'Limache'),
(57, 6, 'Llaillay'),
(58, 6, 'Los Andes'),
(59, 6, 'Nogales'),
(60, 6, 'Olmué'),
(61, 6, 'Panquehue'),
(62, 6, 'Papudo'),
(63, 6, 'Petorca'),
(64, 6, 'Puchuncaví'),
(65, 6, 'Putaendo'),
(66, 6, 'Quillota'),
(67, 6, 'Quilpué'),
(68, 6, 'Quintero'),
(69, 6, 'Rinconada'),
(70, 6, 'San Antonio'),
(71, 6, 'San Esteban'),
(72, 6, 'San Felipe'),
(73, 6, 'Santa María'),
(74, 6, 'Santo Domingo'),
(75, 6, 'Valparaíso'),
(76, 6, 'Villa Alemana'),
(77, 6, 'Viña del Mar'),
(78, 6, 'Zapallar'),
(79, 7, 'Cerrillos'),
(80, 7, 'Cerro Navia'),
(81, 7, 'Conchalí'),
(82, 7, 'El Bosque'),
(83, 7, 'Estación Central'),
(84, 7, 'Huechuraba'),
(85, 7, 'Independencia'),
(86, 7, 'La Cisterna'),
(87, 7, 'La Florida'),
(88, 7, 'La Granja'),
(89, 7, 'La Pintana'),
(90, 7, 'La Reina'),
(91, 7, 'Las Condes'),
(92, 7, 'Lo Barnechea'),
(93, 7, 'Lo Espejo'),
(94, 7, 'Lo Prado'),
(95, 7, 'Macul'),
(96, 7, 'Maipú'),
(97, 7, 'Ñuñoa'),
(98, 7, 'Padre Hurtado'),
(99, 7, 'Paine'),
(100, 7, 'Pedro Aguirre Cerda'),
(101, 7, 'Peñaflor'),
(102, 7, 'Peñalolén'),
(103, 7, 'Pirque'),
(104, 7, 'Providencia'),
(105, 7, 'Pudahuel'),
(106, 7, 'Puente Alto'),
(107, 7, 'Quilicura'),
(108, 7, 'Quinta Normal'),
(109, 7, 'Recoleta'),
(100, 7, 'Renca'),
(111, 7, 'San Bernardo'),
(112, 7, 'San Joaquín'),
(113, 7, 'San José de Maipo'),
(114, 7, 'San Miguel'),
(115, 7, 'San Pedro'),
(116, 7, 'San Ramón'),
(117, 7, 'Santiago'),
(118, 7, 'Vitacura'),
(119, 7, 'Tiltil'),
(120, 7, 'Lampa'),
(121, 7, 'Colina'),
(122, 7, 'Quilicura'),
(123, 7, 'Peñaflor'),
(124, 7, 'Melipilla'),
(125, 7, 'Alhué'),
(126, 7, 'Curacaví'),
(127, 7, 'María Pinto'),
(128, 7, 'San Pedro'),
(129, 7, 'Talagante'),
(130, 7, 'El Monte'),
(131, 8, 'Concepción'),
(132, 8, 'Coronel'),
(133, 8, 'Chiguayante'),
(134, 8, 'Florida'),
(135, 8, 'Hualqui'),
(136, 8, 'Lota'),
(137, 8, 'Penco'),
(138, 8, 'San Pedro de la Paz'),
(139, 8, 'Santa Juana'),
(140, 8, 'Talcahuano'),
(141, 8, 'Tomé'),
(142, 8, 'Hualpén'),
(143, 8, 'Lebu'),
(144, 8, 'Arauco'),
(145, 8, 'Cañete'),
(146, 8, 'Contulmo'),
(147, 8, 'Curanilahue'),
(148, 8, 'Los Álamos'),
(149, 8, 'Tirúa'),
(150, 8, 'Los Ángeles'),
(151, 8, 'Antuco'),
(152, 8, 'Cabrero'),
(153, 8, 'Laja'),
(154, 8, 'Mulchén'),
(155, 8, 'Nacimiento'),
(156, 8, 'Negrete'),
(157, 8, 'Quilaco'),
(158, 8, 'Quilleco'),
(159, 8, 'San Rosendo'),
(160, 8, 'Santa Bárbara'),
(161, 8, 'Tucapel'),
(162, 8, 'Yumbel'),
(163, 8, 'Alto Biobío'),
(164, 9, 'Cauquenes'),
(165, 9, 'Chanco'),
(166, 9, 'Colbún'),
(167, 9, 'Constitución'),
(168, 9, 'Curepto'),
(169, 9, 'Curicó'),
(170, 9, 'Empedrado'),
(171, 9, 'Hualañé'),
(172, 9, 'Licantén'),
(173, 9, 'Linares'),
(174, 9, 'Longaví'),
(175, 9, 'Maule'),
(176, 9, 'Molina'),
(177, 9, 'Parral'),
(178, 9, 'Pelarco'),
(179, 9, 'Pelluhue'),
(180, 9, 'Pencahue'),
(181, 9, 'Rauco'),
(182, 9, 'Retiro'),
(183, 9, 'Río Claro'),
(184, 9, 'Romeral'),
(185, 9, 'Sagrada Familia'),
(186, 9, 'San Clemente'),
(187, 9, 'San Javier'),
(188, 9, 'San Rafael'),
(189, 9, 'Talca'),
(190, 9, 'Teno'),
(191, 9, 'Vichuquén'),
(192, 9, 'Villa Alegre'),
(193, 9, 'Yerbas Buenas'),
(194, 10, 'Bulnes'),
(195, 10, 'Chillán'),
(196, 10, 'Chillán Viejo'),
(197, 10, 'Cobquecura'),
(198, 10, 'Coelemu'),
(199, 10, 'Coihueco'),
(200, 10, 'El Carmen'),
(201, 10, 'Ninhue'),
(202, 10, 'Ñiquén'),
(203, 10, 'Pemuco'),
(204, 10, 'Pinto'),
(205, 10, 'Portezuelo'),
(206, 10, 'Quillón'),
(207, 10, 'Quirihue'),
(208, 10, 'Ránquil'),
(209, 10, 'San Carlos'),
(210, 10, 'San Fabián'),
(211, 10, 'San Ignacio'),
(212, 10, 'San Nicolás'),
(213, 10, 'Treguaco'),
(214, 10, 'Yungay'),
(215, 11, 'Alto Biobío'),
(216, 11, 'Antuco'),
(217, 11, 'Arauco'),
(218, 11, 'Cabrero'),
(219, 11, 'Cañete'),
(220, 11, 'Chiguayante'),
(221, 11, 'Concepción'),
(222, 11, 'Contulmo'),
(223, 11, 'Coronel'),
(224, 11, 'Curanilahue'),
(225, 11, 'Florida'),
(226, 11, 'Hualpén'),
(227, 11, 'Hualqui'),
(228, 11, 'Laja'),
(229, 11, 'Lebu'),
(230, 11, 'Los Álamos'),
(231, 11, 'Los Ángeles'),
(232, 11, 'Lota'),
(233, 11, 'Mulchén'),
(234, 11, 'Nacimiento'),
(235, 11, 'Negrete'),
(236, 11, 'Penco'),
(237, 11, 'Quilaco'),
(238, 11, 'Quilleco'),
(239, 11, 'San Pedro de la Paz'),
(240, 11, 'San Rosendo'),
(241, 11, 'Santa Bárbara'),
(242, 11, 'Santa Juana'),
(243, 11, 'Talcahuano'),
(244, 11, 'Tirúa'),
(245, 11, 'Tomé'),
(246, 11, 'Tucapel'),
(247, 11, 'Yumbel'),
(248, 12, 'Angol'),
(249, 12, 'Carahue'),
(250, 12, 'Cholchol'),
(251, 12, 'Collipulli'),
(252, 12, 'Cunco'),
(253, 12, 'Curacautín'),
(254, 12, 'Curarrehue'),
(255, 12, 'Ercilla'),
(256, 12, 'Freire'),
(257, 12, 'Galvarino'),
(258, 12, 'Gorbea'),
(259, 12, 'Lautaro'),
(260, 12, 'Loncoche'),
(261, 12, 'Lonquimay'),
(262, 12, 'Los Sauces'),
(263, 12, 'Lumaco'),
(264, 12, 'Melipeuco'),
(265, 12, 'Nueva Imperial'),
(266, 12, 'Padre las Casas'),
(267, 12, 'Perquenco'),
(268, 12, 'Pitrufquén'),
(269, 12, 'Pucón'),
(270, 12, 'Purén'),
(271, 12, 'Renaico'),
(272, 12, 'Saavedra'),
(273, 12, 'Temuco'),
(274, 12, 'Teodoro Schmidt'),
(275, 12, 'Toltén'),
(276, 12, 'Traiguén'),
(277, 12, 'Victoria'),
(278, 12, 'Vilcún'),
(279, 12, 'Villarrica'),
(280, 13, 'Corral'),
(281, 13, 'Futrono'),
(282, 13, 'La Unión'),
(283, 13, 'Lago Ranco'),
(284, 13, 'Los Lagos'),
(285, 13, 'Mariquina'),
(286, 13, 'Máfil'),
(287, 13, 'Paillaco'),
(288, 13, 'Panguipulli'),
(289, 13, 'Río Bueno'),
(290, 13, 'Valdivia'),
(291, 13, 'Lanco'),
(292, 14, 'Ancud'),
(293, 14, 'Calbuco'),
(294, 14, 'Castro'),
(295, 14, 'Chaitén'),
(296, 14, 'Chonchi'),
(297, 14, 'Cochamó'),
(298, 14, 'Curaco de Vélez'),
(299, 14, 'Dalcahue'),
(300, 14, 'Fresia'),
(301, 14, 'Frutillar'),
(302, 14, 'Futaleufú'),
(303, 14, 'Hualaihué'),
(304, 14, 'Llanquihue'),
(305, 14, 'Los Muermos'),
(306, 14, 'Maullín'),
(307, 14, 'Osorno'),
(308, 14, 'Palena'),
(309, 14, 'Puerto Montt'),
(310, 14, 'Puerto Octay'),
(311, 14, 'Puerto Varas'),
(312, 14, 'Puqueldón'),
(313, 14, 'Purranque'),
(314, 14, 'Puyehue'),
(315, 14, 'Queilén'),
(316, 14, 'Quellón'),
(317, 14, 'Quemchi'),
(318, 14, 'Quinchao'),
(319, 14, 'Río Negro'),
(320, 14, 'San Juan de la Costa'),
(321, 14, 'San Pablo'),
(322, 15, 'Aysén'),
(323, 15, 'Chile Chico'),
(324, 15, 'Cisnes'),
(325, 15, 'Cochrane'),
(326, 15, 'Coyhaique'),
(327, 15, 'Guaitecas'),
(328, 15, 'Lago Verde'),
(329, 15, 'OHiggins'),
(330, 15, 'Río Ibáñez'),
(331, 15, 'Tortel'),
(332, 16, 'Punta Arenas'),
(333, 16, 'Torres del Paine'),
(334, 16, 'Porvenir'),
(335, 16, 'Primavera'),
(336, 16, 'Timaukel'),
(337, 16, 'Cabo de Hornos'),
(338, 16, 'Río Verde'),
(339, 16, 'Laguna Blanca'),
(340, 16, 'San Gregorio'),
(341, 16, 'Antártica'),
(342, 16, 'Puerto Natales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_encuesta_reg`
--

CREATE TABLE `datos_encuesta_reg` (
  `id_region` int(11) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_encuesta_reg`
--

INSERT INTO `datos_encuesta_reg` (`id_region`, `region`) VALUES
(1, 'Arica y Parinacota'),
(2, 'Tarapacá'),
(3, 'Antofagasta'),
(4, 'Atacama'),
(5, 'Coquimbo'),
(6, 'Valparaíso'),
(7, 'Metropolitana'),
(8, 'OHiggins'),
(9, 'Maule'),
(10, 'Ñuble'),
(11, 'Biobío'),
(12, 'Araucanía'),
(13, 'Los Ríos'),
(14, 'Los Lagos'),
(15, 'Aysén'),
(16, 'Magallanes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre_apellido` varchar(40) DEFAULT NULL,
  `alias` varchar(20) DEFAULT NULL,
  `rut` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `comuna` varchar(20) DEFAULT NULL,
  `candidato` varchar(40) DEFAULT NULL,
  `como_entero` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre_apellido`, `alias`, `rut`, `email`, `region`, `comuna`, `candidato`, `como_entero`) VALUES
(1, 'Raúl Barahona', 'Mark', '16.660.685-3', 'raulchilejoven@gmail.com', 'Metropolitana', 'Maipú', 'Javier Milei', 'web TV Redes Sociales Amigo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
