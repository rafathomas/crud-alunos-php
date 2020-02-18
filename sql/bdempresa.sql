-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2015 at 07:25 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdempresa`
--
CREATE DATABASE IF NOT EXISTS `bdempresa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdempresa`;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(100) NOT NULL,
  `enderecoCliente` varchar(100) NOT NULL,
  `cidadeCliente` varchar(100) NOT NULL,
  `cepCliente` varchar(10) NOT NULL,
  `emailCliente` varchar(100) NOT NULL,
  `userCliente` varchar(20) NOT NULL,
  `passCliente` varchar(20) NOT NULL,
  `dataCadastroCliente` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nomeCliente`, `enderecoCliente`, `cidadeCliente`, `cepCliente`, `emailCliente`, `userCliente`, `passCliente`, `dataCadastroCliente`) VALUES
(1, 'ronnie local', 'local', 'araca', '16030', 'ronnierillobr@yahoo.com.br', 'ronniee', '123', '2015-07-01 01:54:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
