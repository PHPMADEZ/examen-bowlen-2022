-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 03:21 PM
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
-- Database: `examen-2022-reservering`
--

-- --------------------------------------------------------

--
-- Table structure for table `persoon`
--

CREATE TABLE `persoon` (
  `Id` int(11) NOT NULL,
  `TypePersoonId` int(11) NOT NULL,
  `Voornaam` varchar(30) NOT NULL,
  `Tussenvoegsel` varchar(30) DEFAULT NULL,
  `Achternaam` varchar(30) NOT NULL,
  `Roepnaam` varchar(30) NOT NULL,
  `isVolwassen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persoon`
--

INSERT INTO `persoon` (`Id`, `TypePersoonId`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Roepnaam`, `isVolwassen`) VALUES
(1, 1, 'Mazin', NULL, 'Jamil', 'Mazin', 1),
(2, 1, 'Arjan', 'de', 'Ruijter', 'Arjan', 1),
(3, 1, 'Hans', NULL, 'Odijk', 'Hans', 1),
(4, 1, 'Dennis', 'van', 'Wakeren', 'Dennis', 1),
(5, 2, 'Wilco', 'Van de', 'Grift', 'Wilco', 1),
(6, 3, 'Tom', NULL, 'Sanders', 'Tom', 0),
(7, 3, 'Andrew', NULL, 'Sanders', 'Andrew', 0),
(8, 3, 'Julian', NULL, 'Kaldenheuvel', 'Julian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservering`
--

CREATE TABLE `reservering` (
  `Id` int(11) NOT NULL,
  `PersoonId` int(11) NOT NULL,
  `OpeningstijdId` int(11) NOT NULL,
  `TariefId` int(11) NOT NULL,
  `BaanId` int(11) NOT NULL,
  `PakketOptieId` int(11) DEFAULT NULL,
  `ReserveringStatusId` int(11) NOT NULL,
  `Reserveringsnummer` varchar(30) NOT NULL,
  `datum` date NOT NULL,
  `AantalUren` int(11) NOT NULL,
  `BeginTijd` time NOT NULL,
  `EindTijd` time NOT NULL,
  `AantalVolwassen` int(11) NOT NULL,
  `AantalKinderen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservering`
--

INSERT INTO `reservering` (`Id`, `PersoonId`, `OpeningstijdId`, `TariefId`, `BaanId`, `PakketOptieId`, `ReserveringStatusId`, `Reserveringsnummer`, `datum`, `AantalUren`, `BeginTijd`, `EindTijd`, `AantalVolwassen`, `AantalKinderen`) VALUES
(1, 1, 2, 1, 8, 1, 1, '2022122000001', '2022-12-20', 1, '15:00:00', '16:00:00', 4, 2),
(2, 2, 2, 1, 2, 3, 1, '2022122000002', '2022-12-20', 1, '17:00:00', '18:00:00', 4, NULL),
(3, 3, 7, 2, 3, 1, 1, '2022122400003', '2022-12-24', 2, '16:00:00', '18:00:00', 4, NULL),
(4, 1, 2, 1, 6, NULL, 1, '2022122700004', '2022-12-27', 2, '17:00:00', '19:00:00', 2, NULL),
(5, 4, 3, 1, 4, 4, 1, '2022122800005', '2022-12-28', 1, '14:00:00', '15:00:00', 3, NULL),
(6, 5, 10, 3, 5, 4, 1, '2022122800006', '2022-12-28', 2, '19:00:00', '21:00:00', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reserveringstatus`
--

CREATE TABLE `reserveringstatus` (
  `Id` int(11) NOT NULL,
  `Naam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserveringstatus`
--

INSERT INTO `reserveringstatus` (`Id`, `Naam`) VALUES
(1, 'Bevestigd'),
(2, 'Geannuleerd'),
(3, 'Inbehandeling');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persoon`
--
ALTER TABLE `persoon`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reservering`
--
ALTER TABLE `reservering`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reserveringstatus`
--
ALTER TABLE `reserveringstatus`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persoon`
--
ALTER TABLE `persoon`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservering`
--
ALTER TABLE `reservering`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reserveringstatus`
--
ALTER TABLE `reserveringstatus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
