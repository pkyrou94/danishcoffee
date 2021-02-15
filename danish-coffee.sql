-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2017 at 11:16 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `danish coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `BranchName` varchar(30) COLLATE utf8_bin NOT NULL,
  `BranchAddress` varchar(30) COLLATE utf8_bin NOT NULL,
  `BranchTelephone` bigint(30) NOT NULL,
  `BranchLocation` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`BranchAddress`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `branch`
--


-- --------------------------------------------------------

--
-- Table structure for table `branchproducts`
--

CREATE TABLE IF NOT EXISTS `branchproducts` (
  `BranchName` varchar(30) COLLATE utf8_bin NOT NULL,
  `ProductId` varchar(30) COLLATE utf8_bin NOT NULL,
  `ProductLeft` int(10) NOT NULL,
  PRIMARY KEY (`ProductId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `branchproducts`
--


-- --------------------------------------------------------

--
-- Table structure for table `branch supervisor`
--

CREATE TABLE IF NOT EXISTS `branch supervisor` (
  `Susername` varchar(30) COLLATE utf8_bin NOT NULL,
  `Spassword` varchar(30) COLLATE utf8_bin NOT NULL,
  `SName` varchar(30) COLLATE utf8_bin NOT NULL,
  `SSurname` varchar(30) COLLATE utf8_bin NOT NULL,
  `SΑ.Φ.Μ.` bigint(10) NOT NULL,
  `SΑ.Μ.Κ.Α.` bigint(11) NOT NULL,
  `SIBAN` varchar(27) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Susername`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `branch supervisor`
--


-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `cemail` varchar(30) COLLATE utf8_bin NOT NULL,
  `cpassword` varchar(30) COLLATE utf8_bin NOT NULL,
  `cTelephone` bigint(30) NOT NULL,
  PRIMARY KEY (`cemail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customers`
--


-- --------------------------------------------------------

--
-- Table structure for table `delivery boy`
--

CREATE TABLE IF NOT EXISTS `delivery boy` (
  `Dusername` varchar(30) COLLATE utf8_bin NOT NULL,
  `Dpassword` varchar(30) COLLATE utf8_bin NOT NULL,
  `DName` varchar(30) COLLATE utf8_bin NOT NULL,
  `DSurname` varchar(30) COLLATE utf8_bin NOT NULL,
  `DTelephone` bigint(20) NOT NULL,
  `DΑ.Φ.Μ.` bigint(10) NOT NULL,
  `DΑ.Μ.Κ.Α.` bigint(11) NOT NULL,
  `DIBAN` varchar(27) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Dusername`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `delivery boy`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProductId` varchar(30) COLLATE utf8_bin NOT NULL,
  `ProductName` varchar(30) COLLATE utf8_bin NOT NULL,
  `ProductPrice` double NOT NULL,
  PRIMARY KEY (`ProductId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `products`
--

