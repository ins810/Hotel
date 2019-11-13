-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Nov-2019 às 03:41
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
  `id_categoria` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `title`, `text`) VALUES
(1, 'aaak', 0),
(2, 'llll', 2147483647);

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
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(45) NOT NULL,
  `name` varchar(60) NOT NULL,
  `text` varchar(60) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `name`, `text`, `fecha`) VALUES
(1, 'ss', 'sss', '2019-11-19'),
(2, 'ss', 'sss', '2019-11-19');

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
(1, '2', 'C:\\xampp\\htdocs\\daw2018\\ignacio', 'nnn'),
(2, '87787', '42451e0cf3a65ccf9eb2a5ff795b299a1b4f.jpg', 'kkkk'),
(3, 'amwdaomdp', '1385wp4244306.jpg', '3'),
(4, 'aoaiwndo', '92761e0cf3a65ccf9eb2a5ff795b299a1b4f.jpg', '89779797778787787');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `title`, `text`) VALUES
(11, 'kkk', 'oawoianwdo'),
(12, 'dwadawd', 'adawd'),
(13, 'dwadawd', 'adawd'),
(14, 'dwadawd', 'adawd'),
(15, 'dwadawd', 'adawd'),
(16, 'dwadawd', 'adawd'),
(17, 'EVRVE', 'EVERV'),
(18, '2019-11-13', 'aaa'),
(19, 'bvhgvhgssssssssss', 'kkk');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva_habitacion`
--

CREATE TABLE `reserva_habitacion` (
  `id_reserva` bigint(20) UNSIGNED NOT NULL,
  `id_habitacion` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reserva_habitacion`
--

INSERT INTO `reserva_habitacion` (`id_reserva`, `id_habitacion`) VALUES
(0, 2),
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `name`, `gmail`, `password`) VALUES
(1, 'rr', 'rr@g.com', '2222'),
(2, 'rr', 'rr@g.com', '2222'),
(3, 'aaaaa', 'admin@admin.coms', '123aaa'),
(4, 'ssssss', 's@admin.coms', 'sssssssss'),
(5, 'aa', 'admin@admin.coms', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Índices para tabela `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- Índices para tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Índices para tabela `reserva_habitacion`
--
ALTER TABLE `reserva_habitacion`
  ADD PRIMARY KEY (`id_reserva`,`id_habitacion`),
  ADD KEY `id_imagem` (`id_habitacion`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
