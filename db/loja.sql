-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Out-2021 às 00:30
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `quantidade` int(10) UNSIGNED DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `descricao` mediumtext DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `fichatecnica` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `valor`, `quantidade`, `categoria`, `descricao`, `imagem`, `fichatecnica`) VALUES
(4, 'Kit Teclado Mouse Gamer', '120.00', 2, 'hardware', 'Mouse, teclado rgb, 40000 DPI e tempo de resposta negativo.', '/uc3/lilacroller/img_catalogo/kit1.png', 'mouse teclado top demais'),
(5, 'ROG ASUS RX 2080 TI ', '2999.00', 4, 'hardware', 'Placa de video Nvida rog asus rx 2080 Ti 2Gb GDDR8', '/uc3/lilacroller/img_catalogo/2080ti.png', 'palavras tecnicas.'),
(6, 'GALAX GX 2080 TI', '3899.00', 1, 'hardware', 'Placa de video gx 2080 ti com 8GB de memoria GDRR19', '/uc3/lilacroller/img_catalogo/gx2080ti.png', 'gambiarra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(255) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(13) DEFAULT NULL,
  `genero` varchar(13) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `nomesocial` varchar(13) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tipopessoa` varchar(13) DEFAULT NULL,
  `status` varchar(7) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `sobrenome`, `cpf`, `endereco`, `cidade`, `estado`, `cep`, `genero`, `email`, `telefone`, `nomesocial`, `password`, `tipopessoa`, `status`) VALUES
('Renan', 'Ramos', '55555555555', 'Cam 5550123', 'Lilac', 'Bahia (BA)', '1515151515151', 'Masculino', 'adm@adm', '5550123', '', '$2y$10$MahR52zpddX0Mqy7xBUAxOTwJgzazIjiH1NSoB1idONopG3Chz6yq', 'Pessoa Fisica', 'admin'),
('colab', 'colab', '15151515', '51515151', '515151551', 'Bahia (BA)', '15155515', 'Masculino', 'collab@collab', '1515151515', '', '$2y$10$kKTB5.Ejr3/Z1Ttynqwr.eYb..NnPJkOuVlkhiw5ApE38Mn3hGd4u', 'Pessoa Fisica', 'collab'),
('usuario', 'padrão', '11111111111', '555555555555555', '55555555555555555555', 'Amapá (AP)', '151551515', 'Não-Binario', 'test@test', '2515151511', 'dsdfd', '$2y$10$zNdGLJulgOZpa4SLgWGhTO/5Bk3evS/t/UAwxAHVmt.nPaVL2riPC', 'Pessoa Juridi', 'user');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
