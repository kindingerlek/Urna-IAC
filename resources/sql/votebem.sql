-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jun-2015 às 22:07
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `votebem`
--
CREATE DATABASE IF NOT EXISTS `votebem` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `votebem`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

CREATE TABLE IF NOT EXISTS `candidatos` (
  `idCandidato` varchar(5) NOT NULL DEFAULT '0',
  `idEleicao` bigint(20) unsigned NOT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `idPartido` varchar(2) DEFAULT NULL,
  `votos` int(11) NOT NULL DEFAULT '0',
  `nomeFantasia` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idCandidato`,`idEleicao`, `tipo`),
  KEY `fkCandidatosTipos` (`tipo`),
  KEY `fkCandidatosPartidos` (`idPartido`),
  KEY `fkCandidatosEleicoes` (`idEleicao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cep`
--

CREATE TABLE IF NOT EXISTS `cep` (
  `cep` varchar(8) NOT NULL DEFAULT '0',
  `logradouro` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eleicoes`
--

CREATE TABLE IF NOT EXISTS `eleicoes` (
  `idEleicao` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `horaInicio` varchar(5) DEFAULT NULL,
  `data` varchar(10) DEFAULT NULL,
  `horaFim` varchar(5) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idEleicao`),
  UNIQUE KEY `data` (`data`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `numero` varchar(11) NOT NULL DEFAULT '0',
  `complemento` varchar(200) NOT NULL DEFAULT '',
  `cep` varchar(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`numero`,`cep`,`complemento`),
  KEY `fkEnderecosCep` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `erros`
--

CREATE TABLE IF NOT EXISTS `erros` (
  `cod` int(11) NOT NULL DEFAULT '0',
  `descricao` tinytext,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `erros`
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `idEleicao` bigint(20) unsigned DEFAULT NULL,
  `cpf` varchar(11) NOT NULL DEFAULT '',
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cpf`,`idEleicao`),
  KEY `fkTicketUsuarios` (`cpf`),
  KEY `fkTicketEleicao` (`idEleicao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `tipo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `cpf` varchar(11) NOT NULL DEFAULT '',
  `numero` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `complemento` varchar(200) NOT NULL DEFAULT '',
  `nome` varchar(200) DEFAULT NULL,
  `tituloEleitor` varchar(20) DEFAULT NULL,
  `idAdmin` varchar(10) DEFAULT NULL,
  `zona` varchar(4) DEFAULT NULL,
  `secao` varchar(4) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `dtNasc` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE (`tituloEleitor`),
  KEY `fkUsuariosEnderecos` (`numero`,`cep`, `complemento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `numero`, `email`, `cep`, `complemento`, `nome`, `tituloEleitor`, `idAdmin`, `zona`, `secao`, `senha`, `dtNasc`) VALUES
('00000000000', NULL, NULL, NULL, '', NULL, NULL, '#admin123', NULL, NULL, '63a9f0ea7bb98050796b649e85481845', NULL);


-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE IF NOT EXISTS `vagas` (
  `idEleicao` bigint(20) unsigned DEFAULT NULL,
  `PREFEITO` varchar(5) NOT NULL DEFAULT '0',
  `GOVERNADOR` varchar(5) NOT NULL DEFAULT '0',
  `PRESIDENTE` varchar(5) NOT NULL DEFAULT '0',
  `SENADOR` varchar(5) NOT NULL DEFAULT '0',
  `DEPUTADO ESTADUAL` varchar(5) NOT NULL DEFAULT '0',
  `DEPUTADO FEDERAL` varchar(5) NOT NULL DEFAULT '0',
  `VEREADOR` varchar(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idEleicao`),
  KEY `fkVagasEleicoes` (`idEleicao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
  `idEleicao` bigint(20) unsigned DEFAULT NULL,
  `idCandidato` varchar(5) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `idPartido` varchar(2) DEFAULT NULL,
  KEY `fkVotosCandidatos` (`idCandidato`),
  KEY `fkVotosEleicoes` (`idEleicao`),
  KEY `fkVotosTipos` (`tipo`),
  KEY `fkVotosPartidos` (`idPartido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `candidatos`
--
ALTER TABLE `candidatos`
  ADD CONSTRAINT `fkCandidatosEleicoes` FOREIGN KEY (`idEleicao`) REFERENCES `eleicoes` (`idEleicao`),
  ADD CONSTRAINT `fkCandidatosTipos` FOREIGN KEY (`tipo`) REFERENCES `tipos` (`tipo`),
  ADD CONSTRAINT `fkCandidatosPartidos` FOREIGN KEY (`idPartido`) REFERENCES `partidos` (`idPartido`);

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fkEnderecosCep` FOREIGN KEY (`cep`) REFERENCES `cep` (`cep`);

--
-- Limitadores para a tabela `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fkTicketUsuarios` FOREIGN KEY (`cpf`) REFERENCES `usuarios` (`cpf`),
  ADD CONSTRAINT `fkTicketEleicoes` FOREIGN KEY (`idEleicao`) REFERENCES `eleicoes` (`idEleicao`);
--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fkUsuariosEnderecos` FOREIGN KEY (`numero`, `cep`, `complemento`) REFERENCES `enderecos` (`numero`, `cep`,`complemento`);

--
-- Limitadores para a tabela `vagas`
--
ALTER TABLE `vagas`
  ADD CONSTRAINT `fkVagasEleicoes` FOREIGN KEY (`idEleicao`) REFERENCES `eleicoes` (`idEleicao`);


--
-- Limitadores para a tabela `votos`
--
ALTER TABLE `votos`
  ADD CONSTRAINT `fkVotosTipos` FOREIGN KEY (`tipo`) REFERENCES `tipos` (`tipo`),
  ADD CONSTRAINT `fkVotosEleicoes` FOREIGN KEY (`idEleicao`) REFERENCES `eleicoes` (`idEleicao`);

/* INSERTS PADRÕES ///////////////////////

ERROS    */

INSERT INTO `erros`(`cod`, `descricao`) VALUES 
(-1, ' CPF inválido'),
(-2, ' Usuário não existe'),
(-3, ' Falha na busca'),
(-4, ' Senha incorreta'),
(-5, ' Título Incorreto'),
(-6, ' Nome inválido.'),
(-7, ' Senhas não conferem'), 
(-8, ' Data invalida'),
(-9, ' Usuários com menos de 16 não podem votar'),
(-10, ' Seção invalida'),
(-11, ' CEP inválido'),
(-12, ' Campo de número de Endereço inválido.'),
(-13, ' Usuario já cadastrado'),
(-14, ' Campo(s) em branco'),
(-15, ' Sessão invalida'),
(-16, ' Partido já cadastrado'),
(-17, ' Número de partido inválido'),
(-18, ' Nome de partido'), 
(-19, ' Hora inválida'),
(-20, ' Hora de término inválida'),
(-21, ' Número de vereadores inválido'),
(-22, ' Número de deputados estaduais inválido'),
(-23, ' Número de deputados federais inválido'),
(-24, ' Número de candidato inválido'),
(-25, ' Nome de Candidato'),
(-26, ' Eleição não existe'),
(-27, ' Eleição já cadastrada no mesmo dia');

INSERT INTO `tipos` (`tipo`) VALUES 
('PREFEITO'),
('VEREADOR'),
('PRESIDENTE'),
('GOVERNADOR'),
('SENADOR'),
('DEPUTADO FEDERAL'),
('DEPUTADO ESTADUAL');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



