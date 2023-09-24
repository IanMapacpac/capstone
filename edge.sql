-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2023 at 01:02 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edge`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id_number` int(11) NOT NULL,
  `proj_id` varchar(250) NOT NULL,
  `proj_type` varchar(250) NOT NULL,
  `proj_name` varchar(250) NOT NULL,
  `street` varchar(250) NOT NULL,
  `barangay` varchar(250) NOT NULL,
  `municipal` varchar(250) NOT NULL,
  `proj_desc` text NOT NULL,
  `proj_amount` int(250) NOT NULL,
  `contractor` varchar(250) NOT NULL,
  `contractor_owner` varchar(250) NOT NULL,
  `proj_engr` varchar(250) NOT NULL,
  `source_fund` varchar(250) NOT NULL,
  `mode_impliment` varchar(250) NOT NULL,
  `date_start` date NOT NULL,
  `calendar_days` int(250) NOT NULL,
  `date_target` date NOT NULL,
  `date_revised` date NOT NULL,
  `date_completed` date NOT NULL,
  `actual_accomplishDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id_no` int(250) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `prefix` varchar(250) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(250) NOT NULL,
  `brgy` varchar(250) NOT NULL,
  `mncpl` varchar(250) NOT NULL,
  `province` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id_no`, `user_id`, `f_name`, `m_name`, `l_name`, `prefix`, `birthday`, `gender`, `brgy`, `mncpl`, `province`, `email`, `username`, `contact`, `password`, `regdate`) VALUES
(1, 'jdoe01', 'john', 'x', 'doe', 'll', '2023-09-06', 'male', 'tabi', 'boac', 'MDQ', 'ianmapacpac18@gmail.com', 'imapacpac18', '09991234567', '1234', '2023-07-26 12:28:11'),
(3, 'fSurname01', 'roronoa', 'aa', 'zoro', '#', '2021-12-31', 'male', 'tabi', 'boac', 'MDQ', 'ianmapacpac17@gmail.com', 'imapacpac17', '09991234566', '4321', '2023-09-20 17:07:20'),
(4, 'fSurname01', 'roronoa', '', 'zoro', '#', '2018-05-03', 'female', 'tanza', 'mogpog', 'MDQ', 'ian@mail.com', 'rzoro', '09998765432', '0000', '2023-09-21 00:03:58'),
(5, 'fSurname01', 'Ian', 'Berte', 'Mapacpac', '#', '2002-06-17', '#', 'Tabi', 'Boac', 'Marinduque', 'mapacpac.ian@mscmarinduque.edu.ph', 'iMapacpac', '09672746880', 'iMapacpac', '2023-09-24 12:27:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_number` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id_no` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
