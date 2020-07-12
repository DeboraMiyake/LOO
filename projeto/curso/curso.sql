-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
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
-- Table structure for table `curso`

/*create database basedados;*/

CREATE TABLE `curso` (
 `id_curso` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
 `nome_curso` varchar(30) NOT NULL,
 `dt_inicio` date NOT NULL,
 `dt_termino` date NOT NULL,
 `hora_inicio` varchar(10) NOT NULL,
 `hora_termino` varchar(10) NOT NULL,
 `conteudo` text NOT NULL,
 `valor` varchar(10) NOT NULL,
 `prof` varchar(20) NOT NULL   
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `curso` (`id_curso`, `nome_curso`, `dt_inicio`, `dt_termino`, `hora_inicio`, `hora_termino`, `conteudo`, `valor`, `prof`) VALUES
(1, 'Web Designer', '2019-08-01', '2020-07-27', '08:00', '12:10', 'O curso de Web Designer é indicado para todos as pessoas que desejam iniciar carreira no setor, fornece ao participante as habilidades necessárias para ingressar no mercado de internet e programação web, atendendo às demandas daqueles que almejam possuir a capacitação específica, para que possam se desenvolver apresentando diferencial competitivo.', '270.00', 'Lidia Nunes'),
(2, 'Logística', '2020-02-03', '2021-07-27', '13:30', '17:00', 'O curso habilita profissionais para atuar e aplicar procedimentos de transporte, armazenamento e logística, sendo um gestor das instalações e operações dentro da cadeia logística das empresas. O aluno desenvolverá habilidades técnicas para gerir procedimentos de compras, recebimento, armazenagem, movimentação, expedição e distribuição de materiais e produtos assim como administração de estoques e controle de qualidade, segurança e higiene dentro do processo logístico.', '350.00', 'Gabriela Pereira'),
(3, 'Photoshop', '2020-02-03', '2020-10-23', '14:20', '18:00', 'Voltado para os interessados em tratamento de imagens, esse curso oferece o aprendizado em edição e manipulação de imagens com Adobe Photoshop, dominando os principais recursos e ferramentas do software. Além do tratamento de fotografias digitais e analógicas, você irá conhecer os diversos formatos de arquivos e características das imagens, assim como a utilização de filtros, cores e efeitos de camada e demais técnicas.', '150.00', 'Ricardo Felipe'),
(4, 'Hardware', '2019-08-05', '2020-11-27', '08:00', '12:10', 'Aprenda a fazer manutenção de computadores e impressoras executando tarefas como limpar, reparar, montar e desmontar seus componentes externos e internos. Além dos conhecimentos relacionados às peças como placa mãe, placas de vídeo, memória processadores e drives, você também será capaz de configurar redes locais, cabeadas e wireless.', '400.00', 'Rodrigo Silva'),
(5, 'Informática ', '2019-08-05', '2020-08-03', '08:00', '12:00', 'Desenvolve programas de computador para Internet, seguindo as especificações e paradigmas da lógica de programação e das linguagens de programação. Utiliza ferramentas de desenvolvimento de sistemas, para contruir soluções que auxiliam o processo de criação de interfaces e aplicativos empregados no comércio e marketing eletrônicos.', '350.00', 'Marcia Pereira');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Débora Miyake - 1800272
