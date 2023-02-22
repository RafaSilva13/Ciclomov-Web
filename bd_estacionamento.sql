-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Fev-2023 às 17:24
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `cod_administradores` int(11) NOT NULL,
  `usuario_administrador` varchar(45) NOT NULL,
  `nome_administrador` varchar(100) NOT NULL,
  `senha_administrador` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`cod_administradores`, `usuario_administrador`, `nome_administrador`, `senha_administrador`) VALUES
(0, 'admin', 'Administrador', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `cod_cidade` int(5) NOT NULL,
  `id_estado` int(5) NOT NULL,
  `descricao_cidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`cod_cidade`, `id_estado`, `descricao_cidade`) VALUES
(0, 0, 'Petropolís'),
(1, 1, 'Juiz de Fora'),
(2, 0, 'Cabo Frio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cod_clientes` int(5) NOT NULL,
  `email_clientes` varchar(80) DEFAULT NULL,
  `cpf_clientes` varchar(16) NOT NULL,
  `tempo_geral_clientes` varchar(8) NOT NULL,
  `usuario_clientes` varchar(45) NOT NULL,
  `senha_clientes` varchar(45) NOT NULL,
  `nome_clientes` varchar(120) NOT NULL,
  `telefone_clientes` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cod_clientes`, `email_clientes`, `cpf_clientes`, `tempo_geral_clientes`, `usuario_clientes`, `senha_clientes`, `nome_clientes`, `telefone_clientes`) VALUES
(0, 'gabriel@gmail.com', '181.456.987-87', '22:09:00', 'gabriel', '123', 'Rafael Pereira', '32 1111-1111'),
(1, 'gisele@gmail.com', '178.654.801-00', '00:00:01', 'gisele', 'gi456', 'Gisele Pereira', '32 2222-2222'),
(2, 'Victor@gmail.com', '140.122.543-00', '00:00:00', 'victor', '123', 'Victor Gonçalves', '32 3333-3333'),
(3, 'luiz@mail.com', '135.468.681-56', '00:05:00', 'Luiz', '1478', 'luiz', '(32) 98888-8888'),
(4, 'joaoaugusto@mail.com', '586.589.258-58', '00:05:00', 'joao', '123', 'João Augusto', '(32)95555-5555');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `cod_estado` int(5) NOT NULL,
  `descricao_estado` varchar(80) NOT NULL,
  `sigla` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`cod_estado`, `descricao_estado`, `sigla`) VALUES
(0, 'Rio de Janeiro', 'RJ'),
(1, 'Santa Catarina', 'SC'),
(4, 'Minas Gerais', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos`
--

CREATE TABLE `pontos` (
  `cod_ponto` int(5) NOT NULL,
  `id_estado` int(5) NOT NULL,
  `id_cidade` int(5) NOT NULL,
  `vagas_livres_ponto` int(11) NOT NULL,
  `vagas_totais_ponto` int(11) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `mapa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pontos`
--

INSERT INTO `pontos` (`cod_ponto`, `id_estado`, `id_cidade`, `vagas_livres_ponto`, `vagas_totais_ponto`, `descricao`, `mapa`) VALUES
(0, 0, 0, 11, 12, 'Ponto - Jardim Norte', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7411.947181230096!2d-43.373682554925395!3d-21.742549518061914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989c611b5febfd%3A0xd900ac6cb3d317bd!2sShopping%20Jardim%20Norte!5e0!3m2!1spt-BR!2sbr!4v1670246459054!5m2!1spt-BR!2sbr'),
(1, 1, 1, 12, 12, 'Ponto - Tijuca', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.7487623892025!2d-43.239354973024454!3d-22.922635799576522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e6bae2c0001%3A0x203e1a0e878d3b5!2sShopping%20Tijuca!5e0!3m2!1spt-BR!2sbr!4v1670249911519!5m2!1spt-BR!2sbr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `cod_servico` int(5) NOT NULL,
  `id_clientes` int(5) NOT NULL,
  `id_ponto` int(5) NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `tempo_permanencia` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`cod_servico`, `id_clientes`, `id_ponto`, `tipo`, `tempo_permanencia`) VALUES
(0, 0, 0, 'Estacionamento', '00:13:00'),
(1, 1, 1, 'Estacionamento', '00:15:00'),
(2, 0, 0, 'Manutenção e Limpeza', '00:30:00'),
(3, 2, 0, 'Manutenção e estacionamento', '00:00:00'),
(4, 4, 0, 'Estacionamento', '00:45:00'),
(5, 2, 0, '', '22:09:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`cod_administradores`);

--
-- Índices para tabela `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`cod_cidade`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_clientes`);

--
-- Índices para tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`cod_estado`);

--
-- Índices para tabela `pontos`
--
ALTER TABLE `pontos`
  ADD PRIMARY KEY (`cod_ponto`),
  ADD KEY `id_uf` (`id_cidade`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`cod_servico`),
  ADD KEY `id_clientes` (`id_clientes`),
  ADD KEY `id_ponto` (`id_ponto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administradores`
--
ALTER TABLE `administradores`
  MODIFY `cod_administradores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cidades`
--
ALTER TABLE `cidades`
  MODIFY `cod_cidade` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cod_clientes` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `cod_estado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pontos`
--
ALTER TABLE `pontos`
  MODIFY `cod_ponto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `cod_servico` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
