-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 06:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'Arnob123');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `file_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `file_name` varchar(400) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`file_id`, `job_id`, `file_name`, `email`, `cv`) VALUES
(6, 5, 'cv/Screenshot 2021-05-18 232217.png', 'arnobghosh.ko@gmail.com', '?PNG\r\n\Z\r\n\0\0\0\r\nIHDR\0\0-\0\0?\0\0\0???\0\0\0sRGB\0???\0\0\0gAMA\0\0???a\0\0\0	pHYs\0\0?\0\0????\0\0??IDATx^????ֆk?9PPQDQ?{1~̂???@\\??(AQ?^&\\t??#`?UA?PT???3]??35?i򜗧?????3=??:uN?????Z??O???6??x??x?6?(??(??(??(???N?ź??oV?Z*Z(??(??(??(??:?$Z???\Zf??'),
(7, 5, 'cv/Sketch_1622147743348.jpg', 'arnobghosh.ko@gmail.com', '????\0JFIF\0\0\0\0\0\0??(ICC_PROFILE\0\0\0\0\0\0\0\0\0mntrRGB XYZ \0\0\0\0\0\0\0\0\0\0\0\0acsp\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0\0?-\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0	desc\0\0\0?\0\0\0trXYZ\0\0d\0\0\0gXYZ\0\0x\0\0\0bXYZ\0\0?\0\0\0rTRC\0\0?\0\0\0(gTRC\0\0?\0\0\0(bTRC\0\0?\0\0\0(w');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `user` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`user`, `password`, `email`, `DOB`, `gender`, `address`, `phone`, `company`) VALUES
('Arnob', '$2y$10$XjtgBCu6c3jJShG0GjW2h.ompqKHIrRPmVcJpT61LQ9bZ2fsobuO2', 'arnobghosh.go@gmail.com', '1999-02-05', 'Male', '26/30 Ruplal dash lane, kagojitola, sutrapur,Dhaka 1100', '01795518641', 'padda gorup');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `posted_by` varchar(255) NOT NULL,
  `jt` varchar(255) NOT NULL,
  `employee_needed` int(255) NOT NULL,
  `salaries` int(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `Exp` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`posted_by`, `jt`, `employee_needed`, `salaries`, `duration`, `qualification`, `Exp`, `des`, `sex`, `stat`, `id`) VALUES
('arnobghosh.go@gmail.com', 'ali', 1, 1000, '6hrs', 'mba', '2years', 'sjhgudfhgurthg', 'male', 'dddyurthdfhgydu', 5),
('arnobghosh.to@gmail.com', 'IT', 20, 50000, '8hrs/days', 'M.Sc in CSe', '2years', 'tfhh', 'male', 'dthdttth', 7),
('arnobghosh.go@gmail.com', 'sales exicutive', 5, 10000, '12hours/day', 'H.S.C and fluent in English', '2years atleast', 'you have to ...................', 'Female', 'dfsdfgsdgsdz', 9);

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `user` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`user`, `password`, `email`, `DOB`, `gender`, `address`, `phone`) VALUES
('Arnob', '$2y$10$1nI4BvdhCH9ramV0wkkxe.ZJ43I54fMM7GmZbv/crehS/CSy1KY/C', 'arnobghosh.ko@gmail.com', '2019-09-11', 'Male', '26/30 Ruplal dash lane, kagojitola, sutrapur,Dhaka 1100', '0179551864');

-- --------------------------------------------------------

--
-- Table structure for table `reset_pass`
--

CREATE TABLE `reset_pass` (
  `name` varchar(255) NOT NULL,
  `keyy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reset_pass`
--
ALTER TABLE `reset_pass`
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`email`) REFERENCES `job_seeker` (`email`);

--
-- Constraints for table `reset_pass`
--
ALTER TABLE `reset_pass`
  ADD CONSTRAINT `reset_pass_ibfk_1` FOREIGN KEY (`name`) REFERENCES `admin` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
