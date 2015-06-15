-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2015 às 22:48
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `votebem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `numero` varchar(11) NOT NULL DEFAULT '0',
  `complemento` varchar(200) NOT NULL DEFAULT '',
  `cep` varchar(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`numero`,`cep`),
  UNIQUE KEY `endereco` (`numero`,`cep`,`complemento`),
  KEY `fkEnderecosCep` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`numero`, `complemento`, `cep`) VALUES
('123', 'casa', '02478150'),
('123', 'casa', '02846030'),
('123', 'casa', '05885300'),
('123', 'casa', '06813015'),
('123', 'casa', '06833141'),
('123', 'casa', '08391480'),
('123', 'casa', '12606280'),
('123', 'casa', '13310663'),
('123', 'casa', '13872035'),
('123', 'casa', '17601040'),
('123', 'casa', '26540184'),
('123', 'casa', '29108250'),
('123', 'casa', '29182411'),
('123', 'casa', '47801268'),
('123', 'casa', '50771001'),
('123', 'casa', '52190347'),
('123', 'casa', '60425010'),
('123', 'casa', '69027350'),
('123', 'casa', '70741620'),
('123', 'casa', '73026540'),
('123', 'casa', '87043474'),
('123', 'casa', '88351170'),
('123', 'casa', '89265070'),
('123', 'casa', '94935480'),
('1234', 'casa', '26015090'),
('2079', 'Casa 02', '83411050');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fkEnderecosCep` FOREIGN KEY (`cep`) REFERENCES `cep` (`cep`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
