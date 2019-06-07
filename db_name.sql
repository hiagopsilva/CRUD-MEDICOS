-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2019 às 04:57
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_name`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_name`
--

CREATE TABLE `tbl_name` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `CRM` int(6) NOT NULL,
  `telefone` int(15) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(15) NOT NULL,
  `especialidades` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_name`
--

INSERT INTO `tbl_name` (`id`, `nome`, `CRM`, `telefone`, `estado`, `cidade`, `especialidades`) VALUES
(14, 'Eliana Guedes', 2132, 40045458, 'SP', 'São Paulo', 'CIRURGIA CARDÍACA'),
(15, 'Francisca Paiva', 3434, 40049090, 'RJ', ' Rio de Janeiro', 'CIRURGIA GERAL'),
(16, 'Eduardo souza', 1234, 40028922, 'GO', 'Goiás', 'CIRURGIA VASCULAR'),
(17, 'Hiago Prates', 1233, 33262836, 'SP', 'São Paulo', 'CIRURGIA DE TORAX');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_name`
--
ALTER TABLE `tbl_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_name`
--
ALTER TABLE `tbl_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
