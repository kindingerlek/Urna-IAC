-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jun-2015 às 00:50
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
-- Estrutura da tabela `partidos`
--

CREATE TABLE IF NOT EXISTS `partidos` (
  `idPartido` varchar(2) NOT NULL DEFAULT '0',
  `nome` varchar(200) DEFAULT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idPartido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `partidos`
--

INSERT INTO `partidos` (`idPartido`, `nome`, `sigla`, `logo`) VALUES
('10', 'PARTIDO REPUBLICANO BRASILEIRO', 'PRB', '../resources/party_logo/10.jpg'),
('11', 'PARTIDO PROGRESSISTA', 'PP','../resources/party_logo/11.jpg'),
('12', 'PARTIDO DEMOCRÁTICO TRABALHISTA', 'PDT','../resources/party_logo/12.jpg'),
('13', 'PARTIDO DOS TRABALHADORES', 'PT', '../resources/party_logo/13.jpg'),
('14', 'PARTIDO TRABALHISTA BRASILEIRO', 'PTB', '../resources/party_logo/14.jpg'),
('15', 'PARTIDO DO MOVIMENTO DEMOCRÁTICO BRASILEIRO', 'PMDB', '../resources/party_logo/15.jpg'),
('16', 'PARTIDO SOCIALISTA DOS TRABALHADORES UNIFICADO', 'PSTU', '../resources/party_logo/16.jpg'),
('17', 'PARTIDO SOCIAL LIBERAL', 'PSL', '../resources/party_logo/17.jpg'),
('19', 'PARTIDO TRABALHISTA NACIONAL', 'PTN', '../resources/party_logo/19.jpg'),
('20', 'PARTIDO SOCIAL CRISTÃO', 'PSC', '../resources/party_logo/20.jpg'),
('21', 'PARTIDO COMUNISTA BRASILEIRO', 'PCB', '../resources/party_logo/21.jpg'),
('22', 'PARTIDO DA REPÚBLICA', 'PR', '../resources/party_logo/22.jpg'),
('23', 'PARTIDO POPULAR SOCIALISTA', 'PPS', '../resources/party_logo/23.jpg'),
('25', 'DEMOCRATAS', 'DEM', '../resources/party_logo/25.jpg'),
('27', 'PARTIDO SOCIAL DEMOCRATA CRISTÃO', 'PSDC', '../resources/party_logo/27.jpg'),
('28', 'PARTIDO RENOVADOR TRABALHISTA BRASILEIRO', 'PRTB', '../resources/party_logo/28.jpg'),
('29', 'PARTIDO DA CAUSA OPERÁRIA', 'PCO', '../resources/party_logo/29.jpg'),
('31', 'PARTIDO HUMANISTA DA SOLIDARIEDADE', 'PHS', '../resources/party_logo/31.jpg'),
('33', 'PARTIDO DA MOBILIZAÇÃO NACIONAL', 'PMN', '../resources/party_logo/33.jpg'),
('36', 'PARTIDO TRABALHISTA CRISTÃO', 'PTC', '../resources/party_logo/36.jpg'),
('40', 'PARTIDO SOCIALISTA BRASILEIRO', 'PSB', '../resources/party_logo/40.jpg'),
('43', 'PARTIDO VERDE', 'PV', '../resources/party_logo/43.jpg'),
('44', 'PARTIDO REPUBLICANO PROGRESSISTA', 'PRP', '../resources/party_logo/44.jpg'),
('45', 'PARTIDO DA SOCIAL DEMOCRACIA BRASILEIRA', 'PSBD', '../resources/party_logo/45.jpg'),
('50', 'PARTIDO SOCIALISMO E LIBERDADE', 'PSOL', '../resources/party_logo/50.jpg'),
('51', 'PARTIDO ECOLÓGICO NACIONAL', 'PEN', '../resources/party_logo/51.jpg'),
('54', 'PARTIDO PÁTRIA LIVRE', 'PPL', '../resources/party_logo/54.jpg'),
('55', 'PARTIDO SOCIAL DEMOCRÁTICO', 'PSD', '../resources/party_logo/55.jpg'),
('65', 'PARTIDO COMUNISTA DO BRASIL', 'PCdoB', '../resources/party_logo/65.jpg'),
('70', 'PARTIDO TRABALHISTA DO BRASIL', 'PTdoB', '../resources/party_logo/70.jpg'),
('77', 'SOLIDARIEDADE', 'SD', '../resources/party_logo/77.jpg'),
('90', 'PARTIDO REPUBLICANO DA ORDEM SOCIAL', 'PROS', '../resources/party_logo/90.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
