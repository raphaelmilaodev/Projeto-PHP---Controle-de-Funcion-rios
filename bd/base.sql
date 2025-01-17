-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/01/2025 às 03:12
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
-- Banco de dados: `base`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_empresa`
--

CREATE TABLE `tbl_empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`id_empresa`, `nome`) VALUES
(1, 'Empresa 1'),
(11, 'Empresa teste'),
(12, 'Empresa 3'),
(13, 'Empresa teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_funcionario`
--

CREATE TABLE `tbl_funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `salario` double(10,2) NOT NULL,
  `bonificacao` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_funcionario`
--

INSERT INTO `tbl_funcionario` (`id_funcionario`, `nome`, `cpf`, `rg`, `email`, `id_empresa`, `data_cadastro`, `salario`, `bonificacao`) VALUES
(107, 'Nem', '254810', '2515', '151515', 0, '2023-04-05', 1000.00, 1100.00),
(108, 'Teste normal', '265562', '2626262', '262662', 12, '2025-02-02', 1000.00, 0.00),
(109, 'Pedro', '45984989', '484849', '484848', 13, '2000-02-02', 5000.00, 6000.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `login`, `senha`) VALUES
(13, 'teste@gmail.com.br', '81dc9bdb52d04dc20036dbd8313ed0');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices de tabela `tbl_funcionario`
--
ALTER TABLE `tbl_funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices de tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbl_funcionario`
--
ALTER TABLE `tbl_funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de tabela `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
