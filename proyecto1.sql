-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2018 a las 07:52:51
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amigos`
--

CREATE TABLE `amigos` (
  `id_amigos` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL,
  `id_usuario1` int(11) DEFAULT NULL,
  `id_usuario2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoyo_visual`
--

CREATE TABLE `apoyo_visual` (
  `id_apoyo` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `id_reto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE `artista` (
  `id_artista` int(11) NOT NULL,
  `fn` date DEFAULT NULL,
  `imagen_perfil` varchar(200) DEFAULT NULL,
  `informacion_contacto` varchar(200) DEFAULT NULL,
  `tecnica_interes` varchar(100) DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_diseno` int(11) DEFAULT NULL,
  `id_portafolio` int(11) DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coleccion`
--

CREATE TABLE `coleccion` (
  `id_coleccion` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `id_portafolio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `contenido` varchar(200) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_publicacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conversacion`
--

CREATE TABLE `conversacion` (
  `id_conversacion` int(11) NOT NULL,
  `id_usuario1` int(11) DEFAULT NULL,
  `id_usuario2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseno`
--

CREATE TABLE `diseno` (
  `id_diseno` int(11) NOT NULL,
  `imagen_fondo` varchar(200) DEFAULT NULL,
  `color_bordes` char(7) DEFAULT NULL,
  `color_titulos` char(7) DEFAULT NULL,
  `color_botones` char(7) DEFAULT NULL,
  `color_fondo` char(7) DEFAULT NULL,
  `tipo_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fan`
--

CREATE TABLE `fan` (
  `id_fan` int(11) NOT NULL,
  `fn` date DEFAULT NULL,
  `imagen_perfil` varchar(200) DEFAULT NULL,
  `informacion_contacto` varchar(200) DEFAULT NULL,
  `perfil` varchar(200) DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro_favs`
--

CREATE TABLE `foro_favs` (
  `id_favs` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_forohilo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro_hilo`
--

CREATE TABLE `foro_hilo` (
  `id_forohilo` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `contenido` varchar(200) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `id_forotipo` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro_respuesta`
--

CREATE TABLE `foro_respuesta` (
  `id_fororespuesta` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `contenido` varchar(200) DEFAULT NULL,
  `id_forohilo` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro_tipo`
--

CREATE TABLE `foro_tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `foro_tipo`
--

INSERT INTO `foro_tipo` (`id_tipo`, `tipo`) VALUES
(1, 'Ideas'),
(2, 'Objetos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_coleccion`
--

CREATE TABLE `imagen_coleccion` (
  `id_imagencoleccion` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `id_coleccion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_reto`
--

CREATE TABLE `imagen_reto` (
  `id_imagenreto` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `id_aceptado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `texto` varchar(200) DEFAULT NULL,
  `id_conversacion` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `me_gusta`
--

CREATE TABLE `me_gusta` (
  `id_megusta` int(11) NOT NULL,
  `tipo_me_gusta` int(11) DEFAULT NULL,
  `id_publicacion` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nombre_pais` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nombre_pais`) VALUES
(1, 'Mexico'),
(2, 'Costa Rica'),
(3, 'El Salvador'),
(4, 'Guatemala'),
(5, 'Honduras'),
(6, 'Nicaragua'),
(7, 'Panamá'),
(8, 'Cuba'),
(9, 'Puerto Rico'),
(10, 'República Dominicana'),
(11, 'Argentina'),
(12, 'Bolivia'),
(13, 'Chile'),
(14, 'Colombia'),
(15, 'Ecuador'),
(16, 'Paraguay'),
(17, 'Perú'),
(18, 'Uruguay'),
(19, 'Venezuela'),
(20, 'España'),
(21, 'Estados Unidos de America');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `metas` varchar(200) DEFAULT NULL,
  `exper` varchar(200) DEFAULT NULL,
  `otro` varchar(200) DEFAULT NULL,
  `estudios` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `id_portafolio` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id_publicacion` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `contenido_explicito` int(11) DEFAULT NULL,
  `contenido` varchar(200) DEFAULT NULL,
  `etiquetas` varchar(200) DEFAULT NULL,
  `privacidad` int(11) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `id_artista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retos`
--

CREATE TABLE `retos` (
  `id_reto` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retos_aceptados`
--

CREATE TABLE `retos_aceptados` (
  `id_aceptado` int(11) NOT NULL,
  `id_artista` int(11) DEFAULT NULL,
  `id_reto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguidores`
--

CREATE TABLE `seguidores` (
  `id_seguidores` int(11) NOT NULL,
  `id_usuario1` int(11) DEFAULT NULL,
  `id_usuario2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_perfil`
--

CREATE TABLE `tipo_perfil` (
  `id_tipoperfil` int(11) NOT NULL,
  `tipo_perfil` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_perfil`
--

INSERT INTO `tipo_perfil` (`id_tipoperfil`, `tipo_perfil`) VALUES
(1, 'Una columna'),
(2, 'Dos columnas'),
(3, 'Tres columnas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipousuario` int(11) NOT NULL,
  `nombre_tipousuario` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipousuario`, `nombre_tipousuario`) VALUES
(1, 'Artista'),
(2, 'Fan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `contrasena` varchar(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `bloqueado` int(11) DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`id_amigos`),
  ADD KEY `id_usuario2` (`id_usuario2`),
  ADD KEY `id_usuario1` (`id_usuario1`);

--
-- Indices de la tabla `apoyo_visual`
--
ALTER TABLE `apoyo_visual`
  ADD PRIMARY KEY (`id_apoyo`),
  ADD KEY `id_reto` (`id_reto`);

--
-- Indices de la tabla `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id_artista`),
  ADD KEY `id_pais` (`id_pais`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_diseno` (`id_diseno`),
  ADD KEY `id_portafolio` (`id_portafolio`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- Indices de la tabla `coleccion`
--
ALTER TABLE `coleccion`
  ADD PRIMARY KEY (`id_coleccion`),
  ADD KEY `id_portafolio` (`id_portafolio`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_publicacion` (`id_publicacion`);

--
-- Indices de la tabla `conversacion`
--
ALTER TABLE `conversacion`
  ADD PRIMARY KEY (`id_conversacion`),
  ADD KEY `id_usuario1` (`id_usuario1`),
  ADD KEY `id_usuario2` (`id_usuario2`);

--
-- Indices de la tabla `diseno`
--
ALTER TABLE `diseno`
  ADD PRIMARY KEY (`id_diseno`),
  ADD KEY `tipo_perfil` (`tipo_perfil`);

--
-- Indices de la tabla `fan`
--
ALTER TABLE `fan`
  ADD PRIMARY KEY (`id_fan`),
  ADD KEY `id_pais` (`id_pais`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `foro_favs`
--
ALTER TABLE `foro_favs`
  ADD PRIMARY KEY (`id_favs`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_forohilo` (`id_forohilo`);

--
-- Indices de la tabla `foro_hilo`
--
ALTER TABLE `foro_hilo`
  ADD PRIMARY KEY (`id_forohilo`),
  ADD KEY `id_forotipo` (`id_forotipo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `foro_respuesta`
--
ALTER TABLE `foro_respuesta`
  ADD PRIMARY KEY (`id_fororespuesta`),
  ADD KEY `id_forohilo` (`id_forohilo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `foro_tipo`
--
ALTER TABLE `foro_tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `imagen_coleccion`
--
ALTER TABLE `imagen_coleccion`
  ADD PRIMARY KEY (`id_imagencoleccion`),
  ADD KEY `id_coleccion` (`id_coleccion`);

--
-- Indices de la tabla `imagen_reto`
--
ALTER TABLE `imagen_reto`
  ADD PRIMARY KEY (`id_imagenreto`),
  ADD KEY `id_aceptado` (`id_aceptado`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD KEY `id_conversacion` (`id_conversacion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `me_gusta`
--
ALTER TABLE `me_gusta`
  ADD PRIMARY KEY (`id_megusta`),
  ADD KEY `id_publicacion` (`id_publicacion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD PRIMARY KEY (`id_portafolio`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id_publicacion`),
  ADD KEY `id_artista` (`id_artista`);

--
-- Indices de la tabla `retos`
--
ALTER TABLE `retos`
  ADD PRIMARY KEY (`id_reto`);

--
-- Indices de la tabla `retos_aceptados`
--
ALTER TABLE `retos_aceptados`
  ADD PRIMARY KEY (`id_aceptado`),
  ADD KEY `id_artista` (`id_artista`),
  ADD KEY `id_reto` (`id_reto`);

--
-- Indices de la tabla `seguidores`
--
ALTER TABLE `seguidores`
  ADD PRIMARY KEY (`id_seguidores`),
  ADD KEY `id_usuario1` (`id_usuario1`),
  ADD KEY `id_usuario2` (`id_usuario2`);

--
-- Indices de la tabla `tipo_perfil`
--
ALTER TABLE `tipo_perfil`
  ADD PRIMARY KEY (`id_tipoperfil`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipousuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `tipo_usuario` (`tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amigos`
--
ALTER TABLE `amigos`
  MODIFY `id_amigos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `apoyo_visual`
--
ALTER TABLE `apoyo_visual`
  MODIFY `id_apoyo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `artista`
--
ALTER TABLE `artista`
  MODIFY `id_artista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `coleccion`
--
ALTER TABLE `coleccion`
  MODIFY `id_coleccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `conversacion`
--
ALTER TABLE `conversacion`
  MODIFY `id_conversacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diseno`
--
ALTER TABLE `diseno`
  MODIFY `id_diseno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fan`
--
ALTER TABLE `fan`
  MODIFY `id_fan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `foro_favs`
--
ALTER TABLE `foro_favs`
  MODIFY `id_favs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `foro_hilo`
--
ALTER TABLE `foro_hilo`
  MODIFY `id_forohilo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `foro_respuesta`
--
ALTER TABLE `foro_respuesta`
  MODIFY `id_fororespuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `foro_tipo`
--
ALTER TABLE `foro_tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagen_coleccion`
--
ALTER TABLE `imagen_coleccion`
  MODIFY `id_imagencoleccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_reto`
--
ALTER TABLE `imagen_reto`
  MODIFY `id_imagenreto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `me_gusta`
--
ALTER TABLE `me_gusta`
  MODIFY `id_megusta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  MODIFY `id_portafolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id_publicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `retos`
--
ALTER TABLE `retos`
  MODIFY `id_reto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `retos_aceptados`
--
ALTER TABLE `retos_aceptados`
  MODIFY `id_aceptado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguidores`
--
ALTER TABLE `seguidores`
  MODIFY `id_seguidores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_perfil`
--
ALTER TABLE `tipo_perfil`
  MODIFY `id_tipoperfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipousuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `amigos`
--
ALTER TABLE `amigos`
  ADD CONSTRAINT `amigos_ibfk_1` FOREIGN KEY (`id_usuario2`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `amigos_ibfk_2` FOREIGN KEY (`id_usuario1`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `amigos_ibfk_3` FOREIGN KEY (`id_usuario1`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `apoyo_visual`
--
ALTER TABLE `apoyo_visual`
  ADD CONSTRAINT `apoyo_visual_ibfk_1` FOREIGN KEY (`id_reto`) REFERENCES `retos` (`id_reto`);

--
-- Filtros para la tabla `artista`
--
ALTER TABLE `artista`
  ADD CONSTRAINT `artista_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`),
  ADD CONSTRAINT `artista_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `artista_ibfk_3` FOREIGN KEY (`id_diseno`) REFERENCES `diseno` (`id_diseno`),
  ADD CONSTRAINT `artista_ibfk_4` FOREIGN KEY (`id_portafolio`) REFERENCES `portafolio` (`id_portafolio`),
  ADD CONSTRAINT `artista_ibfk_5` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id_perfil`);

--
-- Filtros para la tabla `coleccion`
--
ALTER TABLE `coleccion`
  ADD CONSTRAINT `coleccion_ibfk_1` FOREIGN KEY (`id_portafolio`) REFERENCES `portafolio` (`id_portafolio`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id_publicacion`);

--
-- Filtros para la tabla `conversacion`
--
ALTER TABLE `conversacion`
  ADD CONSTRAINT `conversacion_ibfk_1` FOREIGN KEY (`id_usuario1`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `conversacion_ibfk_2` FOREIGN KEY (`id_usuario2`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `diseno`
--
ALTER TABLE `diseno`
  ADD CONSTRAINT `diseno_ibfk_1` FOREIGN KEY (`tipo_perfil`) REFERENCES `tipo_perfil` (`id_tipoperfil`);

--
-- Filtros para la tabla `fan`
--
ALTER TABLE `fan`
  ADD CONSTRAINT `fan_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`),
  ADD CONSTRAINT `fan_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `foro_favs`
--
ALTER TABLE `foro_favs`
  ADD CONSTRAINT `foro_favs_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `foro_favs_ibfk_2` FOREIGN KEY (`id_forohilo`) REFERENCES `foro_hilo` (`id_forohilo`);

--
-- Filtros para la tabla `foro_hilo`
--
ALTER TABLE `foro_hilo`
  ADD CONSTRAINT `foro_hilo_ibfk_1` FOREIGN KEY (`id_forotipo`) REFERENCES `foro_tipo` (`id_tipo`),
  ADD CONSTRAINT `foro_hilo_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `foro_respuesta`
--
ALTER TABLE `foro_respuesta`
  ADD CONSTRAINT `foro_respuesta_ibfk_1` FOREIGN KEY (`id_forohilo`) REFERENCES `foro_hilo` (`id_forohilo`),
  ADD CONSTRAINT `foro_respuesta_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `imagen_coleccion`
--
ALTER TABLE `imagen_coleccion`
  ADD CONSTRAINT `imagen_coleccion_ibfk_1` FOREIGN KEY (`id_coleccion`) REFERENCES `coleccion` (`id_coleccion`);

--
-- Filtros para la tabla `imagen_reto`
--
ALTER TABLE `imagen_reto`
  ADD CONSTRAINT `imagen_reto_ibfk_1` FOREIGN KEY (`id_aceptado`) REFERENCES `retos_aceptados` (`id_aceptado`);

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `mensaje_ibfk_1` FOREIGN KEY (`id_conversacion`) REFERENCES `conversacion` (`id_conversacion`),
  ADD CONSTRAINT `mensaje_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `me_gusta`
--
ALTER TABLE `me_gusta`
  ADD CONSTRAINT `me_gusta_ibfk_1` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id_publicacion`),
  ADD CONSTRAINT `me_gusta_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id_artista`);

--
-- Filtros para la tabla `retos_aceptados`
--
ALTER TABLE `retos_aceptados`
  ADD CONSTRAINT `retos_aceptados_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id_artista`),
  ADD CONSTRAINT `retos_aceptados_ibfk_2` FOREIGN KEY (`id_reto`) REFERENCES `retos` (`id_reto`);

--
-- Filtros para la tabla `seguidores`
--
ALTER TABLE `seguidores`
  ADD CONSTRAINT `seguidores_ibfk_1` FOREIGN KEY (`id_usuario1`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `seguidores_ibfk_2` FOREIGN KEY (`id_usuario2`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipousuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
