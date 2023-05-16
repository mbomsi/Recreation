-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 11:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `antibiotics`
--

CREATE TABLE `antibiotics` (
  `id` int(14) NOT NULL,
  `DrugName` text NOT NULL,
  `Quantity_In_Stock` float NOT NULL,
  `Expiry_Date` date NOT NULL,
  `Dose` int(11) NOT NULL,
  `Drug_Form` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antibiotics`
--

INSERT INTO `antibiotics` (`id`, `DrugName`, `Quantity_In_Stock`, `Expiry_Date`, `Dose`, `Drug_Form`) VALUES
(1, 'Penicillin', 500, '2030-06-04', 1, 'Tablets'),
(2, 'Metronidazole', 1000, '2028-04-18', 200, 'syrup'),
(3, 'Amoxicilline', 500, '2026-02-11', 100, 'oil'),
(7, 'hkjk', 3456, '2022-09-09', 560, 'tabs'),
(8, 'hkjk', 3456, '2022-09-09', 560, 'tabs'),
(9, 'sapharamine', 234, '2067-12-14', 45, 'tabs'),
(10, 'terinne', 456, '2056-09-24', 23, 'lala'),
(11, 'savoline', 3456, '2056-09-14', 256, 'tabs');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(14) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `UserName`, `password`) VALUES
(1, 'Fonye', 'anyebb1');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(13) NOT NULL,
  `name` varchar(299) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`) VALUES
(1, 'yebi', '645e20e99647f.jpg'),
(2, 'hello', '645e20e99647f.jpg'),
(3, 'bie', '645e20e99647f.jpg'),
(4, 'yoo', '645e20e99647f.jpg'),
(5, 'testing', '645e24f125999.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migraine_drugs`
--

CREATE TABLE `migraine_drugs` (
  `id` int(15) NOT NULL,
  `code` int(11) NOT NULL,
  `DName` varchar(15) NOT NULL,
  `DosageForm` varchar(15) NOT NULL,
  `Stock` int(15) NOT NULL,
  `Timeleft` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migraine_drugs`
--

INSERT INTO `migraine_drugs` (`id`, `code`, `DName`, `DosageForm`, `Stock`, `Timeleft`) VALUES
(1, 123, 'Paracetamol', '350', 120, '100'),
(2, 456, 'ibuprofen', '500', 30, '30'),
(3, 789, 'aspirin', '50', 450, '1200');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(34) NOT NULL,
  `Names` text NOT NULL,
  `email` varchar(13) NOT NULL,
  `Phone` int(18) NOT NULL,
  `shift` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `Names`, `email`, `Phone`, `shift`) VALUES
(3, 'NDO AMARY', 'ada@gmail.com', 67589098, 'DAY SHIFT'),
(4, 'Tagne Grace', 'Tagne@gmail.c', 698765453, 'NIGHT SHIFT'),
(5, 'Shu Gladys', 'SHU@gmail.com', 62098765, 'NIGHT SHIFT'),
(6, 'Bih bei', 'bih@gmail.com', 65646237, 'DAY SHIFT'),
(7, 'Names', 'email', 0, 'shift'),
(8, 'Names', 'email', 0, 'shift'),
(9, 'Names', 'email', 0, 'shift'),
(10, 'yaya', 'ya@gmail.com', 567192692, 'night');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antibiotics`
--
ALTER TABLE `antibiotics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migraine_drugs`
--
ALTER TABLE `migraine_drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antibiotics`
--
ALTER TABLE `antibiotics`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migraine_drugs`
--
ALTER TABLE `migraine_drugs`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(34) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
