-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2016 at 05:16 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `goal`
--

CREATE TABLE `goal` (
  `id` int(11) NOT NULL auto_increment,
  `goalname` varchar(100) NOT NULL,
  `saving` int(100) NOT NULL,
  `need` int(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `goal`
--

INSERT INTO `goal` (`id`, `goalname`, `saving`, `need`) VALUES
(8, 'collage fees', 147, 541),
(9, 'Hummer car', 416, 997);
