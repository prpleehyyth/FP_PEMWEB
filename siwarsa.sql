-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 08:41 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siwarsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) NOT NULL,
  `tipe` enum('ruko','tenant') NOT NULL,
  `harga` decimal(10,2) NOT NULL DEFAULT 0.00,
  `no_ruko` varchar(50) NOT NULL DEFAULT '',
  `desc` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('available','rented','unavailable') DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `password`) VALUES
(1, 'fubvbv', 'wbwuvb', 'fwqub', '$2y$10$ZDiS94sAyE7/z0ysMher/OF4SUQnxhZSi.Cy9AfZ7ZeeRjhyp9dT.'),
(2, 'sqndq', 'cwiniqvni', 'cnvni', '$2y$10$WLSozKJCEoU87TQWfIesUOhuXtMk5o2wMI0z0UE5Jf7rqAsx/GlbW'),
(3, 'arya', 'arya', 'arya', '$2y$10$7DFoX1MuEsUJj3OWatiqIelU6P4.HV9d3RCM4z6/4EJIwPqMi2kS.'),
(4, 'alfan', 'alfan', 'alfan', '$2y$10$sJ2AsVAtNJC.fde/DeijHuK.Xm4UzCpmysH4hZuHZ3M6668c026au'),
(5, 'vaniaa', 'vaniaa', 'vania', '$2y$10$iZQrmDnM5mYYhwj8TRLHx.a0htV.W0UUR/nAR.LkDaazC8fpd9.M2'),
(7, 'satrio', 'satrioagnag', 'Satrio Agna', '$2y$10$NKGVQn6TsnkOndXCd6ob9OQ6ZrpghuMjezK0BLJsJXC.OwwSmsK5W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
