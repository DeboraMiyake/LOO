-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 04:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basedados`
--

-- --------------------------------------------------------

--
-- Table structure for table `aluno`

/*create database basedados;*/

CREATE TABLE `aluno` (
 `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
 `nome` varchar(50) NOT NULL,
 `email` varchar(50) UNIQUE NOT NULL,
 `rg` varchar(9) NOT NULL,
 `cpf` varchar(11) NOT NULL,
 `datanasc` date NOT NULL,
 `endereco` varchar(30) NOT NULL,
 `telefone` varchar(12) NOT NULL,
 `senha` varchar(12) NOT NULL   
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `aluno` (`id`, `nome`, `email`,`rg`, `cpf`, `datanasc`, `endereco`, `telefone`, `senha`) VALUES
(1, 'Administrador', 'administrador@gmail.com', '7896532187', '51049865847', '19900215', 'Rua Rio de Janeiro', '64897566', 'adm2019'),
(2, 'Debora Miyake', 'debora@gmail.com', '5805965120', '51049865873', '19990204', 'Rua Jardim', '23987455', '123456'),
(3, 'Adriana Torres', 'adriana@gmail.com', '656558874', '56987415489', '20000608', 'Rua Flor Bela', '26589874', '1234'),
(4, 'Luiz Fonseca', 'lucio@gmail.com', '602350512', '02736987962', '19980514', 'Rua Montanha', '24879856', '101010');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- Débora Miyake - 1800272