-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-02-2022 a las 11:52:44
-- Versión del servidor: 5.7.37
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `it_Login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `codigoempresa` int(10) NOT NULL,
  `dni` varchar(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `apellidoseg` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `poblacion` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `perscontacto` varchar(50) NOT NULL,
  `tel1` int(11) NOT NULL,
  `tel2` int(11) NOT NULL,
  `tel3` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha_nacimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `forma_pago` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `codigoempresa`, `dni`, `nombre`, `apellido`, `apellidoseg`, `calle`, `numero`, `poblacion`, `cp`, `provincia`, `perscontacto`, `tel1`, `tel2`, `tel3`, `email`, `fecha_nacimiento`, `forma_pago`, `updated_at`, `created_at`) VALUES
(34343434, 0, '34343434', 'azfa', 'dfgasf', 'ASFDas', 'vhgbdsf', 12, 'sfda', 4444, 'asdfas', 'sdfa', 999999999, 999999999, 999999999, 'dcasfd@hotmail.com', '1992-01-27 23:00:00', 'tarjeta', '2021-07-28 09:43:14', '2021-07-28 09:15:54'),
(34323232, 33333, '34323232', 'hfghgasd', 'zxfvz<', 'fz<<z', '<asdf<asd', 42, 'sfda', 55555, 'v<zdv', 'efFGegf', 888888888, 888888888, 888888888, 'dzsafs@hotmail.com', '2021-07-27 22:00:00', 'efectivo', '2021-07-28 09:42:59', '2021-07-28 09:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `empresa` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `empresa`) VALUES
(1, 'SGT'),
(2, 'GD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2020_10_08_074344_create_roles_table', 1),
(4, '2020_10_08_074826_create_role_user_table', 1),
(5, '2020_10_23_092123_create_empleados_table', 1),
(6, '2020_10_26_101805_users__edit_table', 1),
(7, '2021_01_08_102752_create_mundopetroleo_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `norutas`
--

CREATE TABLE `norutas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL,
  `poblacion` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `norutas`
--

INSERT INTO `norutas` (`id`, `nombre`, `email`, `telefono`, `poblacion`, `updated_at`, `created_at`) VALUES
(25, 'JULIO', 'dsfsadfg@jjs.com', 1212121212, 'Altafulla', '2021-11-26 11:03:39', '2021-11-26 11:03:39'),
(27, 'JULIO', 'jpojpoi@ftyf.es', 1212121212, 'Altafulla', '2021-11-26 11:05:32', '2021-11-26 11:05:32'),
(35, 'JULIO', 'dsfsadfg@jjs.com', 1212121212, 'Altafulla', '2021-11-26 11:21:05', '2021-11-26 11:21:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(50) NOT NULL,
  `oferta` varchar(50) NOT NULL,
  `fecha_ini` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_fin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tipo` varchar(10) NOT NULL,
  `cantidad01` varchar(50) NOT NULL,
  `cantidad02` varchar(50) NOT NULL,
  `desc_oferta` varchar(50) NOT NULL,
  `rango1` int(11) NOT NULL,
  `rango2` int(11) NOT NULL,
  `usos` int(5) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `titular` varchar(50) NOT NULL,
  `zonas` varchar(50) NOT NULL,
  `link` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`id`, `oferta`, `fecha_ini`, `fecha_fin`, `tipo`, `cantidad01`, `cantidad02`, `desc_oferta`, `rango1`, `rango2`, `usos`, `nombre`, `titular`, `zonas`, `link`) VALUES
(730, 'bienvenidavale', '2022-02-01 15:17:17', '2022-02-23 00:00:00', '€', '5', '0', 'vale descuento', 0, 399, 1000, NULL, '', 'todas', 'www.google.com'),
(729, 'bannerlunes20', '2021-12-19 00:00:00', '2022-03-13 00:00:00', '€', '0', '0', '.', 0, 10000, 1000, 'para Banner-02-02-16.jpg', '.', 'todas', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('it@nascorenergias.com', '$2y$10$X/QHcC1M2mKfnmwA5wGRXenRQz3MTtGsWRpJURGalctEIHYKjmyEq', '2021-07-30 10:03:41'),
('pheisar@hotmail.com', '$2y$10$8UmEXT7rteXv6UVOPJEZ3eRzjhSBYsO5SZZF1WMdhTH4sd4FHjYRq', '2022-01-19 15:53:43'),
('hola@test.com', '$2y$10$GhTmRoKPCMchEkd0Fz6hP.exw7PkiptmJmQ/yruEm9cfWWj1iURPK', '2022-01-24 09:26:57'),
('marketing@simongrup.com', '$2y$10$J7sSjgZESsPphFtmLwMCxewjWGb.hNsRcY5x.xCpARRzNa8DcMR46', '2022-02-02 10:08:37'),
('jalisco@kk.com', '$2y$10$rQSrUioYcErTZzT2x3xAEODpF04CFpcRiAolhljiH7ZAiUCdXc/t.', '2022-02-04 11:20:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `session_token` varchar(50) DEFAULT NULL,
  `codigocliente` int(10) DEFAULT NULL,
  `codigoproconsi` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dni` varchar(10) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `poblacion` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `CP` int(5) NOT NULL,
  `fechaentrada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `canal` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `cantidad` decimal(11,0) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `seleccionado` varchar(50) NOT NULL,
  `financiado` int(1) NOT NULL,
  `cuotas` decimal(10,2) NOT NULL,
  `totalfinan` decimal(10,2) NOT NULL,
  `meses` int(11) NOT NULL,
  `telefono` int(9) NOT NULL,
  `observaciones` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `session_token`, `codigocliente`, `codigoproconsi`, `nombre`, `email`, `dni`, `address`, `poblacion`, `provincia`, `CP`, `fechaentrada`, `canal`, `estado`, `producto`, `cantidad`, `total`, `seleccionado`, `financiado`, `cuotas`, `totalfinan`, `meses`, `telefono`, `observaciones`, `created_at`, `updated_at`) VALUES
(489, 'dP04Tetf5ytle4eL45y4lDLDjJ1z3MvT7EJYg8nz', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Reus', 'Tarragona', 43200, '2021-12-20 15:07:26', 'WEB', 'Pendiente', 'GOB', 100, 88.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2021-12-20 15:07:26', '2021-12-20 15:07:26'),
(490, 'dP04Tetf5ytle4eL45y4lDLDjJ1z3MvT7EJYg8nz', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Parla', 'Madrid', 28980, '2021-12-20 15:58:42', 'WEB', 'Pendiente', 'GOB', 500, 150.10, 'si', 1, 143.17, 429.50, 3, 666666666, NULL, '2021-12-20 15:58:42', '2021-12-20 15:58:42'),
(561, 'ZwNjC82shEv4AZYqAQtr5PFEFiVUa860lib2oZ7B', NULL, NULL, 'Ruben', 'rdiaz@simongrup.com', '777858735C', 'Evarist Fabregas', 'Vilaseca', 'Tarragona', 43480, '2022-01-18 00:00:00', 'WEB', 'Cancelado', 'GOB', 500, 460.00, 'si', 0, 0.00, 0.00, 1, 6444455, NULL, '2022-01-18 17:46:21', '2022-01-20 11:02:46'),
(562, 'wszTgE7GfUlnNENmfCU2xWdrt78ojn7uqV9rcaCg', NULL, NULL, 'Ruben', 'rdiaz@simongrup.com', '777858735C', 'Evarist Fabregas', 'Vilaseca', 'Tarragona', 43480, '2022-01-19 00:00:00', 'WEB', 'Procesado', 'GOB', 500, 460.00, 'si', 0, 0.00, 0.00, 1, 6444455, NULL, '2022-01-19 16:16:15', '2022-01-20 10:50:29'),
(569, 'Jj1IRuj18WUXNSKhacXQzGle6brRvvFsW3OoJPWc', NULL, NULL, 'Perico el de los palotes', 'perico@test.com', '44444444F', '<DsafaSFAf', 'Vimbodi', 'Tarragona', 43430, '2022-01-21 10:38:17', 'WEB', 'Pendiente', 'GOB', 480, 441.60, 'si', 0, 0.00, 0.00, 1, 123123123, NULL, '2022-01-21 10:38:17', '2022-01-21 10:38:17'),
(570, 'Jj1IRuj18WUXNSKhacXQzGle6brRvvFsW3OoJPWc', NULL, NULL, 'Perico el de los palotes', 'perico@test.com', '44444444F', '<DsafaSFAf', 'Vimbodi', 'Tarragona', 43430, '2022-01-21 10:38:42', 'WEB', 'Pendiente', 'GOB', 480, 441.60, 'si', 0, 0.00, 0.00, 1, 123123123, NULL, '2022-01-21 10:38:42', '2022-01-21 10:38:42'),
(571, 'Jj1IRuj18WUXNSKhacXQzGle6brRvvFsW3OoJPWc', NULL, NULL, 'Perico el de los palotes', 'perico@test.com', '44444444F', '<DsafaSFAf', 'Vimbodi', 'Tarragona', 43430, '2022-01-21 10:41:35', 'WEB', 'Pendiente', 'GOB', 480, 441.60, 'si', 0, 0.00, 0.00, 1, 123123123, NULL, '2022-01-21 10:41:35', '2022-01-21 10:41:35'),
(572, 'Jj1IRuj18WUXNSKhacXQzGle6brRvvFsW3OoJPWc', NULL, NULL, 'Perico el de los palotes', 'perico@test.com', '44444444F', '<DsafaSFAf', 'Vimbodi', 'Tarragona', 43430, '2022-01-21 10:41:59', 'WEB', 'Pendiente', 'GOB', 480, 441.60, 'si', 0, 0.00, 0.00, 1, 123123123, NULL, '2022-01-21 10:41:59', '2022-01-21 10:41:59'),
(573, 'Jj1IRuj18WUXNSKhacXQzGle6brRvvFsW3OoJPWc', NULL, NULL, 'Perico el de los palotes', 'perico@test.com', '44444444F', '<DsafaSFAf', 'Vimbodi', 'Tarragona', 43430, '2022-01-21 10:42:20', 'WEB', 'Pendiente', 'GOB', 480, 441.60, 'si', 0, 0.00, 0.00, 1, 123123123, NULL, '2022-01-21 10:42:20', '2022-01-21 10:42:20'),
(574, 'Jj1IRuj18WUXNSKhacXQzGle6brRvvFsW3OoJPWc', NULL, NULL, 'Perico el de los palotes', 'perico@test.com', '44444444F', 'bjkhgbh', 'Vimbodi', 'Tarragona', 43430, '2022-01-21 10:47:11', 'WEB', 'Pendiente', 'GOB', 350, 336.00, 'si', 0, 0.00, 0.00, 1, 123456789, NULL, '2022-01-21 10:47:11', '2022-01-21 10:47:11'),
(575, 'Jj1IRuj18WUXNSKhacXQzGle6brRvvFsW3OoJPWc', NULL, NULL, 'Perico el de los palotes', 'perico@test.com', '44444444F', 'bjkhgbh', 'Vimbodi', 'Tarragona', 43430, '2022-01-21 11:14:35', 'WEB', 'Pendiente', 'GOB', 350, 336.00, 'si', 0, 0.00, 0.00, 1, 123456789, NULL, '2022-01-21 11:14:35', '2022-01-21 11:14:35'),
(576, 'Jj1IRuj18WUXNSKhacXQzGle6brRvvFsW3OoJPWc', NULL, NULL, 'Perico el de los palotes', 'perico@test.com', '44444444F', 'bjkhgbh', 'Vimbodi', 'Tarragona', 43430, '2022-01-21 11:15:04', 'WEB', 'Pendiente', 'GOB', 350, 336.00, 'si', 0, 0.00, 0.00, 1, 123456789, NULL, '2022-01-21 11:15:04', '2022-01-21 11:15:04'),
(600, '9TsUjCFltTYae8UXLNYFjzGP7yo5Y8s44LrInTxN', NULL, NULL, 'Ruben', 'rdiaz@simongrup.com', '777858735C', 'Eras Altes 3-3A', 'Vilaverd', 'Tarragona', 43490, '2022-01-26 10:19:22', 'WEB', 'Pendiente', 'GOB', 400, 368.00, 'si', 0, 0.00, 0.00, 1, 644444444, NULL, '2022-01-26 10:19:22', '2022-01-26 10:19:22'),
(771, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Madrid', 28900, '2022-02-09 16:36:58', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:36:58', '2022-02-09 16:36:58'),
(770, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Torreforta', 'Tarragona', 43006, '2022-02-09 16:35:57', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:35:57', '2022-02-09 16:35:57'),
(769, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Torreforta', 'Tarragona', 43006, '2022-02-09 16:17:48', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:17:48', '2022-02-09 16:17:48'),
(768, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Torreforta', 'Tarragona', 43006, '2022-02-09 16:16:40', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:16:40', '2022-02-09 16:16:40'),
(767, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Torreforta', 'Tarragona', 43006, '2022-02-09 16:16:17', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:16:17', '2022-02-09 16:16:17'),
(766, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:15:44', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:15:44', '2022-02-09 16:15:44'),
(765, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:15:05', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:15:05', '2022-02-09 16:15:05'),
(764, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:14:28', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:14:28', '2022-02-09 16:14:28'),
(763, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:14:10', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:14:10', '2022-02-09 16:14:10'),
(762, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:13:21', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:13:21', '2022-02-09 16:13:21'),
(761, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:13:06', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:13:06', '2022-02-09 16:13:06'),
(760, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:12:42', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:12:42', '2022-02-09 16:12:42'),
(759, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:12:17', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:12:17', '2022-02-09 16:12:17'),
(758, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:12:01', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:12:01', '2022-02-09 16:12:01'),
(757, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:11:44', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:11:44', '2022-02-09 16:11:44'),
(756, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:11:23', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:11:23', '2022-02-09 16:11:23'),
(755, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:11:02', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:11:02', '2022-02-09 16:11:02'),
(754, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:10:16', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:10:16', '2022-02-09 16:10:16'),
(753, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:10:01', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:10:01', '2022-02-09 16:10:01'),
(752, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:09:41', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:09:41', '2022-02-09 16:09:41'),
(751, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:09:26', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:09:26', '2022-02-09 16:09:26'),
(750, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:02:36', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:02:36', '2022-02-09 16:02:36'),
(749, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:01:56', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:01:56', '2022-02-09 16:01:56'),
(748, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:01:38', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:01:39', '2022-02-09 16:01:39'),
(747, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:01:25', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:01:25', '2022-02-09 16:01:25'),
(746, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:01:07', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:01:07', '2022-02-09 16:01:07'),
(745, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:01:02', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:01:02', '2022-02-09 16:01:02'),
(744, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:00:48', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:00:48', '2022-02-09 16:00:48'),
(743, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:00:30', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:00:30', '2022-02-09 16:00:30'),
(742, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 16:00:11', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 16:00:11', '2022-02-09 16:00:11'),
(741, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:59:41', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:59:41', '2022-02-09 15:59:41'),
(740, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:59:28', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:59:28', '2022-02-09 15:59:28'),
(739, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:58:30', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:58:30', '2022-02-09 15:58:30'),
(738, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:58:16', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:58:16', '2022-02-09 15:58:16'),
(737, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:57:57', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:57:57', '2022-02-09 15:57:57'),
(736, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:57:34', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:57:34', '2022-02-09 15:57:34'),
(735, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:57:15', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:57:15', '2022-02-09 15:57:15'),
(734, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:56:52', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:56:52', '2022-02-09 15:56:52'),
(733, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:56:35', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:56:35', '2022-02-09 15:56:35'),
(732, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:32:35', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:32:35', '2022-02-09 15:32:35'),
(731, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:32:15', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:32:15', '2022-02-09 15:32:15'),
(730, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:31:53', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:31:53', '2022-02-09 15:31:53'),
(729, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:31:30', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:31:30', '2022-02-09 15:31:30'),
(728, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:31:21', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:31:21', '2022-02-09 15:31:21'),
(727, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:30:56', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:30:56', '2022-02-09 15:30:56'),
(696, 'zc8XB7GAdaGPNo7Oo88MWUsbCqs2guSNt4RKbcP4', NULL, NULL, 'Sofia Shevchuk', 'sofia.shevchuk8@gmail.com', 'x7230726d', 'CL EVARIST FABREGAS, 19', 'Tarragona', 'Tarragona', 43070, '2022-02-04 15:23:12', 'WEB', 'Pendiente', 'GOB', 500, 479.50, 'si', 0, 0.00, 0.00, 1, 977773800, NULL, '2022-02-04 15:23:12', '2022-02-04 15:23:12'),
(726, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:30:37', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:30:37', '2022-02-09 15:30:37'),
(725, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:30:19', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:30:19', '2022-02-09 15:30:19'),
(724, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:30:01', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:30:01', '2022-02-09 15:30:01'),
(723, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:29:42', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:29:42', '2022-02-09 15:29:42'),
(722, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:29:26', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:29:26', '2022-02-09 15:29:26'),
(721, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:28:56', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:28:56', '2022-02-09 15:28:56'),
(720, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:28:29', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:28:29', '2022-02-09 15:28:29'),
(719, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:28:03', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:28:03', '2022-02-09 15:28:03'),
(718, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:27:43', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:27:43', '2022-02-09 15:27:43'),
(717, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:25:44', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:25:44', '2022-02-09 15:25:44'),
(716, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:25:25', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:25:25', '2022-02-09 15:25:25'),
(715, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Tarragona', 28900, '2022-02-09 15:25:00', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:25:00', '2022-02-09 15:25:00'),
(714, 'WPOzVuK031kyX61XA62DACHxFkwVOaBerQg0VgfM', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Madrid', 28900, '2022-02-09 15:24:29', 'WEB', 'Pendiente', 'GOB', 500, 499.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-09 15:24:29', '2022-02-09 15:24:29'),
(710, 'vqd5dJTFQiSMQZEr7R2JeROhyO6DoQpzzMQUyp6T', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Madrid', 28900, '2022-02-07 10:05:46', 'WEB', 'Pendiente', 'GOB', 500, 489.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-07 10:05:46', '2022-02-07 10:05:46'),
(711, 'vqd5dJTFQiSMQZEr7R2JeROhyO6DoQpzzMQUyp6T', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Madrid', 28900, '2022-02-07 10:06:13', 'WEB', 'Pendiente', 'GOB', 500, 489.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-07 10:06:13', '2022-02-07 10:06:13'),
(712, 'vqd5dJTFQiSMQZEr7R2JeROhyO6DoQpzzMQUyp6T', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Getafe', 'Madrid', 28900, '2022-02-07 10:07:52', 'WEB', 'Pendiente', 'GOB', 500, 489.50, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-07 10:07:52', '2022-02-07 10:07:52'),
(713, 'vqd5dJTFQiSMQZEr7R2JeROhyO6DoQpzzMQUyp6T', NULL, NULL, 'hola', 'hola@test.com', '123456780', 'Evarsit Fábregas, 19', 'Parla', 'Madrid', 28980, '2022-02-07 10:09:00', 'WEB', 'Pendiente', 'GOB', 400, 391.60, 'si', 0, 0.00, 0.00, 1, 666666666, NULL, '2022-02-07 10:09:00', '2022-02-07 10:09:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblacions`
--

CREATE TABLE `poblacions` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  `fechaentrada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `poblacions`
--

INSERT INTO `poblacions` (`id`, `nombre`, `cantidad`, `unidad`, `fechaentrada`, `created_at`, `updated_at`) VALUES
(1, 'Sevilla', 0, '', '2022-01-27 15:59:47', '2022-01-27 16:59:47', '2022-01-27 16:59:47'),
(13, '43480', 500, 'Lts.', '2022-02-02 15:23:26', '2022-02-02 16:23:26', '2022-02-02 16:23:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `idzona` varchar(3) NOT NULL,
  `poblacion` varchar(50) NOT NULL,
  `codigopost` int(5) NOT NULL,
  `nombreruta` varchar(50) NOT NULL,
  `dia` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `idzona`, `poblacion`, `codigopost`, `nombreruta`, `dia`) VALUES
(210, '001', 'Parla', 28980, 'Ruta 4', 'Lunes y Jueves'),
(209, '001', 'Pantoja', 45290, 'Ruta 4', 'Lunes y Jueves'),
(207, '001', 'Moralzarzal', 28411, 'Ruta 4', 'Lunes y Jueves '),
(208, '001', 'Morata de Tajuña', 28530, 'Ruta 4', 'Lunes y Jueves'),
(206, '001', 'Majadahonda', 28220, 'Ruta 4', 'Lunes y Jueves '),
(205, '001', 'Las Rozas', 28230, 'Ruta 4', 'Lunes y Jueves '),
(204, '001', 'Las Mátas', 28000, 'Ruta 4', 'Lunes y Jueves '),
(203, '001', 'Humanes de Madrid', 28970, 'Ruta 4', 'Lunes y Jueves '),
(202, '001', 'Guadarrama', 28440, 'Ruta 4', 'Lunes y Jueves'),
(201, '001', 'Griñón', 28971, 'Ruta 4', 'Lunes y Jueves'),
(250, '001', 'Leganés', 28910, 'Ruta Madrid', 'Diaria'),
(199, '001', 'Galapagar', 28260, 'Ruta 4', 'Lunes y Jueves'),
(198, '001', 'Fuenlabrada', 2127, 'Ruta 4', 'Lunes y Jueves'),
(197, '001', 'Cubas de la Sagra', 28978, 'Ruta 4', 'Lunes y Jueves'),
(196, '001', 'Cormenar Viejo', 28770, 'Ruta 4', 'Lunes y Jueves'),
(195, '001', 'Collado Villalba', 28400, 'Ruta 4', 'Lunes y Jueves'),
(194, '001', 'Collado Mediano', 28450, 'Ruta 4', 'Lunes y Jueves'),
(192, '001', 'Borox', 45222, 'Ruta 4', 'Lunes y Jueves'),
(193, '001', 'Cercedilla', 28470, 'Ruta 4', 'Lunes y Jueves'),
(191, '001', 'Becerril de la Sierra', 28490, 'Ruta 4', 'Lunes y Jueves'),
(190, '001', 'Alpedrete', 28430, 'Ruta 4', 'Lunes y Jueves'),
(189, '001', 'Santorcaz', 28818, 'Ruta 3', 'Lunes'),
(188, '001', 'Villarejo de Salvanés', 28590, 'Ruta 3', 'Lunes'),
(187, '001', 'Venturada', 28729, 'Ruta 3', 'Lunes'),
(186, '001', 'Valdilecha', 28511, 'Ruta 3', 'Lunes'),
(185, '002', 'Usanos', 19182, 'Ruta 3', 'Lunes'),
(184, '002', 'Pioz', 19162, 'Ruta 3', 'Lunes'),
(183, '002', 'Mondéjar', 19110, 'Ruta 3', 'Lunes'),
(182, '002', 'Malaguilla', 19219, 'Ruta 3', 'Lunes'),
(181, '002', 'Málaga de Fresno', 19219, 'Ruta 3', 'Lunes'),
(180, '002', 'Loranca de Tajuña', 19141, 'Ruta 3', 'Lunes'),
(179, '002', 'Fuente La Higuera', 19182, 'Ruta 3', 'Lunes'),
(178, '002', 'El Pozo ', 19161, 'Ruta 3', 'Lunes'),
(177, '002', 'Driebes', 19116, 'Ruta 3', 'Lunes'),
(176, '002', 'Armuña de Tajuña', 19135, 'Ruta 3', 'Lunes'),
(175, '002', 'Almoguera', 19115, 'Ruta 3', 'Lunes'),
(174, '001', 'Venturada', 28729, 'Ruta 2', 'Lunes y Jueves '),
(173, '001', 'Valdetorres del Jarama', 28150, 'Ruta 2', 'Lunes y Jueves '),
(172, '002', 'Valdenuño', 19185, 'Ruta 2', 'Lunes y Jueves '),
(171, '002', 'Uceda', 19187, 'Ruta 2', 'Lunes y Jueves '),
(170, '001', 'Torremocha Del Jarma', 28189, 'Ruta 2', 'Lunes y Jueves '),
(169, '001', 'Torrelaguna', 28180, 'Ruta 2', 'Lunes y Jueves '),
(168, '001', 'Talamanca del Jarama', 28160, 'Ruta 2', 'Lunes y Jueves '),
(526, '000', 'Benitandus', 12222, 'Por enrutar', 'Diaria'),
(165, '001', 'Mesones', 2449, 'Ruta 2', 'Lunes y Jueves '),
(163, '001', 'Guadalix de la Sierra ', 28794, 'Ruta 2', 'Lunes y Jueves '),
(438, '003', 'Serra', 46118, 'Ruta interior Naquera', 'Diaria'),
(160, '002', 'Centenera', 19151, 'Ruta 2', 'Lunes y Jueves '),
(159, '002', 'Brihuega', 19400, 'Ruta 2', 'Lunes y Jueves '),
(158, '002', 'Atanzón', 19153, 'Ruta 2', 'Lunes y Jueves '),
(157, '002', 'Aldeanueva', 19150, 'Ruta 2', 'Lunes y Jueves '),
(156, '002', 'Yunquera de Henares', 19210, 'Ruta 1', 'Martes y Jueves'),
(155, '002', 'Yebes', 19141, 'Ruta 1', 'Martes y Jueves'),
(154, '002', 'Valfermoso de las Monjas', 19196, 'Ruta 1', 'Martes y Jueves'),
(153, '002', 'Caspueñas', 19412, 'Ruta 1', 'Martes y Jueves'),
(152, '002', 'Cañizar', 19197, 'Ruta 1', 'Martes y Jueves'),
(151, '002', 'Valdegrudas', 19412, 'Ruta 1', 'Martes y Jueves'),
(150, '002', 'Trijueque', 19192, 'Ruta 1', 'Martes y Jueves'),
(149, '002', 'Mohernando', 19226, 'Ruta 1', 'Martes y Jueves'),
(148, '002', 'Humanes de Mohernando', 19220, 'Ruta 1', 'Martes y Jueves'),
(147, '002', 'Hita', 19248, 'Ruta 1', 'Martes y Jueves'),
(146, '002', 'Fontanar', 19290, 'Ruta 1', 'Martes y Jueves'),
(145, '002', 'Ciruelas', 19197, 'Ruta 1', 'Martes y Jueves'),
(144, '002', 'Villanueva de la Torre', 19209, 'Ruta Guadalajara', 'Diaria'),
(143, '002', 'Valdenoches', 19197, 'Ruta Guadalajara', 'Diaria'),
(142, '002', 'Valdeavero', 28816, 'Ruta Guadalajara', 'Diaria'),
(141, '002', 'Tórtola de Henares', 19198, 'Ruta Guadalajara', 'Diaria'),
(139, '002', 'Torija', 19190, 'Ruta Guadalajara', 'Diaria'),
(138, '002', 'Valdeaveruelo', 19174, 'Ruta Guadalajara', 'Diaria'),
(137, '002', 'Taracena', 19193, 'Ruta Guadalajara', 'Diaria'),
(135, '002', 'Ribatejada', 28815, 'Ruta Guadalajara', 'Diaria'),
(131, '002', 'Iriepal', 19150, 'Ruta Guadalajara', 'Diaria'),
(130, '002', 'Horche', 19140, 'Ruta Guadalajara', 'Diaria'),
(7, '002', 'El Casar', 19170, 'Ruta Guadalajara', 'Diaria'),
(5, '002', 'Camarma de Esteruelas', 28816, 'Ruta Guadalajara', 'Diaria'),
(6, '002', 'Chiloeches', 19160, 'Ruta Guadalajara', 'Diaria'),
(4, '002', 'Cabanillas Del Campo', 19171, 'Ruta Guadalajara', 'Diaria'),
(166, '001', 'Pedrezuela', 28723, 'Ruta 2', 'Lunes y Jueves '),
(164, '002', 'Lupiana', 19142, 'Ruta 2', 'Lunes y Jueves '),
(162, '001', 'Fuente el Saz', 28140, 'Ruta 2', 'Lunes y Jueves '),
(140, '002', 'Torrejon del Rey', 19174, 'Ruta Guadalajara', 'Diaria'),
(136, '002', 'Serracines', 28815, 'Ruta Guadalajara', 'Diaria'),
(134, '002', 'Quer', 19209, 'Ruta Guadalajara', 'Diaria'),
(133, '002', 'Meco', 28880, 'Ruta Guadalajara', 'Diaria'),
(132, '002', 'Marchamalo', 19180, 'Ruta Guadalajara', 'Diaria'),
(129, '002', 'Guadalajara', 19070, 'Ruta Guadalajara', 'Diaria'),
(128, '002', 'Galápagos', 19174, 'Ruta Guadalajara', 'Diaria'),
(426, '002', 'Alalpardo', 28130, 'Ruta Guadalajara', 'Diaria'),
(126, '002', 'El Clavín', 19163, 'Ruta Guadalajara', 'Diaria'),
(9, '002', 'Fresno de Torote', 28815, 'Ruta Guadalajara', 'Diaria'),
(3, '002', 'Azuqueca De Henares', 19200, 'Ruta Guadalajara', 'Diaria'),
(2, '002', 'Alovera', 19208, 'Ruta Guadalajara', 'Diaria'),
(1, '002', 'Alalpardo', 28130, 'Ruta Guadalajara', 'Diaria'),
(211, '001', 'Pinto', 28320, 'Ruta 4', 'Lunes y Jueves'),
(212, '001', 'Pozuelo De Alarcón', 28223, 'Ruta 4', 'Lunes y Jueves'),
(213, '001', 'San Martín de la Vega', 28330, 'Ruta 4', 'Lunes y Jueves'),
(214, '001', 'Seseña', 45224, 'Ruta 4', 'Lunes y Jueves'),
(215, '001', 'Torrelodones', 28250, 'Ruta 4', 'Lunes y Jueves'),
(216, '001', 'Torres De La Alameda', 28813, 'Ruta 4', 'Lunes y Jueves'),
(217, '001', 'Torrejón de la Calzada', 28991, 'Ruta 4', 'Lunes y Jueves'),
(218, '001', 'Valdemoro', 28340, 'Ruta 4', 'Lunes y Jueves'),
(219, '001', 'Velilla de San Antonio', 28891, 'Ruta 4', 'Lunes y Jueves'),
(220, '001', 'Arroyomolinos', 10161, 'Ruta 5', 'Lunes'),
(221, '001', 'Boadilla del Monte', 28660, 'Ruta 5', 'Lunes'),
(222, '001', 'Brunete', 28690, 'Ruta 5', 'Lunes'),
(223, '001', 'Campo real', 28510, 'Ruta 5', 'Lunes'),
(224, '001', 'Casarrubios del Monte', 45950, 'Ruta 5', 'Lunes'),
(225, '001', 'El Álamo', 28607, 'Ruta 5', 'Lunes'),
(226, '001', 'Móstoles', 28930, 'Ruta 5', 'Lunes'),
(227, '001', 'Navalcarnero', 28600, 'Ruta 5', 'Lunes'),
(228, '001', 'Villalbilla', 28810, 'Ruta 5', 'Lunes'),
(229, '001', 'Villamanta', 28610, 'Ruta 5', 'Lunes'),
(230, '001', 'Ajalvir', 28864, 'Ruta Madrid', 'Diaria'),
(237, '001', 'Cobeña', 28863, 'Ruta Madrid', 'Diaria'),
(238, '001', 'Alcalá de Henares', 28800, 'Ruta Madrid', 'Diaria'),
(239, '001', 'Alcobendas', 28000, 'Ruta Madrid', 'Diaria'),
(240, '001', 'Alcorcon', 28000, 'Ruta Madrid', 'Diaria'),
(241, '001', 'Algete', 28110, 'Ruta Madrid', 'Diaria'),
(242, '001', 'Arganda del Rey', 28500, 'Ruta Madrid', 'Diaria'),
(243, '001', 'Boadilla del Monte', 28660, 'Ruta Madrid', 'Diaria'),
(245, '001', 'Coslada', 28820, 'Ruta Madrid', 'Diaria'),
(246, '001', 'Daganzo de Arriba', 28814, 'Ruta Madrid', 'Diaria'),
(247, '001', 'El Pardo', 28048, 'Ruta Madrid', 'Diaria'),
(248, '001', 'Fuente del Fresno', 28708, 'Ruta Madrid', 'Diaria'),
(249, '001', 'Getafe', 28900, 'Ruta Madrid', 'Diaria'),
(251, '001', 'Loeches', 28890, 'Ruta Madrid', 'Diaria'),
(252, '001', 'Los Santos de Humosa ', 28817, 'Ruta Madrid', 'Diaria'),
(253, '001', 'Madrid', 28070, 'Ruta Madrid', 'Diaria'),
(254, '001', 'Majadahonda', 28220, 'Ruta Madrid', 'Diaria'),
(255, '001', 'Mejorada Del Campo', 28840, 'Ruta Madrid', 'Diaria'),
(256, '001', 'Paracuellos del Jarama', 28860, 'Ruta Madrid', 'Diaria'),
(257, '001', 'Rivas Vaciamadrid', 28529, 'Ruta Madrid', 'Diaria'),
(258, '001', 'San Fernando de Henares', 28830, 'Ruta Madrid', 'Diaria'),
(259, '001', 'San Sebastian de los Reyes', 28000, 'Ruta Madrid', 'Diaria'),
(260, '001', 'Torrejón de Ardoz', 28850, 'Ruta Madrid', 'Diaria'),
(261, '001', 'Torres de la Alameda', 28813, 'Ruta Madrid', 'Diaria'),
(262, '001', 'Vallecas ', 28053, 'Ruta Madrid', 'Diaria'),
(263, '001', 'Vicalvaro', 28028, 'Ruta Madrid', 'Diaria'),
(264, '004', 'ALBIOL', 43479, 'Ruta Centro', 'Diaria'),
(265, '004', 'ALCOVER', 43460, 'Ruta Centro', 'Diaria'),
(266, '004', 'ALMOSTER', 43393, 'Ruta Centro', 'Diaria'),
(267, '004', 'BONAVISTA', 43100, 'Ruta Centro', 'Diaria'),
(268, '004', 'BOSCOS DE TARRAGONA', 43007, 'Ruta Centro', 'Diaria'),
(269, '004', 'CASTELLMOSTER', 43392, 'Ruta Centro', 'Diaria'),
(270, '004', 'CASTELLVELL', 43392, 'Ruta Centro', 'Diaria'),
(271, '004', 'CASTELLVELL DEL CAMP', 43392, 'Ruta Centro', 'Diaria'),
(272, '004', 'CONSTANTI', 43120, 'Ruta Centro', 'Diaria'),
(273, '004', 'EL MILA', 43143, 'Ruta Centro', 'Diaria'),
(274, '004', 'EL MORELL', 43760, 'Ruta Centro', 'Diaria'),
(275, '004', 'ELS GARIDELLS', 43153, 'Ruta Centro', 'Diaria'),
(276, '004', 'ELS PALARESOS (ELSPLANS)', 43151, 'Ruta Centro', 'Diaria'),
(277, '004', 'ELS PALLARESOS', 43151, 'Ruta Centro', 'Diaria'),
(278, '004', 'FONSTCALDES', 43813, 'Ruta Centro', 'Diaria'),
(279, '004', 'FONSTSCALDAS', 43813, 'Ruta Centro', 'Diaria'),
(280, '004', 'FONTSCALDES', 43813, 'Ruta Centro', 'Diaria'),
(281, '004', 'GUNYOLES', 43154, 'Ruta Centro', 'Diaria'),
(282, '004', 'HOSTALETS PALLARESOS', 43151, 'Ruta Centro', 'Diaria'),
(283, '004', 'JARDINS IMPERI', 43151, 'Ruta Centro', 'Diaria'),
(284, '004', 'LA CANONJA', 43110, 'Ruta Centro', 'Diaria'),
(285, '004', 'LA MASO', 43143, 'Ruta Centro', 'Diaria'),
(286, '004', 'LA PLANA VILASECA', 43480, 'Ruta Centro', 'Diaria'),
(287, '004', 'LA POBLA DE MAFUMET', 43140, 'Ruta Centro', 'Diaria'),
(288, '004', 'LA SECUITA', 43765, 'Ruta Centro', 'Diaria'),
(289, '004', 'LA SELVA DEL CAMP', 43470, 'Ruta Centro', 'Diaria'),
(290, '004', 'L\'ARGILAGA', 43675, 'Ruta Centro', 'Diaria'),
(291, '004', 'MASIES CATALANES', 43460, 'Ruta Centro', 'Diaria'),
(292, '004', 'MASMOLETS', 43813, 'Ruta Centro', 'Diaria'),
(293, '004', 'NULLES', 43887, 'Ruta Centro', 'Diaria'),
(294, '004', 'PALLARESOS', 43151, 'Ruta Centro', 'Diaria'),
(295, '004', 'PERAFORT', 43152, 'Ruta Centro', 'Diaria'),
(296, '004', 'PORT DE TARRAGONA ', 43070, 'Ruta Centro', 'Diaria'),
(297, '004', 'PUIGDELFI', 43155, 'Ruta Centro', 'Diaria'),
(298, '004', 'PUIGPELAT', 43812, 'Ruta Centro', 'Diaria'),
(299, '004', 'RENAU', 43886, 'Ruta Centro', 'Diaria'),
(300, '004', 'REUS', 43200, 'Ruta Centro', 'Diaria'),
(301, '004', 'ROURELL', 43142, 'Ruta Centro', 'Diaria'),
(302, '004', 'SANT PERE I SANT PAU', 43007, 'Ruta Centro', 'Diaria'),
(303, '004', 'SANT SALVADOR', 43130, 'Ruta Centro', 'Diaria'),
(304, '004', 'TARRAGONA', 43070, 'Ruta Centro', 'Diaria'),
(305, '004', 'TORREFORTA', 43006, 'Ruta Centro', 'Diaria'),
(306, '004', 'VALLMOLL', 43144, 'Ruta Centro', 'Diaria'),
(307, '004', 'VALLS', 3737, 'Ruta Centro', 'Diaria'),
(308, '004', 'VILABELLA', 43886, 'Ruta Centro', 'Diaria'),
(309, '004', 'VILALLONGA DEL CAMP', 43141, 'Ruta Centro', 'Diaria'),
(310, '004', 'VILASECA', 43480, 'Ruta Centro', 'Diaria'),
(311, '004', 'VISTABELLA', 50482, 'Ruta Centro', 'Diaria'),
(312, '004', 'Albi', 25450, 'Ruta LLeida', 'Martes'),
(313, '004', 'Artesa de Lleida', 25150, 'Ruta LLeida', 'Martes'),
(314, '004', 'Balaguer', 25600, 'Ruta LLeida', 'Martes'),
(315, '004', 'Juneda', 25430, 'Ruta LLeida', 'Martes'),
(316, '004', 'La Bordeta', 25001, 'Ruta LLeida', 'Martes'),
(317, '004', 'Lleida', 25070, 'Ruta LLeida', 'Martes'),
(318, '004', 'Puigverd de Lleida', 25153, 'Ruta LLeida', 'Martes'),
(319, '004', 'Vallfogona de Balaguer', 25680, 'Ruta LLeida', 'Martes'),
(320, '004', 'Barbera de la Conca', 43422, 'Ruta Montblanc', 'Martes'),
(321, '004', 'Cabra del Camp', 43811, 'Ruta Montblanc', 'Martes'),
(322, '004', 'Espluga del Francoli ', 43440, 'Ruta Montblanc', 'Martes'),
(323, '004', 'La Riba', 43450, 'Ruta Montblanc', 'Martes'),
(324, '004', 'L\'Illa', 43414, 'Ruta Montblanc', 'Martes'),
(325, '004', 'Montblanc', 43400, 'Ruta Montblanc', 'Martes'),
(326, '004', 'Picamoixons', 43491, 'Ruta Montblanc', 'Martes'),
(327, '004', 'Pira', 43423, 'Ruta Montblanc', 'Martes'),
(328, '004', 'Poblet', 46635, 'Ruta Montblanc', 'Martes'),
(329, '004', 'Prenafeta', 43415, 'Ruta Montblanc', 'Martes'),
(330, '004', 'Sarral', 43424, 'Ruta Montblanc', 'Martes'),
(331, '004', 'Solivella', 43412, 'Ruta Montblanc', 'Martes'),
(332, '004', 'Vilaverd', 43490, 'Ruta Montblanc', 'Martes'),
(334, '004', 'BELLMUNT DEL PRIORAT', 43738, 'Ruta Falset', 'Martes y Viernes'),
(335, '004', 'BORGES DEL CAMP', 43350, 'Ruta Falset', 'Martes y Viernes'),
(336, '004', 'BOTARELL', 43772, 'Ruta Falset', 'Martes y Viernes'),
(338, '004', 'DARMOS', 43746, 'Ruta Falset', 'Martes y Viernes'),
(339, '004', 'EL LLOAR', 43737, 'Ruta Falset', 'Martes y Viernes'),
(340, '004', 'EL MOLAR', 43736, 'Ruta Falset', 'Martes y Viernes'),
(341, '004', 'FALSET', 43730, 'Ruta Falset', 'Martes y Viernes'),
(342, '004', 'GARCIA', 33416, 'Ruta Falset', 'Martes y Viernes'),
(343, '004', 'GINESTAR', 17151, 'Ruta Falset', 'Martes y Viernes'),
(344, '004', 'GRATALLOPS', 43737, 'Ruta Falset', 'Martes y Viernes'),
(345, '004', 'LA SERRA D\'ALMOS', 43746, 'Ruta Falset', 'Martes y Viernes'),
(346, '004', 'LA TORRE DE FONTAUBELLA', 43774, 'Ruta Falset', 'Martes y Viernes'),
(347, '004', 'LES BORGES DEL CAMP', 43350, 'Ruta Falset', 'Martes y Viernes'),
(348, '004', 'LES IRLES', 43390, 'Ruta Falset', 'Martes y Viernes'),
(350, '004', 'MASPUJOLS', 43382, 'Ruta Falset', 'Martes y Viernes'),
(351, '004', 'MASROIG', 43736, 'Ruta Falset', 'Martes y Viernes'),
(352, '004', 'MORA D\'EBRE', 43740, 'Ruta Falset', 'Martes y Viernes'),
(353, '004', 'MORA LA NOVA', 43770, 'Ruta Falset', 'Martes y Viernes'),
(354, '004', 'POBOLEDA', 43376, 'Ruta Falset', 'Martes y Viernes'),
(355, '004', 'PORRERA', 43739, 'Ruta Falset', 'Martes y Viernes'),
(356, '004', 'PRADELL DE LA TEIXETA', 43774, 'Ruta Falset', 'Martes y Viernes'),
(357, '004', 'RIUDECOLS', 43390, 'Ruta Falset', 'Martes y Viernes'),
(358, '004', 'VILA-NOVA D\'ESCORNALBOU', 43311, 'Ruta Falset', 'Martes y Viernes'),
(359, '004', 'Cambrils', 43850, 'Ruta Montroig', 'Miercoles'),
(361, '004', 'Hospitalet de l\'Infant', 43890, 'Ruta Montroig', 'Miercoles'),
(362, '004', 'Masboquera', 43891, 'Ruta Montroig', 'Miercoles'),
(363, '004', 'Miami playa', 43892, 'Ruta Montroig', 'Miercoles'),
(364, '004', 'Mont-roig del Camp', 43300, 'Ruta Montroig', 'Miercoles'),
(365, '004', 'Montbrio', 43340, 'Ruta Montroig', 'Miercoles'),
(366, '004', 'Mont-roig Mar', 43300, 'Ruta Montroig', 'Miercoles'),
(367, '004', 'Pratdip', 43320, 'Ruta Montroig', 'Miercoles'),
(368, '004', 'Riudecanyes', 43771, 'Ruta Montroig', 'Miercoles'),
(369, '004', 'Riudoms', 43330, 'Ruta Montroig', 'Miercoles'),
(370, '004', 'Vandellos', 43891, 'Ruta Montroig', 'Miercoles'),
(371, '004', 'Vilafortuny', 43850, 'Ruta Montroig', 'Miercoles'),
(372, '004', 'Vinyols i els Arcs', 43391, 'Ruta Montroig', 'Miercoles'),
(373, '004', 'Albinyana', 43716, 'Ruta Vilafranca', 'Jueves'),
(374, '004', 'Alio', 43813, 'Ruta Vilafranca', 'Jueves'),
(375, '004', 'Arboç', 43720, 'Ruta Vilafranca', 'Jueves'),
(376, '004', 'Banyeres del Penedes', 43711, 'Ruta Vilafranca', 'Jueves'),
(377, '004', 'Bellvei', 25211, 'Ruta Vilafranca', 'Jueves'),
(378, '004', 'Bràfim', 43812, 'Ruta Vilafranca', 'Jueves'),
(379, '004', 'El Mirador del Penedes', 43718, 'Ruta Vilafranca', 'Jueves'),
(380, '004', 'El Pla de Santamaria', 43810, 'Ruta Vilafranca', 'Jueves'),
(381, '004', 'Juncosa de Montmell', 43718, 'Ruta Vilafranca', 'Jueves'),
(382, '004', 'La Bisbal del Penedes', 43717, 'Ruta Vilafranca', 'Jueves'),
(383, '004', 'Les Peces', 43716, 'Ruta Vilafranca', 'Jueves'),
(384, '004', 'Lespobles-Aiguamurcia', 43815, 'Ruta Vilafranca', 'Jueves'),
(385, '004', 'Masllorenç', 43718, 'Ruta Vilafranca', 'Jueves'),
(387, '004', 'Pont d\'Armentera', 43817, 'Ruta Vilafranca', 'Jueves'),
(388, '004', 'Sant Jaume dels Domenys', 43713, 'Ruta Vilafranca', 'Jueves'),
(389, '004', 'Sant Marti Sarroca', 8731, 'Ruta Vilafranca', 'Jueves'),
(390, '004', 'Santa Margarida i els Monjos', 8730, 'Ruta Vilafranca', 'Jueves'),
(391, '004', 'Santa Oliva', 43710, 'Ruta Vilafranca', 'Jueves'),
(392, '004', 'Santes Creus', 43815, 'Ruta Vilafranca', 'Jueves'),
(393, '004', 'Vila-rodona', 43814, 'Ruta Vilafranca', 'Jueves'),
(394, '004', 'CAPAFONTS', 43364, 'Ruta Prades', 'Jueves'),
(395, '004', 'CORNUDELLA DEL MONTSANT', 43360, 'Ruta Prades', 'Jueves'),
(396, '004', 'ESCALADEI', 43379, 'Ruta Prades', 'Jueves'),
(397, '004', 'LA FEBRO', 43364, 'Ruta Prades', 'Jueves'),
(398, '004', 'MONT-RAL', 43364, 'Ruta Prades', 'Jueves'),
(399, '004', 'POBOLEDA', 43376, 'Ruta Prades', 'Jueves'),
(400, '004', 'PRADES', 43364, 'Ruta Prades', 'Jueves'),
(401, '004', 'ULLDEMOLINS', 43363, 'Ruta Prades', 'Jueves'),
(402, '004', 'VILANOVA DE PRADES', 43439, 'Ruta Prades', 'Jueves'),
(403, '004', 'Altafulla', 43893, 'Ruta Torredembarra', 'Viernes'),
(404, '004', 'Calafell', 43820, 'Ruta Torredembarra', 'Viernes'),
(405, '004', 'Comarruga', 43880, 'Ruta Torredembarra', 'Viernes'),
(406, '004', 'Creixell', 17770, 'Ruta Torredembarra', 'Viernes'),
(407, '004', 'Cubelles', 8880, 'Ruta Torredembarra', 'Viernes'),
(408, '004', 'El Catllar', 43764, 'Ruta Torredembarra', 'Viernes'),
(409, '004', 'El Pont d\'Armentera', 43817, 'Ruta Torredembarra', 'Viernes'),
(410, '004', 'La Nou de Gaia', 43763, 'Ruta Torredembarra', 'Viernes'),
(411, '004', 'La Pobla de Montornes', 43761, 'Ruta Torredembarra', 'Viernes'),
(412, '004', 'La Riera de Gaia', 43762, 'Ruta Torredembarra', 'Viernes'),
(413, '004', 'Montferri', 43812, 'Ruta Torredembarra', 'Viernes'),
(414, '004', 'Pobla de Montornes', 43761, 'Ruta Torredembarra', 'Viernes'),
(415, '004', 'Punta La Mora', 43008, 'Ruta Torredembarra', 'Viernes'),
(416, '004', 'Roda de Bara ', 43883, 'Ruta Torredembarra', 'Viernes'),
(417, '004', 'Rodonya', 43812, 'Ruta Torredembarra', 'Viernes'),
(418, '004', 'Salomo', 43885, 'Ruta Torredembarra', 'Viernes'),
(419, '004', 'Santa Oliva', 43710, 'Ruta Torredembarra', 'Viernes'),
(420, '004', 'Segur de Calafell', 43882, 'Ruta Torredembarra', 'Viernes'),
(421, '004', 'Tamarit', 43008, 'Ruta Torredembarra', 'Viernes'),
(422, '004', 'Torredembarra', 43830, 'Ruta Torredembarra', 'Viernes'),
(423, '004', 'Vendrell', 43700, 'Ruta Torredembarra', 'Viernes'),
(424, '004', 'Vimbodi', 43430, 'Ruta Montblanc', 'Martes'),
(425, '002', 'Valdeolmos', 28130, 'Ruta Guadalajara', 'Diaria'),
(429, '001', 'Torrelaguna', 28180, 'Ruta 2', 'Lunes y Jueves '),
(430, '002', 'Malaguilla', 19219, 'Ruta 3', 'Lunes'),
(431, '004', 'Gunyoles', 43154, 'Ruta Centro', 'Diaria'),
(432, '004', 'Les Pobles-Aiguamurcia', 43815, 'Ruta Vilafranca', 'Jueves'),
(437, '004', 'La Pineda, Vilaseca', 43480, 'Ruta Centro', 'Diaria'),
(439, '003', 'Massamagrell', 46130, 'Ruta interior Naquera', 'Diaria'),
(440, '003', 'Emperador', 46135, 'Ruta interior Naquera', ''),
(441, '003', 'Mahuella Tauladella Rafalell Y Vistabella', 46135, 'Ruta interior Naquera', 'Diaria'),
(442, '003', 'Museros', 46136, 'Ruta interior Naquera', 'Diaria'),
(443, '003', 'Rafelbuñol', 46138, 'Ruta interior Naquera', 'Diaria'),
(444, '003', 'Pobla de Farnals', 46139, 'Ruta interior Naquera', 'Diaria'),
(445, '003', 'Gilet', 46149, 'Ruta interior Naquera', 'Diaria'),
(446, '003', 'Santo Espiritu del Monte', 46149, 'Ruta interior Naquera', 'Diaria'),
(447, '003', 'Sagunto', 46500, 'Ruta interior Naquera', 'Diaria'),
(448, '003', 'Petres', 46501, 'Ruta interior Naquera', 'Diaria'),
(449, '003', 'Puerto de Sagunto', 46520, 'Ruta interior Naquera', 'Diaria'),
(450, '003', 'Canet d\'en Berenguer', 46529, 'Ruta interior Naquera', 'Diaria'),
(451, '003', 'Puçol', 46530, 'Ruta interior Naquera', 'Diaria'),
(452, '003', 'Puig, El', 46540, 'Ruta interior Naquera', 'Diaria'),
(453, '003', 'Albuixech', 46550, 'Ruta interior Naquera', 'Diaria'),
(454, '003', 'Massalfassar', 46560, 'Ruta interior Naquera', 'Diaria'),
(455, '003', 'Albalat dels Taronchers', 46591, 'Ruta interior Naquera', 'Diaria'),
(456, '003', 'Segrat', 46592, 'Ruta interior Naquera', 'Diaria'),
(457, '003', 'Los Monasterios', 46530, 'Ruta interior Naquera', 'Diaria'),
(458, '003', 'Faura', 46512, 'Ruta Limites 30Km', 'Diaria'),
(459, '003', 'Alboraya', 46120, 'Ruta Limites 30Km', 'Diaria'),
(460, '003', 'Xirivella', 46950, 'Ruta Limites 30Km', 'Diaria'),
(461, '003', 'Riba-roja de Túria', 46394, 'Ruta Limites 30Km', 'Diaria'),
(462, '003', 'Llíria', 46160, 'Ruta Limites 30Km', 'Diaria'),
(463, '003', 'Municipio de Olocau', 46169, 'Ruta Limites 30Km', 'Diaria'),
(464, '003', 'Estivella', 46590, 'Ruta Limites 30Km', 'Diaria'),
(465, '003', 'Benifaraig', 46000, 'Ruta Valencia', 'Diaria'),
(466, '003', 'Borboto', 46000, 'Ruta Valencia', 'Diaria'),
(467, '003', 'Carpesa', 4600, 'Ruta Valencia', 'Diaria'),
(468, '003', 'Tavernes Blanques', 46000, 'Ruta Valencia', 'Diaria'),
(469, '003', 'Carpesa', 4600, 'Ruta Valencia', 'Diaria'),
(470, '003', 'Tavernes Blanques', 4600, 'Ruta Valencia', 'Diaria'),
(471, '003', 'Valencia', 4600, 'Ruta Valencia', 'Diaria'),
(472, '003', 'Benimamet', 46035, 'Ruta Valencia', 'Diaria'),
(473, '003', 'Burjassot', 46100, 'Ruta Valencia', 'Diaria'),
(474, '003', 'Campo Olivar', 46110, 'Ruta Valencia', 'Diaria'),
(475, '003', 'Godella', 46110, 'Ruta Valencia', 'Diaria'),
(476, '003', 'Rocafort', 46111, 'Ruta Valencia', 'Diaria'),
(477, '003', 'Santa Barbara, Urbanitzacio', 46111, 'Ruta Valencia', 'Diaria'),
(478, '003', 'Masarrochos', 46112, 'Ruta Valencia', 'Diaria'),
(479, '003', 'Moncada', 46113, 'Ruta Valencia', 'Diaria'),
(480, '003', 'Vinalesa', 46114, 'Ruta Valencia', 'Diaria'),
(481, '003', 'Alfara del Patriarca', 46115, 'Ruta Valencia', 'Diaria'),
(482, '003', 'Masias', 46116, 'Ruta Valencia', 'Diaria'),
(483, '003', 'San Isidro de Benageber', 46116, 'Ruta Valencia', 'Diaria'),
(484, '003', 'Betera', 46117, 'Ruta Valencia', 'Diaria'),
(485, '003', 'Cartuja de Portaceli', 46117, 'Ruta Valencia', 'Diaria'),
(486, '003', 'Porta Coeli', 46117, 'Ruta Valencia', 'Diaria'),
(487, '003', 'Campamento Militar de Betera', 46127, 'Ruta Valencia', 'Diaria'),
(488, '003', 'Bonrepòs i Mirabell', 46131, 'Ruta Valencia', 'Diaria'),
(489, '003', 'Casa de Barcena', 46131, 'Ruta Valencia', 'Diaria'),
(490, '003', 'Almàssera', 46132, 'Ruta Valencia', 'Diaria'),
(491, '003', 'Foios', 46134, 'Ruta Valencia', 'Diaria'),
(492, '003', 'Albalat dels Sorells', 46135, 'Ruta Valencia', 'Diaria'),
(493, '003', 'Benisano', 46181, 'Ruta Valencia', 'Diaria'),
(494, '003', 'Cañada, La', 46182, 'Ruta Valencia', 'Diaria'),
(495, '003', 'La Vallesa', 46182, 'Ruta Valencia', 'Diaria'),
(496, '003', 'Eliana, L\'', 46183, 'Ruta Valencia', 'Diaria'),
(497, '003', 'San Antonio de Benageber', 46184, 'Ruta Valencia', 'Diaria'),
(498, '003', 'Montecolorado, Urbanización', 46185, 'Ruta Valencia', 'Diaria'),
(499, '003', 'Pobla de Vallbona', 46185, 'Ruta Valencia', 'Diaria'),
(500, '003', 'Mislata', 46920, 'Ruta Valencia', 'Diaria'),
(501, '003', 'Quart de Poblet', 46930, 'Ruta Valencia', 'Diaria'),
(502, '003', 'El Raco', 46940, 'Ruta Valencia', 'Diaria'),
(503, '003', 'Manises', 46940, 'Ruta Valencia', 'Diaria'),
(504, '003', 'Presa, La', 46940, 'Ruta Valencia', 'Diaria'),
(505, '003', 'Cruz de Gracia', 46980, 'Ruta Valencia', 'Diaria'),
(506, '003', 'Paterna', 46980, 'Ruta Valencia', 'Diaria'),
(507, '003', 'Poligono Fuente del Jarro', 46988, 'Ruta Valencia', 'Diaria'),
(508, '003', 'Terramelar', 46989, 'Ruta Valencia', 'Diaria'),
(509, '003', 'La Sima', 46185, 'Ruta Valencia', 'Diaria'),
(510, '003', 'L\'Argila', 46185, 'Ruta Valencia', 'Diaria'),
(511, '003', 'Maravissa', 46185, 'Ruta Valencia', 'Diaria'),
(512, '003', 'Montesano', 46184, 'Ruta Valencia', 'Diaria'),
(513, '003', 'El Perigall', 46184, 'Ruta Valencia', 'Diaria'),
(514, '003', 'La Conarda', 46185, 'Ruta Valencia', 'Diaria'),
(515, '003', 'La Malla', 46117, 'Ruta Valencia', 'Diaria'),
(516, '003', 'Los Almudes', 46117, 'Ruta Valencia', 'Diaria'),
(517, '003', 'La Florida', 46119, 'Ruta Valencia', 'Diaria'),
(518, '003', 'Casablanca', 46185, 'Ruta Valencia', 'Diaria'),
(519, '003', 'Mas Camarena', 46117, 'Ruta Valencia', 'Diaria'),
(520, '003', 'Cabes Bort', 46540, 'Ruta Valencia', 'Diaria'),
(521, '000', 'Artesa', 12220, 'Por enrutar', 'Diaria'),
(522, '000', 'Tales', 12221, 'Por enrutar', 'Diaria'),
(523, '000', 'Tales', 12221, 'Por enrutar', 'Diaria'),
(524, '000', 'Ain', 12222, 'Por enrutar', 'Diaria'),
(525, '000', 'Alcudia de Veo', 12222, 'Por enrutar', 'Diaria'),
(527, '000', 'Veo', 12222, 'Por enrutar', 'Diaria'),
(528, '000', 'Suera', 12223, 'Por enrutar', 'Diaria'),
(529, '000', 'Ayodar', 12223, 'Por enrutar', 'Diaria'),
(530, '000', 'Villamalur', 12224, 'Por enrutar', 'Diaria'),
(531, '000', 'Fuentes de Ayodar', 12224, 'Por enrutar', 'Diaria'),
(532, '000', 'Torralba del Pinar', 12225, 'Por enrutar', 'Diaria'),
(533, '000', 'Segorbe', 12400, 'Por enrutar', 'Diaria'),
(534, '000', 'Segorbe', 12400, 'Por enrutar', 'Diaria'),
(535, '000', 'Altura', 12410, 'Por enrutar', 'Diaria'),
(536, '', 'La Cueva Santa', 12410, 'Por enrutar', 'Diaria'),
(537, '000', 'Geldo', 12412, 'Por enrutar', 'Diaria'),
(538, '000', 'Villatorcas', 12412, 'Por enrutar', 'Diaria'),
(539, '000', 'Almedijar', 12413, 'Por enrutar', 'Diaria'),
(540, '000', 'Castellnovo', 12413, 'Por enrutar', 'Diaria'),
(541, '000', 'Algimia de Almonacid', 12414, 'Por enutar', 'Diaria'),
(542, '000', 'Peñalba', 12414, 'Por enrutar', 'Diaria'),
(543, '000', 'Vall de Almonacid', 12414, 'Por enrutar', 'Diaria'),
(544, '000', 'Gaibiel', 12415, 'Por enrutar', 'Diaria'),
(545, '000', 'Matet', 12415, 'Por enrutar', 'Diaria'),
(546, '000', 'Toras', 12431, 'Por enrutar', 'Diaria'),
(547, '000', 'Caudiel', 12440, 'Por enrutar', 'Diaria'),
(548, '000', 'Montan', 12447, 'Por enrutar', 'Diaria'),
(549, '000', 'La Alqueria', 12448, 'Por enrutar', 'Diaria'),
(550, '000', 'Benafer', 12449, 'Por enrutar', 'Diaria'),
(551, '000', 'Higueras', 12449, 'Por enutar', 'Diaria'),
(552, '000', 'Pavias', 12449, 'Por enrutar', 'Diaria'),
(553, '000', 'Jerica', 12450, 'Por enrutar', 'Diaria'),
(554, '000', 'Novaliches', 12450, 'Por enrutar', 'Diaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(50) NOT NULL,
  `payload` varchar(50) NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `id` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `fecha_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rango1` int(4) NOT NULL,
  `rango2` int(4) NOT NULL,
  `precio` decimal(11,3) NOT NULL,
  `zonadesc` varchar(50) NOT NULL,
  `idzona` varchar(50) NOT NULL,
  `zona` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`id`, `producto`, `fecha_modificacion`, `rango1`, `rango2`, `precio`, `zonadesc`, `idzona`, `zona`, `updated_at`, `created_at`) VALUES
(7, 'GOB', '2021-11-30 13:10:08', 400, 999, 0.500, 'Madrid', '#002', '001', '2021-08-12 08:38:20', '2021-08-12 08:38:20'),
(6, 'GOB', '2021-11-30 13:10:08', 0, 399, 0.500, 'Madrid', '#001', '001', '2021-11-29 13:15:00', '2021-11-29 13:15:00'),
(8, 'GOB', '2021-11-30 13:10:08', 1000, 1500, 0.500, 'Madrid', '#003', '001', '2021-08-12 08:39:39', '2021-08-12 08:39:39'),
(9, 'GOB', '2022-02-10 08:52:13', 0, 399, 0.500, 'Catalunya', '010', '004', '2021-08-12 08:40:23', '2021-08-12 08:40:23'),
(10, 'GOB', '2022-02-10 08:52:13', 400, 999, 0.500, 'Catalunya', '011', '004', '2021-08-12 08:41:21', '2021-08-12 08:41:21'),
(11, 'GOB', '2022-02-10 08:52:13', 1000, 1500, 0.500, 'Catalunya', '012', '004', '2021-08-12 08:41:54', '2021-08-12 08:41:54'),
(101, 'GOB', '2021-11-30 13:10:08', 0, 399, 0.500, 'Guadalajara', '#004', '002', '2021-09-14 09:09:38', '2021-09-14 09:09:38'),
(102, 'GOB', '2021-11-30 13:10:08', 400, 999, 0.500, 'Guadalajara', '#005', '002', '2021-09-14 09:11:33', '2021-09-14 09:11:33'),
(104, 'GOB', '2021-11-30 13:10:08', 1000, 1500, 0.500, 'Guadalajara', '#006', '002', '2021-09-14 09:15:55', '2021-09-14 09:15:55'),
(116, 'GOB', '2021-11-30 15:42:27', 0, 399, 0.910, 'Madrid', '001', '001', '2021-11-30 15:42:27', '2021-11-30 15:42:27'),
(117, 'GOB', '2021-11-30 15:43:05', 400, 999, 0.870, 'Madrid', '002', '001', '2021-11-30 15:43:05', '2021-11-30 15:43:05'),
(118, 'GOB', '2021-11-30 15:43:53', 1000, 1500, 0.860, 'Madrid', '003', '001', '2021-11-30 15:43:53', '2021-11-30 15:43:53'),
(119, 'GOB', '2021-11-30 15:44:41', 0, 399, 0.910, 'Guadalajara', '004', '002', '2021-11-30 15:44:41', '2021-11-30 15:44:41'),
(120, 'GOB', '2021-11-30 15:45:10', 400, 999, 0.870, 'Guadalajara', '005', '002', '2021-11-30 15:45:10', '2021-11-30 15:45:10'),
(121, 'GOB', '2021-11-30 15:45:36', 1000, 1500, 0.860, 'Guadalajara', '006', '002', '2021-11-30 15:45:36', '2021-11-30 15:45:36'),
(122, 'GOB', '2022-02-10 08:52:13', 0, 399, 0.885, 'Catalunya', '010', '004', '2021-11-30 16:00:04', '2021-11-30 16:00:04'),
(123, 'GOB', '2022-02-10 08:52:13', 400, 999, 0.845, 'Catalunya', '011', '004', '2021-11-30 16:00:40', '2021-11-30 16:00:40'),
(124, 'GOB', '2022-02-10 08:52:13', 1000, 1500, 0.835, 'Catalunya', '012', '004', '2021-11-30 16:01:18', '2021-11-30 16:01:18'),
(125, 'GOB', '2021-12-01 12:07:26', 0, 399, 0.860, 'Madrid', '001', '001', '2021-12-01 12:07:26', '2021-12-01 12:07:26'),
(126, 'GOB', '2021-12-01 12:08:31', 400, 999, 0.820, 'Madrid', '002', '001', '2021-12-01 12:08:31', '2021-12-01 12:08:31'),
(127, 'GOB', '2021-12-01 12:09:31', 1000, 1500, 0.810, 'Madrid', '003', '001', '2021-12-01 12:09:31', '2021-12-01 12:09:31'),
(128, 'GOB', '2021-12-01 12:10:14', 0, 399, 0.860, 'Guadalajara', '004', '002', '2021-12-01 12:10:14', '2021-12-01 12:10:14'),
(129, 'GOB', '2021-12-01 12:11:01', 400, 999, 0.820, 'Guadalajara', '005', '002', '2021-12-01 12:11:01', '2021-12-01 12:11:01'),
(130, 'GOB', '2021-12-01 12:11:44', 1000, 1500, 0.810, 'Guadalajara', '006', '002', '2021-12-01 12:11:44', '2021-12-01 12:11:44'),
(131, 'GOB', '2021-12-14 12:59:43', 0, 399, 0.889, 'Madrid', '001', '001', '2021-12-14 12:59:43', '2021-12-14 12:59:43'),
(132, 'GOB', '2021-12-14 13:00:22', 400, 999, 0.849, 'Madrid', '002', '001', '2021-12-14 13:00:22', '2021-12-14 13:00:22'),
(133, 'GOB', '2021-12-14 13:00:52', 1000, 1500, 0.839, 'Madrid', '003', '001', '2021-12-14 13:00:52', '2021-12-14 13:00:52'),
(134, 'GOB', '2021-12-14 13:01:36', 0, 399, 0.889, 'Guadalajara', '004', '002', '2021-12-14 13:01:36', '2021-12-14 13:01:36'),
(135, 'GOB', '2021-12-14 13:02:29', 400, 999, 0.849, 'Guadalajara', '005', '002', '2021-12-14 13:02:29', '2021-12-14 13:02:29'),
(136, 'GOB', '2021-12-14 13:03:00', 1000, 1500, 0.839, 'Guadalajara', '006', '002', '2021-12-14 13:03:00', '2021-12-14 13:03:00'),
(137, 'GOB', '2021-12-21 12:59:23', 0, 399, 0.899, 'Madrid', '001', '001', '2021-12-21 12:59:23', '2021-12-21 12:59:23'),
(138, 'GOB', '2021-12-21 12:59:55', 400, 999, 0.859, 'Madrid', '002', '001', '2021-12-21 12:59:55', '2021-12-21 12:59:55'),
(139, 'GOB', '2021-12-21 13:00:28', 1000, 1500, 0.849, 'Madrid', '003', '001', '2021-12-21 13:00:28', '2021-12-21 13:00:28'),
(140, 'GOB', '2021-12-21 13:01:13', 0, 399, 0.899, 'Guadalajara', '004', '002', '2021-12-21 13:01:13', '2021-12-21 13:01:13'),
(141, 'GOB', '2021-12-21 13:01:49', 400, 999, 0.859, 'Guadalajara', '005', '002', '2021-12-21 13:01:49', '2021-12-21 13:01:49'),
(142, 'GOB', '2021-12-21 13:02:16', 1000, 1500, 0.849, 'Guadalajara', '006', '002', '2021-12-21 13:02:16', '2021-12-21 13:02:16'),
(143, 'GOB', '2022-01-11 12:24:51', 0, 399, 0.925, 'Madrid', '001', '001', '2022-01-11 12:24:51', '2022-01-11 12:24:51'),
(144, 'GOB', '2022-01-11 12:25:20', 400, 999, 0.885, 'Madrid', '002', '001', '2022-01-11 12:25:20', '2022-01-11 12:25:20'),
(145, 'GOB', '2022-01-11 12:25:48', 1000, 1500, 0.875, 'Madrid', '003', '001', '2022-01-11 12:25:48', '2022-01-11 12:25:48'),
(146, 'GOB', '2022-01-11 12:26:14', 0, 399, 0.925, 'Guadalajara', '004', '002', '2022-01-11 12:26:14', '2022-01-11 12:26:14'),
(147, 'GOB', '2022-01-11 12:26:39', 400, 999, 0.885, 'Guadalajara', '005', '002', '2022-01-11 12:26:39', '2022-01-11 12:26:39'),
(148, 'GOB', '2022-01-11 12:27:11', 1000, 1500, 0.875, 'Guadalajara', '006', '002', '2022-01-11 12:27:11', '2022-01-11 12:27:11'),
(149, 'GOB', '2022-02-10 08:52:13', 0, 399, 0.910, 'Catalunya', '010', '004', '2022-01-11 17:15:35', '2022-01-11 17:15:35'),
(150, 'GOB', '2022-02-10 08:52:13', 400, 999, 0.870, 'Catalunya', '011', '004', '2022-01-11 17:16:06', '2022-01-11 17:16:06'),
(151, 'GOB', '2022-02-10 08:52:13', 1000, 1500, 0.860, 'Catalunya', '012', '004', '2022-01-11 17:16:34', '2022-01-11 17:16:34'),
(152, 'GOB', '2022-02-10 08:52:13', 1000, 1500, 0.860, 'Catalunya', '012', '004', '2022-01-11 17:16:36', '2022-01-11 17:16:36'),
(153, 'GOB', '2022-01-17 18:20:31', 0, 399, 0.959, 'Madrid', '001', '001', '2022-01-17 18:20:31', '2022-01-17 18:20:31'),
(154, 'GOB', '2022-01-17 18:21:10', 400, 999, 0.919, 'Madrid', '002', '001', '2022-01-17 18:21:10', '2022-01-17 18:21:10'),
(155, 'GOB', '2022-01-17 18:21:49', 1000, 1500, 0.909, 'Madrid', '003', '001', '2022-01-17 18:21:49', '2022-01-17 18:21:49'),
(156, 'GOB', '2022-01-17 18:22:38', 0, 399, 0.959, 'Guadalajara', '004', '002', '2022-01-17 18:22:38', '2022-01-17 18:22:38'),
(157, 'GOB', '2022-01-17 18:23:30', 400, 999, 0.919, 'Guadalajara', '005', '002', '2022-01-17 18:23:30', '2022-01-17 18:23:30'),
(158, 'GOB', '2022-01-17 18:24:17', 1000, 1500, 0.909, 'Guadalajara', '006', '002', '2022-01-17 18:24:17', '2022-01-17 18:24:17'),
(159, 'GOB', '2022-02-10 08:52:13', 0, 399, 0.960, 'Catalunya', '010', '004', '2022-01-17 18:25:11', '2022-01-17 18:25:11'),
(160, 'GOB', '2022-02-10 08:52:13', 400, 999, 0.920, 'Catalunya', '011', '004', '2022-01-17 18:25:49', '2022-01-17 18:25:49'),
(161, 'GOB', '2022-02-10 08:52:13', 1000, 1500, 0.910, 'Catalunya', '012', '004', '2022-01-17 18:26:18', '2022-01-17 18:26:18'),
(162, 'GOB', '2022-01-18 13:57:48', 0, 399, 0.969, 'Madrid', '001', '001', '2022-01-18 13:57:48', '2022-01-18 13:57:48'),
(163, 'GOB', '2022-01-18 13:58:14', 400, 999, 0.929, 'Madrid', '002', '001', '2022-01-18 13:58:14', '2022-01-18 13:58:14'),
(164, 'GOB', '2022-01-18 13:58:41', 1000, 1500, 0.919, 'Madrid', '003', '001', '2022-01-18 13:58:41', '2022-01-18 13:58:41'),
(165, 'GOB', '2022-01-18 13:59:07', 0, 399, 0.969, 'Guadalajara', '004', '002', '2022-01-18 13:59:07', '2022-01-18 13:59:07'),
(166, 'GOB', '2022-01-18 13:59:44', 400, 999, 0.929, 'Guadalajara', '005', '002', '2022-01-18 13:59:44', '2022-01-18 13:59:44'),
(167, 'GOB', '2022-01-18 14:00:25', 1000, 1500, 0.919, 'Guadalajara', '006', '002', '2022-01-18 14:00:25', '2022-01-18 14:00:25'),
(168, 'GOB', '2022-01-25 17:18:56', 0, 399, 0.979, 'Madrid', '001', '001', '2022-01-25 17:18:56', '2022-01-25 17:18:56'),
(169, 'GOB', '2022-01-25 17:19:21', 400, 999, 0.939, 'Madrid', '002', '001', '2022-01-25 17:19:21', '2022-01-25 17:19:21'),
(170, 'GOB', '2022-01-25 17:19:43', 1000, 1500, 0.929, 'Madrid', '003', '001', '2022-01-25 17:19:43', '2022-01-25 17:19:43'),
(171, 'GOB', '2022-01-25 17:20:19', 0, 399, 0.979, 'Guadalajara', '003', '002', '2022-01-25 17:20:19', '2022-01-25 17:20:19'),
(172, 'GOB', '2022-01-25 17:20:42', 400, 999, 0.939, 'Guadalajara', '004', '002', '2022-01-25 17:20:42', '2022-01-25 17:20:42'),
(173, 'GOB', '2022-01-25 17:21:05', 1000, 1500, 0.929, 'Guadalajara', '006', '002', '2022-01-25 17:21:05', '2022-01-25 17:21:05'),
(174, 'GOB', '2022-01-25 17:21:54', 400, 999, 0.939, 'Guadalajara', '005', '002', '2022-01-25 17:21:54', '2022-01-25 17:21:54'),
(175, 'GOB', '2022-01-25 17:22:25', 0, 399, 0.979, 'Guadalajara', '004', '002', '2022-01-25 17:22:25', '2022-01-25 17:22:25'),
(176, 'GOB', '2022-02-10 08:52:13', 0, 399, 0.969, 'Catalunya', '010', '004', '2022-01-25 17:22:58', '2022-01-25 17:22:58'),
(177, 'GOB', '2022-02-10 08:52:13', 400, 999, 0.929, 'Catalunya', '011', '004', '2022-01-25 17:23:26', '2022-01-25 17:23:26'),
(178, 'GOB', '2022-02-10 08:52:13', 1000, 1500, 0.919, 'Catalunya', '012', '004', '2022-01-25 17:23:50', '2022-01-25 17:23:50'),
(179, 'GOB', '2022-01-27 09:47:34', 0, 399, 0.989, 'Madrid', '001', '001', '2022-01-27 09:47:34', '2022-01-27 09:47:34'),
(180, 'GOB', '2022-01-27 09:48:12', 400, 999, 0.949, 'Madrid', '002', '001', '2022-01-27 09:48:12', '2022-01-27 09:48:12'),
(181, 'GOB', '2022-01-27 09:48:38', 1000, 1500, 0.939, 'Madrid', '003', '001', '2022-01-27 09:48:38', '2022-01-27 09:48:38'),
(182, 'GOB', '2022-01-27 09:49:15', 0, 399, 0.989, 'Guadalajara', '004', '002', '2022-01-27 09:49:15', '2022-01-27 09:49:15'),
(183, 'GOB', '2022-01-27 09:53:08', 400, 999, 0.949, 'Guadalajara', '005', '002', '2022-01-27 09:53:08', '2022-01-27 09:53:08'),
(184, 'GOB', '2022-01-27 09:53:38', 1000, 1500, 0.939, 'Guadalajara', '006', '002', '2022-01-27 09:53:38', '2022-01-27 09:53:38'),
(185, 'GOB', '2022-02-10 08:52:13', 0, 399, 0.979, 'Catalunya', '010', '004', '2022-01-27 11:48:40', '2022-01-27 11:48:40'),
(186, 'GOB', '2022-02-10 08:52:13', 400, 999, 0.939, 'Catalunya', '011', '004', '2022-01-27 11:49:12', '2022-01-27 11:49:12'),
(187, 'GOB', '2022-02-10 08:52:13', 1000, 1500, 0.929, 'Catalunya', '012', '004', '2022-01-27 11:49:45', '2022-01-27 11:49:45'),
(188, 'GOB', '2022-02-10 08:53:14', 0, 399, 0.989, 'Valencia', '007', '003', '2022-01-28 13:31:56', '2022-01-28 13:31:56'),
(189, 'GOB', '2022-02-10 08:53:14', 400, 999, 0.949, 'Valencia', '008', '003', '2022-01-28 13:31:56', '2022-01-28 13:31:56'),
(190, 'GOB', '2022-02-10 08:53:14', 1000, 1500, 0.939, 'Valencia', '009', '003', '2022-01-28 13:31:56', '2022-01-28 13:31:56'),
(191, 'GOB', '2022-02-10 08:52:13', 0, 399, 0.999, 'Catalunya', '010', '004', '2022-01-31 13:14:57', '2022-01-31 13:14:57'),
(192, 'GOB', '2022-02-10 08:52:13', 400, 999, 0.959, 'Catalunya', '011', '004', '2022-01-31 13:15:33', '2022-01-31 13:15:33'),
(193, 'GOB', '2022-02-10 08:52:13', 1000, 1500, 0.949, 'Catalunya', '012', '004', '2022-01-31 13:15:59', '2022-01-31 13:15:59'),
(194, 'GOB', '2022-01-31 13:43:08', 0, 399, 1.009, 'Madrid', '001', '001', '2022-01-31 13:43:08', '2022-01-31 13:43:08'),
(195, 'GOB', '2022-01-31 13:43:32', 400, 999, 0.969, 'Madrid', '002', '001', '2022-01-31 13:43:32', '2022-01-31 13:43:32'),
(196, 'GOB', '2022-01-31 13:44:03', 1000, 1500, 0.959, 'Madrid', '003', '001', '2022-01-31 13:44:03', '2022-01-31 13:44:03'),
(197, 'GOB', '2022-01-31 13:44:40', 0, 399, 1.009, 'Guadalajara', '004', '002', '2022-01-31 13:44:40', '2022-01-31 13:44:40'),
(198, 'GOB', '2022-01-31 13:45:12', 400, 999, 0.969, 'Guadalajara', '005', '002', '2022-01-31 13:45:12', '2022-01-31 13:45:12'),
(199, 'GOB', '2022-01-31 13:45:36', 1000, 1500, 0.959, 'Guadalajara', '006', '002', '2022-01-31 13:45:36', '2022-01-31 13:45:36'),
(200, 'GOB', '2022-02-01 12:15:50', 0, 399, 1.019, 'Madrid', '001', '001', '2022-02-01 12:15:50', '2022-02-01 12:15:50'),
(201, 'GOB', '2022-02-01 12:16:10', 400, 999, 0.979, 'Madrid', '002', '001', '2022-02-01 12:16:10', '2022-02-01 12:16:10'),
(202, 'GOB', '2022-02-01 12:16:31', 1000, 1500, 0.969, 'Madrid', '003', '001', '2022-02-01 12:16:31', '2022-02-01 12:16:31'),
(203, 'GOB', '2022-02-01 12:16:53', 0, 399, 1.019, 'Guadalajara', '004', '002', '2022-02-01 12:16:53', '2022-02-01 12:16:53'),
(204, 'GOB', '2022-02-01 12:17:43', 400, 999, 0.979, 'Guadalajara', '005', '002', '2022-02-01 12:17:43', '2022-02-01 12:17:43'),
(205, 'GOB', '2022-02-01 12:18:04', 1000, 1500, 0.969, 'Guadalajara', '006', '002', '2022-02-01 12:18:04', '2022-02-01 12:18:04'),
(206, 'GOB', '2022-02-10 08:52:13', 0, 399, 1.039, 'Catalunya', '010', '004', '2022-02-07 16:37:25', '2022-02-07 16:37:25'),
(207, 'GOB', '2022-02-10 08:52:13', 400, 999, 0.999, 'Catalunya', '011', '004', '2022-02-07 16:37:54', '2022-02-07 16:37:54'),
(208, 'GOB', '2022-02-10 08:52:41', 1000, 1500, 0.989, 'Catalunya', '012', '004', '2022-02-07 16:38:34', '2022-02-07 16:38:34'),
(209, 'GOB', '2022-02-08 10:35:28', 0, 399, 1.039, 'Madrid', '001', '001', '2022-02-08 10:35:28', '2022-02-08 10:35:28'),
(210, 'GOB', '2022-02-08 10:35:49', 400, 999, 0.999, 'Madrid', '002', '001', '2022-02-08 10:35:49', '2022-02-08 10:35:49'),
(211, 'GOB', '2022-02-08 10:36:10', 1000, 1500, 0.989, 'Madrid', '003', '001', '2022-02-08 10:36:10', '2022-02-08 10:36:10'),
(212, 'GOB', '2022-02-08 10:36:35', 0, 399, 1.039, 'Guadalajara', '004', '002', '2022-02-08 10:36:35', '2022-02-08 10:36:35'),
(213, 'GOB', '2022-02-08 10:36:57', 400, 999, 0.999, 'Guadalajara', '005', '002', '2022-02-08 10:36:57', '2022-02-08 10:36:57'),
(214, 'GOB', '2022-02-08 10:39:01', 1000, 1500, 0.989, 'Guadalajara', '006', '002', '2022-02-08 10:39:01', '2022-02-08 10:39:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporals`
--

CREATE TABLE `temporals` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `session_token` varchar(50) DEFAULT NULL,
  `poblacion` varchar(50) NOT NULL,
  `codigopost` varchar(5) DEFAULT NULL,
  `provincia` varchar(50) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  `unidad` varchar(10) DEFAULT NULL,
  `preciol` decimal(10,3) DEFAULT NULL,
  `entregadia` varchar(50) NOT NULL,
  `entregadianum` varchar(5) NOT NULL,
  `dentrode` varchar(50) NOT NULL,
  `mese` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `temporals`
--

INSERT INTO `temporals` (`id`, `user`, `email`, `session_token`, `poblacion`, `codigopost`, `provincia`, `cantidad`, `unidad`, `preciol`, `entregadia`, `entregadianum`, `dentrode`, `mese`, `created_at`, `updated_at`) VALUES
(3598, 2, 'hola@test.com', NULL, 'San Fernando de Henares', '28830', 'Madrid', 50.00, 'Lts.', 0.860, 'Domingo', '12', '2', 1, '2021-12-10 16:43:28', '2021-12-10 16:43:28'),
(3599, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 50.00, 'Lts.', 0.860, 'Miércoles', '15', '2', 1, '2021-12-13 08:52:17', '2021-12-13 08:52:17'),
(3600, 666666, 'notemail@no.com', NULL, 'Arganda del Rey', '28500', 'Madrid', 500.00, 'Lts.', 0.820, 'Miércoles', '15', '2', 1, '2021-12-13 19:23:45', '2021-12-13 19:23:45'),
(3602, 666666, 'notemail@no.com', NULL, 'Arganda del Rey', '28500', 'Madrid', 500.00, 'Lts.', 0.820, 'Miércoles', '15', '2', 1, '2021-12-13 19:32:12', '2021-12-13 19:32:12'),
(3603, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 6000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 08:52:13', '2021-12-14 08:52:13'),
(3604, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 6000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 08:55:43', '2021-12-14 08:55:43'),
(3605, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 6000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 08:57:22', '2021-12-14 08:57:22'),
(3606, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 6000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 08:58:10', '2021-12-14 08:58:10'),
(3607, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 4000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 10:19:32', '2021-12-14 10:19:32'),
(3608, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 4000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 10:23:58', '2021-12-14 10:23:58'),
(3609, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 4000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 10:34:34', '2021-12-14 10:34:34'),
(3610, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 4000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 11:02:58', '2021-12-14 11:02:58'),
(3611, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 4000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 11:04:32', '2021-12-14 11:04:32'),
(3612, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 4000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 11:05:19', '2021-12-14 11:05:19'),
(3613, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 4000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 11:05:32', '2021-12-14 11:05:32'),
(3614, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 4000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 11:43:19', '2021-12-14 11:43:19'),
(3615, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 4000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 11:44:16', '2021-12-14 11:44:16'),
(3616, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 4000.00, 'Lts.', 0.810, 'Jueves', '16', '2', 1, '2021-12-14 11:45:17', '2021-12-14 11:45:17'),
(3618, 3, 'Admin@test.com', NULL, 'Masmolets', '43813', 'Tarragona', 225.99, '€', 0.885, 'Jueves', '16', '2', 1, '2021-12-14 12:10:03', '2021-12-14 12:10:03'),
(3619, 666666, 'notemail@no.com', NULL, 'Armuña de Tajuña', '19135', 'Guadalajara', 500.00, 'Lts.', 0.820, 'Lunes', '20', '6', 1, '2021-12-14 12:40:40', '2021-12-14 12:40:40'),
(3620, 666666, 'notemail@no.com', NULL, 'Armuña de Tajuña', '19135', 'Guadalajara', 500.00, 'Lts.', 0.820, 'Lunes', '20', '6', 1, '2021-12-14 12:41:27', '2021-12-14 12:41:27'),
(3621, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Jueves', '16', '2', 1, '2021-12-14 14:58:34', '2021-12-14 14:58:34'),
(3625, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Viernes', '17', '2', 1, '2021-12-15 09:43:17', '2021-12-15 09:43:17'),
(3626, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 150.00, 'Lts.', 0.889, 'Viernes', '17', '2', 1, '2021-12-15 12:46:39', '2021-12-15 12:46:39'),
(3627, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 150.00, 'Lts.', 0.889, 'Viernes', '17', '2', 1, '2021-12-15 13:00:36', '2021-12-15 13:00:36'),
(3628, 666666, 'notemail@no.com', NULL, 'Masmolets', '43813', 'Tarragona', 112.99, '€', 0.885, 'Viernes', '17', '2', 1, '2021-12-15 13:34:34', '2021-12-15 13:34:34'),
(3629, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Martes', '21', '6', 1, '2021-12-15 13:34:54', '2021-12-15 13:34:54'),
(3630, 666666, 'notemail@no.com', NULL, 'Montblanc', '43400', 'Tarragona', 10777.25, '€', 0.835, 'Martes', '21', '6', 1, '2021-12-15 13:35:28', '2021-12-15 13:35:28'),
(3631, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 150.00, 'Lts.', 0.889, 'Viernes', '17', '2', 1, '2021-12-15 14:13:28', '2021-12-15 14:13:28'),
(3632, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 50.00, 'Lts.', 0.889, 'Viernes', '17', '2', 1, '2021-12-15 14:28:13', '2021-12-15 14:28:13'),
(3634, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Viernes', '17', '2', 1, '2021-12-15 15:44:41', '2021-12-15 15:44:41'),
(3635, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Viernes', '17', '2', 1, '2021-12-15 15:46:28', '2021-12-15 15:46:28'),
(3636, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Viernes', '17', '2', 1, '2021-12-15 15:47:49', '2021-12-15 15:47:49'),
(3638, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Viernes', '17', '2', 1, '2021-12-15 16:15:02', '2021-12-15 16:15:02'),
(3639, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Viernes', '17', '2', 1, '2021-12-15 16:44:44', '2021-12-15 16:44:44'),
(3640, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 50.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 08:56:13', '2021-12-16 08:56:13'),
(3641, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 50.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 09:02:04', '2021-12-16 09:02:04'),
(3642, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 50.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 09:48:17', '2021-12-16 09:48:17'),
(3643, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 50.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 09:49:36', '2021-12-16 09:49:36'),
(3644, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 50.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 09:51:09', '2021-12-16 09:51:09'),
(3645, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 50.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 10:02:00', '2021-12-16 10:02:00'),
(3647, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 50.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 10:52:14', '2021-12-16 10:52:14'),
(3648, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 100.00, 'Lts.', 0.889, 'Lunes', '20', '4', 1, '2021-12-16 10:53:33', '2021-12-16 10:53:33'),
(3649, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 50.00, 'Lts.', 0.885, 'Martes', '21', '5', 1, '2021-12-16 10:56:17', '2021-12-16 10:56:17'),
(3650, 2, 'hola@test.com', NULL, 'Lleida', '25070', 'Tarragona', 50.00, 'Lts.', 0.885, 'Martes', '21', '5', 1, '2021-12-16 11:01:18', '2021-12-16 11:01:18'),
(3651, 2, 'hola@test.com', NULL, 'Lleida', '25070', 'Tarragona', 25.00, 'Lts.', 0.885, 'Martes', '21', '5', 1, '2021-12-16 11:02:44', '2021-12-16 11:02:44'),
(3652, 666666, 'notemail@no.com', NULL, 'Parla', '28980', 'Madrid', 100.00, 'Lts.', 0.889, 'Lunes', '20', '4', 1, '2021-12-16 11:05:25', '2021-12-16 11:05:25'),
(3653, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 5.00, 'Lts.', 0.889, 'Lunes', '20', '4', 1, '2021-12-16 11:07:46', '2021-12-16 11:07:46'),
(3654, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 10.00, 'Lts.', 0.885, 'Sábado', '18', '2', 1, '2021-12-16 11:21:39', '2021-12-16 11:21:39'),
(3657, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 5000.00, 'Lts.', 0.839, 'Sábado', '18', '2', 1, '2021-12-16 11:56:21', '2021-12-16 11:56:21'),
(3659, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 1000.00, 'Lts.', 0.835, 'Sábado', '18', '2', 1, '2021-12-16 12:23:12', '2021-12-16 12:23:12'),
(3662, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.845, 'Sábado', '18', '2', 1, '2021-12-16 12:50:53', '2021-12-16 12:50:53'),
(3663, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 200.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 14:00:39', '2021-12-16 14:00:39'),
(3665, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Sábado', '18', '2', 1, '2021-12-16 14:09:50', '2021-12-16 14:09:50'),
(3666, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Sábado', '18', '2', 1, '2021-12-16 14:11:37', '2021-12-16 14:11:37'),
(3667, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 20.00, 'Lts.', 0.885, 'Sábado', '18', '2', 1, '2021-12-16 14:15:30', '2021-12-16 14:15:30'),
(3670, 2, 'hola@test.com', NULL, 'Solivella', '43412', 'Tarragona', 10.00, 'Lts.', 0.885, 'Martes', '21', '5', 1, '2021-12-16 14:48:25', '2021-12-16 14:48:25'),
(3673, 2, 'hola@test.com', NULL, 'Espluga del Francoli', '43440', 'Tarragona', 100.00, 'Lts.', 0.885, 'Martes', '21', '5', 1, '2021-12-16 14:52:41', '2021-12-16 14:52:41'),
(3674, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 1000.00, 'Lts.', 0.839, 'Sábado', '18', '2', 1, '2021-12-16 15:00:56', '2021-12-16 15:00:56'),
(3675, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 1000.00, 'Lts.', 0.839, 'Sábado', '18', '2', 1, '2021-12-16 15:01:30', '2021-12-16 15:01:30'),
(3676, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 1000.00, 'Lts.', 0.839, 'Sábado', '18', '2', 1, '2021-12-16 15:01:36', '2021-12-16 15:01:36'),
(3678, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 50.00, 'Lts.', 0.885, 'Miércoles', '22', '6', 1, '2021-12-16 15:09:07', '2021-12-16 15:09:07'),
(3679, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:21:40', '2021-12-16 16:21:40'),
(3680, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:25:01', '2021-12-16 16:25:01'),
(3681, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:26:10', '2021-12-16 16:26:10'),
(3682, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:27:42', '2021-12-16 16:27:42'),
(3683, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:27:56', '2021-12-16 16:27:56'),
(3684, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:28:28', '2021-12-16 16:28:28'),
(3685, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:29:01', '2021-12-16 16:29:01'),
(3686, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:31:53', '2021-12-16 16:31:53'),
(3687, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:32:51', '2021-12-16 16:32:51'),
(3688, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:33:15', '2021-12-16 16:33:15'),
(3689, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Sábado', '18', '2', 1, '2021-12-16 16:42:08', '2021-12-16 16:42:08'),
(3690, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Sábado', '18', '2', 1, '2021-12-16 16:42:52', '2021-12-16 16:42:52'),
(3691, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Sábado', '18', '2', 1, '2021-12-16 16:46:08', '2021-12-16 16:46:08'),
(3692, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Sábado', '18', '2', 1, '2021-12-16 16:49:33', '2021-12-16 16:49:33'),
(3693, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Sábado', '18', '2', 1, '2021-12-16 17:16:24', '2021-12-16 17:16:24'),
(3694, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Sábado', '18', '2', 1, '2021-12-16 17:16:37', '2021-12-16 17:16:37'),
(3695, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Sábado', '18', '2', 1, '2021-12-16 17:18:01', '2021-12-16 17:18:01'),
(3696, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 50.00, 'Lts.', 0.889, 'Domingo', '19', '2', 1, '2021-12-17 08:45:56', '2021-12-17 08:45:56'),
(3698, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '19', '2', 1, '2021-12-17 09:11:31', '2021-12-17 09:11:31'),
(3699, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '19', '2', 1, '2021-12-17 09:37:48', '2021-12-17 09:37:48'),
(3700, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '19', '2', 1, '2021-12-17 09:38:03', '2021-12-17 09:38:03'),
(3701, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Domingo', '19', '2', 1, '2021-12-17 09:38:50', '2021-12-17 09:38:50'),
(3702, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 50.00, 'Lts.', 0.889, 'Lunes', '20', '3', 1, '2021-12-17 10:28:32', '2021-12-17 10:28:32'),
(3703, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 50.00, 'Lts.', 0.889, 'Lunes', '20', '3', 1, '2021-12-17 10:43:11', '2021-12-17 10:43:11'),
(3704, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 50.00, 'Lts.', 0.889, 'Lunes', '20', '3', 1, '2021-12-17 10:43:19', '2021-12-17 10:43:19'),
(3705, 666666, 'notemail@no.com', NULL, 'Madrid', '28070', 'Madrid', 100.00, 'Lts.', 0.889, 'Domingo', '19', '2', 1, '2021-12-17 11:26:23', '2021-12-17 11:26:23'),
(3706, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Domingo', '19', '2', 1, '2021-12-17 11:28:13', '2021-12-17 11:28:13'),
(3707, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Domingo', '19', '2', 1, '2021-12-17 11:29:20', '2021-12-17 11:29:20'),
(3708, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Domingo', '19', '2', 1, '2021-12-17 11:29:40', '2021-12-17 11:29:40'),
(3709, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Martes', '21', '4', 1, '2021-12-17 11:55:13', '2021-12-17 11:55:13'),
(3710, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 6001.00, 'Lts.', 0.835, 'Martes', '21', '4', 1, '2021-12-17 11:55:33', '2021-12-17 11:55:33'),
(3711, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 600.00, 'Lts.', 0.845, 'Martes', '21', '4', 1, '2021-12-17 11:55:41', '2021-12-17 11:55:41'),
(3712, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 6001.00, 'Lts.', 0.835, 'Martes', '21', '4', 1, '2021-12-17 11:56:01', '2021-12-17 11:56:01'),
(3713, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 600.00, 'Lts.', 0.845, 'Martes', '21', '4', 1, '2021-12-17 11:56:11', '2021-12-17 11:56:11'),
(3714, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 700.00, 'Lts.', 0.845, 'Martes', '21', '4', 1, '2021-12-17 12:10:47', '2021-12-17 12:10:47'),
(3715, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Martes', '21', '4', 1, '2021-12-17 12:20:45', '2021-12-17 12:20:45'),
(3716, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 1100.00, 'Lts.', 0.835, 'Martes', '21', '4', 1, '2021-12-17 12:21:59', '2021-12-17 12:21:59'),
(3717, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Martes', '21', '4', 1, '2021-12-17 12:48:18', '2021-12-17 12:48:18'),
(3718, 2, 'hola@test.com', NULL, 'Cabanillas Del Campo', '19171', 'Guadalajara', 500.00, 'Lts.', 0.849, 'Domingo', '19', '2', 1, '2021-12-17 13:11:54', '2021-12-17 13:11:54'),
(3719, 2, 'hola@test.com', NULL, 'Cabanillas Del Campo', '19171', 'Guadalajara', 500.00, 'Lts.', 0.849, 'Domingo', '19', '2', 1, '2021-12-17 13:12:19', '2021-12-17 13:12:19'),
(3720, 666666, 'notemail@no.com', NULL, 'Artesa de Lleida', '25150', 'Tarragona', 500.00, 'Lts.', 0.845, 'Miércoles', '22', '5', 1, '2021-12-17 13:17:44', '2021-12-17 13:17:44'),
(3721, 666666, 'notemail@no.com', NULL, 'Torreforta', '43006', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '19', '2', 1, '2021-12-17 14:46:49', '2021-12-17 14:46:49'),
(3722, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Domingo', '19', '2', 1, '2021-12-17 15:10:37', '2021-12-17 15:10:37'),
(3723, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Domingo', '19', '2', 1, '2021-12-17 15:14:35', '2021-12-17 15:14:35'),
(3724, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Domingo', '19', '2', 1, '2021-12-17 15:14:52', '2021-12-17 15:14:52'),
(3725, 666666, 'notemail@no.com', NULL, 'Artesa de Lleida', '25150', 'Tarragona', 500.00, 'Lts.', 0.845, 'Miércoles', '22', '5', 1, '2021-12-17 15:24:10', '2021-12-17 15:24:10'),
(3726, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 100.00, 'Lts.', 0.889, 'Lunes', '20', '3', 1, '2021-12-17 15:29:59', '2021-12-17 15:29:59'),
(3727, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 100.00, 'Lts.', 0.889, 'Lunes', '20', '3', 1, '2021-12-17 15:32:26', '2021-12-17 15:32:26'),
(3728, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 100.00, 'Lts.', 0.889, 'Lunes', '20', '3', 1, '2021-12-17 15:32:31', '2021-12-17 15:32:31'),
(3729, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Domingo', '19', '2', 1, '2021-12-17 15:44:24', '2021-12-17 15:44:24'),
(3730, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Domingo', '19', '2', 1, '2021-12-17 15:44:56', '2021-12-17 15:44:56'),
(3731, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Domingo', '19', '2', 1, '2021-12-17 15:45:15', '2021-12-17 15:45:15'),
(3732, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Domingo', '19', '2', 1, '2021-12-17 15:45:38', '2021-12-17 15:45:38'),
(3733, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Domingo', '19', '2', 1, '2021-12-17 15:46:42', '2021-12-17 15:46:42'),
(3734, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Domingo', '19', '2', 1, '2021-12-17 16:42:55', '2021-12-17 16:42:55'),
(3735, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Domingo', '19', '2', 1, '2021-12-17 16:43:21', '2021-12-17 16:43:21'),
(3736, 2, 'hola@test.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Domingo', '19', '2', 1, '2021-12-17 16:50:22', '2021-12-17 16:50:22'),
(3737, 2, 'hola@test.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Domingo', '19', '2', 1, '2021-12-17 16:51:27', '2021-12-17 16:51:27'),
(3738, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Miércoles', '22', '2', 1, '2021-12-20 11:39:37', '2021-12-20 11:39:37'),
(3739, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Miércoles', '22', '2', 1, '2021-12-20 12:02:18', '2021-12-20 12:02:18'),
(3740, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Miércoles', '22', '2', 1, '2021-12-20 12:02:48', '2021-12-20 12:02:48'),
(3741, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Miércoles', '22', '2', 1, '2021-12-20 12:05:26', '2021-12-20 12:05:26'),
(3742, 666666, 'notemail@no.com', NULL, 'Pradell de la Teixeta', '43774', 'Tarragona', 200.00, 'Lts.', 0.885, 'Viernes', '24', '4', 1, '2021-12-20 12:06:06', '2021-12-20 12:06:06'),
(3744, 430120, 'perico@test.com', NULL, 'Torrejon del Rey', '19174', 'Guadalajara', 500.00, 'Lts.', 0.849, 'Miércoles', '22', '2', 1, '2021-12-20 13:08:24', '2021-12-20 13:08:24'),
(3745, 666666, 'notemail@no.com', NULL, 'Pradell de la Teixeta', '43774', 'Tarragona', 200.00, 'Lts.', 0.885, 'Viernes', '24', '4', 1, '2021-12-20 13:16:56', '2021-12-20 13:16:56'),
(3746, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 200.00, 'Lts.', 0.885, 'Miércoles', '22', '2', 1, '2021-12-20 13:26:01', '2021-12-20 13:26:01'),
(3747, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 300.00, 'Lts.', 0.885, 'Miércoles', '22', '2', 1, '2021-12-20 13:26:10', '2021-12-20 13:26:10'),
(3748, 666666, 'notemail@no.com', NULL, 'La Riba', '43450', 'Tarragona', 200.00, 'Lts.', 0.885, 'Martes', '28', '8', 1, '2021-12-20 13:29:11', '2021-12-20 13:29:11'),
(3750, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 15:24:00', '2021-12-20 15:24:00'),
(3752, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:22:03', '2021-12-20 16:22:03'),
(3753, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:23:46', '2021-12-20 16:23:46'),
(3754, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:24:34', '2021-12-20 16:24:34'),
(3755, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:30:23', '2021-12-20 16:30:23'),
(3756, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:31:30', '2021-12-20 16:31:30'),
(3757, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:32:09', '2021-12-20 16:32:09'),
(3758, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:41:17', '2021-12-20 16:41:17'),
(3759, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:41:52', '2021-12-20 16:41:52'),
(3760, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:42:50', '2021-12-20 16:42:50'),
(3761, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:43:16', '2021-12-20 16:43:16'),
(3762, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:43:39', '2021-12-20 16:43:39'),
(3763, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:45:37', '2021-12-20 16:45:37'),
(3764, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:47:13', '2021-12-20 16:47:13'),
(3765, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:47:59', '2021-12-20 16:47:59'),
(3766, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:53:45', '2021-12-20 16:53:45'),
(3767, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:54:10', '2021-12-20 16:54:10'),
(3768, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:55:36', '2021-12-20 16:55:36'),
(3769, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 16:57:29', '2021-12-20 16:57:29'),
(3770, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:02:41', '2021-12-20 17:02:41'),
(3771, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:04:18', '2021-12-20 17:04:18'),
(3772, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:04:58', '2021-12-20 17:04:58'),
(3773, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:05:09', '2021-12-20 17:05:09'),
(3774, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:05:32', '2021-12-20 17:05:32'),
(3775, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:07:31', '2021-12-20 17:07:31'),
(3776, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:12:50', '2021-12-20 17:12:50'),
(3777, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:13:58', '2021-12-20 17:13:58'),
(3778, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:15:38', '2021-12-20 17:15:38'),
(3779, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:16:13', '2021-12-20 17:16:13'),
(3780, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:21:27', '2021-12-20 17:21:27'),
(3781, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:22:36', '2021-12-20 17:22:36'),
(3782, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:23:48', '2021-12-20 17:23:48'),
(3783, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:24:38', '2021-12-20 17:24:38'),
(3784, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.849, 'Jueves', '23', '3', 1, '2021-12-20 17:25:10', '2021-12-20 17:25:10'),
(3785, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Miércoles', '22', '2', 1, '2021-12-20 17:28:37', '2021-12-20 17:28:37'),
(3786, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Jueves', '23', '2', 1, '2021-12-21 08:40:15', '2021-12-21 08:40:15'),
(3787, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Jueves', '23', '2', 1, '2021-12-21 08:47:23', '2021-12-21 08:47:23'),
(3788, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Jueves', '23', '2', 1, '2021-12-21 09:22:48', '2021-12-21 09:22:48'),
(3791, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Jueves', '23', '2', 1, '2021-12-21 10:18:48', '2021-12-21 10:18:48'),
(3793, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Jueves', '23', '2', 1, '2021-12-21 10:20:59', '2021-12-21 10:20:59'),
(3794, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Jueves', '23', '2', 1, '2021-12-21 10:21:30', '2021-12-21 10:21:30'),
(3795, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Jueves', '23', '2', 1, '2021-12-21 10:23:57', '2021-12-21 10:23:57'),
(3796, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Jueves', '23', '2', 1, '2021-12-21 10:25:55', '2021-12-21 10:25:55'),
(3797, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 100.00, 'Lts.', 0.885, 'Jueves', '23', '2', 1, '2021-12-21 10:27:06', '2021-12-21 10:27:06'),
(3798, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Jueves', '23', '2', 1, '2021-12-21 10:51:18', '2021-12-21 10:51:18'),
(3799, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 100.00, 'Lts.', 0.889, 'Jueves', '23', '2', 1, '2021-12-21 10:52:48', '2021-12-21 10:52:48'),
(3800, 2, 'hola@test.com', NULL, 'Madrid', '28070', 'Madrid', 500.00, 'Lts.', 0.849, 'Jueves', '23', '2', 1, '2021-12-21 10:54:38', '2021-12-21 10:54:38'),
(3801, 2, 'hola@test.com', NULL, 'Madrid', '28070', 'Madrid', 500.00, 'Lts.', 0.849, 'Jueves', '23', '2', 1, '2021-12-21 11:15:27', '2021-12-21 11:15:27'),
(3802, 2, 'hola@test.com', NULL, 'Madrid', '28070', 'Madrid', 500.00, 'Lts.', 0.849, 'Jueves', '23', '2', 1, '2021-12-21 11:15:30', '2021-12-21 11:15:30'),
(3803, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.849, 'Jueves', '23', '2', 1, '2021-12-21 11:33:48', '2021-12-21 11:33:48'),
(3804, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 100.00, 'Lts.', 0.889, 'Jueves', '23', '2', 1, '2021-12-21 11:42:15', '2021-12-21 11:42:15'),
(3805, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 110.00, 'Lts.', 0.889, 'Jueves', '23', '2', 1, '2021-12-21 11:45:23', '2021-12-21 11:45:23'),
(3807, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 250.00, 'Lts.', 0.889, 'Jueves', '23', '2', 1, '2021-12-21 11:48:44', '2021-12-21 11:48:44'),
(3809, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 10.00, 'Lts.', 0.889, 'Jueves', '23', '2', 1, '2021-12-21 11:57:22', '2021-12-21 11:57:22'),
(3810, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 10.00, 'Lts.', 0.889, 'Jueves', '23', '2', 1, '2021-12-21 12:18:04', '2021-12-21 12:18:04'),
(3811, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 10.00, 'Lts.', 0.889, 'Jueves', '23', '2', 1, '2021-12-21 12:30:51', '2021-12-21 12:30:51'),
(3812, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 100.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:02:28', '2021-12-21 14:02:28'),
(3813, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 100.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:02:37', '2021-12-21 14:02:37'),
(3814, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 100.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:03:44', '2021-12-21 14:03:44'),
(3815, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 200.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:03:50', '2021-12-21 14:03:50'),
(3816, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 200.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:06:32', '2021-12-21 14:06:32'),
(3817, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:07:49', '2021-12-21 14:07:49'),
(3818, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 150.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:09:02', '2021-12-21 14:09:02'),
(3819, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 150.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:09:06', '2021-12-21 14:09:06'),
(3820, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:17:13', '2021-12-21 14:17:13'),
(3821, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:18:38', '2021-12-21 14:18:38'),
(3822, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:35:39', '2021-12-21 14:35:39'),
(3823, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:36:09', '2021-12-21 14:36:09'),
(3824, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:39:03', '2021-12-21 14:39:03'),
(3825, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:39:25', '2021-12-21 14:39:25'),
(3826, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:39:46', '2021-12-21 14:39:46'),
(3827, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:39:59', '2021-12-21 14:39:59'),
(3828, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:40:27', '2021-12-21 14:40:27'),
(3829, 2, 'hola@test.com', NULL, 'Prenafeta', '43415', 'Tarragona', 301.00, 'Lts.', 0.885, 'Martes', '28', '7', 1, '2021-12-21 14:40:58', '2021-12-21 14:40:58'),
(3830, 2, 'hola@test.com', NULL, 'Prenafeta', '43415', 'Tarragona', 301.00, 'Lts.', 0.885, 'Martes', '28', '7', 1, '2021-12-21 14:44:30', '2021-12-21 14:44:30'),
(3831, 2, 'hola@test.com', NULL, 'Prenafeta', '43415', 'Tarragona', 301.00, 'Lts.', 0.885, 'Martes', '28', '7', 1, '2021-12-21 14:44:56', '2021-12-21 14:44:56'),
(3832, 2, 'hola@test.com', NULL, 'Prenafeta', '43415', 'Tarragona', 301.00, 'Lts.', 0.885, 'Martes', '28', '7', 1, '2021-12-21 14:45:05', '2021-12-21 14:45:05'),
(3833, 2, 'hola@test.com', NULL, 'Prenafeta', '43415', 'Tarragona', 301.00, 'Lts.', 0.885, 'Martes', '28', '7', 1, '2021-12-21 14:45:20', '2021-12-21 14:45:20'),
(3834, 2, 'hola@test.com', NULL, 'Prenafeta', '43415', 'Tarragona', 301.00, 'Lts.', 0.885, 'Martes', '28', '7', 1, '2021-12-21 14:45:45', '2021-12-21 14:45:45'),
(3835, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:46:38', '2021-12-21 14:46:38'),
(3836, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:52:00', '2021-12-21 14:52:00'),
(3837, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:52:24', '2021-12-21 14:52:24'),
(3838, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:53:43', '2021-12-21 14:53:43'),
(3839, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 14:59:40', '2021-12-21 14:59:40'),
(3840, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 15:00:07', '2021-12-21 15:00:07'),
(3841, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 15:03:29', '2021-12-21 15:03:29'),
(3842, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 15:03:46', '2021-12-21 15:03:46'),
(3843, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 15:05:18', '2021-12-21 15:05:18'),
(3844, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 15:06:04', '2021-12-21 15:06:04'),
(3845, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 15:06:17', '2021-12-21 15:06:17'),
(3846, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 15:06:42', '2021-12-21 15:06:42'),
(3847, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 15:07:25', '2021-12-21 15:07:25'),
(3848, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 301.00, 'Lts.', 0.899, 'Jueves', '23', '2', 1, '2021-12-21 15:07:50', '2021-12-21 15:07:50'),
(3849, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '23', '2', 1, '2021-12-21 15:20:56', '2021-12-21 15:20:56'),
(3850, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '23', '2', 1, '2021-12-21 15:23:21', '2021-12-21 15:23:21'),
(3851, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '23', '2', 1, '2021-12-21 15:44:35', '2021-12-21 15:44:35'),
(3852, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '23', '2', 1, '2021-12-21 15:45:13', '2021-12-21 15:45:13'),
(3853, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '23', '2', 1, '2021-12-21 15:48:04', '2021-12-21 15:48:04'),
(3854, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '23', '2', 1, '2021-12-21 15:57:13', '2021-12-21 15:57:13'),
(3855, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '23', '2', 1, '2021-12-21 16:01:12', '2021-12-21 16:01:12'),
(3856, 430120, 'perico@test.com', NULL, 'Juneda', '25430', 'Tarragona', 400.00, 'Lts.', 0.845, 'Domingo', '26', '5', 1, '2021-12-21 16:46:44', '2021-12-21 16:46:44'),
(3857, 430120, 'perico@test.com', NULL, 'Juneda', '25430', 'Tarragona', 400.00, 'Lts.', 0.845, 'Domingo', '26', '5', 1, '2021-12-21 16:47:18', '2021-12-21 16:47:18'),
(3858, 666666, 'notemail@no.com', NULL, 'Juneda', '25430', 'Tarragona', 301.00, 'Lts.', 0.885, 'Domingo', '26', '5', 1, '2021-12-21 17:24:16', '2021-12-21 17:24:16'),
(3859, 2, 'hola@test.com', NULL, 'Juneda', '25430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '26', '5', 1, '2021-12-21 17:25:37', '2021-12-21 17:25:37'),
(3860, 430120, 'perico@test.com', NULL, 'Juneda', '25430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '26', '5', 1, '2021-12-21 17:29:34', '2021-12-21 17:29:34'),
(3861, 666666, 'notemail@no.com', NULL, 'Juneda', '25430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '26', '5', 1, '2021-12-21 17:30:05', '2021-12-21 17:30:05'),
(3862, 666666, 'notemail@no.com', NULL, 'Juneda', '25430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '26', '5', 1, '2021-12-21 17:36:58', '2021-12-21 17:36:58'),
(3863, 666666, 'notemail@no.com', NULL, 'Juneda', '25430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '26', '5', 1, '2021-12-21 17:38:13', '2021-12-21 17:38:13'),
(3864, 2, 'hola@test.com', NULL, 'Torremocha Del Jarma', '28189', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '23', '2', 1, '2021-12-21 17:40:38', '2021-12-21 17:40:38'),
(3865, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 400.00, 'Lts.', 0.845, 'Jueves', '23', '2', 1, '2021-12-21 19:21:14', '2021-12-21 19:21:14'),
(3866, 666666, 'notemail@no.com', NULL, 'Juneda', '25430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '26', '5', 1, '2021-12-21 20:54:58', '2021-12-21 20:54:58'),
(3867, 666666, 'notemail@no.com', NULL, 'Juneda', '25430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '26', '5', 1, '2021-12-21 23:29:46', '2021-12-21 23:29:46'),
(3868, 666666, 'notemail@no.com', NULL, 'Juneda', '25430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Domingo', '26', '5', 1, '2021-12-21 23:29:47', '2021-12-21 23:29:47'),
(3869, 666666, 'notemail@no.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 10:16:51', '2021-12-22 10:16:51'),
(3870, 666666, 'notemail@no.com', NULL, 'Juneda', '25430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Lunes', '27', '5', 1, '2021-12-22 10:56:41', '2021-12-22 10:56:41'),
(3871, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 350.00, 'Lts.', 0.899, 'Lunes', '27', '5', 1, '2021-12-22 11:16:01', '2021-12-22 11:16:01'),
(3872, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 350.00, 'Lts.', 0.899, 'Lunes', '27', '5', 1, '2021-12-22 11:20:45', '2021-12-22 11:20:45'),
(3873, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 350.00, 'Lts.', 0.899, 'Lunes', '27', '5', 1, '2021-12-22 11:21:32', '2021-12-22 11:21:32'),
(3874, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 350.00, 'Lts.', 0.899, 'Lunes', '27', '5', 1, '2021-12-22 11:22:18', '2021-12-22 11:22:18'),
(3875, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 350.00, 'Lts.', 0.899, 'Lunes', '27', '5', 1, '2021-12-22 11:28:16', '2021-12-22 11:28:16'),
(3876, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 350.00, 'Lts.', 0.899, 'Lunes', '27', '5', 1, '2021-12-22 11:48:51', '2021-12-22 11:48:51'),
(3877, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 350.00, 'Lts.', 0.899, 'Lunes', '27', '5', 1, '2021-12-22 12:09:37', '2021-12-22 12:09:37'),
(3878, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 12:23:48', '2021-12-22 12:23:48'),
(3879, 666666, 'notemail@no.com', NULL, 'Renau', '43886', 'Tarragona', 500.00, 'Lts.', 0.845, 'Viernes', '24', '2', 1, '2021-12-22 12:25:23', '2021-12-22 12:25:23'),
(3880, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 12:51:41', '2021-12-22 12:51:41'),
(3881, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 12:55:32', '2021-12-22 12:55:32'),
(3883, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 14:02:55', '2021-12-22 14:02:55'),
(3884, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 14:04:04', '2021-12-22 14:04:04'),
(3885, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 14:04:08', '2021-12-22 14:04:08'),
(3886, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 14:04:25', '2021-12-22 14:04:25'),
(3887, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 14:04:47', '2021-12-22 14:04:47'),
(3888, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 14:19:55', '2021-12-22 14:19:55'),
(3889, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 14:20:24', '2021-12-22 14:20:24'),
(3890, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 14:22:15', '2021-12-22 14:22:15'),
(3891, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 425.00, 'Lts.', 0.859, 'Viernes', '24', '2', 1, '2021-12-22 14:26:07', '2021-12-22 14:26:07'),
(3892, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 425.00, 'Lts.', 0.859, 'Viernes', '24', '2', 1, '2021-12-22 14:30:42', '2021-12-22 14:30:42'),
(3894, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 5000.00, 'Lts.', 0.849, 'Lunes', '27', '5', 1, '2021-12-22 15:35:49', '2021-12-22 15:35:49'),
(3895, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 5000.00, 'Lts.', 0.849, 'Lunes', '27', '5', 1, '2021-12-22 15:36:30', '2021-12-22 15:36:30'),
(3896, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 15:36:58', '2021-12-22 15:36:58'),
(3897, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '27', '5', 1, '2021-12-22 15:38:15', '2021-12-22 15:38:15'),
(3898, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 320.00, 'Lts.', 0.899, 'Viernes', '24', '2', 1, '2021-12-22 15:38:57', '2021-12-22 15:38:57'),
(3899, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 320.00, 'Lts.', 0.899, 'Viernes', '24', '2', 1, '2021-12-22 15:39:43', '2021-12-22 15:39:43'),
(3900, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 320.00, 'Lts.', 0.899, 'Viernes', '24', '2', 1, '2021-12-22 15:43:48', '2021-12-22 15:43:48'),
(3902, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 301.00, 'Lts.', 0.899, 'Viernes', '24', '2', 1, '2021-12-22 16:28:04', '2021-12-22 16:28:04'),
(3903, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 300.00, 'Lts.', 0.899, 'Lunes', '27', '5', 1, '2021-12-22 16:34:09', '2021-12-22 16:34:09'),
(3904, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 350.00, 'Lts.', 0.899, 'Lunes', '27', '5', 1, '2021-12-22 16:46:26', '2021-12-22 16:46:26'),
(3907, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '4', 1, '2021-12-23 09:40:50', '2021-12-23 09:40:50'),
(3908, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 400.00, 'Lts.', 0.845, 'Martes', '28', '5', 1, '2021-12-23 09:53:05', '2021-12-23 09:53:05'),
(3909, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.859, 'Lunes', '27', '4', 1, '2021-12-23 09:54:51', '2021-12-23 09:54:51'),
(3910, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.859, 'Lunes', '27', '4', 1, '2021-12-23 09:55:22', '2021-12-23 09:55:22'),
(3911, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.859, 'Lunes', '27', '4', 1, '2021-12-23 09:55:26', '2021-12-23 09:55:26'),
(3912, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.859, 'Lunes', '27', '4', 1, '2021-12-23 10:32:46', '2021-12-23 10:32:46'),
(3913, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.859, 'Lunes', '27', '4', 1, '2021-12-23 10:36:45', '2021-12-23 10:36:45'),
(3914, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.859, 'Lunes', '27', '4', 1, '2021-12-23 10:37:44', '2021-12-23 10:37:44'),
(3915, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.859, 'Lunes', '27', '4', 1, '2021-12-23 10:39:15', '2021-12-23 10:39:15'),
(3916, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.859, 'Lunes', '27', '4', 1, '2021-12-23 10:39:28', '2021-12-23 10:39:28'),
(3917, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.859, 'Lunes', '27', '4', 1, '2021-12-23 10:39:32', '2021-12-23 10:39:32'),
(3918, 666666, 'notemail@no.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '3', 1, '2021-12-24 12:09:49', '2021-12-24 12:09:49'),
(3919, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.859, 'Lunes', '27', '3', 1, '2021-12-24 12:25:21', '2021-12-24 12:25:21'),
(3920, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '3', 1, '2021-12-24 13:13:49', '2021-12-24 13:13:49'),
(3921, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '3', 1, '2021-12-24 13:23:32', '2021-12-24 13:23:32'),
(3922, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '3', 1, '2021-12-24 13:29:33', '2021-12-24 13:29:33'),
(3923, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '3', 1, '2021-12-24 13:29:46', '2021-12-24 13:29:46'),
(3924, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '3', 1, '2021-12-24 13:30:02', '2021-12-24 13:30:02'),
(3925, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Lunes', '27', '3', 1, '2021-12-24 13:31:26', '2021-12-24 13:31:26'),
(3928, 666666, 'notemail@no.com', NULL, 'Alcover', '43460', 'Tarragona', 500.00, 'Lts.', 0.845, 'Miércoles', '29', '2', 1, '2021-12-27 11:55:09', '2021-12-27 11:55:09'),
(3930, 3, 'Admin@test.com', NULL, 'Alcover', '43460', 'Tarragona', 500.00, 'Lts.', 0.845, 'Miércoles', '29', '2', 1, '2021-12-27 12:00:54', '2021-12-27 12:00:54'),
(3931, 666666, 'notemail@no.com', NULL, 'Juneda', '25430', 'Tarragona', 500.00, 'Lts.', 0.845, 'Sábado', '1', '5', 1, '2021-12-27 12:04:18', '2021-12-27 12:04:18'),
(3933, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.845, 'Miércoles', '29', '2', 1, '2021-12-27 12:07:24', '2021-12-27 12:07:24'),
(3936, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 800.00, 'Lts.', 0.845, 'Jueves', '30', '2', 1, '2021-12-28 16:58:17', '2021-12-28 16:58:17'),
(3938, 430124, 'agiralt@allabout.ad', NULL, 'Albi', '25450', 'Tarragona', 1200.00, 'Lts.', 0.835, 'Domingo', '2', '5', 1, '2021-12-28 17:05:26', '2021-12-28 17:05:26'),
(3939, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.845, 'Viernes', '31', '2', 1, '2021-12-29 13:06:18', '2021-12-29 13:06:18'),
(3940, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.845, 'Miércoles', '5', '2', 1, '2022-01-03 09:24:58', '2022-01-03 09:24:58'),
(3941, 666666, 'notemail@no.com', NULL, 'Madrid', '28070', 'Madrid', 500.00, 'Lts.', 0.859, 'Miércoles', '5', '2', 1, '2022-01-03 09:28:19', '2022-01-03 09:28:19'),
(3942, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 09:41:39', '2022-01-03 09:41:39'),
(3943, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 09:50:22', '2022-01-03 09:50:22'),
(3944, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 09:51:02', '2022-01-03 09:51:02'),
(3945, 666666, 'notemail@no.com', NULL, 'Madrid', '28070', 'Madrid', 500.00, 'Lts.', 0.859, 'Miércoles', '5', '2', 1, '2022-01-03 09:51:49', '2022-01-03 09:51:49'),
(3946, 666666, 'notemail@no.com', NULL, 'Madrid', '28070', 'Madrid', 500.00, 'Lts.', 0.859, 'Miércoles', '5', '2', 1, '2022-01-03 09:52:54', '2022-01-03 09:52:54'),
(3947, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:02:07', '2022-01-03 10:02:07'),
(3948, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:02:30', '2022-01-03 10:02:30'),
(3949, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:04:50', '2022-01-03 10:04:50'),
(3950, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:05:45', '2022-01-03 10:05:45'),
(3951, 666666, 'notemail@no.com', NULL, 'Madrid', '28070', 'Madrid', 500.00, 'Lts.', 0.859, 'Miércoles', '5', '2', 1, '2022-01-03 10:06:06', '2022-01-03 10:06:06'),
(3952, 666666, 'notemail@no.com', NULL, 'Madrid', '28070', 'Madrid', 500.00, 'Lts.', 0.859, 'Miércoles', '5', '2', 1, '2022-01-03 10:07:12', '2022-01-03 10:07:12'),
(3953, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:07:18', '2022-01-03 10:07:18');
INSERT INTO `temporals` (`id`, `user`, `email`, `session_token`, `poblacion`, `codigopost`, `provincia`, `cantidad`, `unidad`, `preciol`, `entregadia`, `entregadianum`, `dentrode`, `mese`, `created_at`, `updated_at`) VALUES
(3954, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:08:00', '2022-01-03 10:08:00'),
(3955, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:08:19', '2022-01-03 10:08:19'),
(3956, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:09:37', '2022-01-03 10:09:37'),
(3957, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:09:46', '2022-01-03 10:09:46'),
(3958, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:11:27', '2022-01-03 10:11:27'),
(3959, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:18:16', '2022-01-03 10:18:16'),
(3960, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:20:04', '2022-01-03 10:20:04'),
(3961, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:20:26', '2022-01-03 10:20:26'),
(3962, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:23:12', '2022-01-03 10:23:12'),
(3963, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:24:08', '2022-01-03 10:24:08'),
(3964, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 399.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:24:37', '2022-01-03 10:24:37'),
(3965, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 399.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:25:51', '2022-01-03 10:25:51'),
(3966, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 399.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:26:44', '2022-01-03 10:26:44'),
(3967, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:51:19', '2022-01-03 10:51:19'),
(3968, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 10:53:41', '2022-01-03 10:53:41'),
(3969, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 11:07:54', '2022-01-03 11:07:54'),
(3970, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 11:08:35', '2022-01-03 11:08:35'),
(3971, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 11:10:04', '2022-01-03 11:10:04'),
(3972, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 11:10:33', '2022-01-03 11:10:33'),
(3973, 666666, 'notemail@no.com', NULL, 'Yebes', '19141', 'Guadalajara', 300.00, 'Lts.', 0.899, 'Jueves', '6', '3', 1, '2022-01-03 11:16:12', '2022-01-03 11:16:12'),
(3974, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 11:46:56', '2022-01-03 11:46:56'),
(3975, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 11:56:47', '2022-01-03 11:56:47'),
(3976, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 11:57:57', '2022-01-03 11:57:57'),
(3977, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 11:58:47', '2022-01-03 11:58:47'),
(3978, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 12:19:43', '2022-01-03 12:19:43'),
(3979, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 12:29:56', '2022-01-03 12:29:56'),
(3980, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 12:30:54', '2022-01-03 12:30:54'),
(3981, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 12:58:03', '2022-01-03 12:58:03'),
(3982, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 12:58:07', '2022-01-03 12:58:07'),
(3983, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 13:05:00', '2022-01-03 13:05:00'),
(3984, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 13:09:45', '2022-01-03 13:09:45'),
(3985, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.859, 'Miércoles', '5', '2', 1, '2022-01-03 15:43:30', '2022-01-03 15:43:30'),
(3986, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '6', '3', 1, '2022-01-03 16:00:37', '2022-01-03 16:00:37'),
(3987, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '6', '3', 1, '2022-01-03 16:01:03', '2022-01-03 16:01:03'),
(3988, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '6', '3', 1, '2022-01-03 16:01:48', '2022-01-03 16:01:48'),
(3989, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 350.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 16:03:19', '2022-01-03 16:03:19'),
(3990, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 350.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 16:23:26', '2022-01-03 16:23:26'),
(3991, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 350.00, 'Lts.', 0.899, 'Miércoles', '5', '2', 1, '2022-01-03 16:56:48', '2022-01-03 16:56:48'),
(3992, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 350.00, 'Lts.', 0.899, 'Jueves', '6', '3', 1, '2022-01-03 17:03:26', '2022-01-03 17:03:26'),
(3993, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.845, 'Jueves', '6', '2', 1, '2022-01-04 09:50:21', '2022-01-04 09:50:21'),
(3996, 2, 'hola@test.com', NULL, 'Humanes de Madrid', '28970', 'Madrid', 500.00, 'Lts.', 0.859, 'Jueves', '6', '2', 1, '2022-01-04 12:29:52', '2022-01-04 12:29:52'),
(3997, 2, 'hola@test.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.845, 'Jueves', '6', '2', 1, '2022-01-04 12:33:02', '2022-01-04 12:33:02'),
(3998, 2, 'hola@test.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.845, 'Jueves', '6', '2', 1, '2022-01-04 12:34:37', '2022-01-04 12:34:37'),
(3999, 2, 'hola@test.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.845, 'Jueves', '6', '2', 1, '2022-01-04 12:37:30', '2022-01-04 12:37:30'),
(4001, 666666, 'notemail@no.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.845, 'Jueves', '6', '2', 1, '2022-01-04 12:45:02', '2022-01-04 12:45:02'),
(4005, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.859, 'Viernes', '7', '2', 1, '2022-01-05 11:54:08', '2022-01-05 11:54:08'),
(4006, 666666, 'notemail@no.com', NULL, 'Parla', '28980', 'Madrid', 300.00, 'Lts.', 0.899, 'Lunes', '10', '5', 1, '2022-01-05 12:10:52', '2022-01-05 12:10:52'),
(4007, 666666, 'notemail@no.com', NULL, 'Parla', '28980', 'Madrid', 450.00, 'Lts.', 0.859, 'Lunes', '10', '5', 1, '2022-01-05 12:29:08', '2022-01-05 12:29:08'),
(4008, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 450.00, 'Lts.', 0.859, 'Miércoles', '12', '2', 1, '2022-01-10 09:07:44', '2022-01-10 09:07:44'),
(4010, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 450.00, 'Lts.', 0.859, 'Miércoles', '12', '2', 1, '2022-01-10 14:03:56', '2022-01-10 14:03:56'),
(4012, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 450.00, 'Lts.', 0.859, 'Miércoles', '12', '2', 1, '2022-01-10 15:42:21', '2022-01-10 15:42:21'),
(4013, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 450.00, 'Lts.', 0.859, 'Jueves', '13', '2', 1, '2022-01-11 09:10:25', '2022-01-11 09:10:25'),
(4014, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 450.00, 'Lts.', 0.859, 'Jueves', '13', '2', 1, '2022-01-11 09:18:47', '2022-01-11 09:18:47'),
(4015, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 450.00, 'Lts.', 0.859, 'Jueves', '13', '2', 1, '2022-01-11 09:19:29', '2022-01-11 09:19:29'),
(4018, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 500.00, 'Lts.', 0.920, 'Jueves', '20', '2', 1, '2022-01-18 17:35:35', '2022-01-18 17:35:35'),
(4019, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 300.00, 'Lts.', 0.960, 'Jueves', '20', '2', 1, '2022-01-18 17:36:09', '2022-01-18 17:36:09'),
(4020, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 500.00, 'Lts.', 0.920, 'Jueves', '20', '2', 1, '2022-01-18 17:36:20', '2022-01-18 17:36:20'),
(4021, 430126, 'rdiaz@simongrup.com', NULL, 'Vilaseca', '43480', 'Tarragona', 500.00, 'Lts.', 0.920, 'Jueves', '20', '2', 1, '2022-01-18 17:40:43', '2022-01-18 17:40:43'),
(4023, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 500.00, 'Lts.', 0.920, 'Viernes', '21', '2', 1, '2022-01-19 15:58:06', '2022-01-19 15:58:06'),
(4024, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 500.00, 'Lts.', 0.920, 'Viernes', '21', '2', 1, '2022-01-19 16:02:24', '2022-01-19 16:02:24'),
(4025, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 500.00, 'Lts.', 0.920, 'Viernes', '21', '2', 1, '2022-01-19 16:03:42', '2022-01-19 16:03:42'),
(4026, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 500.00, 'Lts.', 0.920, 'Viernes', '21', '2', 1, '2022-01-19 16:04:48', '2022-01-19 16:04:48'),
(4027, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '6', 1, '2022-01-19 16:05:05', '2022-01-19 16:05:05'),
(4028, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '6', 1, '2022-01-19 16:05:10', '2022-01-19 16:05:10'),
(4029, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '6', 1, '2022-01-19 16:06:08', '2022-01-19 16:06:08'),
(4030, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '6', 1, '2022-01-19 16:07:05', '2022-01-19 16:07:05'),
(4032, 430126, 'rdiaz@simongrup.com', NULL, 'Vilaverd', '43490', 'Tarragona', 400.00, 'Lts.', 0.920, 'Martes', '25', '6', 1, '2022-01-19 16:17:37', '2022-01-19 16:17:37'),
(4033, 430126, 'rdiaz@simongrup.com', NULL, 'Vilaverd', '43490', 'Tarragona', 400.00, 'Lts.', 0.920, 'Martes', '25', '6', 1, '2022-01-19 16:19:33', '2022-01-19 16:19:33'),
(4034, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Viernes', '21', '2', 1, '2022-01-19 16:23:13', '2022-01-19 16:23:13'),
(4035, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:35:03', '2022-01-20 11:35:03'),
(4036, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:37:52', '2022-01-20 11:37:52'),
(4037, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:38:34', '2022-01-20 11:38:34'),
(4038, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:38:45', '2022-01-20 11:38:45'),
(4039, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:39:16', '2022-01-20 11:39:16'),
(4040, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:40:15', '2022-01-20 11:40:15'),
(4041, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:40:19', '2022-01-20 11:40:19'),
(4042, 666666, 'notemail@no.com', NULL, 'parla', '28980', 'Madrid', 500.00, 'Lts.', 0.929, 'Lunes', '24', '4', 1, '2022-01-20 11:40:48', '2022-01-20 11:40:48'),
(4043, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:41:36', '2022-01-20 11:41:36'),
(4044, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:42:23', '2022-01-20 11:42:23'),
(4045, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:42:28', '2022-01-20 11:42:28'),
(4046, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:42:28', '2022-01-20 11:42:28'),
(4047, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:42:28', '2022-01-20 11:42:28'),
(4048, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:42:30', '2022-01-20 11:42:30'),
(4049, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:43:02', '2022-01-20 11:43:02'),
(4050, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:43:06', '2022-01-20 11:43:06'),
(4051, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:43:19', '2022-01-20 11:43:19'),
(4052, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:43:47', '2022-01-20 11:43:47'),
(4053, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:44:02', '2022-01-20 11:44:02'),
(4055, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 11:56:09', '2022-01-20 11:56:09'),
(4056, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 15:57:41', '2022-01-20 15:57:41'),
(4057, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 15:58:29', '2022-01-20 15:58:29'),
(4058, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 15:58:39', '2022-01-20 15:58:39'),
(4059, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.929, 'Sábado', '22', '2', 1, '2022-01-20 16:48:15', '2022-01-20 16:48:15'),
(4060, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '4', 1, '2022-01-21 09:36:22', '2022-01-21 09:36:22'),
(4061, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '4', 1, '2022-01-21 09:45:34', '2022-01-21 09:45:34'),
(4063, 430120, 'perico@test.com', NULL, 'Getafe', '28900', 'Madrid', 480.00, 'Lts.', 0.929, 'Domingo', '23', '2', 1, '2022-01-21 09:49:30', '2022-01-21 09:49:30'),
(4065, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 395.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 10:44:51', '2022-01-21 10:44:51'),
(4070, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 358.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 12:54:51', '2022-01-21 12:54:51'),
(4071, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 358.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 12:57:11', '2022-01-21 12:57:11'),
(4072, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 358.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:00:51', '2022-01-21 13:00:51'),
(4073, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 358.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:01:00', '2022-01-21 13:01:00'),
(4074, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 358.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:01:05', '2022-01-21 13:01:05'),
(4075, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:01:48', '2022-01-21 13:01:48'),
(4076, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:03:32', '2022-01-21 13:03:32'),
(4077, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:03:36', '2022-01-21 13:03:36'),
(4078, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:04:25', '2022-01-21 13:04:25'),
(4079, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:04:29', '2022-01-21 13:04:29'),
(4080, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:04:49', '2022-01-21 13:04:49'),
(4081, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:04:52', '2022-01-21 13:04:52'),
(4082, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:06:09', '2022-01-21 13:06:09'),
(4083, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:06:12', '2022-01-21 13:06:12'),
(4084, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:06:57', '2022-01-21 13:06:57'),
(4085, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:07:01', '2022-01-21 13:07:01'),
(4086, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:07:20', '2022-01-21 13:07:20'),
(4087, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:07:29', '2022-01-21 13:07:29'),
(4088, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:09:16', '2022-01-21 13:09:16'),
(4089, 430120, 'perico@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '25', '4', 1, '2022-01-21 13:14:06', '2022-01-21 13:14:06'),
(4090, 666666, 'notemail@no.com', NULL, 'El Casar', '19170', 'Guadalajara', 500.00, 'Lts.', 0.929, 'Domingo', '23', '2', 1, '2022-01-21 17:56:18', '2022-01-21 17:56:18'),
(4092, 3, 'Admin@test.com', NULL, 'El Casar', '19170', 'Guadalajara', 500.00, 'Lts.', 0.929, 'Domingo', '23', '2', 1, '2022-01-21 18:04:40', '2022-01-21 18:04:40'),
(4093, 3, 'Admin@test.com', NULL, 'Uceda', '19187', 'Guadalajara', 500.00, 'Lts.', 0.929, 'Lunes', '24', '3', 1, '2022-01-21 18:11:17', '2022-01-21 18:11:17'),
(4094, 3, 'Admin@test.com', NULL, 'el casar', '19170', 'Guadalajara', 500.00, 'Lts.', 0.929, 'Domingo', '23', '2', 1, '2022-01-21 18:12:33', '2022-01-21 18:12:33'),
(4102, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 400.00, 'Lts.', 0.920, 'Martes', '1', '8', 1, '2022-01-24 10:49:53', '2022-01-24 10:49:53'),
(4103, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 400.00, 'Lts.', 0.920, 'Martes', '1', '8', 1, '2022-01-24 10:50:36', '2022-01-24 10:50:36'),
(4104, 666666, 'notemail@no.com', NULL, 'Botarell', '43772', 'Tarragona', 700.00, 'Lts.', 0.920, 'Viernes', '28', '4', 1, '2022-01-24 10:59:25', '2022-01-24 10:59:25'),
(4106, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 450.00, 'Lts.', 0.920, 'Martes', '1', '7', 1, '2022-01-25 10:12:32', '2022-01-25 10:12:32'),
(4107, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Jueves', '27', '2', 1, '2022-01-25 10:13:08', '2022-01-25 10:13:08'),
(4108, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Jueves', '27', '2', 1, '2022-01-25 10:16:04', '2022-01-25 10:16:04'),
(4109, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Jueves', '27', '2', 1, '2022-01-25 10:16:54', '2022-01-25 10:16:54'),
(4110, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Jueves', '27', '2', 1, '2022-01-25 10:17:07', '2022-01-25 10:17:07'),
(4111, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Jueves', '27', '2', 1, '2022-01-25 10:17:17', '2022-01-25 10:17:17'),
(4112, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Jueves', '27', '2', 1, '2022-01-25 10:37:18', '2022-01-25 10:37:18'),
(4113, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Miércoles', '26', '1', 1, '2022-01-25 10:37:50', '2022-01-25 10:37:50'),
(4114, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Miércoles', '26', '1', 1, '2022-01-25 10:37:55', '2022-01-25 10:37:55'),
(4115, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Miércoles', '26', '1', 1, '2022-01-25 10:39:31', '2022-01-25 10:39:31'),
(4116, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:42:12', '2022-01-25 10:42:12'),
(4117, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 450.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:42:26', '2022-01-25 10:42:26'),
(4118, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:43:49', '2022-01-25 10:43:49'),
(4119, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:54:28', '2022-01-25 10:54:28'),
(4120, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:55:27', '2022-01-25 10:55:27'),
(4121, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:56:25', '2022-01-25 10:56:25'),
(4122, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:56:51', '2022-01-25 10:56:51'),
(4123, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:57:25', '2022-01-25 10:57:25'),
(4124, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:57:54', '2022-01-25 10:57:54'),
(4125, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:59:10', '2022-01-25 10:59:10'),
(4126, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 10:59:42', '2022-01-25 10:59:42'),
(4127, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:02:26', '2022-01-25 11:02:26'),
(4128, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:03:07', '2022-01-25 11:03:07'),
(4129, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:03:39', '2022-01-25 11:03:39'),
(4130, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:06:58', '2022-01-25 11:06:58'),
(4131, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:07:17', '2022-01-25 11:07:17'),
(4132, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:07:34', '2022-01-25 11:07:34'),
(4133, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:07:37', '2022-01-25 11:07:37'),
(4134, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:08:45', '2022-01-25 11:08:45'),
(4135, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:11:12', '2022-01-25 11:11:12'),
(4136, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:13:23', '2022-01-25 11:13:23'),
(4137, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:14:27', '2022-01-25 11:14:27'),
(4138, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:15:48', '2022-01-25 11:15:48'),
(4139, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:16:42', '2022-01-25 11:16:42'),
(4140, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:17:46', '2022-01-25 11:17:46'),
(4141, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:17:58', '2022-01-25 11:17:58'),
(4142, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:18:35', '2022-01-25 11:18:35'),
(4143, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:19:27', '2022-01-25 11:19:27'),
(4144, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:20:02', '2022-01-25 11:20:02'),
(4145, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:20:35', '2022-01-25 11:20:35'),
(4146, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:20:54', '2022-01-25 11:20:54'),
(4147, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:21:05', '2022-01-25 11:21:05'),
(4148, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:22:17', '2022-01-25 11:22:17'),
(4149, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '25', '0', 1, '2022-01-25 11:22:32', '2022-01-25 11:22:32'),
(4151, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '1', '7', 1, '2022-01-25 14:10:30', '2022-01-25 14:10:30'),
(4152, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '1', '7', 1, '2022-01-25 14:55:28', '2022-01-25 14:55:28'),
(4155, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Miércoles', '26', '1', 1, '2022-01-25 15:29:48', '2022-01-25 15:29:48'),
(4156, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Miércoles', '26', '1', 1, '2022-01-25 15:30:14', '2022-01-25 15:30:14'),
(4158, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Jueves', '27', '2', 1, '2022-01-25 15:44:19', '2022-01-25 15:44:19'),
(4159, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Jueves', '27', '2', 1, '2022-01-25 15:44:57', '2022-01-25 15:44:57'),
(4160, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.920, 'Jueves', '27', '2', 1, '2022-01-25 15:45:03', '2022-01-25 15:45:03'),
(4161, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '1', '7', 1, '2022-01-25 15:45:27', '2022-01-25 15:45:27'),
(4162, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '1', '7', 1, '2022-01-25 15:46:05', '2022-01-25 15:46:05'),
(4163, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '1', '7', 1, '2022-01-25 15:46:32', '2022-01-25 15:46:32'),
(4164, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 350.00, 'Lts.', 0.960, 'Martes', '1', '7', 1, '2022-01-25 15:46:52', '2022-01-25 15:46:52'),
(4165, 2, 'hola@test.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.920, 'Martes', '1', '7', 1, '2022-01-25 15:47:34', '2022-01-25 15:47:34'),
(4166, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 300.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 15:48:13', '2022-01-25 15:48:13'),
(4167, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 500.00, 'Lts.', 0.920, 'Viernes', '28', '3', 1, '2022-01-25 15:49:16', '2022-01-25 15:49:16'),
(4350, 666666, 'notemail@no.com', NULL, 'Gratallops', '43737', 'Tarragona', 500.00, 'Lts.', 0.999, 'Viernes', '11', '3', 1, '2022-02-08 16:30:14', '2022-02-08 16:30:14'),
(4169, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 500.00, 'Lts.', 0.920, 'Viernes', '28', '3', 1, '2022-01-25 15:50:07', '2022-01-25 15:50:07'),
(4170, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 300.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 15:50:43', '2022-01-25 15:50:43'),
(4171, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 301.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 15:52:25', '2022-01-25 15:52:25'),
(4172, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 400.00, 'Lts.', 0.920, 'Viernes', '28', '3', 1, '2022-01-25 15:53:16', '2022-01-25 15:53:16'),
(4173, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 300.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 15:53:43', '2022-01-25 15:53:43'),
(4174, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 300.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 15:54:38', '2022-01-25 15:54:38'),
(4175, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 300.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 15:56:19', '2022-01-25 15:56:19'),
(4176, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 301.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 15:56:59', '2022-01-25 15:56:59'),
(4177, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 320.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 15:57:46', '2022-01-25 15:57:46'),
(4178, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 320.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 15:58:13', '2022-01-25 15:58:13'),
(4179, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 320.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 16:02:33', '2022-01-25 16:02:33'),
(4180, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 320.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 16:10:16', '2022-01-25 16:10:16'),
(4181, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 320.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 16:12:00', '2022-01-25 16:12:00'),
(4182, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 320.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 16:12:44', '2022-01-25 16:12:44'),
(4183, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 320.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 16:13:04', '2022-01-25 16:13:04'),
(4184, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 300.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 16:13:55', '2022-01-25 16:13:55'),
(4185, 2, 'hola@test.com', NULL, 'Botarell', '43772', 'Tarragona', 300.00, 'Lts.', 0.960, 'Viernes', '28', '3', 1, '2022-01-25 16:14:16', '2022-01-25 16:14:16'),
(4187, 666666, 'notemail@no.com', NULL, 'Cambrils', '43850', 'Tarragona', 300.00, 'Lts.', 0.969, 'Viernes', '28', '2', 1, '2022-01-26 10:04:51', '2022-01-26 10:04:51'),
(4188, 666666, 'notemail@no.com', NULL, 'Cambrils', '43850', 'Tarragona', 300.00, 'Lts.', 0.969, 'Miércoles', '2', '7', 1, '2022-01-26 10:06:32', '2022-01-26 10:06:32'),
(4189, 666666, 'notemail@no.com', NULL, 'Cambrils', '43850', 'Tarragona', 300.00, 'Lts.', 0.969, 'Miércoles', '2', '7', 1, '2022-01-26 10:06:45', '2022-01-26 10:06:45'),
(4190, 666666, 'notemail@no.com', NULL, 'Cambrils', '43850', 'Tarragona', 300.00, 'Lts.', 0.969, 'Miércoles', '2', '7', 1, '2022-01-26 10:07:40', '2022-01-26 10:07:40'),
(4193, 2, 'hola@test.com', NULL, 'Cambrils', '43850', 'Tarragona', 500.00, 'Lts.', 0.929, 'Miércoles', '2', '7', 1, '2022-01-26 10:20:05', '2022-01-26 10:20:05'),
(4194, 2, 'hola@test.com', NULL, 'Cambrils', '43850', 'Tarragona', 500.00, 'Lts.', 0.929, 'Miércoles', '2', '7', 1, '2022-01-26 10:22:25', '2022-01-26 10:22:25'),
(4195, 2, 'hola@test.com', NULL, 'Cambrils', '43850', 'Tarragona', 500.00, 'Lts.', 0.929, 'Miércoles', '2', '7', 1, '2022-01-26 10:25:16', '2022-01-26 10:25:16'),
(4196, 2, 'hola@test.com', NULL, 'Cambrils', '43850', 'Tarragona', 500.00, 'Lts.', 0.929, 'Miércoles', '2', '7', 1, '2022-01-26 10:26:15', '2022-01-26 10:26:15'),
(4199, 2, 'hola@test.com', NULL, 'Santorcaz', '28818', 'Madrid', 500.00, 'Lts.', 0.939, 'Lunes', '31', '5', 1, '2022-01-26 12:12:52', '2022-01-26 12:12:52'),
(4200, 666666, 'notemail@no.com', NULL, 'Artesa de Lleida', '25150', 'Lleida', 500.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 12:37:43', '2022-01-27 12:37:43'),
(4201, 666666, 'notemail@no.com', NULL, 'Borges del Camp', '43350', 'Tarragona', 500.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 12:37:54', '2022-01-27 12:37:54'),
(4202, 666666, 'notemail@no.com', NULL, 'Albi', '25450', 'Lleida', 400.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 12:45:26', '2022-01-27 12:45:26'),
(4203, 666666, 'notemail@no.com', NULL, 'Els Pallaresos', '43151', 'Tarragona', 600.00, 'Lts.', 0.939, 'Sábado', '29', '2', 1, '2022-01-27 12:45:46', '2022-01-27 12:45:46'),
(4204, 666666, 'notemail@no.com', NULL, 'Albi', '25450', 'Lleida', 500.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 12:47:13', '2022-01-27 12:47:13'),
(4205, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 12:48:28', '2022-01-27 12:48:28'),
(4206, 666666, 'notemail@no.com', NULL, 'Artesa de Lleida', '25150', 'Lleida', 400.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 12:58:47', '2022-01-27 12:58:47'),
(4207, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 13:03:03', '2022-01-27 13:03:03'),
(4208, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 13:03:23', '2022-01-27 13:03:23'),
(4209, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 13:19:11', '2022-01-27 13:19:11'),
(4210, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 13:19:49', '2022-01-27 13:19:49'),
(4212, 666666, 'notemail@no.com', NULL, 'Artesa de Lleida', '25150', 'Lleida', 532.48, '€', 0.939, 'Martes', '1', '5', 1, '2022-01-27 13:27:29', '2022-01-27 13:27:29'),
(4213, 666666, 'notemail@no.com', NULL, 'Artesa de Lleida', '25150', 'Lleida', 500.00, 'Lts.', 0.939, 'Martes', '1', '5', 1, '2022-01-27 13:27:56', '2022-01-27 13:27:56'),
(4214, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 300.00, 'Lts.', 0.989, 'Sábado', '29', '2', 1, '2022-01-27 14:51:33', '2022-01-27 14:51:33'),
(4215, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 400.00, 'Lts.', 0.939, 'Martes', '1', '4', 1, '2022-01-28 14:20:06', '2022-01-28 14:20:06'),
(4216, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 400.00, 'Lts.', 0.939, 'Martes', '1', '4', 1, '2022-01-28 14:20:42', '2022-01-28 14:20:42'),
(4217, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 400.00, 'Lts.', 0.939, 'Martes', '1', '4', 1, '2022-01-28 14:24:25', '2022-01-28 14:24:25'),
(4236, 2, 'hola@test.com', NULL, 'Port de Tarragona', '43070', 'Tarragona', 300.00, 'Lts.', 0.999, 'Jueves', '3', '2', 1, '2022-02-01 12:06:19', '2022-02-01 12:06:19'),
(4237, 2, 'hola@test.com', NULL, 'Torreforta', '43006', 'Tarragona', 300.00, 'Lts.', 0.999, 'Jueves', '3', '2', 1, '2022-02-01 12:31:06', '2022-02-01 12:31:06'),
(4238, 2, 'hola@test.com', NULL, 'Torreforta', '43006', 'Tarragona', 300.00, 'Lts.', 0.999, 'Jueves', '3', '2', 1, '2022-02-01 12:40:47', '2022-02-01 12:40:47'),
(4241, 666666, 'notemail@no.com', NULL, 'La Riba', '43450', 'Tarragona', 500.00, 'Lts.', 0.959, 'Martes', '8', '7', 1, '2022-02-01 12:53:33', '2022-02-01 12:53:33'),
(4242, 430126, 'rdiaz@simongrup.com', NULL, 'La Riba', '43450', 'Tarragona', 500.00, 'Lts.', 0.959, 'Martes', '8', '7', 1, '2022-02-01 12:54:13', '2022-02-01 12:54:13'),
(4244, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Jueves', '3', '2', 1, '2022-02-01 15:42:29', '2022-02-01 15:42:29'),
(4252, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 300.00, 'Lts.', 0.999, 'Jueves', '3', '1', 1, '2022-02-02 08:08:12', '2022-02-02 08:08:12'),
(4256, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.979, 'Jueves', '3', '1', 1, '2022-02-02 09:32:43', '2022-02-02 09:32:43'),
(4257, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 500.00, 'Lts.', 0.979, 'Jueves', '3', '1', 1, '2022-02-02 09:32:47', '2022-02-02 09:32:47'),
(4259, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.959, 'Jueves', '3', '1', 1, '2022-02-02 09:34:57', '2022-02-02 09:34:57'),
(4261, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 400.00, 'Lts.', 0.959, 'Jueves', '3', '1', 1, '2022-02-02 09:36:32', '2022-02-02 09:36:32'),
(4262, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 5000.00, 'Lts.', 0.949, 'Jueves', '3', '1', 1, '2022-02-02 09:37:32', '2022-02-02 09:37:32'),
(4264, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 300.00, 'Lts.', 0.999, 'Jueves', '3', '1', 1, '2022-02-02 09:43:44', '2022-02-02 09:43:44'),
(4316, 2, 'hola@test.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.959, 'Domingo', '6', '2', 1, '2022-02-04 17:12:20', '2022-02-04 17:12:20'),
(4317, 430127, 'sofia.shevchuk8@gmail.com', NULL, 'Torreforta', '43006', 'Tarragona', 500.00, 'Lts.', 0.959, 'Domingo', '6', '2', 1, '2022-02-04 17:22:42', '2022-02-04 17:22:42'),
(4319, 430136, 'pheisar@gmail.com', NULL, 'Vilaseca', '43480', 'Tarragona', 521.00, 'Lts.', 0.959, 'Domingo', '6', '2', 1, '2022-02-04 17:52:48', '2022-02-04 17:52:48'),
(4320, 430136, 'pheisar@gmail.com', NULL, 'Vilaseca', '43480', 'Tarragona', 521.00, 'Lts.', 0.959, 'Domingo', '6', '2', 1, '2022-02-04 17:54:28', '2022-02-04 17:54:28'),
(4321, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 400.00, 'Lts.', 0.959, 'Domingo', '6', '2', 1, '2022-02-04 18:17:21', '2022-02-04 18:17:21'),
(4322, 666666, 'notemail@no.com', NULL, 'Vilaverd', '43490', 'Tarragona', 500.00, 'Lts.', 0.959, 'Martes', '8', '4', 1, '2022-02-04 18:40:20', '2022-02-04 18:40:20'),
(4323, 666666, 'notemail@no.com', NULL, 'Vilaverd', '43490', 'Tarragona', 500.00, 'Lts.', 0.959, 'Martes', '8', '4', 1, '2022-02-04 18:40:27', '2022-02-04 18:40:27'),
(4324, 666666, 'notemail@no.com', NULL, 'Vilaverd', '43490', 'Tarragona', 500.00, 'Lts.', 0.959, 'Martes', '8', '4', 1, '2022-02-04 18:40:35', '2022-02-04 18:40:35'),
(4325, 666666, 'notemail@no.com', NULL, 'Vilaverd', '43490', 'Tarragona', 500.00, 'Lts.', 0.959, 'Martes', '8', '4', 1, '2022-02-04 18:40:37', '2022-02-04 18:40:37'),
(4326, 666666, 'notemail@no.com', NULL, 'Vilaverd', '43490', 'Tarragona', 500.00, 'Lts.', 0.959, 'Martes', '8', '4', 1, '2022-02-04 18:41:18', '2022-02-04 18:41:18'),
(4327, 666666, 'notemail@no.com', NULL, 'Vimbodi', '43430', 'Tarragona', 500.00, 'Lts.', 0.959, 'Martes', '8', '3', 1, '2022-02-05 19:55:28', '2022-02-05 19:55:28'),
(4328, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 500.00, 'Lts.', 0.959, 'Lunes', '7', '2', 1, '2022-02-05 19:55:44', '2022-02-05 19:55:44'),
(4329, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Martes', '8', '1', 1, '2022-02-07 09:20:28', '2022-02-07 09:20:28'),
(4330, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Martes', '8', '1', 1, '2022-02-07 10:04:50', '2022-02-07 10:04:50'),
(4332, 2, 'hola@test.com', NULL, 'Parla', '28980', 'Madrid', 400.00, 'Lts.', 0.979, 'Jueves', '10', '3', 1, '2022-02-07 10:08:47', '2022-02-07 10:08:47'),
(4333, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Miércoles', '9', '2', 1, '2022-02-07 12:32:05', '2022-02-07 12:32:05'),
(4334, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Miércoles', '9', '2', 1, '2022-02-07 12:32:18', '2022-02-07 12:32:18'),
(4335, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Miércoles', '9', '2', 1, '2022-02-07 12:32:48', '2022-02-07 12:32:48'),
(4336, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Miércoles', '9', '2', 1, '2022-02-07 12:33:55', '2022-02-07 12:33:55'),
(4337, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Miércoles', '9', '2', 1, '2022-02-07 12:34:01', '2022-02-07 12:34:01'),
(4338, 2, 'hola@test.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.959, 'Miércoles', '9', '2', 1, '2022-02-07 12:34:22', '2022-02-07 12:34:22'),
(4339, 2, 'hola@test.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.959, 'Miércoles', '9', '2', 1, '2022-02-07 12:34:44', '2022-02-07 12:34:44'),
(4340, 2, 'hola@test.com', NULL, 'Reus', '43200', 'Tarragona', 500.00, 'Lts.', 0.959, 'Miércoles', '9', '2', 1, '2022-02-07 12:35:30', '2022-02-07 12:35:30'),
(4341, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 500.00, 'Lts.', 0.959, 'Miércoles', '9', '2', 1, '2022-02-07 12:44:06', '2022-02-07 12:44:06'),
(4342, 2, 'hola@test.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Miércoles', '9', '2', 1, '2022-02-07 12:46:36', '2022-02-07 12:46:36'),
(4343, 666666, 'notemail@no.com', NULL, 'Tarragona', '43070', 'Tarragona', 500.00, 'Lts.', 0.959, 'Miércoles', '9', '2', 1, '2022-02-07 15:40:20', '2022-02-07 15:40:20'),
(4344, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Miércoles', '9', '2', 1, '2022-02-07 16:20:16', '2022-02-07 16:20:16'),
(4345, 666666, 'notemail@no.com', NULL, 'Vilaverd', '43490', 'Tarragona', 500.00, 'Lts.', 0.999, 'Martes', '15', '8', 1, '2022-02-07 19:00:37', '2022-02-07 19:00:37'),
(4346, 2, 'hola@test.com', NULL, 'Torreforta', '43006', 'Tarragona', 500.00, 'Lts.', 0.999, 'Miércoles', '9', '1', 1, '2022-02-08 08:44:39', '2022-02-08 08:44:39'),
(4347, 2, 'hola@test.com', NULL, 'Torreforta', '43006', 'Tarragona', 500.00, 'Lts.', 0.999, 'Miércoles', '9', '1', 1, '2022-02-08 08:45:18', '2022-02-08 08:45:18'),
(4348, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.979, 'Miércoles', '9', '1', 1, '2022-02-08 09:38:50', '2022-02-08 09:38:50'),
(4349, 666666, 'notemail@no.com', NULL, 'El Casar', '19170', 'Guadalajara', 500.00, 'Lts.', 0.999, 'Jueves', '10', '2', 1, '2022-02-08 12:30:20', '2022-02-08 12:30:20'),
(4351, 666666, 'notemail@no.com', NULL, 'Gratallops', '43737', 'Tarragona', 500.00, 'Lts.', 0.999, 'Viernes', '11', '3', 1, '2022-02-08 16:31:33', '2022-02-08 16:31:33'),
(4352, 666666, 'notemail@no.com', NULL, 'Gratallops', '43737', 'Tarragona', 500.00, 'Lts.', 0.999, 'Viernes', '11', '3', 1, '2022-02-08 16:31:35', '2022-02-08 16:31:35'),
(4353, 666666, 'notemail@no.com', NULL, 'Gratallops', '43737', 'Tarragona', 500.00, 'Lts.', 0.999, 'Viernes', '11', '3', 1, '2022-02-08 16:31:36', '2022-02-08 16:31:36'),
(4354, 666666, 'notemail@no.com', NULL, 'Gratallops', '43737', 'Tarragona', 500.00, 'Lts.', 0.999, 'Viernes', '11', '3', 1, '2022-02-08 16:32:11', '2022-02-08 16:32:11'),
(4355, 666666, 'notemail@no.com', NULL, 'Gratallops', '43737', 'Tarragona', 500.00, 'Lts.', 0.999, 'Viernes', '11', '3', 1, '2022-02-08 16:33:12', '2022-02-08 16:33:12'),
(4356, 666666, 'notemail@no.com', NULL, 'Gratallops', '43737', 'Tarragona', 500.00, 'Lts.', 0.999, 'Viernes', '11', '3', 1, '2022-02-08 16:34:07', '2022-02-08 16:34:07'),
(4366, 666666, 'notemail@no.com', NULL, 'Vilaseca', '43480', 'Tarragona', 500.00, 'Lts.', 0.999, 'Viernes', '11', '2', 1, '2022-02-09 21:04:21', '2022-02-09 21:04:21'),
(4367, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.999, 'Viernes', '11', '1', 1, '2022-02-10 10:27:17', '2022-02-10 10:27:17'),
(4368, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.999, 'Viernes', '11', '1', 1, '2022-02-10 10:34:22', '2022-02-10 10:34:22'),
(4369, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.999, 'Viernes', '11', '1', 1, '2022-02-10 10:34:24', '2022-02-10 10:34:24'),
(4370, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.999, 'Viernes', '11', '1', 1, '2022-02-10 10:34:28', '2022-02-10 10:34:28'),
(4371, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.999, 'Viernes', '11', '1', 1, '2022-02-10 10:34:30', '2022-02-10 10:34:30'),
(4372, 666666, 'notemail@no.com', NULL, 'parla', '28980', 'Madrid', 400.00, 'Lts.', 0.999, 'Lunes', '14', '4', 1, '2022-02-10 10:34:37', '2022-02-10 10:34:37'),
(4373, 666666, 'notemail@no.com', NULL, 'parla', '28980', 'Madrid', 300.00, 'Lts.', 1.039, 'Lunes', '14', '4', 1, '2022-02-10 10:34:43', '2022-02-10 10:34:43'),
(4374, 666666, 'notemail@no.com', NULL, 'Getafe', '28900', 'Madrid', 500.00, 'Lts.', 0.999, 'Sábado', '12', '2', 1, '2022-02-10 12:33:33', '2022-02-10 12:33:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigocliente` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NombreYApellidos` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$mnqnVqQp5LLamh8WrzEb6uzTca1SqcHg5OGD7GTqbyFx628Ns.32O',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` int(11) DEFAULT '0',
  `last_login` timestamp NULL DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dirop` int(11) DEFAULT NULL,
  `localidad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CP` int(5) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `bienvenidavale` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `codigocliente`, `empresa`, `name`, `NombreYApellidos`, `email`, `dni`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`, `last_login`, `address`, `dirop`, `localidad`, `provincia`, `CP`, `telefono`, `bienvenidavale`) VALUES
(2, '430006', '', 'hola', NULL, 'hola@test.com', '123456780', '$2y$10$mnqnVqQp5LLamh8WrzEb6uzTca1SqcHg5OGD7GTqbyFx628Ns.32O', '2tOfOuytOkWTz8lB2FXQPpocEOmqNKp9mIfbSfGmNTF9BCedLyTYcvgGBSNJ', '2020-10-08 08:59:47', '2022-02-10 12:33:42', 5, '2022-02-10 12:33:42', 'Evarsit Fábregas, 19', NULL, 'Getafe', 'Madrid', 28900, 666666666, 0),
(3, '', '', 'admin', NULL, 'Admin@test.com', '0', '$2y$10$mnqnVqQp5LLamh8WrzEb6uzTca1SqcHg5OGD7GTqbyFx628Ns.32O', 'U7jlEOzqk662nZH747XQz1riBtEKhvRmbhm9Dv4llnO1pdDqDthkBuk2xU1r', '2020-10-08 11:06:17', '2022-02-10 11:17:45', 0, '2022-02-10 11:17:45', '', NULL, '', 'Madrid', 0, 0, 1),
(13, '', '', 'Call Center', NULL, 'call@example.com', '0', '$2y$10$1Fl1Sh1NnreiK.sW6d2XjeLLe2ObFMtBmRza6i.Z9dgEP2Xqcmaoe', 'UcqqDJsBa49ML44EbQz6KWf81AypbwRywkM6IWpNPFjlqyCKvdIfBSaZBOzy', '2020-10-22 07:22:53', '2020-10-27 14:29:47', 2, '2020-10-26 23:00:00', '', NULL, '', '', 0, 0, 1),
(1, '', '', 'Admin', NULL, 'admin@example.com', '0', '$2y$10$mnqnVqQp5LLamh8WrzEb6uzTca1SqcHg5OGD7GTqbyFx628Ns.32O', 'v6ajWj49Nw3wtIlsaVxlUfL270yTeb8S49mAVuw38Sz50fPfOnUu6HtRR3jm', '2020-10-08 10:54:47', '2020-10-27 14:28:29', 1, '2020-10-26 23:00:00', '', NULL, '', '', 0, 0, 1),
(30, '', '', 'Cat', NULL, 'cat@nascorenergias.com', '98765432P', '$2y$10$mnqnVqQp5LLamh8WrzEb6uzTca1SqcHg5OGD7GTqbyFx628Ns.32O', NULL, '2021-09-13 07:46:17', '2021-11-04 17:14:12', 1, '2021-11-04 17:14:12', 'Evarist Fàbregas 19', NULL, 'Reus', 'Tarragona', 43205, 369258147, 1),
(31, '', '', 'Val', NULL, 'val@test.com', '56789567P', '$2y$10$mnqnVqQp5LLamh8WrzEb6uzTca1SqcHg5OGD7GTqbyFx628Ns.32O', 'v22d5h77GPoGgeWFcXn9lYmNSBtVCFNpRqR4NteOIctVNjsTuTRYOCMtCEin', NULL, '2021-09-13 13:27:55', 3, '2021-09-12 22:00:00', NULL, NULL, NULL, NULL, 46001, 789456123, 1),
(32, '', '', 'Eli', NULL, 'eli@simongrup.com', '63987524H', '$2y$10$mnqnVqQp5LLamh8WrzEb6uzTca1SqcHg5OGD7GTqbyFx628Ns.32O', NULL, NULL, '2022-01-26 16:35:21', 4, '2022-01-26 16:35:21', 'afsas', NULL, NULL, NULL, 43000, 123456789, 1),
(430127, NULL, NULL, 'Sofia Shevchuk', NULL, 'sofia.shevchuk8@gmail.com', 'x7230726d', '$2y$10$o.VMXAQ069NSFj9mgN8OKORGe3NcEyTZjt2MLS27RwgvRSlnI1tCu', '0752QmkN36wOKqJztz2HVj31mBzl3FznHPMxAl19EhZ3d8eP22793pnSLLcK', '2022-02-02 09:55:09', '2022-02-04 17:26:46', 0, '2022-02-04 17:26:24', 'CL EVARIST FABREGAS, 19', NULL, 'Port de Tarragona', 'Tarragona', 43070, 977773800, 0),
(501, '', '', 'Ivan', 'REBATO BARRILERO', 'arrebeito@hotmail.com', '', '', '', NULL, NULL, 0, NULL, 'C/ Andersen, 7', NULL, 'Guadalajara', 'Guadalajara', 19005, 636536928, 1),
(500, '', '', 'Mari Carmen', 'Maestre', 'mcmaestre11@yahoo.es', '', '', '', NULL, NULL, 0, NULL, 'Calle Los Jazmines 1', NULL, 'Horche', 'Guadalajara', 19140, 636019983, 1),
(430130, NULL, NULL, 'Eli', NULL, 'emartinez@simongrup.com', '39123456C', '$2y$10$k0mzFepxKeNH9JMEfktRtOajNtpLzvvCPU/PqFmWn12FTqourE0LK', NULL, '2022-02-02 12:06:43', '2022-02-02 15:46:05', 0, '2022-02-02 13:12:56', 'Euterpe', NULL, 'Riudecols', 'Tarragona', 43390, 630127183, 1),
(430131, NULL, NULL, 'operdor23', NULL, 'operador23@simongrup.com', '39654321T', '$2y$10$ox82MkY6RetqkE9fUZ6Pcu5LLuXfuk3ekSw4SAfF0e8uF1J58Syze', NULL, '2022-02-02 15:51:34', '2022-02-02 16:08:48', 0, '2022-02-02 15:51:34', 'PERE EL CEREMONIOS', NULL, 'Reus', 'Tarragona', 43205, 630127183, 1),
(21, '', '', 'Mari Carmen', 'Maestre', 'mcmaestre11@yahoo.es', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 'Calle Los Jazmines 1', 0, 'Horche', 'Guadalajara', 19140, 636019983, 0),
(22, '', '', 'IV', 'REBATO BARRILERO', 'arrebeito@hotmail.com', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 'C/ Andersen, 7', 0, 'Guadalajara', 'Guadalajara', 19005, 636536928, 0),
(430135, NULL, NULL, 'ars', NULL, 'it@nascorenergias.com', NULL, '$2y$10$FNSZ2baBGRhXoM04yvbUweo8brt97ARFyUP83LerXZ4w9ZteM6Stm', NULL, '2022-02-04 16:46:42', '2022-02-04 16:46:42', 0, '2022-02-04 16:46:42', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(430136, NULL, NULL, 'Ruben', NULL, 'pheisar@gmail.com', NULL, '$2y$10$in/RnvSKvMWNogFnhTfNC.sZRwDTMXlmWCULkTQXJbsd5zFKhXATa', NULL, '2022-02-04 17:51:58', '2022-02-04 17:51:58', 0, '2022-02-04 17:51:58', NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `norutas`
--
ALTER TABLE `norutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `poblacions`
--
ALTER TABLE `poblacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temporals`
--
ALTER TABLE `temporals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_name_unique` (`name`),
  ADD UNIQUE KEY `usuarios_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34343435;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `norutas`
--
ALTER TABLE `norutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=731;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=772;

--
-- AUTO_INCREMENT de la tabla `poblacions`
--
ALTER TABLE `poblacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=555;

--
-- AUTO_INCREMENT de la tabla `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT de la tabla `temporals`
--
ALTER TABLE `temporals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4375;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=430137;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
