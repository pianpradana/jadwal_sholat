-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 02:37 AM
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
-- Database: `azn2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `idm` int(11) NOT NULL,
  `us` varchar(15) NOT NULL,
  `pw` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`idm`, `us`, `pw`) VALUES
(1, 'pradana', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `jdw`
--

CREATE TABLE `jdw` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `sbh` time NOT NULL,
  `dzh` time NOT NULL,
  `ash` time NOT NULL,
  `mgr` time NOT NULL,
  `isy` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jdw`
--

INSERT INTO `jdw` (`id`, `tgl`, `sbh`, `dzh`, `ash`, `mgr`, `isy`) VALUES
(1, '2020-05-01', '05:30:00', '14:00:00', '15:00:00', '22:00:00', '23:00:00'),
(2, '2020-05-02', '10:33:00', '13:33:00', '14:35:00', '03:00:00', '16:40:00'),
(3, '2020-05-04', '07:06:00', '09:07:00', '09:10:00', '05:00:00', '12:07:00'),
(4, '2020-05-06', '07:20:00', '09:20:00', '10:20:00', '12:20:00', '13:20:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_jdw`
-- (See below for the actual view)
--
CREATE TABLE `v_jdw` (
`id` int(11)
,`tgl` date
,`sbh` time
,`dzh` time
,`ash` time
,`mgr` time
,`isy` time
);

-- --------------------------------------------------------

--
-- Structure for view `v_jdw`
--
DROP TABLE IF EXISTS `v_jdw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jdw`  AS  select `jdw`.`id` AS `id`,`jdw`.`tgl` AS `tgl`,`jdw`.`sbh` AS `sbh`,`jdw`.`dzh` AS `dzh`,`jdw`.`ash` AS `ash`,`jdw`.`mgr` AS `mgr`,`jdw`.`isy` AS `isy` from `jdw` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`idm`);

--
-- Indexes for table `jdw`
--
ALTER TABLE `jdw`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tgl` (`tgl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jdw`
--
ALTER TABLE `jdw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5052021;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
