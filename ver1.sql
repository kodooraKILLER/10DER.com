-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 08:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ver1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `bno` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `tno` int(11) DEFAULT NULL,
  `bidder` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bno`, `amount`, `description`, `subject`, `tno`, `bidder`) VALUES
(87, 23, 'dd', 'gg', 34, 'DB_Shirts'),
(124, 0, 'lorem ipsum', 'dolor sit amet', 34, 'DB_Shirts'),
(125, 5500, 'sfdfg', 'asss', 33, 'DB_Shirts'),
(126, 1300, 'lasr', 'The pant tender', 33, 'DB_Shirts'),
(127, 12333, 'asdfj', 'computer science classes', 39, 'shashanPRO'),
(128, 12, 'f,hgoh', 'gmfigm', 36, 'provider1');

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `aoi` varchar(200) DEFAULT '',
  `bio` varchar(200) DEFAULT 'Service provider'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`username`, `password`, `mobile`, `email`, `aoi`, `bio`) VALUES
('ASDFG_pmat', '$2y$10$2gjBKVuJn9Mof7Qzlu9SzehTM.02WO089B6N.nIj7u0hf2.U8Vg.a', '8340093391', 'gkr54532145@gmail.com', 'CLO', 'We stitch clothes'),
('DB_Shirts', 'db_shirts', '8340393393', 'gkr5432155@gmail.com', 'CLO,FUR', 'Service provider'),
('provider', '$2y$10$w7Z8iZHjO5aHasXun3TWP.FSDezimjKQCaYQpiuh9kHK8cD/53FYO', '1233211234', 'provider@gmail.com', 'A', 'asd'),
('provider1', '$2y$10$Mhdr1Sxqo/lHxTuCU3pSpeFhNEeE848pI140NZMLgQU1pBuHnzo.G', '23546', 'provider1@gmail.com', 'CLO', 'i am a seller'),
('shashan', '$2y$10$G/p07luu.xVYuJ68s.K6deAzN5/KcA2NCFzQNnWZ0snVUiV1gVFqC', '111111111146', 'senthilkumarramasamy7s75@gmail.com', '', 'Service provider'),
('shashanPRO', '$2y$10$5yol0EtHyzoAW2D33ZGBpe0/ZslDLpY0MwnEpcKKBRoxWun9gnTDG', '1234532415', 'senthilkumarddramasamy775@gmail.com', 'EDU', 'rt'),
('TheNextForce', '$2y$10$fEbVnJyEamppJ2XwCUKT6u2qq5n3YlNBD6PTmxd1y86Xt5A7EjGRi', '987765432', 'senthilkumarramasamsdfy775@gmail.com', '', 'Service provider'),
('v2079rentals', '$2y$10$2gjBKVuJn9Mof7Qzlu9SzehTM.02WO089B6N.nIj7u0hf2.U8Vg.a', '0986671234', 'asddddff@hotmail.com', '', 'Service provider');

-- --------------------------------------------------------

--
-- Table structure for table `requester`
--

CREATE TABLE `requester` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requester`
--

INSERT INTO `requester` (`username`, `password`, `mobile`, `email`) VALUES
('$user', '$pass', '444333222', '$email'),
('$usesr', '$passs', '44431332222', '$emasil'),
('abcd', '$2y$10$ZccDrF.PA3HNEqeCtQhVLOkuQZeUQvmXEYfcHCKlsWZenEd5TXiq2', '123', 'abcd@gmail.com'),
('FurnitureMart', '$2y$10$orKKeHbi3cBBy0HIAEfffexYqmYznW2pW/ahWReX4g6uBMbp4b8H2', '123456789', 'asdd@yahoo.com'),
('senthil', '$2y$10$R7V5UR8M0K8Rp', '7339659559', 'senthilkumarramasamy775@gmail.com'),
('senthilr', '$2y$10$1fBAmwsKb0Mh6j3lhOiuv.AXIhoBvjKpnqjw0egc6HPA/4aQR0hD2', '73396595595', 'senthilkumarramasamy7754@gmail.com'),
('senthilraa', '$2y$10$kcK1/EIpHX2hxHluU.PBm.ElhAw2XNMZOarnlq.F5A6mW3hm88bGu', '1111111111', 'senthilkumarramasamcvy775@gmail.com'),
('senthilrwre', '$2y$10$297ghp63xWe5NBezhhlSVuhdZPqspG2JusV7uy4GJm39cUgWYkZ3u', '2133333333333', 'senthilkumarramasaaiuimy775@gmail.com'),
('shashanREQ', '$2y$10$zJqZVvKHKRQUYPZk1a1ide7xV./znM8wuC.4Jo6fRU.rX6RWJzfZ2', '123455613445', 'senthREQilkumarramasamy775@gmail.com'),
('TheModernStitchers', '$2y$10$q26pK61kI5gcZD7/2I03AuDo6yx2At8q/dcMMWldjIIMPJJI4.ebm', '3332212450', 'rs@gmail.com'),
('TrialMan', '$2y$10$QyeJWxaq/G4gJNjrLNvQy.JjVArurBU4FduIoBnSMyprgZIQsOhKi', '3322441155', 'TrialMan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `tno` int(11) NOT NULL,
  `aoi` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `creator` varchar(20) DEFAULT NULL,
  `tandc` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`tno`, `aoi`, `status`, `title`, `description`, `start`, `end`, `creator`, `tandc`) VALUES
(33, 'CLO', 1, 'tEMPO1', 'SNNF', '2020-06-05', '2020-06-09', 'senthil', 'A,,VPF'),
(34, 'FUR', 1, 'assf', 'ammvm', '2020-06-01', '2020-06-06', 'senthil', 'pappu'),
(35, 'CLO', 1, 'Voila', 'a detailed', '2020-06-13', '2020-06-09', 'senthilr', 'list out'),
(36, 'CLO', 1, 'Pant tender', 'This tender is for pants. pants for school children', '2020-05-04', '2020-06-28', 'senthilr', '1. size 32-39\r\n2. prepare before deadline'),
(37, 'CLO', 1, 'TrialTender', 'description', '2020-06-06', '2020-06-12', 'TrialMan', 'tandc'),
(38, 'CLO', 1, 'Shirt Tender', 'Viao', '2020-06-07', '2020-06-13', 'TrialMan', 'VOID'),
(39, 'EDU', 1, 'The School Distance Learning tender', 'We need a teacher to take classes', '2020-06-05', '2020-06-13', 'shashanREQ', 'nil'),
(40, 'CLO', 1, 'School elections', 'adkfkfo', '2020-06-06', '2020-06-13', 'abcd', 'mifjhgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`bno`),
  ADD KEY `bidder` (`bidder`),
  ADD KEY `tno` (`tno`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `requester`
--
ALTER TABLE `requester`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`tno`),
  ADD KEY `fk` (`creator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `bno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `tno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`bidder`) REFERENCES `provider` (`username`),
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`tno`) REFERENCES `tender` (`tno`);

--
-- Constraints for table `tender`
--
ALTER TABLE `tender`
  ADD CONSTRAINT `fk` FOREIGN KEY (`creator`) REFERENCES `requester` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
