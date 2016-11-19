-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2016 at 02:04 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytable1`
--

CREATE TABLE `mytable1` (
  `name` text NOT NULL,
  `chuba` text NOT NULL,
  `village` text NOT NULL,
  `house` text NOT NULL,
  `househead` text NOT NULL,
  `sex` text NOT NULL,
  `age` int(5) NOT NULL,
  `phone` int(10) NOT NULL,
  `add_village` text NOT NULL,
  `add_co` text NOT NULL,
  `add_chuba` text NOT NULL,
  `add_po` text,
  `add-dist` text NOT NULL,
  `add-state` text NOT NULL,
  `add-pin` int(11) NOT NULL,
  `pvillage` text NOT NULL,
  `pco` text NOT NULL,
  `pchuba` text NOT NULL,
  `ppo` text NOT NULL,
  `pdist` text NOT NULL,
  `pstate` text NOT NULL,
  `ppin` int(11) NOT NULL,
  `name1` text,
  `age1` int(11) DEFAULT NULL,
  `relation1` text,
  `qual1` text,
  `occ1` text,
  `name2` text,
  `age2` int(11) DEFAULT NULL,
  `realtion2` text,
  `qual2` text,
  `occ2` text,
  `name3` text,
  `age3` int(11) DEFAULT NULL,
  `relation3` text,
  `qual3` text,
  `occ3` text,
  `nam4` text,
  `age4` int(11) DEFAULT NULL,
  `relation4` text,
  `qual4` text,
  `occ4` text,
  `name5` text,
  `age5` int(11) DEFAULT NULL,
  `relation5` text,
  `qual5` text,
  `occ5` text,
  `name6` text,
  `age6` int(11) DEFAULT NULL,
  `relation6` text,
  `qual6` text,
  `occ6` text,
  `name7` text,
  `age7` text,
  `relation7` text,
  `qual7` text,
  `occ7` text NOT NULL,
  `name8` text,
  `age8` int(11) DEFAULT NULL,
  `relation8` text,
  `qual8` text,
  `occ8` text,
  `housetype` text,
  `vehicle` tinyint(1) NOT NULL,
  `vehicletype` text,
  `occupation` text,
  `handloom` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
