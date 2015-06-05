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
-- Database: `iac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

CREATE TABLE IF NOT EXISTS `candidatos` (
  `idCandidato` decimal(5,0) NOT NULL DEFAULT '0',
  `idEleicao` int(11) NOT NULL DEFAULT '0',
  `idTipo` int(11) DEFAULT NULL,
  `idPartido` decimal(2,0) DEFAULT NULL,
  `votos` int(11) DEFAULT NULL,
  `nomeFantasia` varchar(200) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idCandidato`,`idEleicao`),
  KEY `fkCandidatosTipos` (`idTipo`),
  KEY `fkCandidatosPartidos` (`idPartido`),
  KEY `fkCandidatosEleicoes` (`idEleicao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cep`
--

CREATE TABLE IF NOT EXISTS `cep` (
  `cep` varchar(8) NOT NULL DEFAULT '0',
  `logradouro` varchar(100) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cep`
--

INSERT INTO if not exists `cep` (`cep`, `logradouro`, `bairro`, `cidade`) VALUES
('83701485', 'Tibagi', 'Costeira', 'Araucaria'),
('81870000', 'Isaac', 'Pinheirinho', 'Curitiba');
-- --------------------------------------------------------

--
-- Estrutura da tabela `eleicoes`
--

CREATE TABLE IF NOT EXISTS `eleicoes` (
  `idEleicao` int(11) NOT NULL DEFAULT '0',
  `horaInicio` date DEFAULT NULL,
  `data` date DEFAULT NULL,
  `horaFim` date DEFAULT NULL,
  `tipo` decimal(1,0) DEFAULT NULL,
  `status` decimal(1,0) DEFAULT NULL,
  PRIMARY KEY (`idEleicao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `numero` int(11) NOT NULL DEFAULT '0',
  `complemento` varchar(200) NOT NULL DEFAULT '',
  `cep` varchar(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`numero`,`cep`,'complemento'),
  KEY `fkEnderecosCep` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`numero`,`complemento`, `cep`) VALUES
(993, 'casa', '83701485'),
(332, 'casa', '81870000'),
(123, 'ap', '83701485');

-- --------------------------------------------------------

--
-- Estrutura da tabela `erros`
--

CREATE TABLE IF NOT EXISTS `erros` (
  `cod` int(11) NOT NULL DEFAULT '0',
  `descricao` tinytext,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `erros`
--

INSERT INTO `erros` (`cod`, `descricao`) VALUES
(-4, 'Senha incorreta'),
(-3, 'Falha na busca'),
(-2, 'Usuário não existe'),
(-1, 'CPF inválido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `partidos`
--

CREATE TABLE IF NOT EXISTS `partidos` (
  `idPartido` decimal(2,0) NOT NULL DEFAULT '0',
  `nome` varchar(200) DEFAULT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `votos` int(11) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idPartido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `cpf` varchar(11) DEFAULT NULL,
  `dataHora` date DEFAULT NULL,
  KEY `fkTicketUsuarios` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `idTipo` int(11) NOT NULL DEFAULT '0',
  `cargo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `cpf` varchar(11) NOT NULL DEFAULT '',
  `numero` int(11) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  'complemento' varchar(2000) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `tituloEleitor` decimal(20,0) DEFAULT NULL,
  `idAdmin` varchar(10) DEFAULT NULL,
  `zona` decimal(3,0) DEFAULT NULL,
  `secao` decimal(4,0) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `dtNasc` date DEFAULT NULL,
  'email' varchar(100) default NULL,
  PRIMARY KEY (`cpf`),
  KEY `fkUsuariosEnderecos` (`numero`,`cep`,'complemento')
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `numero`, `cep`, `nome`, `tituloEleitor`, `zona`, `secao`, `senha`, `dtNasc`, 'email') VALUES
('09487904905', 993, '83701485', 'Alisson','123123123123123', '123', '1234','18fb622e79c298bcdc038b04860ac3b5', '1996-07-08','teste@teste.com'),
('09964341946', 993, '83701485', 'Lucas', '112333355656666', '123', '1234', '57985ac735bc81dc466da93f48589888', '1995-03-14','teste@teste.com'),
('05829791960', 332, '81870000', 'Carlos', '123123123155543', '123', '1234','81dc9bdb52d04dc20036dbd8313ed055', '1976-12-10','teste@teste.com'),
('07485894900', 332, '81870000', 'Bruno', '123123123155543', '123', '1234', '17db60932875aa8f23510f6a00f7f929', '1992-11-10','teste@teste.com');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
  `idCandidato` decimal(5,0) DEFAULT NULL,
  KEY `fkVotosCandidatos` (`idCandidato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD CONSTRAINT `fkUsuariosEnderecos` FOREIGN KEY (`numero`, `cep`,'complmento') REFERENCES `enderecos` (`numero`, `cep`,'complmento');

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
