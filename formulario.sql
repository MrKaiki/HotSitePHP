-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Ago-2022 às 02:23
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `form`
--

INSERT INTO `form` (`id`, `nome`, `sobrenome`, `email`) VALUES
(1, '$nome', '$sobrenome', '$email'),
(2, 'dawdaw', 'dwadaw', 'dawdwad'),
(3, 'awdawdwad', 'dwadwadaw', 'dalvamso60@gmail.com'),
(4, 'awdawdwad', 'dwadwadaw', 'dalvamso60@gmail.com3'),
(5, '423423', '423423', '42342342@WDWADAW'),
(6, '423423', '423423', '42342342@WDWADAW'),
(7, '423423', '423423', '42342342@WDWADAW'),
(8, '423423', '423423', '42342342@WDWADAW'),
(9, '423423', '423423', '42342342@WDWADAW'),
(10, '423423', '423423', '42342342@WDWADAW'),
(11, '423423', '423423', '42342342@WDWADAW'),
(12, '423423', '423423', '42342342@WDWADAW'),
(13, '423423', '423423', '42342342@WDWADAW'),
(14, '423423', '423423', '42342342@WDWADAW'),
(15, '423423', '423423', '42342342@WDWADAW'),
(16, '423423', '423423', '42342342@WDWADAW'),
(17, '423423', '423423', '42342342@WDWADAW'),
(18, '423423', '423423', '42342342@WDWADAW'),
(19, '423423', '423423', '42342342@WDWADAW'),
(20, '423423', '423423', '42342342@WDWADAW'),
(21, '423423', '423423', '42342342@WDWADAW'),
(22, '423423', '423423', '42342342@WDWADAW'),
(23, '423423', '423423', '42342342@WDWADAW'),
(24, '423423', '423423', '42342342@WDWADAW'),
(25, '423423', '423423', '42342342@WDWADAW'),
(26, '423423', '423423', '42342342@WDWADAW'),
(27, '423423', '423423', '42342342@WDWADAW'),
(28, '423423', '423423', '42342342@WDWADAW'),
(29, '423423', '423423', '42342342@WDWADAW'),
(30, '423423', '423423', '42342342@WDWADAW'),
(31, '423423', '423423', '42342342@WDWADAW'),
(32, '423423', '423423', '42342342@WDWADAW'),
(33, '423423', '423423', '42342342@WDWADAW'),
(34, '423423', '423423', '42342342@WDWADAW'),
(35, '423423', '423423', '42342342@WDWADAW'),
(36, '423423', '423423', '42342342@WDWADAW'),
(37, '423423', '423423', '42342342@WDWADAW'),
(38, '423423', '423423', '42342342@WDWADAW'),
(39, '423423', '423423', '42342342@WDWADAW'),
(40, '423423', '423423', '42342342@WDWADAW'),
(41, '423423', '423423', '42342342@WDWADAW'),
(42, '423423', '423423', '42342342@WDWADAW'),
(43, '423423', '423423', '42342342@WDWADAW'),
(44, '423423', '423423', '42342342@WDWADAW'),
(45, '423423', '423423', '42342342@WDWADAW'),
(46, '423423', '423423', '42342342@WDWADAW'),
(47, '423423', '423423', '42342342@WDWADAW'),
(48, '423423', '423423', '42342342@WDWADAW'),
(49, '423423', '423423', '42342342@WDWADAW'),
(50, '423423', '423423', '42342342@WDWADAW'),
(51, '423423', '423423', '42342342@WDWADAW'),
(52, '423423', '423423', '42342342@WDWADAW'),
(53, '423423', '423423', '42342342@WDWADAW'),
(54, 'Kaiki', 'Pires De Oliveira', 'Mrkaiki@teste.com'),
(55, 'Ewelyn', ' Da Silva Nunes', 'nunes@gmail.com'),
(56, 'awdawdwad', 'dwadawdaw', 'dalva423423423mso60@gmail.com3');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
