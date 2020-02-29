-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 12/12/2019 às 21:33
-- Versão do servidor: 10.4.6-MariaDB
-- Versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `baby_nicy`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acessorios`
--

CREATE TABLE `acessorios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `categoria` varchar(200) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `valor` varchar(200) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `moda` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `acessorios`
--

INSERT INTO `acessorios` (`id`, `nome`, `categoria`, `descricao`, `valor`, `imagem`, `moda`) VALUES
(1, 'Chupeta', '3', 'chupeta', '20.00', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-04.07.13.png', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'isa', 'isa@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `brinquedos`
--

CREATE TABLE `brinquedos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `categoria` varchar(200) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `valor` varchar(200) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `moda` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `brinquedos`
--

INSERT INTO `brinquedos` (`id`, `nome`, `categoria`, `descricao`, `valor`, `imagem`, `moda`) VALUES
(1, 'Monopoly Hasbro', '4', 'O Ãºltimo com dinheiro quando todos os outros jogadores faliram, vence!', '199.99', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-03.56.36.jpg', NULL),
(2, 'teste', '4', 'teste', '100.00', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-03.59.55jpeg', NULL),
(3, 'teste', '4', 'teste linux', '199.99', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-04.19.30jpeg', '3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `roupas`
--

CREATE TABLE `roupas` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `categoria` varchar(200) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `valor` varchar(200) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `moda` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `roupas`
--

INSERT INTO `roupas` (`id`, `nome`, `categoria`, `descricao`, `valor`, `imagem`, `moda`) VALUES
(1, 'Roupa', '1', 'roupa', '200.00', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-04.08.38.jpg', NULL),
(2, 'teste', '1', 'Um dos melhores Ã¡lbuns de todos os tempos', '100', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-04.18.04.xcf', '1'),
(3, 'teste', '1', 'Um dos melhores Ã¡lbuns de todos os tempos', '100.00', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-04.21.54jpeg', '1'),
(4, 'Chupeta', '1', 'chupeta', '200.00', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-04.28.13jpeg', '2'),
(5, 'teste', '1', 'teste linux', '200.00', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-04.28.33.jpg', '3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sapatos`
--

CREATE TABLE `sapatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `categoria` varchar(200) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `valor` varchar(200) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `moda` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `sapatos`
--

INSERT INTO `sapatos` (`id`, `nome`, `categoria`, `descricao`, `valor`, `imagem`, `moda`) VALUES
(1, 'teste', '2', 'teste linux', '20.00', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-04.28.58.jpg', '1'),
(2, 'Roupa', '2', 'aaa', '00.00', 'http://localhost/modeloSite/site/imagens/produtos/2019.11.25-11.21.40.jpg', '3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `email`, `senha`) VALUES
(1, 'teste', 'teste@gmail.com', '123'),
(2, 'teste1', 'teste1@gmail.com', '123'),
(3, 'kiko', 'USUARIO@GMAIL.COM', '123');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `acessorios`
--
ALTER TABLE `acessorios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `brinquedos`
--
ALTER TABLE `brinquedos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `roupas`
--
ALTER TABLE `roupas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sapatos`
--
ALTER TABLE `sapatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `acessorios`
--
ALTER TABLE `acessorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `brinquedos`
--
ALTER TABLE `brinquedos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `roupas`
--
ALTER TABLE `roupas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `sapatos`
--
ALTER TABLE `sapatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
