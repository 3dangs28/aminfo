-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 11:49 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aminfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `CLIENTE` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `IMAGEN_RUTA` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_CREACION` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_CLIENTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`ID_CLIENTE`, `CLIENTE`, `IMAGEN_RUTA`, `FECHA_CREACION`) VALUES
(1, 'ocean cross', NULL, '2022-04-30 14:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `firmas`
--

CREATE TABLE IF NOT EXISTS `firmas` (
  `ID_FIRMA` int(11) NOT NULL AUTO_INCREMENT,
  `FIRMA_RUTA` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`ID_FIRMA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `ID_ROL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLIENTE` int(11) NOT NULL,
  `ROL` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  PRIMARY KEY (`ID_ROL`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID_ROL`, `ID_CLIENTE`, `ROL`, `FECHA_CREACION`) VALUES
(1, 1, 'administrador', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `ID_SERVICIO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CEDULA` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DIRECCION` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CORREO` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DESCRIPCION` text COLLATE utf8_spanish_ci,
  `FECHA_GUARDADO` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_SERVICIO`),
  KEY `ID_USUARIO` (`ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CLIENTE` int(11) NOT NULL,
  `ID_ROL` int(11) NOT NULL,
  `NOMBRE` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CORREO` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NICK` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PASS` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_GUARDADO` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_USUARIO`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`),
  KEY `ID_ROL` (`ID_ROL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `clientes` (`ID_CLIENTE`);

--
-- Constraints for table `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `clientes` (`ID_CLIENTE`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID_ROL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
