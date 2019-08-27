-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 27, 2019 at 03:25 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `deamon_tensei`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(3) NOT NULL,
  `en` text NOT NULL,
  `zh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `en`, `zh`) VALUES
(0, 'hp', '血液'),
(1, 'str', ''),
(2, 'mag', ''),
(3, 'def', ''),
(4, 'res', ''),
(5, 'agi', ''),
(6, 'luc', '');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(8) NOT NULL,
  `username` char(25) NOT NULL,
  `password` char(25) NOT NULL,
  `email` char(25) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `datemade` datetime NOT NULL,
  `lastlogin` datetime NOT NULL,
  `currency1` int(10) NOT NULL,
  `currency2` int(10) NOT NULL,
  `ap1` int(2) NOT NULL,
  `ap2` int(2) NOT NULL,
  `ap3` int(2) NOT NULL,
  `ap4` int(2) NOT NULL,
  `level` int(4) NOT NULL DEFAULT '1',
  `exp` int(6) NOT NULL DEFAULT '0',
  `hp` int(5) NOT NULL DEFAULT '10',
  `str` int(5) NOT NULL DEFAULT '0',
  `mag` int(5) NOT NULL DEFAULT '0',
  `def` int(5) NOT NULL DEFAULT '0',
  `res` int(5) NOT NULL DEFAULT '0',
  `agi` int(5) NOT NULL DEFAULT '0',
  `luc` int(5) NOT NULL DEFAULT '0',
  `savelocation` int(3) NOT NULL,
  `head` int(10) DEFAULT NULL,
  `body` int(10) DEFAULT NULL,
  `legs` int(10) DEFAULT NULL,
  `feet` int(10) DEFAULT NULL,
  `hands` int(10) DEFAULT NULL,
  `armr` int(10) DEFAULT NULL,
  `arml` int(10) DEFAULT NULL,
  `ringr` int(10) DEFAULT NULL,
  `ringl` int(10) DEFAULT NULL,
  `otherequip` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);
