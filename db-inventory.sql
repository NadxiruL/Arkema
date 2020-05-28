-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 12:01 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `title`, `des`) VALUES
(1, 'Info Terkini', 'bangkokkk..');

-- --------------------------------------------------------

--
-- Table structure for table `collector`
--

CREATE TABLE `collector` (
  `collectorid` int(100) NOT NULL,
  `nompendaftaran` int(100) NOT NULL,
  `namasyarikat` varchar(1000) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `nomtelefon` varchar(1000) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collector`
--

INSERT INTO `collector` (`collectorid`, `nompendaftaran`, `namasyarikat`, `username`, `password`, `email`, `nomtelefon`, `status`) VALUES
(8, 123456, 'pkt1', 'pkt1', 'pkt1', 'PKT@EDU.MY', '096882345', 1),
(9, 11223344, 'Majlis Daerah Setiu', 'mds', 'mds', 'mds@gov.my', '09862235', 1),
(10, 6689534, 'Majlis Daerah Marang', 'mdm', 'mdm', 'mdm@gov.my', '069823654', 1),
(13, 1234, 'GIANT', 'giant', 'giant', 'giant@gmail.com', '12345', 1),
(14, 12345, 'LEXEE', 'SARAH', 'sarah', 'sitisarah.poli@gmail.com', '0199053486', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`, `date`, `time`) VALUES
(19, 'asd', 'asd', 1, '', ''),
(20, 'test', 'test', 1, '', ''),
(21, 'din', 'din', 1, '', ''),
(22, 'test', 'testttttt', 1, '', ''),
(23, 'kemana harini', 'tak kemana rumah je', 1, '', ''),
(24, 'ambik barang jap', 'kat wakaf pelam', 1, '', ''),
(25, 'testsstst', 'testsstst', 1, '', ''),
(26, 'asd', 'asd', 1, '', ''),
(27, 'abu', '1689 jaalaoao', 1, '', ''),
(28, 'woi drah ar', 'mari ambik pc aku ni 5 butir anjing faker', 1, '25-09-2019', '12:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `costumer_id` int(10) NOT NULL,
  `costumer_type` varchar(50) NOT NULL,
  `costumer_name` varchar(1000) NOT NULL,
  `costumer_ic` varchar(50) NOT NULL,
  `costumer_contact` varchar(50) NOT NULL,
  `costumer_address` longtext NOT NULL,
  `costumer_daerah` text NOT NULL,
  `costumer_job` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`costumer_id`, `costumer_type`, `costumer_name`, `costumer_ic`, `costumer_contact`, `costumer_address`, `costumer_daerah`, `costumer_job`) VALUES
(46, 'Individual', 'Amir Nisha Bin Ahmed', '930206115665', '0139227346', '1214 Jalan Mawar 8 Taman Permint Jaya Chendering 21080 Kuala Terenggganu Terengganu', 'Kuala Terengganu', ''),
(47, 'Individual', 'Mohd Bin Idris', '570204115227', '0199898653', '1689 jalan mawar 11 taman permin jaya chendering 21080 kuala terengganu', 'Kuala Terengganu', ''),
(48, 'Household', 'Siti Saleha', '980204220330', '0199898874', '1689 mawar 12 chendering', 'Dungun', 'Tidak Bekerja'),
(49, 'Individual', 'test', '1234', '1234', '123 kuala terengganu', 'Marang', 'Bekerja Sendiri'),
(52, 'Household', 'RASMALIZA BT RASHID', '82082303512', '0197823660', '121', 'Kuala Terengganu', 'Professional');

-- --------------------------------------------------------

--
-- Table structure for table `historyredeem`
--

CREATE TABLE `historyredeem` (
  `id` int(11) NOT NULL,
  `ic_cus` varchar(1000) NOT NULL,
  `item` varchar(1000) NOT NULL,
  `point` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `time` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historyredeem`
--

INSERT INTO `historyredeem` (`id`, `ic_cus`, `item`, `point`, `date`, `time`, `status`) VALUES
(3, '930206115665', 'Pendrive Sandisk 16GB', '100', '23-09-2019', '09:46:48', '2'),
(4, '930206115665', 'Mouse Logitech G103 Prodigy Gaming', '150', '23-09-2019', '10:06:21', '0'),
(5, '930206115665', 'Mouse Logitech G103 Prodigy Gaming', '150', '23-09-2019', '10:30:52', '0'),
(6, '930206115665', 'Pendrive Sandisk 16GB', '100', '25-09-2019', '04:14:19', '2');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(10) NOT NULL,
  `id_cus` varchar(1000) NOT NULL,
  `item_name` varchar(1000) NOT NULL,
  `quan` int(10) NOT NULL,
  `point` varchar(1000) NOT NULL,
  `status` int(100) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `collector` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `id_cus`, `item_name`, `quan`, `point`, `status`, `year`, `month`, `day`, `collector`) VALUES
(118, '930206115665', 'Computer', 5, '50', 0, 0, 12, 0, 'GIANT'),
(119, '930206115665', 'TV', 5, '50', 0, 0, 12, 0, 'GIANT'),
(121, '930206115665', 'PHOTOSTAT', 10, '100', 0, 0, 12, 0, 'GIANT'),
(122, '930206115665', 'TV', 20, '200', 0, 0, 12, 0, 'Majlis Daerah Marang'),
(124, '930206115665', 'AIRCOND', 2, '20', 1, 0, 1, 0, 'Majlis Daerah Marang'),
(125, '570204115227', 'Computer', 5, '50', 1, 0, 1, 0, 'Majlis Daerah Setiu'),
(128, '570204115227', 'AIRCOND', 1, '10', 1, 2020, 1, 14, 'Majlis Daerah Setiu');

-- --------------------------------------------------------

--
-- Table structure for table `item2`
--

CREATE TABLE `item2` (
  `id` int(11) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item2`
--

INSERT INTO `item2` (`id`, `pic`, `des`) VALUES
(2, '06-09-201901.40.037.jpg', 'TV'),
(3, '06-09-201901.40.417.jpg', 'PRINTER'),
(4, '06-09-201901.40.547.jpg', 'PHOTOSTAT'),
(5, '06-09-201901.43.427.jpg', 'AIRCOND'),
(6, '06-09-201903.55.107.jpg', 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `redeemitem`
--

CREATE TABLE `redeemitem` (
  `id` int(11) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `point` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `redeemitem`
--

INSERT INTO `redeemitem` (`id`, `pic`, `des`, `point`) VALUES
(1, '06-09-201906.35.172.jpg', 'Pendrive Sandisk 16GB', '100'),
(2, '06-09-201906.36.452.jpg', 'Mouse Logitech G103 Prodigy Gaming', '150'),
(3, '060920190643092.jpg', 'Powerbank Pineng 10000MAH NEW MODEL', '200');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `token_id` int(10) NOT NULL,
  `costumer_ic` varchar(50) NOT NULL,
  `total` varchar(1000) NOT NULL,
  `total_point` varchar(1000) NOT NULL,
  `total_redeem_point` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`token_id`, `costumer_ic`, `total`, `total_point`, `total_redeem_point`) VALUES
(6, '930206115665', '20', '420', '500'),
(7, '570204115227', '80', '80', '0'),
(8, '010', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `userrole` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `useremail`, `userrole`) VALUES
(8, 'collector', 'collector', 'arkema@mail', 'collector'),
(10, 'admin', 'admin', 'test@test', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collector`
--
ALTER TABLE `collector`
  ADD PRIMARY KEY (`collectorid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`costumer_id`);

--
-- Indexes for table `historyredeem`
--
ALTER TABLE `historyredeem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item2`
--
ALTER TABLE `item2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redeemitem`
--
ALTER TABLE `redeemitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`token_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collector`
--
ALTER TABLE `collector`
  MODIFY `collectorid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `costumer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `historyredeem`
--
ALTER TABLE `historyredeem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `item2`
--
ALTER TABLE `item2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `redeemitem`
--
ALTER TABLE `redeemitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `token_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
