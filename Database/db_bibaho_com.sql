-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 07:41 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bibaho_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_request`
--

CREATE TABLE `table_request` (
  `Request_id` int(10) NOT NULL,
  `Sender_id` int(10) NOT NULL,
  `Receiver_id` int(10) NOT NULL,
  `Accept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_request`
--

INSERT INTO `table_request` (`Request_id`, `Sender_id`, `Receiver_id`, `Accept`) VALUES
(3, 7, 3, 1),
(5, 7, 8, 1),
(9, 7, 3, 0),
(10, 7, 7, 1),
(12, 9, 3, 0),
(13, 9, 4, 0),
(14, 9, 5, 1),
(15, 11, 9, 1),
(16, 9, 3, 0),
(18, 11, 8, 1),
(19, 12, 8, 1),
(20, 8, 13, 1),
(21, 8, 14, 1),
(22, 13, 5, 0),
(25, 13, 10, 0),
(26, 8, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `g_id` int(10) NOT NULL,
  `Picture` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`g_id`, `Picture`, `user_id`) VALUES
(1, 'Pictures51.jpg', 454),
(2, 'Pictures53.jpg', 3),
(3, 'Pictures31.jpg', 3),
(4, 'Pictures42.jpg', 12),
(7, 'p1.jpg', 9),
(8, 'p51.jpg', 9),
(9, 'p6.jpg', 9),
(10, 'p7.jpg', 9),
(11, 'p19.jpg', 9),
(12, 'p81.jpg', 10),
(13, 'p10.jpg', 10),
(14, 'p12.jpg', 10),
(15, 'p121.jpg', 10),
(16, 'p11.jpg', 8),
(17, 'p9.jpg', 8),
(18, 'p21.jpg', 8),
(20, 'p4.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `Place_id` int(10) NOT NULL,
  `Place_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`Place_id`, `Place_name`) VALUES
(4, 'Dhaka'),
(5, 'Mymensing'),
(6, 'Rajshahi'),
(7, 'Moulvibazar'),
(8, 'Tangail'),
(9, 'Khulna'),
(10, 'Chittagong'),
(11, 'Barisal'),
(12, 'Faridpur'),
(13, 'Dinajpur'),
(14, 'Sunamgonj'),
(15, 'Sreemongol'),
(16, 'Coxsbazar'),
(17, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Date_of_Birth` int(10) NOT NULL,
  `Picture` varchar(20) NOT NULL,
  `Height` int(10) NOT NULL,
  `NID` int(10) NOT NULL,
  `Gender` text NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Type` text NOT NULL,
  `Religion` text NOT NULL,
  `Place_id` varchar(20) NOT NULL,
  `Contact_Number` int(10) NOT NULL,
  `Earning_Status` text NOT NULL,
  `Educational_Qualification` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `Name`, `Email`, `Password`, `Address`, `Date_of_Birth`, `Picture`, `Height`, `NID`, `Gender`, `Status`, `Type`, `Religion`, `Place_id`, `Contact_Number`, `Earning_Status`, `Educational_Qualification`) VALUES
(4, 'Neel', 'neel@gmail.com', '123', 'Kulaura', 12, 'Pictures1.jpg', 5, 78965412, 'Male', '0', 'Admin', 'Hindu', '1', 1304111626, 'Engineer', 'MSC in Software'),
(5, 'Durjoy Bhatt', 'durjoy@gmail.com', '121', 'Sylhet', 1997, 'Pictures4.jpg', 6, 145795466, 'Male', 'Devorced', 'User', 'Hindu', '2', 18457148, 'Doctor', 'BA'),
(8, 'Nafisa Nelu', 'nafisa@gmail.com', '123456', 'Sylhet', 12, 'p2.jpg', 5, 2147483647, 'Female', 'Devorced', 'User', 'Muslim', '1', 1712589647, 'House Wife', 'HSC'),
(9, 'Mollika Roy', 'mollika1995@gmail.com', '123', 'Mymensing,Bangladesh', 12, 'p5.jpg', 6, 2147483647, 'Female', 'Unmarried', 'User', 'Hindu', '2', 1658945724, 'Private Service', 'MBA in Accounting'),
(10, 'Samiya Jannat', 'samiya@gmail.com', '123', 'Dinajpur', 1997, 'p8.jpg', 5, 2147483647, 'Female', 'Unmarried', 'User', 'Muslim', '9', 1956874521, 'Job', 'BA'),
(11, 'Rahul Chowdhury', 'rahul@gmail.com', '123', '', 0, '', 0, 0, '', '', 'User', '', '', 0, '', ''),
(12, 'Fahim Ahmed', 'fahim@gmail.com', '123', 'Dhaka', 12, 'p17.jpg', 6, 2147483647, 'Male', 'Unmarried', 'User', 'Muslim', '2', 1712581423, 'Business', 'B com'),
(13, 'Shamim Hossain', 'shamim@gmail.com', '123', '', 0, '', 0, 0, '', '', 'User', '', '', 0, '', ''),
(14, 'Rahat Takuldar', 'rahat001@gmail.com', '123', '', 0, '', 0, 0, '', '', 'User', '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_request`
--
ALTER TABLE `table_request`
  ADD PRIMARY KEY (`Request_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`Place_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_request`
--
ALTER TABLE `table_request`
  MODIFY `Request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `g_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `Place_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
