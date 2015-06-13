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
('10', 'PARTIDO REPUBLICANO BRASILEIRO', 'PRB', NULL),
('11', 'PARTIDO PROGRESSISTA', 'PP', NULL),
('12', 'PARTIDO DEMOCRÁTICO TRABALHISTA', 'PDT', NULL),
('13', 'PARTIDO DOS TRABALHADORES', 'PT', NULL),
('14', 'PARTIDO TRABALHISTA BRASILEIRO', 'PTB', NULL),
('15', 'PARTIDO DO MOVIMENTO DEMOCRÁTICO BRASILEIRO', 'PMDB', NULL),
('16', 'PARTIDO SOCIALISTA DOS TRABALHADORES UNIFICADO', 'PSTU', NULL),
('17', 'PARTIDO SOCIAL LIBERAL', 'PSL', NULL),
('19', 'PARTIDO TRABALHISTA NACIONAL', 'PTN', NULL),
('20', 'PARTIDO SOCIAL CRISTÃO', 'PSC', NULL),
('21', 'PARTIDO COMUNISTA BRASILEIRO', 'PCB', NULL),
('22', 'PARTIDO DA REPÚBLICA', 'PR', NULL),
('23', 'PARTIDO POPULAR SOCIALISTA', 'PPS', NULL),
('25', 'DEMOCRATAS', 'DEM', NULL),
('27', 'PARTIDO SOCIAL DEMOCRATA CRISTÃO', 'PSDC', NULL),
('28', 'PARTIDO RENOVADOR TRABALHISTA BRASILEIRO', 'PRTB', NULL),
('29', 'PARTIDO DA CAUSA OPERÁRIA', 'PCO', NULL),
('31', 'PARTIDO HUMANISTA DA SOLIDARIEDADE', 'PHS', NULL),
('33', 'PARTIDO DA MOBILIZAÇÃO NACIONAL', 'PMN', NULL),
('36', 'PARTIDO TRABALHISTA CRISTÃO', 'PTC', NULL),
('40', 'PARTIDO SOCIALISTA BRASILEIRO', 'PSB', NULL),
('43', 'PARTIDO VERDE', 'PV', NULL),
('44', 'PARTIDO REPUBLICANO PROGRESSISTA', 'PRP', NULL),
('45', 'PARTIDO DA SOCIAL DEMOCRACIA BRASILEIRA', 'PSBD', NULL),
('50', 'PARTIDO SOCIALISMO E LIBERDADE', 'PSOL', NULL),
('51', 'PARTIDO ECOLÓGICO NACIONAL', 'PEN', NULL),
('54', 'PARTIDO PÁTRIA LIVRE', 'PPL', NULL),
('55', 'PARTIDO SOCIAL DEMOCRÁTICO', 'PSD', NULL),
('65', 'PARTIDO COMUNISTA DO BRASIL', 'PCdoB', NULL),
('70', 'PARTIDO TRABALHISTA DO BRASIL', 'PTdoB', NULL),
('77', 'SOLIDARIEDADE', 'SD', NULL),
('90', 'PARTIDO REPUBLICANO DA ORDEM SOCIAL', 'PROS', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
