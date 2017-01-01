-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2017 at 04:10 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.14-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cseiitp`
--

-- --------------------------------------------------------

--
-- Table structure for table `deltas`
--

CREATE TABLE `deltas` (
  `deltaIndex` int(11) NOT NULL,
  `deltaTitle` varchar(200) NOT NULL,
  `url` varchar(2000) DEFAULT NULL,
  `deltaType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deltas`
--

INSERT INTO `deltas` (`deltaIndex`, `deltaTitle`, `url`, `deltaType`) VALUES
(1, 'Winter Break over', '', 0),
(2, 'Next sem reg on 4th Jan', '', 0),
(3, 'Next sem starts on 5th Jan', '', 0),
(4, 'Visit Google.com', 'http://google.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `uid` int(11) NOT NULL,
  `usrname` varchar(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`uid`, `usrname`, `name`, `password`, `type`) VALUES
(1, 'tameeshb', 'Tameesh Biswas', 'pswd', 0),
(3, 'root', 'Root&nbsp;User', 'toor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessionActivity`
--

CREATE TABLE `sessionActivity` (
  `uid` int(11) NOT NULL,
  `idmd5` varchar(2000) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `ipalt` varchar(200) DEFAULT NULL,
  `lastDateTime` datetime NOT NULL,
  `netlogin` int(11) NOT NULL DEFAULT '1',
  `nethit` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessionActivity`
--

INSERT INTO `sessionActivity` (`uid`, `idmd5`, `ip`, `ipalt`, `lastDateTime`, `netlogin`, `nethit`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b', '192.168.43.48', '127.0.0.1', '2016-12-30 22:12:57', 33, 73),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '127.0.0.1', '192.168.43.48', '2017-01-01 05:47:50', 3, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deltas`
--
ALTER TABLE `deltas`
  ADD PRIMARY KEY (`deltaIndex`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD UNIQUE KEY `uid` (`uid`),
  ADD UNIQUE KEY `usrname` (`usrname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deltas`
--
ALTER TABLE `deltas`
  MODIFY `deltaIndex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
