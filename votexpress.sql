-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2024 at 05:48 PM
-- Server version: 8.0.37-0ubuntu0.22.04.3
-- PHP Version: 8.1.2-1ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `username`, `password`, `profile`) VALUES
(1, 'Tosin', 'ff797f8629ff311dcc51768a5f2ed90b', 'Tosin.jpeg'),
(4, 'Nifemi', 'fa901d021e02f850099272e4fad92e0d', 'Screenshot from 2024-05-07 18-03-09.png'),
(5, 'Paul', 'c13e13da2073260c2194c15d782e86a9', 'paul.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int NOT NULL,
  `candidate_name` text NOT NULL,
  `candidate_pic` varchar(255) NOT NULL,
  `no_of_votes` int NOT NULL DEFAULT '0',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `candidate_name`, `candidate_pic`, `no_of_votes`, `status`) VALUES
(1, 'Oluwatosin Akinfenwa', 'pexels-peng-liu-169647.jpg', 1, 'old'),
(2, 'Oluwanifemi Akinfenwa', 'nife.jpeg', 0, 'old'),
(3, 'Oluwatosin Akinfenwa', 'pexels-peng-liu-169647.jpg', 1, 'old'),
(4, 'Oluwanifemi Akinfenwa ', 'nife.jpeg', 0, 'old'),
(5, 'Adegbasan Damilola', '2024-01-13-163705.jpg', 1, 'old'),
(6, 'Odunlade Oluwademilade', '2024-01-13-163919_1.jpg', 0, 'old'),
(7, 'Akindele Seun', '2024-01-14-155216.jpg', 0, 'old'),
(8, 'Bola Ahmed Tinubu', 'pexels-peng-liu-169647.jpg', 1, 'old'),
(9, 'Atiku Abubakar', 'nife.jpeg', 1, 'old'),
(10, 'Peter Obi', 'Tosin.jpg', 0, 'old'),
(11, 'Oluwatosin Akinfenwa', 'Screenshot from 2024-04-13 09-57-32.png', 1, 'active'),
(12, 'Random Person', 'pexels-peng-liu-169647.jpg', 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `elections`
--

CREATE TABLE `elections` (
  `id` int NOT NULL,
  `electionName` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'innactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `elections`
--

INSERT INTO `elections` (`id`, `electionName`, `status`) VALUES
(1, 'Freshest', 'closed'),
(2, 'Fastest', 'closed'),
(3, 'Smartest', 'closed'),
(4, 'Presidential Election 2023', 'closed'),
(5, 'Class Captain', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` text NOT NULL,
  `date_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'not'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `picture`, `date_created`, `status`) VALUES
(1, 'Tosin', 'ff797f8629ff311dcc51768a5f2ed90b', 'Tosin4(Small).jpg', '2024-05-29 10:53:08.460135', 'voted'),
(4, 'admin', '0192023a7bbd73250516f069df18b500', 'Tosin.jpg', '2024-04-19 08:53:36.595908', 'not'),
(5, 'admin', '0192023a7bbd73250516f069df18b500', 'Tosin.jpg', '2024-04-19 17:47:48.925696', 'not');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elections`
--
ALTER TABLE `elections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `elections`
--
ALTER TABLE `elections`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
