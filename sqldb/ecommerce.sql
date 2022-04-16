-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Abr-2022 às 01:17
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(6) UNSIGNED NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` text NOT NULL,
  `codigodebarras` text NOT NULL,
  `id_fabricante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `codigodebarras`, `id_fabricante`) VALUES
(3, 'Trompete Bb HTR-300L', 'O Trompete HTR-300L da Harmonics tem a afinação em Bb, ele se destaca pela qualidade de sua construção. Com ajustes manual, as chaves ergonômicas oferecem maior conforto, respostas rápidas e afinação precisa. Seu acabamento laqueado, encaixes em alpaca e válvulas em cruponíquel proporcionam ao instrumento um belíssimo visual e uma ótima sonoridade.', '3214565087665', 3),
(4, 'Violino tradicional 3/4', 'O violino Michael VNM30¾é um instrumento de ótima qualidade, construído com matérias-primas selecionadas, escolha ideal para adultos e crianças que fazem questão de sonoridade e tocabilidade de excelente qualidade.', '7656709875432', 5),
(5, 'Violão Acústico Aço', 'Modelo: GS-11 - Com Tensor Bidirecional - Bojo: 95~100mm - Cor das Laterais: Café - Cor do Fingerboard: Natural - Cor do Cavalete: Natural - Escudo: Preto', '5431234323467', 9),
(7, 'saxofone', 'Saxofone Dourado', '2344565431234', 13),
(8, 'viola', 'vola é coisa de luxo', '1345134514', 54),
(10, 'Guitarra Elétrica Stratocaster', 'O modelo stratocaster com 3 captadores single coil com chave seletora de 5 posições onde você pode escolher os tipos de timbres da sua guitarra sendo (grave, grave médio, médio, médio agudo e agudo), a alavanca e cabo brinde também fazem parte do instrumento, tarraxas blindadas e cromadas garantem ainda mais a durabilidade e seu escudo branco da aquele toque especial.\r\nA saída é P10 para o amplificador.', '1231231231233', 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(6) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(28, 'Brunno Camargo', 'brunnocamargo2211@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(29, 'Joao pedro', 'jp@gmail.com', 'c002fb7623adc4c47622a89ee1e2c859529a0997'),
(30, 'Madara', 'obito@outlook.com', 'a0f1ae553a28f7d6b92c497e2ecf71236d43865a');

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
