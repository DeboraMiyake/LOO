-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 05:06 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_dados`
--

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--
 create database base_dados;

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `marca` varchar(80) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `quantidade` varchar(5) NOT NULL,
  `tamanho` varchar(30) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `lastime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id`, `nome`, `marca`, `cor`, `quantidade`, `tamanho`, `preco`, `lastime`) VALUES
(1, 'Old Skool', 'Vans', 'Preto', '7', '36,37,38', 'R$300,00', '2019-04-13 03:55:47'),
(2, 'Superstar', 'Adidas Originals', 'Branco e Preto', '25', '34,35,36,37,38,39,40', 'R$370,00', '2019-04-13 04:12:40'),
(3, 'Air Force', 'Nike', 'Branco', '15', '36,38,41,42', 'R$400,00', '2019-04-13 04:22:43'),
(4, 'Campus ', 'Adidas Originals', 'Vinho', '13', '38,40,41,42,43,44', 'R$299,00', '2019-04-13 04:26:13'),
(5, 'Air Max 90', 'Nike', 'Rosa', '3', '34,35,36,38', 'R$549,00', '2019-04-13 04:30:26');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
ADD PRIMARY KEY (`id`);

ALTER TABLE `produto` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
