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
-- Table structure for table `prof`

/*create database basedados;*/

CREATE TABLE `prof` (
 `id_prof` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
 `nome_prof` varchar(30) NOT NULL,
 `telefone` varchar(20) NOT NULL,
 `valor` varchar(10) NOT NULL,
 `materia` varchar(20) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `prof` (`id_prof`, `nome_prof`, `telefone`, `valor`, `materia`) VALUES
(1, 'Lidia Nunes', '(11) 97688-9658', '58,00', 'Web Design'),
(2, 'Gabriela Pereira', '(11) 98549-9652', '65,00', 'Logistica'),
(3, 'Ricardo Felipe', '(11) 99465-0895', '40,00', 'Photoshop'),
(4, 'Rodrigo Silva', '(11) 4569-5268', '75,00', 'Hardware'),
(5, 'Marcia Pereira', '(11) 99465-8965', '70,00', 'Informatica');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- Débora Miyake - 1800272