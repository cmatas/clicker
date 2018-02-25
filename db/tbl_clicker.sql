-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-02-2018 a las 21:34:45
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ledc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clicker`
--

DROP TABLE IF EXISTS `tbl_clicker`;
CREATE TABLE IF NOT EXISTS `tbl_clicker` (
  `click_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `click_button` varchar(50) NOT NULL,
  `click_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`click_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_clicker`
--

INSERT INTO `tbl_clicker` (`click_id`, `click_button`, `click_date`) VALUES
(1, 'btn1', '2018-02-25 06:07:04'),
(2, 'btn2', '2018-02-25 06:12:12'),
(3, 'btn3', '2018-02-25 06:12:14'),
(4, 'btn1', '2018-02-25 06:12:15'),
(5, 'btn2', '2018-02-25 06:12:16'),
(6, 'btn1', '2018-02-25 06:12:16'),
(7, 'btn3', '2018-02-25 06:12:17'),
(8, 'btn3', '2018-02-25 06:12:39'),
(9, 'btn3', '2018-02-25 06:13:32'),
(10, 'btn1', '2018-02-25 06:13:43'),
(11, 'btn2', '2018-02-25 06:13:51'),
(12, 'btn2', '2018-02-25 06:14:18'),
(13, 'btn1', '2018-02-25 06:14:20'),
(14, 'btn3', '2018-02-25 06:14:27'),
(15, 'btn2', '2018-02-25 06:14:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
