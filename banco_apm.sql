-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Maio-2019 às 02:41
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `banco_apm`
--
CREATE DATABASE IF NOT EXISTS `banco_apm` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `banco_apm`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_aluno`
--

CREATE TABLE IF NOT EXISTS `tabela_aluno` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(5,2) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_professores`
--

CREATE TABLE IF NOT EXISTS `tabela_professores` (
  `matricula` int(5) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `foto` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `celular` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `data` date DEFAULT NULL,
  `valor` decimal(5,2) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tabela_professores`
--

INSERT INTO `tabela_professores` (`matricula`, `nome`, `foto`, `email`, `telefone`, `celular`, `data`, `valor`) VALUES
(33048, 'Adriano Virgilio', '2a52627b1a41fbb0d9f04ff0d17e9152.jpg', 'adriano.virgilio@etec.sp.gov.br', '(19)3561-3374', '(19)99638-4745', '2019-05-28', '35.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_usuarios`
--

CREATE TABLE IF NOT EXISTS `tabela_usuarios` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `senha` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nome` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `tipo` char(1) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tabela_usuarios`
--

INSERT INTO `tabela_usuarios` (`id`, `login`, `senha`, `nome`, `tipo`) VALUES
(2, 'maria', '202cb962ac59075b964b07152d234b70', 'Maria de Lourdes', 'p');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
