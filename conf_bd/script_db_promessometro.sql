-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27-Nov-2018 às 01:28
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_promessometro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_contatos`
--

DROP TABLE IF EXISTS `tab_contatos`;
CREATE TABLE IF NOT EXISTS `tab_contatos` (
  `nomecontato` varchar(100) NOT NULL,
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `emailcontato` varchar(100) NOT NULL,
  `msgcontato` varchar(3500) NOT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_denuncias`
--

DROP TABLE IF EXISTS `tab_denuncias`;
CREATE TABLE IF NOT EXISTS `tab_denuncias` (
  `nomedenuncia` varchar(150) DEFAULT NULL,
  `emaildenuncia` varchar(50) DEFAULT NULL,
  `politicodenuncia` varchar(150) NOT NULL,
  `estadodenuncia` varchar(60) NOT NULL,
  `descricaodenuncia` varchar(3500) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_login`
--

DROP TABLE IF EXISTS `tab_login`;
CREATE TABLE IF NOT EXISTS `tab_login` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_login`
--

INSERT INTO `tab_login` (`id`, `nome`, `email`, `login`, `senha`, `status`) VALUES
(2, 'jose', 'juniorpinto120@hotmail.com', 'admin', 'admin', 0),
(3, 'Marcio', 'marcio@gmail.com', 'marcio', '12345', 0),
(4, 'Alan Delon', 'adm_alandelon@outlook.com', 'ad123', '123456789', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_promessas`
--

DROP TABLE IF EXISTS `tab_promessas`;
CREATE TABLE IF NOT EXISTS `tab_promessas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipopromessa` varchar(100) NOT NULL,
  `cargopromessa` varchar(50) NOT NULL,
  `partido_politico` varchar(15) NOT NULL,
  `nomepolitico` varchar(100) DEFAULT NULL,
  `nomepromessa` varchar(150) NOT NULL,
  `detalhepromessa` varchar(500) NOT NULL,
  `anopromessa` year(4) NOT NULL,
  `estadopromessa` varchar(2) NOT NULL,
  `cidadepromessa` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `data_alteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_promessas`
--

INSERT INTO `tab_promessas` (`id`, `tipopromessa`, `cargopromessa`, `partido_politico`, `nomepolitico`, `nomepromessa`, `detalhepromessa`, `anopromessa`, `estadopromessa`, `cidadepromessa`, `status`, `foto`, `data_cadastro`, `data_alteracao`) VALUES
(1, 'Presidencial', 'Presidente', 'PT', 'Dilma ', 'Trêm Bala', 'prometeu e não cumpriu', 2018, 'BR', 'Brasilia', 'Cumprido', '26112018_1up mushroom.jpg', '2018-11-26 13:42:48', '2018-11-26 13:42:48'),
(2, 'Presidencial', 'Presidente', 'PT', 'JOSE1', 'BOLSA', 'PROMETEU QUE UERFVERL IFAFIPUSF ', 2019, 'BR', 'Brasilia', 'Cumprido', '26112018_1up mushroom.jpg', '2018-11-26 21:14:23', '2018-11-26 21:14:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

