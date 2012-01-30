-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2012 at 06:29 PM
-- Server version: 5.1.29
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ezine`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE IF NOT EXISTS `agendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `entitle` text,
  `intitle` text,
  `endescription` text,
  `indescription` text,
  `entrytime` datetime DEFAULT NULL,
  `agendastime` datetime DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id`, `name`, `entitle`, `intitle`, `endescription`, `indescription`, `entrytime`, `agendastime`, `venue`, `lastupdate`) VALUES
(1, 'Rapat Koordinator', NULL, 'Rapat Koordinator', NULL, 'Rapat Koordinator akan diselenggarakan oleh pihak yang berwajib', NULL, '2012-02-01 07:00:00', 'Sabuga Bandung', '2012-01-29 17:02:59'),
(2, 'Rapat Proyek Manager', NULL, 'Rapat Proyek Manager', NULL, 'Rapat Koordinator akan diselenggarakan oleh pihak yang berwajib', NULL, '2012-02-01 07:00:00', 'Sabuga Bandung', '2012-01-29 17:03:16'),
(3, 'Pemilihan Ketua RT', NULL, 'Pemilihan Ketua RT', NULL, 'Rapat Koordinator akan diselenggarakan oleh pihak yang berwajib', NULL, '2012-02-01 07:00:00', 'Sabuga Bandung', '2012-01-29 17:03:35'),
(4, 'Pemilihan Ketua RW', NULL, 'Pemilihan Ketua RW', NULL, 'Rapat Koordinator akan diselenggarakan oleh pihak yang berwajib', NULL, '2012-02-01 07:00:00', 'Sabuga Bandung', '2012-01-29 17:03:43'),
(5, 'Pemilihan Ketua Lurah', NULL, 'Pemilihan Ketua Lurah', NULL, 'Rapat Koordinator akan diselenggarakan oleh pihak yang berwajib', NULL, '2012-02-01 07:00:00', 'Sabuga Bandung', '2012-01-29 17:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `entitle` text,
  `intitle` text,
  `endescription` text,
  `indescription` text,
  `picture` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `articlecategories`
--

CREATE TABLE IF NOT EXISTS `articlecategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articleid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `articleid` (`articleid`),
  KEY `categoryid` (`categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `entitle` text,
  `intitle` text,
  `encontent` text,
  `incontent` text,
  `entrytime` datetime NOT NULL,
  `picture` varchar(255) DEFAULT NULL COMMENT 'nama gambar, jika artikel mempunyai gambar',
  `author` int(11) NOT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `author` (`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `type`, `entitle`, `intitle`, `encontent`, `incontent`, `entrytime`, `picture`, `author`, `lastupdate`) VALUES
(1, 'article', NULL, 'Java Native dengan Java EE', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:53:58'),
(2, 'article', NULL, 'Java Native dengan Java EE', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:03'),
(3, 'article', NULL, 'Begining Hibernate', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:25'),
(4, 'article', NULL, 'Begining Hibernate', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:25'),
(5, 'article', NULL, 'Begining Hibernate', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:25'),
(6, 'article', NULL, 'Begining Hibernate', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:25'),
(7, 'article', NULL, 'Begining Hibernate', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:25'),
(8, 'article', NULL, 'Begining Hibernate', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:27'),
(9, 'article', NULL, 'Begining Hibernate', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:28'),
(10, 'article', NULL, 'Begining Hibernate', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:28'),
(11, 'article', NULL, 'Begining Hibernate', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:28'),
(12, 'article', NULL, 'Begining Hibernate', NULL, 'Java adalah bahasa pemograman keren...', '2012-02-01 07:00:00', NULL, 1, '2012-01-29 18:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE IF NOT EXISTS `attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `entitle` text,
  `intitle` text,
  `envalue` text,
  `invalue` text,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `academicname` varchar(255) DEFAULT NULL,
  `endescription` text,
  `indescription` text,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `ym` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `fullname`, `alias`, `academicname`, `endescription`, `indescription`, `email`, `facebook`, `ym`, `twitter`, `linkedin`, `googleplus`, `lastupdate`) VALUES
(1, 'Agus Zulvani', 'Agus Zulvani', 'Agus Zulvani, ST', NULL, NULL, 'agus.zulvani@evolab.web.id', 'agotekom@gmail.com', 'goezjlex', NULL, 'agus.zulvani', 'agotekom@gmail.com', '2012-01-29 18:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `entitle` varchar(255) DEFAULT NULL,
  `intitle` varchar(255) DEFAULT NULL,
  `endescription` text,
  `indescription` text,
  `parent` int(11) DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `entitle` text,
  `intitle` text,
  `endescription` text,
  `indescription` text,
  `albumid` int(11) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL COMMENT 'nama gambar untuk thumbnail',
  `uploader` int(11) DEFAULT NULL COMMENT 'foreign key ke table authors',
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `albumid` (`albumid`),
  KEY `uploader` (`uploader`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `guestbooks`
--

CREATE TABLE IF NOT EXISTS `guestbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `encontent` text,
  `incontent` text,
  `approved` int(11) NOT NULL DEFAULT '0' COMMENT '1 = sudah di approve dan bisa ditampilkan, 0 = belum di approve dan belum bisa ditampilkan',
  `entrytime` datetime NOT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `guestbooks`
--

INSERT INTO `guestbooks` (`id`, `name`, `email`, `url`, `phone`, `encontent`, `incontent`, `approved`, `entrytime`, `lastupdate`) VALUES
(1, 'Kemenkumham', 'kemenkumham@gmail.com', 'http://kemenkumham.com', NULL, NULL, 'Hi, apa kabar?', 1, '2012-01-29 22:48:35', '2012-01-29 15:48:35'),
(2, 'Kemenkumham', 'kemenkumham@gmail.com', 'http://kemenkumham.com', NULL, NULL, 'Hi, apa kabar?', 1, '2012-01-29 22:49:02', '2012-01-29 15:49:02'),
(3, 'LSM Swadaya Masyarakat', 'kemenkumham@gmail.com', 'http://kemenkumham.com', NULL, NULL, 'Program kerja Rupbasan bandung sekarang apa ya?', 1, '2012-01-29 22:49:02', '2012-01-29 15:49:02'),
(4, 'Kemenkumham', 'kemenkumham@gmail.com', 'http://kemenkumham.com', NULL, NULL, 'Kapan ada lelang barang lagi?', 1, '2012-01-29 22:49:02', '2012-01-29 15:49:02'),
(5, 'Kemenkumham', 'kemenkumham@gmail.com', 'http://kemenkumham.com', NULL, NULL, 'Hi, apa kabar?', 1, '2012-01-29 22:49:19', '2012-01-29 15:49:19'),
(6, 'LSM Swadaya Masyarakat', 'kemenkumham@gmail.com', 'http://kemenkumham.com', NULL, NULL, 'Program kerja Rupbasan bandung sekarang apa ya?', 1, '2012-01-29 22:49:19', '2012-01-29 15:49:19'),
(7, 'Kemenkumham', 'kemenkumham@gmail.com', 'http://kemenkumham.com', NULL, NULL, 'Kapan ada lelang barang lagi?', 1, '2012-01-29 22:49:19', '2012-01-29 15:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entitle` text,
  `encontent` text,
  `intitle` text,
  `incontent` text,
  `name` varchar(255) DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `entitle`, `encontent`, `intitle`, `incontent`, `name`, `lastupdate`) VALUES
(1, 'Profile', 'Just for profile content', 'Profile Organisasi', 'Content Profile Organisasi', 'profile', '0000-00-00 00:00:00'),
(2, 'About Us', 'Just for about us content', NULL, NULL, 'about_us', '0000-00-00 00:00:00'),
(3, 'History', 'Just for history content', 'Sejarah Organisasi', 'Conten sejarah organisasi', 'history', '0000-00-00 00:00:00'),
(4, 'Vision and Mission', 'Just for vision and mission content', 'Visi dan Misi Organisasi', 'Content visi dan misi organisasi', 'vision_mission', '2012-01-28 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `entitle` text,
  `intitle` text NOT NULL,
  `endescription` text,
  `indescription` text,
  `picture` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `entitle`, `intitle`, `endescription`, `indescription`, `picture`, `url`, `email`, `lastupdate`) VALUES
(1, 'Kemenkumham', NULL, 'Kemenkumham', NULL, NULL, NULL, 'http://kemenkumham.com', 'kemenkumham@gmail.com', '2012-01-29 16:20:00'),
(2, 'LSM Swadaya Masyarakat', NULL, 'LSM Swadaya Masyarakat', NULL, NULL, NULL, 'http://kemenkumham.com', 'kemenkumham@gmail.com', '2012-01-29 16:21:17'),
(3, 'Menristek', NULL, 'Menristek', NULL, NULL, NULL, 'http://kemenkumham.com', 'kemenkumham@gmail.com', '2012-01-29 16:21:17'),
(4, 'Pengadilan Negeri Jawa Barat', NULL, 'Pengadilan Negeri Jawa Barat', NULL, NULL, NULL, 'http://kemenkumham.com', 'kemenkumham@gmail.com', '2012-01-29 16:21:17'),
(5, 'Kejaksaan Agung', NULL, 'Kejaksaan Agung', NULL, NULL, NULL, 'http://kemenkumham.com', 'kemenkumham@gmail.com', '2012-01-29 16:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `rbitempictures`
--

CREATE TABLE IF NOT EXISTS `rbitempictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `entitle` text,
  `intitle` text,
  `endescription` text,
  `indescription` text,
  `itemid` int(11) NOT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `itemid` (`itemid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rbitems`
--

CREATE TABLE IF NOT EXISTS `rbitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `entitle` text,
  `intitle` text,
  `endescription` text,
  `indescription` text,
  `picture` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `warehouseid` int(11) DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `warehouseid` (`warehouseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rbwarehouses`
--

CREATE TABLE IF NOT EXISTS `rbwarehouses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL COMMENT 'status barang, misalnya: lelang, ready dsb (belum fix dan masih harus di konfirmasikan ke pihak rupbasan bandung)',
  `entitle` text,
  `intitle` text,
  `endescription` text,
  `indescription` text,
  `picture` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `address` text,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articlecategories`
--
ALTER TABLE `articlecategories`
  ADD CONSTRAINT `articlecategories_fk` FOREIGN KEY (`articleid`) REFERENCES `articles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `articlecategories_fk1` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_fk` FOREIGN KEY (`author`) REFERENCES `authors` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_fk` FOREIGN KEY (`albumid`) REFERENCES `albums` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `galleries_fk1` FOREIGN KEY (`uploader`) REFERENCES `authors` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `rbitempictures`
--
ALTER TABLE `rbitempictures`
  ADD CONSTRAINT `rbitempictures_fk` FOREIGN KEY (`itemid`) REFERENCES `rbitems` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rbitems`
--
ALTER TABLE `rbitems`
  ADD CONSTRAINT `rbitems_fk` FOREIGN KEY (`warehouseid`) REFERENCES `rbwarehouses` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
