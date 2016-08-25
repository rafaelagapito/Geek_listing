-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Ago-2016 às 18:38
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `hqs`
--

CREATE TABLE `hqs` (
  `id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `editora` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `personagem` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `hqs`
--

INSERT INTO `hqs` (`id`, `titulo`, `editora`, `status`, `personagem`, `data`, `loc`) VALUES
(134, 'pp', 'pppp', 'p', 'pp', 'pp', 'ppp'),
(136, 'The Flash #2', 'DC', 'Lido', 'Flash ', '17/08/2016', 'Web');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hqs`
--
ALTER TABLE `hqs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hqs`
--
ALTER TABLE `hqs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
