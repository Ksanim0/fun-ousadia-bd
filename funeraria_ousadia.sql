-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jun-2022 às 15:20
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `funeraria_ousadia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fun_ousadia_tb`
--

CREATE TABLE `fun_ousadia_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cartao` varchar(16) NOT NULL,
  `seccartao` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fun_ousadia_tb`
--

INSERT INTO `fun_ousadia_tb` (`id`, `nome`, `email`, `senha`, `telefone`, `cpf`, `cep`, `cidade`, `cartao`, `seccartao`) VALUES
(1, 'junior', 'edmison2013junior@gmail.com', '07/05/2006', '1111111', '087097133]', '8888888', 'crateus', '11111111111', '888'),
(2, 'j', 'jjj', 'crateus', '(88) 88888-', '888.888.888', '88888-88', '88888', '8888888888888888', '888'),
(3, 'José', 'jose.pikaambulante@xvideos.com', '1224', '(66) 66666-', '000.000.000', '00000-00', 'Exú', '0000000000000000', '000'),
(4, 'Adelicai', 'adeilsoonlinod<3@gmail.com', '143', '(55) 55555-5555', '555.555.555', '55555-55', 'novo oriente', '5555555555555555', '555'),
(5, 'hoghowish', 'efksdnsfnvçsdvj@gmail.com', '7777777', '(00) 00000-0000', '000.000.000-00', '00000-000', 'advhsdj', '0000000000000000', '000');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fun_ousadia_tb`
--
ALTER TABLE `fun_ousadia_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fun_ousadia_tb`
--
ALTER TABLE `fun_ousadia_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
