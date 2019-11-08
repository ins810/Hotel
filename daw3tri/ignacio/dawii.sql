-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Nov-2019 às 18:28
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dawii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `intro` varchar(60) NOT NULL,
  `text` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `title`, `intro`, `text`) VALUES
(1, 'jbjhbj', '', 'jmhvhn'),
(2, 'mkn kj', '', 'bvhgvhg'),
(3, 'hnkjn', '', 'bhjb');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_habitacion`
--

CREATE TABLE `categoria_habitacion` (
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `id_habitacion` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria_habitacion`
--

INSERT INTO `categoria_habitacion` (`id_categoria`, `id_habitacion`) VALUES
(1, 3),
(2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `habitacion`
--

CREATE TABLE `habitacion` (
  `id_habitacion` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `src` text NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `habitacion`
--

INSERT INTO `habitacion` (`id_habitacion`, `descripcion`, `src`, `name`) VALUES
(1, '2', '28191e0cf3a65ccf9eb2a5ff795b299a1b4f.jpg', 'nnn'),
(2, '87787', '42451e0cf3a65ccf9eb2a5ff795b299a1b4f.jpg', 'kkkk'),
(3, 'amwdaomdp', '1385wp4244306.jpg', '3'),
(4, 'aoaiwndo', '92761e0cf3a65ccf9eb2a5ff795b299a1b4f.jpg', '89779797778787787');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `nome`, `login`, `senha`, `email`) VALUES
(1, 'admin', 'admin', '1234', '123@df.m');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
