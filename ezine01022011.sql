/*
SQLyog Enterprise - MySQL GUI v8.1 
MySQL - 5.5.8-log : Database - ezine
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `agendas` */

DROP TABLE IF EXISTS `agendas`;

CREATE TABLE `agendas` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `agendas` */

insert  into `agendas`(id,name,entitle,intitle,endescription,indescription,entrytime,agendastime,venue,lastupdate) values (1,'Rapat Koordinator',NULL,'Rapat Koordinator',NULL,'Rapat Koordinator akan diselenggarakan oleh pihak yang berwajib',NULL,'2012-02-01 07:00:00','Sabuga Bandung','2012-01-30 00:02:59');
insert  into `agendas`(id,name,entitle,intitle,endescription,indescription,entrytime,agendastime,venue,lastupdate) values (2,'Rapat Proyek Manager',NULL,'Rapat Proyek Manager',NULL,'Rapat Koordinator akan diselenggarakan oleh pihak yang berwajib',NULL,'2012-02-01 07:00:00','Sabuga Bandung','2012-01-30 00:03:16');
insert  into `agendas`(id,name,entitle,intitle,endescription,indescription,entrytime,agendastime,venue,lastupdate) values (3,'Pemilihan Ketua RT',NULL,'Pemilihan Ketua RT',NULL,'Rapat Koordinator akan diselenggarakan oleh pihak yang berwajib',NULL,'2012-02-01 07:00:00','Sabuga Bandung','2012-01-30 00:03:35');
insert  into `agendas`(id,name,entitle,intitle,endescription,indescription,entrytime,agendastime,venue,lastupdate) values (4,'Pemilihan Ketua RW',NULL,'Pemilihan Ketua RW',NULL,'Rapat Koordinator akan diselenggarakan oleh pihak yang berwajib',NULL,'2012-02-01 07:00:00','Sabuga Bandung','2012-01-30 00:03:43');
insert  into `agendas`(id,name,entitle,intitle,endescription,indescription,entrytime,agendastime,venue,lastupdate) values (5,'Pemilihan Ketua Lurah',NULL,'Pemilihan Ketua Lurah',NULL,'Rapat Koordinator akan diselenggarakan oleh pihak yang berwajib',NULL,'2012-02-01 07:00:00','Sabuga Bandung','2012-01-30 00:03:53');

/*Table structure for table `albums` */

DROP TABLE IF EXISTS `albums`;

CREATE TABLE `albums` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `albums` */

/*Table structure for table `articlecategories` */

DROP TABLE IF EXISTS `articlecategories`;

CREATE TABLE `articlecategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articleid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `articleid` (`articleid`),
  KEY `categoryid` (`categoryid`),
  CONSTRAINT `articlecategories_fk` FOREIGN KEY (`articleid`) REFERENCES `articles` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `articlecategories_fk1` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `articlecategories` */

/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
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
  KEY `author` (`author`),
  CONSTRAINT `articles_fk` FOREIGN KEY (`author`) REFERENCES `authors` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `articles` */

insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (1,'article',NULL,'Java Native dengan Java EE',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:53:58');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (2,'article',NULL,'Java Native dengan Java EE',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:03');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (3,'article',NULL,'Begining Hibernate',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:25');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (4,'article',NULL,'Begining Hibernate',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:25');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (5,'article',NULL,'Begining Hibernate',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:25');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (6,'article',NULL,'Begining Hibernate',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:25');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (7,'article',NULL,'Begining Hibernate',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:25');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (8,'article',NULL,'Begining Hibernate',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:27');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (9,'article',NULL,'Begining Hibernate',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:28');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (10,'article',NULL,'Begining Hibernate',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:28');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (11,'article',NULL,'Begining Hibernate',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:28');
insert  into `articles`(id,type,entitle,intitle,encontent,incontent,entrytime,picture,author,lastupdate) values (12,'article',NULL,'Begining Hibernate',NULL,'Java adalah bahasa pemograman keren...','2012-02-01 07:00:00',NULL,1,'2012-01-30 01:55:28');

/*Table structure for table `attributes` */

DROP TABLE IF EXISTS `attributes`;

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `entitle` text,
  `intitle` text,
  `envalue` text,
  `invalue` text,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `attributes` */

/*Table structure for table `authors` */

DROP TABLE IF EXISTS `authors`;

CREATE TABLE `authors` (
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

/*Data for the table `authors` */

insert  into `authors`(id,fullname,alias,academicname,endescription,indescription,email,facebook,ym,twitter,linkedin,googleplus,lastupdate) values (1,'Agus Zulvani','Agus Zulvani','Agus Zulvani, ST',NULL,NULL,'agus.zulvani@evolab.web.id','agotekom@gmail.com','goezjlex',NULL,'agus.zulvani','agotekom@gmail.com','2012-01-30 01:51:46');

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
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

/*Data for the table `categories` */

/*Table structure for table `galleries` */

DROP TABLE IF EXISTS `galleries`;

CREATE TABLE `galleries` (
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
  KEY `uploader` (`uploader`),
  CONSTRAINT `galleries_fk` FOREIGN KEY (`albumid`) REFERENCES `albums` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `galleries_fk1` FOREIGN KEY (`uploader`) REFERENCES `authors` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `galleries` */

/*Table structure for table `guestbooks` */

DROP TABLE IF EXISTS `guestbooks`;

CREATE TABLE `guestbooks` (
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `guestbooks` */

insert  into `guestbooks`(id,name,email,url,phone,encontent,incontent,approved,entrytime,lastupdate) values (1,'Kemenkumham','kemenkumham@gmail.com','http://kemenkumham.com',NULL,NULL,'Hi, apa kabar?',1,'2012-01-29 22:48:35','2012-01-29 22:48:35');
insert  into `guestbooks`(id,name,email,url,phone,encontent,incontent,approved,entrytime,lastupdate) values (2,'Kemenkumham','kemenkumham@gmail.com','http://kemenkumham.com',NULL,NULL,'Hi, apa kabar?',1,'2012-01-29 22:49:02','2012-01-29 22:49:02');
insert  into `guestbooks`(id,name,email,url,phone,encontent,incontent,approved,entrytime,lastupdate) values (3,'LSM Swadaya Masyarakat','kemenkumham@gmail.com','http://kemenkumham.com',NULL,NULL,'Program kerja Rupbasan bandung sekarang apa ya?',1,'2012-01-29 22:49:02','2012-01-29 22:49:02');
insert  into `guestbooks`(id,name,email,url,phone,encontent,incontent,approved,entrytime,lastupdate) values (4,'Kemenkumham','kemenkumham@gmail.com','http://kemenkumham.com',NULL,NULL,'Kapan ada lelang barang lagi?',1,'2012-01-29 22:49:02','2012-01-29 22:49:02');
insert  into `guestbooks`(id,name,email,url,phone,encontent,incontent,approved,entrytime,lastupdate) values (5,'Kemenkumham','kemenkumham@gmail.com','http://kemenkumham.com',NULL,NULL,'Hi, apa kabar?',1,'2012-01-29 22:49:19','2012-01-29 22:49:19');
insert  into `guestbooks`(id,name,email,url,phone,encontent,incontent,approved,entrytime,lastupdate) values (6,'LSM Swadaya Masyarakat','kemenkumham@gmail.com','http://kemenkumham.com',NULL,NULL,'Program kerja Rupbasan bandung sekarang apa ya?',1,'2012-01-29 22:49:19','2012-01-29 22:49:19');
insert  into `guestbooks`(id,name,email,url,phone,encontent,incontent,approved,entrytime,lastupdate) values (7,'Kemenkumham','kemenkumham@gmail.com','http://kemenkumham.com',NULL,NULL,'Kapan ada lelang barang lagi?',1,'2012-01-29 22:49:19','2012-01-29 22:49:19');

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entitle` text,
  `encontent` text,
  `intitle` text,
  `incontent` text,
  `name` varchar(255) DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `pages` */

insert  into `pages`(id,entitle,encontent,intitle,incontent,name,lastupdate) values (1,'Profile','Just for profile content','Profile Organisasi','Content Profile Organisasi','profile','0000-00-00 00:00:00');
insert  into `pages`(id,entitle,encontent,intitle,incontent,name,lastupdate) values (2,'About Us','Just for about us content',NULL,NULL,'about_us','0000-00-00 00:00:00');
insert  into `pages`(id,entitle,encontent,intitle,incontent,name,lastupdate) values (3,'History','Just for history content','Sejarah Organisasi','Conten sejarah organisasi','history','0000-00-00 00:00:00');
insert  into `pages`(id,entitle,encontent,intitle,incontent,name,lastupdate) values (4,'Vision and Mission','Just for vision and mission content','Visi dan Misi Organisasi','Content visi dan misi organisasi','vision_mission','2012-01-29 00:00:00');

/*Table structure for table `partners` */

DROP TABLE IF EXISTS `partners`;

CREATE TABLE `partners` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `partners` */

insert  into `partners`(id,name,entitle,intitle,endescription,indescription,picture,url,email,lastupdate) values (1,'Kemenkumham',NULL,'Kemenkumham',NULL,NULL,NULL,'http://kemenkumham.com','kemenkumham@gmail.com','2012-01-29 23:20:00');
insert  into `partners`(id,name,entitle,intitle,endescription,indescription,picture,url,email,lastupdate) values (2,'LSM Swadaya Masyarakat',NULL,'LSM Swadaya Masyarakat',NULL,NULL,NULL,'http://kemenkumham.com','kemenkumham@gmail.com','2012-01-29 23:21:17');
insert  into `partners`(id,name,entitle,intitle,endescription,indescription,picture,url,email,lastupdate) values (3,'Menristek',NULL,'Menristek',NULL,NULL,NULL,'http://kemenkumham.com','kemenkumham@gmail.com','2012-01-29 23:21:17');
insert  into `partners`(id,name,entitle,intitle,endescription,indescription,picture,url,email,lastupdate) values (4,'Pengadilan Negeri Jawa Barat',NULL,'Pengadilan Negeri Jawa Barat',NULL,NULL,NULL,'http://kemenkumham.com','kemenkumham@gmail.com','2012-01-29 23:21:17');
insert  into `partners`(id,name,entitle,intitle,endescription,indescription,picture,url,email,lastupdate) values (5,'Kejaksaan Agung',NULL,'Kejaksaan Agung',NULL,NULL,NULL,'http://kemenkumham.com','kemenkumham@gmail.com','2012-01-29 23:21:17');

/*Table structure for table `rbitempictures` */

DROP TABLE IF EXISTS `rbitempictures`;

CREATE TABLE `rbitempictures` (
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
  KEY `itemid` (`itemid`),
  CONSTRAINT `rbitempictures_fk` FOREIGN KEY (`itemid`) REFERENCES `rbitems` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rbitempictures` */

/*Table structure for table `rbitems` */

DROP TABLE IF EXISTS `rbitems`;

CREATE TABLE `rbitems` (
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
  KEY `warehouseid` (`warehouseid`),
  CONSTRAINT `rbitems_fk` FOREIGN KEY (`warehouseid`) REFERENCES `rbwarehouses` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rbitems` */

/*Table structure for table `rbwarehouses` */

DROP TABLE IF EXISTS `rbwarehouses`;

CREATE TABLE `rbwarehouses` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rbwarehouses` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(email,password) values ('admin@localhost.com','5a0cdef1627164252ad4f87c6b3395b0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;