-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 08:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` varchar(6) NOT NULL,
  `aname` text NOT NULL,
  `amail` varchar(10) NOT NULL,
  `apwd` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `aname`, `amail`, `apwd`) VALUES
('1', 'Debasish Mandal', 'debasish@g', '159');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `tr_id` int(10) NOT NULL,
  `tmail` varchar(30) NOT NULL,
  `pic_up_address` varchar(50) NOT NULL,
  `dropping_address` varchar(50) NOT NULL,
  `pic_up_date` date NOT NULL,
  `pic_up_time` varchar(15) NOT NULL,
  `car_type` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `d_mail` varchar(50) NOT NULL,
  `Cost` int(11) NOT NULL,
  `pament` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`tr_id`, `tmail`, `pic_up_address`, `dropping_address`, `pic_up_date`, `pic_up_time`, `car_type`, `Status`, `d_mail`, `Cost`, `pament`) VALUES
(16, 's@gmail.com', 'kola', 'hat', '2023-06-19', '09:00', 'Suzuki', 'Assigned', 'puja@gmail.com', 200, ''),
(17, 's@gmail.com', 'Udaynarayan pur', 'Howrah', '2023-06-19', '01:32', 'SUV', 'Assigned', 'rathi@gmail.com', 200, ''),
(18, 's@gmail.com', 'Holdia', 'kurchi', '2023-06-18', '03:11', 'Alto', 'Payed', 'san@gmail;.com', 600, 'Payed'),
(19, 's@gmail.com', 'Bengai', 'Arambagh', '2023-06-22', '06:05', 'Maruti', 'Assigned', 'rathi@gmail.com', 255, ''),
(20, 'dip@gmail.com', 'durgapur', 'Bardhman', '2023-06-21', '07:30', 'SUV', 'Assigned', 'rathi@gmail.com', 400, ''),
(21, 'dip@gmail.com', 'Deshra', 'kurchi\r\n', '2023-06-22', '19:35', 'TATA', 'Assigned', 'puja@gmail.com', 255, ''),
(22, 'sourav@gmail.com', 'Bengai', 'kurchi', '2023-06-23', '08:41', 'Maruti', 'Assigned', 'san@gmail;.com', 155, 'Payed'),
(23, 's@gmail.com', 'Holdia', 'gonga', '2023-06-26', '07:00', 'Maruti', 'Assigned', 'sagun@gmail.com', 1500, 'Payed'),
(24, 's@gmail.com', 'Bengai', 'howrah', '2023-06-27', '21:37', 'Maruti', 'Assigned', 'rathi@gmail.com', 400, 'New'),
(27, 'papua@gmail.com', 'kurchi', 'Bhabani pur', '2023-07-04', '00:00', 'Alto', 'New', '', 0, 'New'),
(28, 's@gmail.com', 'howrah', 'kolkata', '2023-07-04', '10:07', 'TATA', 'New', '', 0, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `dname` text DEFAULT NULL,
  `dage` int(5) DEFAULT NULL,
  `dgender` text DEFAULT NULL,
  `d_address` varchar(50) NOT NULL,
  `dmobile` varchar(10) NOT NULL,
  `d_mail` varchar(20) NOT NULL,
  `d_pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`dname`, `dage`, `dgender`, `d_address`, `dmobile`, `d_mail`, `d_pwd`) VALUES
('Puja driver', 20, 'Female', 'kurchi', '0258741369', 'puja@gmail.com', '1236'),
('Rathi kanta Roy', 22, 'Male', 'Deshra', '5879463245', 'rathi@gmail.com', 'rathi'),
('Sagun Murmu', 22, 'Male', 'purulia', '4569871233', 'sagun@gmail.com', 'sagun'),
('Santanu', 21, 'Male', 'kolkata', '0000000', 'san@gmail;.com', '789');

-- --------------------------------------------------------

--
-- Table structure for table `feadback`
--

CREATE TABLE `feadback` (
  `tname` text NOT NULL,
  `tmail` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feadback`
--

INSERT INTO `feadback` (`tname`, `tmail`, `subject`, `message`) VALUES
('Debasish', 'soura', 'car', 'hytey'),
('', '', '', ''),
('', '', '', ''),
('Debasish Mandal', 'mandalbabu7586@gamil', 'cab', 'hiiiiiii'),
('Sagun Murmu', 's@gmail.com', 'driver', 'hcfeurft'),
('Saral Roy', 's@gmail.com', 'cab', 'efhnfb');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `tr_id` varchar(20) NOT NULL,
  `tname` text NOT NULL,
  `cost` int(10) NOT NULL,
  `cvv` int(5) NOT NULL,
  `cardno` varchar(6) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `expyear` year(4) NOT NULL,
  `expmonth` int(20) NOT NULL,
  `tmail` varchar(6) NOT NULL,
  `card_type` text NOT NULL,
  `balence` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`tr_id`, `tname`, `cost`, `cvv`, `cardno`, `pin`, `expyear`, `expmonth`, `tmail`, `card_type`, `balence`) VALUES
('18', 'Sagun Murmu', 0, 3258, '369874', '1258', 2023, 2, '600', 'visa', 5900),
('16', 'Debasish Mandal', 600, 123, '896523', '789', 2023, 0, 'debasi', '', 3200),
('22', 'Sourav', 0, 569, '456321', '258', 2023, 0, 'sourav', '', 7690);

-- --------------------------------------------------------

--
-- Table structure for table `traveler`
--

CREATE TABLE `traveler` (
  `tname` text DEFAULT NULL,
  `tgender` text DEFAULT NULL,
  `tdob` varchar(10) DEFAULT NULL,
  `tmobile` varchar(10) NOT NULL,
  `taddress` varchar(100) DEFAULT NULL,
  `tmail` varchar(40) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traveler`
--

INSERT INTO `traveler` (`tname`, `tgender`, `tdob`, `tmobile`, `taddress`, `tmail`, `pwd`) VALUES
('Santu', 'Male', '2023-05-01', '123654987', 'Holdia', 'abcd@gmail.com', '456'),
('Anik Pal', 'Male', '2023-06-04', '2365478915', 'Tarakeswar', 'anik@gmail.com', 'Anik'),
('Ankita', 'Male', '2006-08-07', '45698745', 'Bengai', 'ankita@gmail.com', 'Ankitra'),
('abcd', 'Female', '2023-05-17', '7586899970', 'Deshra', 'debasishmanda8244@gm', ''),
('Dipankar', 'Male', '2005-05-05', '4569871253', 'kurchi', 'dip@gmail.com', 'dip123'),
('Gargi Mandal', 'Female', '2001-11-25', '7586892741', 'kurchi, udaynarayanpur,howrah', 'gargi@gmail.com', 'gargi'),
('Debasish mandal', 'Male', '2023-05-27', '0892741980', 'kurchi', 'mandalbabu7586@gamil', ''),
('Papia Samanta', 'Female', '2001-06-06', '8967231317', 'Bhabani pur,chitrasen pur,711226', 'papua@gmail.com', 'papia'),
('Prabir Santra ', 'Female', '2023-06-07', '0000000000', 'Deshra', 'prabir@gmail.com', 'prabir'),
('Saral Roy', 'Female', '2023-06-11', '8526364900', 'kurchi', 's@gmail.com', 's@t'),
('Sathi Rout', 'Female', '2002-12-04', '897456654', 'Dewalganj', 'sathi@gmail.com', 'Sathi123'),
('Sorav samanta', 'Male', '2023-06-02', '7985463215', 'Udaynarayan pur', 'sourav@gmail.com', 'sourav'),
('Sourav Mondal', 'Male', '2023-06-13', '8653121783', 'Arambag', 'souravmondal@gmail.c', 'sourav@'),
('Suman', 'Male', '2006-08-07', '111 11111', 'arambagh', 'suman@gmail.com', 'suman123'),
('Tansha Nath', 'Female', '2006-12-18', '7044398122', '17B,christopher road,kolkata-700046', 'tanishanath@857gmail.com', 'tanisha@1812');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`d_mail`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`tmail`);

--
-- Indexes for table `traveler`
--
ALTER TABLE `traveler`
  ADD PRIMARY KEY (`tmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `tr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
