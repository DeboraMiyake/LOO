-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Maio-2019 às 22:58
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
-- Estrutura da tabela `card`
--

CREATE TABLE `card` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `titulo` text,
  `descricao` text,
  `rotulo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `card`
--

INSERT INTO `card` (`id`, `titulo`, `descricao`, `rotulo`) VALUES
(1, 'ligula elit, pretium', 'placerat. Cras dictum ultricies ligula. Nullam', 'est,'),
(2, 'fringilla euismod enim.', 'a ultricies adipiscing, enim mi tempor', 'commodo'),
(3, 'eu erat semper', 'ligula consectetuer rhoncus. Nullam velit dui,', 'imperdiet'),
(4, 'risus. Donec nibh', 'eu metus. In lorem. Donec elementum,', 'Integer'),
(5, 'lacus. Cras interdum.', 'ridiculus mus. Donec dignissim magna a', 'a'),
(6, 'orci. Phasellus dapibus', 'Nam ac nulla. In tincidunt congue', 'ut,'),
(7, 'sollicitudin orci sem', 'justo nec ante. Maecenas mi felis,', 'molestie'),
(8, 'nec tellus. Nunc', 'Integer aliquam adipiscing lacus. Ut nec', 'Vivamus'),
(9, 'tellus non magna.', 'Lorem ipsum dolor sit amet, consectetuer', 'tortor.'),
(10, 'Quisque purus sapien,', 'Aliquam nisl. Nulla eu neque pellentesque', 'ullamcorper'),
(11, 'ornare, elit elit', 'eleifend. Cras sed leo. Cras vehicula', 'dui'),
(12, 'eu erat semper', 'nunc sed pede. Cum sociis natoque', 'commodo'),
(13, 'Etiam gravida molestie', 'Nunc mauris. Morbi non sapien molestie', 'justo'),
(14, 'Vestibulum ante ipsum', 'In lorem. Donec elementum, lorem ut', 'ullamcorper.'),
(15, 'natoque penatibus et', 'dignissim tempor arcu. Vestibulum ut eros', 'justo'),
(16, 'augue ut lacus.', 'id ante dictum cursus. Nunc mauris', 'interdum.'),
(17, 'tempor bibendum. Donec', 'nibh lacinia orci, consectetuer euismod est', 'eu'),
(18, 'nisi. Mauris nulla.', 'Suspendisse ac metus vitae velit egestas', 'Aliquam'),
(19, 'Curabitur massa. Vestibulum', 'sodales nisi magna sed dui. Fusce', 'lacus.'),
(20, 'eleifend non, dapibus', 'sodales purus, in molestie tortor nibh', 'nulla'),
(21, 'sed sem egestas', 'erat, eget tincidunt dui augue eu', 'euismod'),
(22, 'sem, consequat nec,', 'porttitor scelerisque neque. Nullam nisl. Maecenas', 'nulla'),
(23, 'vel arcu eu', 'tortor. Nunc commodo auctor velit. Aliquam', 'nec'),
(24, 'iaculis quis, pede.', 'consequat purus. Maecenas libero est, congue', 'natoque'),
(25, 'non, sollicitudin a,', 'risus a ultricies adipiscing, enim mi', 'velit.'),
(26, 'consequat purus. Maecenas', 'non, sollicitudin a, malesuada id, erat.', 'quis'),
(27, 'auctor ullamcorper, nisl', 'tincidunt, neque vitae semper egestas, urna', 'bibendum'),
(28, 'posuere vulputate, lacus.', 'pharetra ut, pharetra sed, hendrerit a,', 'leo,'),
(29, 'sem magna nec', 'erat volutpat. Nulla facilisis. Suspendisse commodo', 'lacus.'),
(30, 'purus gravida sagittis.', 'interdum. Curabitur dictum. Phasellus in felis.', 'leo.'),
(31, 'Sed pharetra, felis', 'eu, odio. Phasellus at augue id', 'Vestibulum'),
(32, 'Quisque tincidunt pede', 'elementum sem, vitae aliquam eros turpis', 'luctus'),
(33, 'laoreet ipsum. Curabitur', 'Vivamus rhoncus. Donec est. Nunc ullamcorper,', 'pede,'),
(34, 'neque vitae semper', 'molestie dapibus ligula. Aliquam erat volutpat.', 'Praesent'),
(35, 'ac libero nec', 'vel, vulputate eu, odio. Phasellus at', 'Nullam'),
(36, 'sapien, cursus in,', 'ligula. Aenean gravida nunc sed pede.', 'erat'),
(37, 'vitae mauris sit', 'gravida sit amet, dapibus id, blandit', 'arcu.'),
(38, 'eros. Proin ultrices.', 'tempor arcu. Vestibulum ut eros non', 'lorem'),
(39, 'tortor nibh sit', 'malesuada. Integer id magna et ipsum', 'consequat,'),
(40, 'mauris sit amet', 'semper erat, in consectetuer ipsum nunc', 'Nunc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
