-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 03:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;


--
-- Database: `foodprocessor`
--

-- --------------------------------------------------------

--
-- Table structure for table `finishedproducts`
--

CREATE TABLE `finishedproducts` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pquantity` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `addedBy` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finishedproducts`
--

INSERT INTO `finishedproducts` (`id`, `pname`, `pquantity`, `pprice`, `addedBy`) VALUES
(1, 'Meats.', '1000', '20000', '1'),
(2, 'Meats.', '1', '2000', '2');

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterials`
--

CREATE TABLE `rawmaterials` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pquantity` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `addedBy` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `usertype`, `status`) VALUES
(1, 'akabwai', 'Akabwai', '$2y$10$j9G/YWcWkegztxJOzD1vzuSCeme6O3N8veUzyK3xS7v7PzGJHUpu.', 'su', '0'),
(2, 'lucas', 'George Lucas', '$2y$10$VnhiRn/bGOPDkaxbkZ5lBu09l83pCX4OykZjX.5d8hOiDEJdIanay', 'root', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finishedproducts`
--
ALTER TABLE `finishedproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawmaterials`
--
ALTER TABLE `rawmaterials`
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
-- AUTO_INCREMENT for table `finishedproducts`
--
ALTER TABLE `finishedproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rawmaterials`
--
ALTER TABLE `rawmaterials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
