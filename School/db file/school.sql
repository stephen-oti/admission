-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 06:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'bjhgjhg', 'jhgjhgjhg@masw', '1564564564', 'gjhkcjgckgcgc', '2022-05-20 15:15:47', NULL),
(2, 'Ezekiel Maina', 'maina@cont.com', '154654564', 'ffjfjfjhgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '2022-05-21 15:38:11', NULL),
(3, 'Ezekiel Maina', 'maina@cont.com', '154654564', 'ffjfjfjhgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '2022-05-21 15:39:40', NULL),
(4, 'Ezekiel Maina', 'maina@cont.com', '154654564', 'ffjfjfjhgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '2022-05-21 15:39:51', NULL),
(5, 'Ezekiel Maina', 'maina@cont.com', '154654564', 'ffjfjfjhgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '2022-05-21 15:39:56', NULL),
(6, 'Ezekiel Maina', 'maina@cont.com', '154654564', 'ffjfjfjhgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '2022-05-21 15:41:20', NULL),
(7, 'Ezekiel Maina', 'maina@cont.com', '154654564', 'ffjfjfjhgffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '2022-05-21 15:43:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(1, 'mainaezekiel@gmail.com', '2021-06-30 06:11:18'),
(2, 'eegege@gmail.com', '2022-05-17 23:37:10'),
(3, '000CFFHGFHGFH@GMAIL', '2022-05-21 15:23:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
