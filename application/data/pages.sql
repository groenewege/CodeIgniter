# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.1.37-log)
# Database: codeigniter
# Generation Time: 2011-10-31 14:27:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table page_files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page_files`;

CREATE TABLE `page_files` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  `rank` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `exhibition_id_idx` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `page_files` WRITE;
/*!40000 ALTER TABLE `page_files` DISABLE KEYS */;

INSERT INTO `page_files` (`id`, `page_id`, `title`, `file`, `rank`)
VALUES
	(1,1,'english brochure','document.pdf',1),
	(2,1,'brochure française','document.pdf',2),
	(3,2,'big image file','img1.jpg',1);

/*!40000 ALTER TABLE `page_files` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page_images`;

CREATE TABLE `page_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) DEFAULT '',
  `image` varchar(250) DEFAULT NULL,
  `rank` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `exhibition_id_idx` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `page_images` WRITE;
/*!40000 ALTER TABLE `page_images` DISABLE KEYS */;

INSERT INTO `page_images` (`id`, `page_id`, `title`, `image`, `rank`)
VALUES
	(1,1,'Title of image 1','img1.jpg',1),
	(2,1,'Title of image 2','img2.jpg',2),
	(3,1,'Title of image 4','img4.jpg',4),
	(4,1,'Title of image 3','img3.jpg',3),
	(6,2,'Title of image 2','img2.jpg',2),
	(7,2,'Title of image 4','img4.jpg',1),
	(8,2,'Title of image 5','img5.jpg',3);

/*!40000 ALTER TABLE `page_images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `content` text,
  `created_at` date NOT NULL,
  `status` tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `start_date_idx` (`created_at`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `title`, `content`, `created_at`, `status`)
VALUES
	(1,'exhibition 1','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p><object width=\"320\" height=\"265\"><param name=\"movie\" value=\"http://www.youtube.com/v/CQzUsTFqtW0&amp;hl=en_US&amp;fs=1&amp;\" /><param name=\"allowFullScreen\" value=\"true\" /><param name=\"allowscriptaccess\" value=\"always\" /></object></p>','2008-05-01',1),
	(2,'exhibition 2 gg','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2008-06-01',1),
	(3,'exhibition 3 gg','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \n<a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a>\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2008-02-01',0),
	(4,'exhibition 4 gg','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \n<a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a>\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2008-02-01',1),
	(5,'exhibition 5 gg','','2007-12-05',1);

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
