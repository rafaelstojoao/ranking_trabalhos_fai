-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/05/2024 às 22:32
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fai_ranking`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `aluno_ra` int(11) NOT NULL,
  `aluno_nome` varchar(50) NOT NULL,
  `aluno_senha` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`aluno_ra`, `aluno_nome`, `aluno_senha`) VALUES
(1, 'Professor Rafael', 'professor');

-- --------------------------------------------------------

--
-- Estrutura para tabela `entrega_atividade`
--

CREATE TABLE `entrega_atividade` (
  `atividade_codigo` int(50) NOT NULL,
  `atividade_nome` varchar(50) NOT NULL,
  `atividade_aluno` int(11) NOT NULL,
  `atividade_nota` varchar(4) NOT NULL,
  `atividade_data_entrega` datetime DEFAULT current_timestamp(),
  `atividade_observacoes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `entrega_atividade`
--

INSERT INTO `entrega_atividade` (`atividade_codigo`, `atividade_nome`, `atividade_aluno`, `atividade_nota`, `atividade_data_entrega`, `atividade_observacoes`) VALUES
(1, 'ranking web', 123, '10', '2024-05-23 11:33:49', 'Bem executado'),
(2, 'ranking web', 202321, '9', '2024-05-23 11:34:45', 'Bem executado'),
(3, 'ranking web', 202361, '8', '2024-05-23 11:34:45', 'Bem executado'),
(4, 'ranking web', 202312, '7', '2024-05-23 11:34:45', 'Pode mellhorar'),
(5, 'ranking web', 202303, '9.5', '2024-05-23 11:34:45', 'Bem executado'),
(6, 'ranking web', 202311, '10', '2024-05-23 11:34:45', 'Bem executado'),
(7, 'dashboard', 1231, '2', '2024-05-23 17:07:50', 'foi mal');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`aluno_ra`);

--
-- Índices de tabela `entrega_atividade`
--
ALTER TABLE `entrega_atividade`
  ADD PRIMARY KEY (`atividade_codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `aluno_ra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `entrega_atividade`
--
ALTER TABLE `entrega_atividade`
  MODIFY `atividade_codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
