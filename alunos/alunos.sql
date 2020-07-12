-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 12:47 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `alunos`
--

CREATE TABLE `alunos` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `idade` mediumint(9) DEFAULT NULL,
  `matricula` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `idade`, `matricula`) VALUES
(1, 'Connor Jacobs', 23, '70615258'),
(2, 'Thane Mayo', 27, '90493183'),
(3, 'Tara Briggs', 19, '18446630'),
(4, 'Luna Makimoto', 24, '29683935'),
(5, 'Nicholas Kennedy', 22, '12679156'),
(6, 'Evelyn Branch', 23, '63746601'),
(7, 'Alexander Hills', 19, '32574147'),
(8, 'Vivien Sill', 19, '27765235'),
(9, 'Amanda Sellers', 22, '18174366'),
(10, 'Skyler Mcclain', 24, '00180735'),
(11, 'Wynne Koshi', 21, '73655495'),
(12, 'Hadassah Petty', 19, '82738484'),
(13, 'Marisa Carter', 26, '89773745'),
(14, 'Kiona Mercer', 21, '62630164'),
(15, 'Jordan Martinez', 20, '02801903'),
(16, 'Dorsey Levy', 18, '30524690'),
(17, 'Roger Mcmillan', 22, '01823043'),
(18, 'Alex Smith', 25, '91065378'),
(19, 'Josh Raymond', 23, '62382150'),
(20, 'Larissa Freeman', 20, '10992583');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
