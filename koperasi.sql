-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 07:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`id`, `user_id`, `jumlah`, `waktu`) VALUES
(16, 8, 50000, '17 April 2017, 07:05:28'),
(17, 8, 100000, '17 April 2017, 07:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `tabungan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`, `tabungan`) VALUES
(1, 'admin', 'admin', 0, NULL),
(7, 'APAAJA', '$2y$10$Af.LwwVuh.tB4qvs8Q3YS.hZnicFHIfgwiRJIc36ilsYIOstulYJu', 1, 0),
(8, 'satadii11', '$2y$10$jjETwhyVWcZakERbecz37OHOt2JwmMCg6YK7xOs2HzKLmoZPRuO5K', 1, 190000),
(9, 'ayam', '$2y$10$J2dq/f7Km1RTxPWVZ5MjIurXb1IBvtLW3pDUfUj5spQ/WwwRZMMWW', 1, 0),
(10, 'etdah', '$2y$10$WHyzvOqH7/w.Z4YMqXsoSuZFijMeB1a1JEYGMNtPyVyS4wKjmq3Jm', 1, 0),
(11, 'saji', '$2y$10$w1LfaSnsl872tF7KYKMo2uitFO2tzF6trkNVMvBiOTbqInC45o0BS', 1, 0),
(12, 'ija', '$2y$10$pUIcSn4cNgpjztkbgV51Xe3YWIT9vIRnQXseCFA2VgQ51OtoKXINu', 1, 0),
(13, 'yuji', '$2y$10$AmO9muXHO1fH59HZDzTL1uJu2eBIZ7svrk2NcpN8STjpKAjJeLsD6', 1, 0),
(14, 'ujanbos', '$2y$10$mHIHc3/RlhDgeuOkybxxEOKRjnwDZMBJ02Lf2Wwz7lGloYgI2ExGm', 1, 0),
(15, 'Jiah', '$2y$10$pDSw.kXhd.qURZA8mNguxOxyKt0m454yy4b1MCf122muZxlwhUlZi', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
