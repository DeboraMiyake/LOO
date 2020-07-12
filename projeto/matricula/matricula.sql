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
-- Table structure for table `matricula`

/*create database basedados;*/

CREATE TABLE `matricula` (
 `id_matricula` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
 `nome_aluno` varchar(30) NOT NULL,
 `curso` varchar(30) NOT NULL,
 `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `matricula` (`id_matricula`, `nome_aluno`, `curso`, `data`) VALUES
(1, 'Luciana Montes', 'Web Design', '2019-06-17'),
(2, 'Marcelo da Rocha', 'Logistica', '2019-06-19'),
(3, 'Benedita Monteiro', 'Hardware', '2019-06-10'),
(4, 'Michelle Bittencourt', 'Informatica', '2019-06-18'),
(5, 'Antonio Santos', 'Photoshop', '2019-06-12'),
(6, 'Nina Ruiz', 'Informatica', '2019-06-12');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- Débora Miyake - 1800272