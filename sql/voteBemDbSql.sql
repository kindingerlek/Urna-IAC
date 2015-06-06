-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2015 às 20:16
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

CREATE TABLE IF NOT EXISTS `candidatos` (
  `idCandidato` varchar(5) NOT NULL DEFAULT '0',
  `idEleicao` int(11) NOT NULL DEFAULT '0',
  `idTipo` int(11) DEFAULT NULL,
  `idPartido` varchar(2) DEFAULT NULL,
  `votos` int(11) DEFAULT NULL,
  `nomeFantasia` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idCandidato`,`idEleicao`),
  KEY `fkCandidatosTipos` (`idTipo`),
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
  `idEleicao` int(11) NOT NULL DEFAULT '0',
  `horaInicio` date DEFAULT NULL,
  `data` date DEFAULT NULL,
  `horaFim` date DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`idEleicao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `numero` varchar(11) NOT NULL DEFAULT '0',
  `complemento` varchar(200) NOT NULL DEFAULT '',
  `cep` varchar(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`numero`,`cep`),
  Unique KEY (`numero`,`cep`, `complemento`),
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `partidos`
--

CREATE TABLE IF NOT EXISTS `partidos` (
  `idPartido` varchar(2) NOT NULL DEFAULT '0',
  `nome` varchar(200) DEFAULT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `votos` int(11) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idPartido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `cpf` varchar(11) DEFAULT NULL,
  `dataHora` date DEFAULT NULL,
  PRIMARY KEY (`cpf`, `dataHora`),
  KEY `fkTicketUsuarios` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `idTipo` int(11) NOT NULL DEFAULT '0',
  `cargo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idTipo`)
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
  KEY `fkUsuariosEnderecos` (`numero`,`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE IF NOT EXISTS `vagas` (
  `idTipo` int(11) DEFAULT NULL,
  `idEleicao` int(11) DEFAULT NULL,
  `qtdeVagas` int(11) DEFAULT NULL,
  KEY `fkVagasTipos` (`idTipo`),
  KEY `fkVagasEleicoes` (`idEleicao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
  `idCandidato` varchar(5) DEFAULT NULL,
  KEY `fkVotosCandidatos` (`idCandidato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `candidatos`
--
ALTER TABLE `candidatos`
  ADD CONSTRAINT `fkCandidatosEleicoes` FOREIGN KEY (`idEleicao`) REFERENCES `eleicoes` (`idEleicao`),
  ADD CONSTRAINT `fkCandidatosPartidos` FOREIGN KEY (`idPartido`) REFERENCES `partidos` (`idPartido`),
  ADD CONSTRAINT `fkCandidatosTipos` FOREIGN KEY (`idTipo`) REFERENCES `tipos` (`idTipo`);

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fkEnderecosCep` FOREIGN KEY (`cep`) REFERENCES `cep` (`cep`);

--
-- Limitadores para a tabela `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fkTicketUsuarios` FOREIGN KEY (`cpf`) REFERENCES `usuarios` (`cpf`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fkUsuariosEnderecos` FOREIGN KEY (`numero`, `cep`) REFERENCES `enderecos` (`numero`, `cep`);

--
-- Limitadores para a tabela `vagas`
--
ALTER TABLE `vagas`
  ADD CONSTRAINT `fkVagasEleicoes` FOREIGN KEY (`idEleicao`) REFERENCES `eleicoes` (`idEleicao`),
  ADD CONSTRAINT `fkVagasTipos` FOREIGN KEY (`idTipo`) REFERENCES `tipos` (`idTipo`);

--
-- Limitadores para a tabela `votos`
--
ALTER TABLE `votos`
  ADD CONSTRAINT `fkVotosCandidatos` FOREIGN KEY (`idCandidato`) REFERENCES `candidatos` (`idCandidato`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
