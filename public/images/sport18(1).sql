-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-02-2019 a las 13:36:34
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sport18`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificaciones`
--

CREATE TABLE `clasificaciones` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clasificaciones`
--

INSERT INTO `clasificaciones` (`id`, `descripcion`, `created_at`, `updated_at`, `id_usuario`) VALUES
(2, 'Primera Divisón', '2019-02-19 05:14:36', '2019-02-19 05:14:36', 1),
(3, 'Segunda División', '2019-02-19 05:14:52', '2019-02-19 05:14:52', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `procedencia` text NOT NULL,
  `contenido` text NOT NULL,
  `url_imagen` text NOT NULL,
  `role_user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `nombre`, `procedencia`, `contenido`, `url_imagen`, `role_user_id`, `created_at`, `updated_at`) VALUES
(1, 'Comentario1', 'Facebook', '<p>Contenido</p>', 'img_comentario_1550430833.jpg', 1, '2019-02-17 19:13:53', '2019-02-17 19:13:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuns`
--

CREATE TABLE `comuns` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comuns`
--

INSERT INTO `comuns` (`id`, `name`, `content`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'politica_privacidad', NULL, 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(2, 'telefono', '1234567890', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(3, 'email', 'agenciasport18@gmail.com', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(4, 'direccion', 'Dirección', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(5, 'ubicacion', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15691.860329941712!2d-66.9301176!3d10.5034164!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sve!4v1550546498574\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(6, 'facebook', 'https://www.facebook.com/groups/Psic0nautas/?ref=bookmarks', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(7, 'twitter', 'https://twitter.com/noticiasvenezue?lang=es', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(8, 'instagram', 'https://www.instagram.com/unoticias/?hl=es-la', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(9, 'descripcion', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean m', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(10, 'meta_description', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolo', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(11, 'meta_name', 'Agencia Sport 18', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(12, 'meta_url', 'url', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(13, 'title', 'Agencia Sport19', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(14, 'video', 'https://www.youtube.com/watch?v=LhhogVZ7Rlo', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(15, 'video_texto', 'Texto', 0, '2019-01-26 09:41:59', '2019-02-19 07:33:23'),
(16, 'video_img', 'img_video_1550547203.jpeg', 0, NULL, '2019-02-19 07:33:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `descripcion`, `img`, `id_usuario`, `created_at`, `updated_at`) VALUES
(2, 'Caracas Fútbol Club', 'img_equipo_1550553019.png', 1, '2019-02-19 05:10:19', '2019-02-19 05:10:19'),
(3, 'Deportivo Táchira', 'img_equipo_1550553049.png', 1, '2019-02-19 05:10:49', '2019-02-19 05:10:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadistica`
--

CREATE TABLE `estadistica` (
  `id` int(11) NOT NULL,
  `id_jugador` int(11) NOT NULL,
  `pjugados` int(11) NOT NULL,
  `pganados` int(11) NOT NULL,
  `pperdidos` int(11) NOT NULL,
  `pempatados` int(11) NOT NULL,
  `goles` int(11) NOT NULL,
  `mj` int(11) DEFAULT NULL,
  `v_a` int(11) DEFAULT NULL,
  `amarilla` int(11) DEFAULT NULL,
  `roja` int(11) DEFAULT NULL,
  `titular` int(11) DEFAULT NULL,
  `suplente` int(11) DEFAULT NULL,
  `convocatoria` int(11) DEFAULT NULL,
  `role_user_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `id_relacion` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `tipo` int(11) NOT NULL,
  `portada` int(11) DEFAULT NULL,
  `url` varchar(250) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `publico` int(11) NOT NULL DEFAULT '1',
  `tipo_relacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `id_relacion`, `descripcion`, `tipo`, `portada`, `url`, `id_usuario`, `created_at`, `updated_at`, `publico`, `tipo_relacion`) VALUES
(14, 4, 'Video', 2, 1, 'video_jugador_1550542899.mp4', 1, '2019-02-19 02:21:39', '2019-02-19 02:21:39', 1, 1),
(16, 4, 'Imagen', 1, NULL, 'img_jugador_1550543052.jpg', 1, '2019-02-19 02:24:12', '2019-02-19 02:24:12', 1, 1),
(17, 3, 'Jugador', 1, 1, 'img_jugador_1550543557.jpg', 1, '2019-02-19 02:32:37', '2019-02-19 02:32:37', 1, 1),
(18, 2, 'Imagen', 1, 1, 'img_noticia_1550544215.jpg', 1, '2019-02-19 02:43:35', '2019-02-19 02:43:35', 1, 2),
(19, 2, 'Video', 2, 1, 'video_noticia_1550544251.mp4', 1, '2019-02-19 02:44:11', '2019-02-19 02:44:11', 1, 2),
(20, 1, 'Img1', 1, NULL, 'img_noticia_1550547776.jpeg', 1, '2019-02-19 03:42:56', '2019-02-19 03:42:56', 1, 2),
(21, 1, 'Img2', 1, NULL, 'img_noticia_1550547796.jpeg', 1, '2019-02-19 03:43:16', '2019-02-19 03:43:16', 1, 2),
(22, 1, 'Img3', 1, NULL, 'img_noticia_1550547813.jpeg', 1, '2019-02-19 03:43:33', '2019-02-19 03:43:33', 1, 2),
(23, 1, 'Video1', 2, NULL, 'video_noticia_1550547901.mp4', 1, '2019-02-19 03:45:01', '2019-02-19 03:45:01', 1, 2),
(24, 1, 'Video2', 2, NULL, 'video_noticia_1550547931.mp4', 1, '2019-02-19 03:45:31', '2019-02-19 03:45:31', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombres` varchar(250) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `coreo` varchar(250) NOT NULL,
  `lugar_nacimiento` varchar(250) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_posicion` int(11) NOT NULL,
  `tipo` enum('Titular','Suplente','','') NOT NULL,
  `trayectoria` varchar(20) NOT NULL,
  `nivel_academico` varchar(50) NOT NULL,
  `talla_zapato` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `altura` varchar(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_clasificacion` int(11) NOT NULL,
  `cedula_representante` int(11) DEFAULT NULL,
  `nombre_representante` varchar(250) DEFAULT NULL,
  `telefono_representante` varchar(20) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `instagram` varchar(200) DEFAULT NULL,
  `twiter` varchar(200) DEFAULT NULL,
  `img` varchar(250) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `publico` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `cedula`, `nombres`, `telefono`, `coreo`, `lugar_nacimiento`, `fecha_nacimiento`, `id_posicion`, `tipo`, `trayectoria`, `nivel_academico`, `talla_zapato`, `peso`, `altura`, `id_equipo`, `id_clasificacion`, `cedula_representante`, `nombre_representante`, `telefono_representante`, `facebook`, `instagram`, `twiter`, `img`, `id_usuario`, `created_at`, `updated_at`, `publico`) VALUES
(6, 123456789, 'Ricardo Medina', '4140232833', 'correo@gmail.com', 'Caracas', '1994-01-12', 5, 'Suplente', '????', 'Bachiller', 44, 70, '1:80', 2, 3, NULL, NULL, NULL, 'facebook', 'Instagram', 'twitter', 'img_jugador_1550553778.png', 1, '2019-02-19 05:22:58', '2019-02-19 05:22:58', 1),
(7, 26802955, 'Tony Andres Rodriguez Silva', '414-2344386', 'corre@hotmail.com', 'Caracas', '2019-02-12', 2, 'Titular', '????', 'Bachiller', 44, 80, '1:59', 2, 2, NULL, NULL, NULL, 'facebook', 'Instagram', 'twitter', 'img_jugador_1550553911.png', 1, '2019-02-19 05:25:00', '2019-02-19 05:25:11', 1),
(8, 234567813, 'Elyan Marquez', '123456', 'corre@yahoo.com', 'Lara', '2019-02-18', 2, 'Titular', '???', 'Licenciado', 45, 45, '1:20', 2, 2, NULL, NULL, NULL, 'facebook', 'Instagram', 'twitter', 'img_jugador_1550553986.png', 1, '2019-02-19 05:26:15', '2019-02-19 05:26:26', 1),
(9, 20826992, 'Jean Frank Arias', '54294036394', 'correo@nadas.com', 'Carabobo', '2019-02-09', 4, 'Suplente', '????', 'TSU', 40, 100, '2:00', 3, 3, NULL, NULL, NULL, 'facebook', NULL, 'twitter', 'img_jugador_1550554079.png', 1, '2019-02-19 05:27:59', '2019-02-19 05:27:59', 1),
(10, 14592356, 'Moisés Castro', '9876543', 'fdssfd@gmail.com', 'Vargas', '2019-02-18', 4, 'Suplente', '???', 'Bachillerato', 39, 20, '1:80', 3, 3, NULL, NULL, NULL, 'facebook', NULL, NULL, 'img_jugador_1550554172.png', 1, '2019-02-19 05:29:32', '2019-02-19 05:29:32', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newlesters`
--

CREATE TABLE `newlesters` (
  `id` int(11) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `id` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `role_user_id` int(11) NOT NULL,
  `publico` tinyint(1) NOT NULL,
  `url_imagen` text NOT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `twitter` varchar(250) DEFAULT NULL,
  `instagram` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`id`, `nombres`, `cargo`, `created_at`, `updated_at`, `role_user_id`, `publico`, `url_imagen`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'Nombre', 'Presidente', '2019-02-17 19:19:59', '2019-02-18 05:07:00', 1, 1, 'img_nosotros_1550466420.jpg', NULL, NULL, NULL),
(2, 'Nombre Presidente', 'Preside', '2019-02-18 05:06:24', '2019-02-18 05:06:24', 1, 1, 'img_nosotros_1550466384.jpg', NULL, NULL, NULL),
(3, 'OtroMiembro', 'otroCargo', '2019-02-18 05:07:27', '2019-02-18 05:07:27', 1, 1, 'img_nosotros_1550466447.jpg', NULL, NULL, NULL),
(4, 'Otro', 'Cargo', '2019-02-18 05:07:55', '2019-02-18 05:22:54', 1, 1, 'img_nosotros_1550467374.jpg', NULL, NULL, 'dff');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `resumen` text NOT NULL,
  `fuente` varchar(100) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `publico` tinyint(1) NOT NULL,
  `posicion` int(11) NOT NULL,
  `url_multimedia` text,
  `url_imagen` text,
  `role_user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `resumen`, `fuente`, `descripcion`, `publico`, `posicion`, `url_multimedia`, `url_imagen`, `role_user_id`, `created_at`, `updated_at`) VALUES
(1, 'Noticia', '<p>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>', 'Fuente', '<p>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>', 1, 2, NULL, 'img_noticia_1550547695.jpeg', 1, '2019-02-17 19:18:43', '2019-02-19 03:41:35'),
(2, 'Noticia2', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>', 'Fuente', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>', 1, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/L9UR-1y0HEg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, 1, '2019-02-18 01:51:52', '2019-02-18 01:51:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `country_prefix` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `desc` varchar(125) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posiciones`
--

CREATE TABLE `posiciones` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posiciones`
--

INSERT INTO `posiciones` (`id`, `descripcion`, `id_usuario`, `created_at`, `updated_at`) VALUES
(2, 'Defensor Central', 1, '2019-02-19 05:12:13', '2019-02-19 05:12:13'),
(3, 'Defensor Lateral', 1, '2019-02-19 05:12:22', '2019-02-19 05:12:22'),
(4, 'Mediocampista', 1, '2019-02-19 05:12:34', '2019-02-19 05:12:34'),
(5, 'Lateral', 1, '2019-02-19 05:12:42', '2019-02-19 05:12:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-01-26 09:41:58', '2019-01-26 09:41:58'),
(2, 'user', 'User', '2019-01-26 09:41:58', '2019-01-26 09:41:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(2, 1, 2, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(3, 1, 3, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(4, 1, 4, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(5, 1, 5, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(6, 1, 6, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(7, 1, 7, '2019-01-26 09:41:59', '2019-01-26 09:41:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `contenido` text NOT NULL,
  `contenido2` text,
  `publico` tinyint(1) NOT NULL,
  `posicion` int(11) NOT NULL,
  `url_imagen` text NOT NULL,
  `role_user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `titulo`, `contenido`, `contenido2`, `publico`, `posicion`, `url_imagen`, `role_user_id`, `created_at`, `updated_at`) VALUES
(4, 'Slider', 'Contenido', NULL, 1, 1, 'img_slider_1550547411.png', 1, '2019-02-19 03:36:51', '2019-02-19 03:36:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anthoni', 'yosec.cervino@gmail.com', '$2y$10$anALTN3.I3PYC8HNanV2TOKCzlRzVpGl9VDP.XWYAtPBa/V4okpdi', '6rbEvfb4439C0dBksHOlaZ344MTcgGiQEYL55bkiA9KBM5euNPfxRKF63U9z', '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(2, 'Ruben', 'rubentorres26@gmail.com', '$2y$10$iY5VjVRbkAp9ilDsPHWQkeob/O7cGPohDlz8bAMT0kDWj7yMdXX9K', NULL, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(3, 'Kleiderman', 'kleidermanctrok@gmail.com', '$2y$10$GW8klMI3pKXPJDlmtnG6yOR5INYAJ2HO6j68FYrU1Mv4FwlISDphS', NULL, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(4, 'Admin', 'info@consuljuridica.com', '$2y$10$5PguAUBrR5j5xfUNszqWNe.fGzWMOj7KhRxb00TIK7VFYyeibELoe', NULL, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(5, 'Jose', 'jbello262@gmail.com', '$2y$10$B212XOheBwiXTD1jY73XCeMJRDymNUhsziWQE4HYqmxWc2LfKKXrW', NULL, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(6, 'Yoelis', 'yoe318@gmail.com', '$2y$10$LEP/xNvDmxEjtFj3SXJWW.YyLvc8QCt1hI/5Ry9zsjo4XwGu.BhAC', NULL, '2019-01-26 09:41:59', '2019-01-26 09:41:59'),
(7, 'Jose', 'carlosspf24@gmail.com', '$2y$10$qrMLsCg6.YLVTPx2s0pcbOC1zcyEuZ4tH6ZgL/4MNPTDjxnOraLhC', NULL, '2019-01-26 09:41:59', '2019-01-26 09:41:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comuns`
--
ALTER TABLE `comuns`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `id_posicion` (`id_posicion`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- Indices de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comuns`
--
ALTER TABLE `comuns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
