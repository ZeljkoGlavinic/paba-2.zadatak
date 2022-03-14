-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2022 at 05:16 PM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glavinic_paba`
--

-- --------------------------------------------------------

--
-- Table structure for table `transakcije`
--

CREATE TABLE `transakcije` (
  `id` int(11) NOT NULL,
  `iznos` varchar(255) DEFAULT NULL,
  `datum` varchar(255) DEFAULT NULL,
  `vrsta` varchar(255) DEFAULT NULL,
  `korisnik` varchar(255) DEFAULT NULL,
  `valuta` varchar(255) DEFAULT NULL,
  `opis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transakcije`
--

INSERT INTO `transakcije` (`id`, `iznos`, `datum`, `vrsta`, `korisnik`, `valuta`, `opis`) VALUES
(1, '100', '2022-3-11', 'Odjeća', 'Željko Glavinić', 'HRK', 'Radne rukavice'),
(2, '200', '2022-3-10', 'Novčanik', 'Luka Glavinić', 'HRK', 'Đeparac'),
(4, '360', '2022-3-09', 'Obuća', 'Dubravka Glavinić', 'HRK', 'Zimske čizmice'),
(5, '400', '2022-3-12', 'Glazba', 'Željko Glavinić', 'HRK', 'Metronom'),
(7, '250', '2022-3-12', 'Rekreacija', 'Željko Glavinić', 'HRK', 'Športsko-rekreacijski centar'),
(8, '250', '2022-3-12', 'Kozmetika', 'Dubravka Glavinić', 'HRK', 'Nokti'),
(9, '400', '2022-3-11.', 'Alat', 'Željko Glavinić', 'HRK', 'Kutna brusilica'),
(10, '400', '2022-3-13.', 'Auto', 'Luka Glavinić', 'HRK', 'Benzin'),
(11, '220', '13.3.2022.', 'Hrana', 'Dubravka Glavinić', 'HRK', 'Lidl'),
(26, '420', '14.2.2022.', 'Radovi', 'Željko Glavinić', 'HRK', 'Vodoinstalater'),
(29, '300', '14.3.2022.', 'Harver', 'Luka Glavinić', 'HRK', 'Web kamera'),
(39, '123', '10.10.2021.', 'Glazba', 'Å½eljko', 'HRK', 'Kapodaster'),
(40, '100', '11.3.2022.', 'Odjeća', 'Željko Glavinić', 'HRK', 'Radne rukavice'),
(42, 'prvo', 'DRUGO', 'treÄ‡e', 'Äetvrto', 'peto', 'Å¡esto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transakcije`
--
ALTER TABLE `transakcije`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transakcije`
--
ALTER TABLE `transakcije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
