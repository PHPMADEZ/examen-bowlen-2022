-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 10:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examen-2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `persoons_id` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adres` varchar(30) NOT NULL,
  `telefoonnummer` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `id` int(30) NOT NULL,
  `persoons_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medewerker`
--

CREATE TABLE `medewerker` (
  `id` int(30) NOT NULL,
  `persoons_id` int(30) NOT NULL,
  `functie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medewerker`
--

INSERT INTO `medewerker` (`id`, `persoons_id`, `functie`) VALUES
(2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `persoon`
--

CREATE TABLE `persoon` (
  `id` int(30) NOT NULL,
  `voornaam` varchar(30) NOT NULL,
  `achternaam` varchar(30) NOT NULL,
  `geboortedatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persoon`
--

INSERT INTO `persoon` (`id`, `voornaam`, `achternaam`, `geboortedatum`) VALUES
(1, 'emre', 'cengel', '2022-12-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persoons_id` (`persoons_id`);

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persoons_id` (`persoons_id`);

--
-- Indexes for table `medewerker`
--
ALTER TABLE `medewerker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persoons_id` (`persoons_id`);

--
-- Indexes for table `persoon`
--
ALTER TABLE `persoon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medewerker`
--
ALTER TABLE `medewerker`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persoon`
--
ALTER TABLE `persoon`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`persoons_id`) REFERENCES `persoon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `klant`
--
ALTER TABLE `klant`
  ADD CONSTRAINT `klant_ibfk_1` FOREIGN KEY (`persoons_id`) REFERENCES `persoon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medewerker`
--
ALTER TABLE `medewerker`
  ADD CONSTRAINT `medewerker_ibfk_1` FOREIGN KEY (`persoons_id`) REFERENCES `persoon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
