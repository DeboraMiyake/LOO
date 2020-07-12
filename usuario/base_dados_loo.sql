-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Abr-2019 às 22:18
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_dados_loo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabusuario`
--

CREATE TABLE `tabusuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(512) NOT NULL,
  `telefone` varchar(18) NOT NULL,
  `lastime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabusuario`
--

INSERT INTO `tabusuario` (`id`, `nome`, `sobrenome`, `email`, `senha`, `telefone`, `lastime`) VALUES
(1, 'debora ', 'miyake', 'dmiyake@gmail.com', '123456', '912345678', '2019-03-22 20:34:59'),
(2, 'Daniela ', 'Miranda', 'danimiranda@gmail.com', '123456', '916589875', '2019-04-05 20:15:35'),
(3, 'Giovana', 'Victoria', 'giovanavic@gmail.com', 'ana1234', '978567854', '2019-04-05 20:15:41'),
(4, 'Jose', 'Marques', 'josemarques@gmail.com', '123456', '915685978', '2019-04-05 20:15:46'),
(5, 'Ananda', 'Villas Boas', 'anandinha@gmail.com', 'amodebora123', '994658989', '2019-04-05 20:17:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabusuario`
--
ALTER TABLE `tabusuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabusuario`
--
ALTER TABLE `tabusuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
