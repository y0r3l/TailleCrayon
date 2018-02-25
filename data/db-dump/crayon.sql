-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 05:43 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crayon`
--

-- --------------------------------------------------------

--
-- Table structure for table `_utilisateurs`
--

CREATE TABLE `_utilisateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `motdepasse` varchar(600) NOT NULL,
  `indice` varchar(140) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_utilisateurs`
--

INSERT INTO `_utilisateurs` (`id`, `nom`, `prenom`, `mail`, `motdepasse`, `indice`) VALUES
(17, 'Malcuit', 'Harold', 'harold.malcuit@gmail.com', '4a74594b47e3728ebd200c4858cdddddfef746986fe98a72395b0424ccdd08383f120f173cbaca7e5c9ac432597747858fc7368842f1ae16d11770addf178ba1', 'Nom de mon premier chien et numÃ©ro de dÃ©partement');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_utilisateurs`
--
ALTER TABLE `_utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_utilisateurs`
--
ALTER TABLE `_utilisateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
