-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Abr-2022 às 17:51
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portalrs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `email` varchar(90) NOT NULL,
  `ultimo_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nome`, `usuario`, `senha`, `email`, `ultimo_log`) VALUES
(1, 'Mauricio França', 'mauricio', 'mau1996ricio', 'mauricio@hotmail.com', '2022-04-17 10:49:24'),
(2, 'Ricarte Silva', 'ricarte', 'rica26te11', 'ricartesilvafotografo@gmail.com', '2022-04-17 10:14:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL,
  `titulo` varchar(260) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `caminho` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_aniversario`
--

CREATE TABLE `imagem_aniversario` (
  `id_imagem` int(3) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `caminho` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_casamento`
--

CREATE TABLE `imagem_casamento` (
  `id_imagem` int(3) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `caminho` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_evento`
--

CREATE TABLE `imagem_evento` (
  `id_imagem` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `caminho` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Índices para tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`),
  ADD UNIQUE KEY `imagem` (`titulo`);

--
-- Índices para tabela `imagem_aniversario`
--
ALTER TABLE `imagem_aniversario`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices para tabela `imagem_casamento`
--
ALTER TABLE `imagem_casamento`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices para tabela `imagem_evento`
--
ALTER TABLE `imagem_evento`
  ADD PRIMARY KEY (`id_imagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `imagem_aniversario`
--
ALTER TABLE `imagem_aniversario`
  MODIFY `id_imagem` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT de tabela `imagem_casamento`
--
ALTER TABLE `imagem_casamento`
  MODIFY `id_imagem` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `imagem_evento`
--
ALTER TABLE `imagem_evento`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
