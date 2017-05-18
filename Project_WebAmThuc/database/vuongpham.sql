-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2017 at 01:26 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vuongpham`
--

-- --------------------------------------------------------

--
-- Table structure for table `loaimonan`
--

CREATE TABLE IF NOT EXISTS `loaimonan` (
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `maloai` int(11) NOT NULL AUTO_INCREMENT,
  `tenloai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `loaimonan`
--

INSERT INTO `loaimonan` (`hinhanh`, `mota`, `maloai`, `tenloai`) VALUES
('sup.jpg', 'súp nóng, thơm ngon', 1, 'súp'),
('com.jpg', 'Cơm nóng thơm ngon', 2, 'cơm'),
('nuoc_giai_khat.jpg', NULL, 3, 'nước giải khát'),
('salad.jpg', NULL, 4, 'salad');

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE IF NOT EXISTS `monan` (
  `mamon` int(11) NOT NULL AUTO_INCREMENT,
  `tenmon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `donvitinh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaimon` int(11) DEFAULT NULL,
  PRIMARY KEY (`mamon`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`mamon`, `tenmon`, `gia`, `hinh`, `donvitinh`, `loaimon`) VALUES
(1, 'súp ngô cua', '20000', 'sup_ngo_cua.jpg', 'tô', 0);
