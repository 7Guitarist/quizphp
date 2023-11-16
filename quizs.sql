-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2023 at 04:31 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(7) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_desc`
--

CREATE TABLE `quiz_desc` (
  `quiz_id` int(11) NOT NULL,
  `quiz_name` varchar(55) NOT NULL,
  `quiz_picture` varchar(255) NOT NULL,
  `quiz_title` varchar(55) NOT NULL,
  `quiz_text` varchar(255) NOT NULL,
  `quiz_mins` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_desc`
--

INSERT INTO `quiz_desc` (`quiz_id`, `quiz_name`, `quiz_picture`, `quiz_title`, `quiz_text`, `quiz_mins`) VALUES
(2, 'SQL', 'images/bb644451b484b56472f96426d1b1caf8bridge.jpg', 'SQL Quiz', 'Challenge your Database Skills with this MySQL Quiz', '20'),
(3, 'PHP', 'images/bb9df30b466700291cfc03f16fd704bcpexels-josh-hild-2422497.jpg', 'PHP Quiz', 'Learn doing php coding haystack sandbox...', '30'),
(5, 'InnoDB', 'images/5e9a87d9408940b4a889ec91d18a4d88pexels-josh-hild-2422497.jpg', 'InnoDB Quiz', 'Empower yourself with InnoDB Quiz and have a great coffee!', '33');

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
(4, 'Jane', 'Doe', 'Smith', 'BSCpE', '2', 'Elective 2', '202I', 'Mandaluyong', '0958 669 8789', 'jane', '$2y$10$/lbw91MkmSZ62e2R58e16uHhIDubjSHQF4Ps.615tNouqnGIrseWS'),
(5, 'Joseph', 'Israel', 'Efraim', 'BSCpE', '1', 'Integrative Programming', '303I', 'Mandaluyong', '0945 587 6542', 'joseph', '$2y$10$tr40SUB3V5HUudGjoHW6UeR3WHyzsgXx80lOMRMbKeoHYWDDMNcLK'),
(6, 'asdasdsada232@#', 'adsasdsa', 'asdasdasd', 'BSEcE', '3', 'asdasdas', 'asddasdas', 'asddasd', '2323 232 3232', 'awe', '$2y$10$I7X1BjYPfhHIN5Kw.Yh4sO8c05LXojSSzcN76Ck5MehE6lEuxrdQ2'),
(7, 'Samantha', 'Pena', 'Ojeda', 'BSCpE', '2', 'Integ', '303I', 'Mandaluyong', '0945 878 7565', 'sam21', '$2y$10$CDUAM7KxMKo/pItPZ1eYZ.gd8UHhZxR1GrocnE7graREut39VJslW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_desc`
--
ALTER TABLE `quiz_desc`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_desc`
--
ALTER TABLE `quiz_desc`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
