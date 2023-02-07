-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Fev-2023 às 02:22
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_tarefas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_tarefas`
--

CREATE TABLE `t_tarefas` (
  `id` int(11) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `responsavel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `t_tarefas`
--

INSERT INTO `t_tarefas` (`id`, `descricao`, `responsavel`) VALUES
(2, 'Estudar para a prova', 'Fernando'),
(4, 'Comprar carro', 'Tereza'),
(6, 'Entregar computador', ''),
(8, 'Lavar o carro', ''),
(10, 'Terminar projeto', 'Jacques');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_tarefas`
--
ALTER TABLE `t_tarefas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_tarefas`
--
ALTER TABLE `t_tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
