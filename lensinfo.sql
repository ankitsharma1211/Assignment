-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 07:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `lensinfo`
--

CREATE TABLE `lensinfo` (
  `id` int(11) NOT NULL,
  `rightSPH` double NOT NULL,
  `rightCYL` double NOT NULL,
  `rightAXI` double NOT NULL,
  `rightAdd` float NOT NULL,
  `leftSPH` double NOT NULL,
  `leftCYL` double NOT NULL,
  `leftAXI` double NOT NULL,
  `leftAdd` double NOT NULL,
  `PDSPH` double NOT NULL,
  `PDCYL` double NOT NULL,
  `nearPDSPH` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lensinfo`
--

INSERT INTO `lensinfo` (`id`, `rightSPH`, `rightCYL`, `rightAXI`, `rightAdd`, `leftSPH`, `leftCYL`, `leftAXI`, `leftAdd`, `PDSPH`, `PDCYL`, `nearPDSPH`) VALUES
(1, 36229, 36453, 36454, 36453, 36231, 36451, 36452, 36452, 36237, 0, 36233),
(2, 36229, 36452, 36450, 36449, 36231, 36448, 36449, 36452, 36231, 36443, 36232);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lensinfo`
--
ALTER TABLE `lensinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lensinfo`
--
ALTER TABLE `lensinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
