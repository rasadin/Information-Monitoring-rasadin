-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 05:45 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'sakib', 'sakib@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Bob', 'bob@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02'),
(6, 'alice', 'a@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Jack', 'j@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Jack', 'j@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'rasadin', 'rasadin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'AB', 'ab@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'Adams', 'adams@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'Jabed', 'jabed@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'Rick', 'rick@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'Asif', 'asif@gmail.com', '202cb962ac59075b964b07152d234b70'),
(15, 'rasadin', 'rasadin.ewu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(16, 'rasadin', 'rasadin.ewu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(17, 'sajid', 'sa@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
