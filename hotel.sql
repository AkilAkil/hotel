-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2017 at 06:13 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cab`
--

CREATE TABLE IF NOT EXISTS `cab` (
  `cabnum` varchar(50) NOT NULL,
  `driverno` varchar(50) NOT NULL,
  `bookedperson` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cab`
--

INSERT INTO `cab` (`cabnum`, `driverno`, `bookedperson`) VALUES
('TN 29 BD1000', '9587412569', 'Akilan'),
('TN 19 AA 0001', '4578466851', 'Akil');

-- --------------------------------------------------------

--
-- Table structure for table `occupied`
--

CREATE TABLE IF NOT EXISTS `occupied` (
  `name` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `checkin` varchar(20) NOT NULL,
  `checkout` varchar(20) NOT NULL,
  `intime` varchar(10) NOT NULL,
  `outtime` varchar(10) NOT NULL,
  `number` varchar(20) NOT NULL,
  `advance` varchar(25) NOT NULL,
  `roomno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occupied`
--

INSERT INTO `occupied` (`name`, `id`, `checkin`, `checkout`, `intime`, `outtime`, `number`, `advance`, `roomno`) VALUES
('Akilan', 'PAN Card', '10/10/2017', '12/10/2016', '10 AM', '11 AM', '1234567890', '5000', '101'),
('ak', 'Aadhar', '10/12/2016', '20/12/2016', '10 AM', '10 AM', '1234567890', '10000', ''),
('ak', 'Aadhar', '10/12/2016', '20/12/2016', '10 AM', '11 AM', '1234567890', '', ''),
('ak', 'Aadhar', '10/12/2016', '20/12/2016', '10 AM', '11 AM', '1234567890', '', ''),
('ak', 'Aadhar', '10/12/2016', '20/12/2016', '10 AM', '11 AM', '1234567890', '', ''),
('ak', 'Aadhar', '10/12/2016', '20/12/2016', '10 AM', '11 AM', '1234567890', '', ''),
('ak', 'Aadhar', '10/12/2016', '20/12/2016', '10 AM', '11 AM', '1234567890', '', ''),
('ak', 'Aadhar', '10/12/2016', '20/12/2016', '10 AM', '11 AM', '1234567890', '', ''),
('ak', 'Aadhar', '10/12/2016', '20/12/2016', '10 AM', '11 AM', '1234567890', '', ''),
('ak', 'Aadhar', '10/12/2016', '20/12/2016', '10 AM', '11 AM', '1234567890', '', ''),
('ak', 'Aadhar', '10/12/2016', '20/12/2016', '10 AM', '11 AM', '1234567890', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `rno` varchar(10) NOT NULL,
  `fno` varchar(10) NOT NULL,
  `rtype` varchar(50) NOT NULL,
  `services` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rno`, `fno`, `rtype`, `services`, `price`) VALUES
('100', '1', 'double', 'Luxury Service', '10,000'),
('101', '1', 'Single', 'Selected Services', '5000'),
('110', '1', 'Quad', 'Luxury', '15000'),
('201', '2', 'Triple', 'Economy', '3000'),
('210', '2', 'Single', 'Selected Services', '2000'),
('308', '3', 'double', 'Selected Services', '3999');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `pass`) VALUES
('admin', '', 'asdf1234'),
('Akil', 'agilan.madhiyan@gmail.com', 'qwerty'),
('Akilan', 'akilan@gmail.com', 'asdf123'),
('Akilan', 'akilan@gmail.com', 'asdf123'),
('Akilan', 'akilan@gmail.com', 'asdf123'),
('ajith', 'ajith@gmail.com', 'qwerty');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
