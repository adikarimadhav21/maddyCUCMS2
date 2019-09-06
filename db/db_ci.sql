-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2019 at 03:52 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `page_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `address`, `email`, `phone`, `photo`, `user_name`, `password`) VALUES
(2, 'Sanjay Kunwar', 'Kadaghari', 'adhikarimadhav21@gmail.com', '98411234567898', NULL, 'sanje', 'eea68ad0e04647eb523855d7564cfd568c967fe3'),
(3, 'Madhav adhikari ', 'Kadaghari', 'adhikarimadhav21@gmail.com', '98411234567898', '3rjRuDPbHnq6ldCWwLXM.jpg', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227'),
(4, 'Madhav adhikari ', 'Kadaghari', 'adhikarimadhav21@gmail.com', '98411234567898', '', 'admin', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(5, 'Madhav adhikari ', '', '', '', '', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(6, 'Madhav adhikari ', '', '', '', 'abc', 'admin', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(7, 'Madhav adhikari ', '', '', '', 'abc', 'admin', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(8, '2345678', '', '', '', 'abc', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(9, 'asd', '', '', '', 'maddy.jpg', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(10, '2345678978ijgb', '', '', '', NULL, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(11, 'asdf', '', '', '', NULL, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(12, 'mkoinn', '', '', '', 'out', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(13, '', '', '', '', 'out', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(14, '', '', '', '', '<p>You did not select a file to upload.</p>', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
