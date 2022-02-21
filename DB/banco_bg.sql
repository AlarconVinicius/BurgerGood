-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql26-farm2.uni5.net
-- Tempo de geração: 25/11/2021 às 16:08
-- Versão do servidor: 10.2.33-MariaDB-log
-- Versão do PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `getempresa03`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_bd`
--

CREATE TABLE IF NOT EXISTS `cadastro_bd` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aniversario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `repet_senha` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Fazendo dump de dados para tabela `cadastro_bd`
--

INSERT INTO `cadastro_bd` (`idcliente`, `nome`, `cpf`, `aniversario`, `email`, `celular`, `senha`, `repet_senha`) VALUES
(1, 'Vinicius Alarcon Vilela', '99999999999', '13/05/2001', 'alarcon.pqd74@gmail.com', '21999999999', '12345', '12345'),
(2, 'Camila Manso Vianna', '88888888888', '03/10/2002', 'mansocamila5@gmail.com', '21888888888', '12345', '12345'),
(3, 'Enzo de Freitas Alarcon', '66666666666', '02/08/2012', 'enzo.alarcon@gmail.com', '21666666666', '12345', '12345');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cadastro_bd`
--
ALTER TABLE `cadastro_bd`
  ADD PRIMARY KEY (`idcliente`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_bd`
--
ALTER TABLE `cadastro_bd`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
