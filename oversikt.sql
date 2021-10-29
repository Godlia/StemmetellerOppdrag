-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29. Okt, 2021 10:27 AM
-- Tjener-versjon: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stemmeteller`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `oversikt`
--

CREATE TABLE `oversikt` (
  `id` int(11) NOT NULL,
  `partiNavn` varchar(255) DEFAULT NULL,
  `stemmer` int(11) DEFAULT NULL,
  `mandater` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dataark for tabell `oversikt`
--

INSERT INTO `oversikt` (`id`, `partiNavn`, `stemmer`, `mandater`) VALUES
(1, 'Arbeiderpartiet', 74, 0),
(2, 'Høyre', 56, 0),
(3, 'Senterpartiet', 31, 0),
(4, 'Fremskrittspartiet', 2, 0),
(5, 'Sosialistisk Venstreparti', 126, 0),
(6, 'Venstre', 73, 0),
(7, 'Kristelig Folkeparti', 43, 0),
(8, 'Miljøpartiet De Grønne', 60, 0),
(9, 'Rødt', 4, 0),
(10, 'Pasientfokus', 42, 0),
(11, 'Norske Samers Riksforbund', 91, 0),
(12, 'Nordkallottfolket', 41, 0),
(13, 'Samefolkets Parti', 52, 0),
(14, 'Flyttsamelista', 73, 0),
(15, 'Alliansen', 51, 0),
(16, 'Feministisk Initiativ', 97, 0),
(17, 'Helsepartiet', 6, 0),
(18, 'Liberalistene', 12, 0),
(19, 'Norges Kommunistiske Parti', 85, 0),
(20, 'Piratpartiet', 40, 0),
(21, 'Industri- og Næringspartiet', 4, 0),
(22, 'Partiet Sentrum', 35, 0),
(23, 'Redd Naturen', 47, 0),
(24, 'Generasjonspartiet', 23, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oversikt`
--
ALTER TABLE `oversikt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oversikt`
--
ALTER TABLE `oversikt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
