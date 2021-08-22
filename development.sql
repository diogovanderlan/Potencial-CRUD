-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Ago-2021 às 17:59
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `development`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `desenvolvedores`
--

CREATE TABLE `desenvolvedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(500) DEFAULT NULL,
  `sexo` char(50) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `hobby` varchar(500) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `desenvolvedores`
--

INSERT INTO `desenvolvedores` (`id`, `nome`, `sexo`, `idade`, `hobby`, `datanascimento`) VALUES
(13, 'DIOGO VANDERLAN PEREIRA DOS SANTOS', 'masculino', 28, 'gamer                ', '1993-05-07');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `desenvolvedores`
--
ALTER TABLE `desenvolvedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `desenvolvedores`
--
ALTER TABLE `desenvolvedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
