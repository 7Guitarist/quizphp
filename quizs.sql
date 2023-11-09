-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2023 at 07:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizs`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `middlename` varchar(55) NOT NULL,
  `course` varchar(55) NOT NULL,
  `yearlevel` varchar(55) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `section` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `contactnumber` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `middlename`, `course`, `yearlevel`, `subject`, `section`, `address`, `contactnumber`, `username`, `password`) VALUES
(1, 'Efraim', 'Gondraneos', 'Cequeña', 'BSIT', '3', 'Integrative Programming', '303I', 'Quezon City', '0994655879', 'user21', '$2y$10$WRpemWCoPcv15eSsHy9YiecwvOiGTvnbOPgDVlVqZnSF5KpcFWSAC'),
(2, 'wesa', 'wesa', 'wesa', 'BSIT', '2', 'we', 'we', 'we', '23', 'admin', '$2y$10$9afjssSCuC/rx81Pf8QcxOgrI2y3de2Etp.6xkXRO1eteLOtw32FO'),
(3, 'John', 'Doe', 'Smith', 'BSCpE', '4', 'SAP', '401I', 'Mandaluyong', '12345678901', 'john', '$2y$10$z5Yb7zz3HT1RMNsVRTqKM.igsy.P/Ue9BnZLykgkLL2mbwzB/pVxy'),
(4, 'Jane', 'Doe', 'Smith', 'BSCpE', '2', 'Elective 2', '202I', 'Mandaluyong', '0958 669 8789', 'jane', '$2y$10$/lbw91MkmSZ62e2R58e16uHhIDubjSHQF4Ps.615tNouqnGIrseWS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
