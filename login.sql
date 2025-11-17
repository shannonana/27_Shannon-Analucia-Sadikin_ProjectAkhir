-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2025 at 02:13 AM
-- Server version: 8.0.43
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `full_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `year` date NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `full_name`, `username`, `email`, `year`, `password`) VALUES
(1, 'shan', 'shan', 'sadikinshannon@gmail.com', '2025-11-01', 'password'),
(2, 'vinn', 'vinn', 'vin@gmail.com', '2025-11-06', 'password'),
(3, 'chay', 'chay', 'chay@gmail.com', '2025-11-10', '$2y$10$18vo4HcKyX2AFdD9RbFi6.5tvvnMs.AcVv2eQx/AkjVQ3LXWtMSJ2'),
(4, 'vin', 'vin', 'vin2@gmail.com', '2025-11-06', '$2y$10$C8Z9zPGOCXhj3KEIw5Vnre2ZDYIL9xIupGUniqRu8dicu4H40be2u'),
(5, 'aa', '12', 'a@q', '2025-11-13', '$2y$10$.8Wxm2M1Dkdi.MfQLUTtnenewnWAFunNKGRW6/TchTHjXbAAfjNSq'),
(6, 'Petrus', 'petrus', 'petrus@gmail', '2024-01-01', '$2y$10$9MnkWOlVe1hvuZA7peY1rOehfT.p1SL9WXzbup6/QCkBQWdqEBSS.'),
(7, 'Joseph', 'joseph', 'jo@gm', '2025-11-06', '$2y$10$Ayyy6BU1YPvLwBpgFa9XQ.mDSjhK49vzjmKAbuyxbCzFWWlXdyAra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
