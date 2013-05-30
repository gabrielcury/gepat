-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `estoque_dev`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `ramal` int(4) DEFAULT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `matricula`, `nome`, `sobrenome`, `ramal`, `user`, `password`, `created`, `modified`) VALUES
(1, 769256, 'Lincoln', 'Lamas', 8839, 'lincoln.lamas', 'f7474d672cff12c', '2013-05-28 18:18:00', NULL),
(2, 769256, '1', '1', 1, '1', '1', '2013-05-29 23:24:31', '2013-05-29 23:33:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
