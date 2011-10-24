# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.1.37-log)
# Database: codeigniter
# Generation Time: 2011-10-24 12:12:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table page
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page`;

CREATE TABLE `page` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `content` text,
  `created_at` date NOT NULL,
  `status` tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `start_date_idx` (`created_at`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;

INSERT INTO `page` (`id`, `title`, `content`, `created_at`, `status`)
VALUES
	(1,'exhibition 1','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>\n<object width=\"320\" height=\"265\">\n<param name=\"movie\" value=\"http://www.youtube.com/v/CQzUsTFqtW0&amp;hl=en_US&amp;fs=1&amp;\" />\n<param name=\"allowFullScreen\" value=\"true\" />\n<param name=\"allowscriptaccess\" value=\"always\" /><embed type=\"application/x-shockwave-flash\" width=\"320\" height=\"265\" src=\"http://www.youtube.com/v/CQzUsTFqtW0&amp;hl=en_US&amp;fs=1&amp;\" allowscriptaccess=\"always\" allowfullscreen=\"true\"></embed>\n</object>\n</p>','2008-05-01',1),
	(2,'exhibition 2','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2008-06-01',1),
	(9,'exhibition 3','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \n<a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a>\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2008-02-01',0),
	(10,'exhibition 4','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \n<a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a>\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2008-02-01',1),
	(11,'exhibition 5','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \n<a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a>\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2007-12-05',1),
	(12,'exhibition 6','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \n<a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a>\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2008-03-01',1),
	(13,'exhibition 7','<p><strong>tuesday - saturday | 11h-19h</strong></p>\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  <a href=\"http://www.galeriebluesquare.com/artist/1/vagrich-bakhchanyan\">link to artist</a> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','2008-06-10',1),
	(14,'exhibition A','<p>test <strong>lorem</strong> ipsum <a href=\"http://www.google.com\">dolor</a> si</p>','2007-03-11',1),
	(15,'exhibition B',NULL,'2008-09-01',1);

/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page_file
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page_file`;

CREATE TABLE `page_file` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  `rank` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `exhibition_id_idx` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `page_file` WRITE;
/*!40000 ALTER TABLE `page_file` DISABLE KEYS */;

INSERT INTO `page_file` (`id`, `page_id`, `title`, `file`, `rank`)
VALUES
	(1,1,'english brochure','document.pdf',1),
	(2,1,'brochure française','document.pdf',2),
	(3,2,'big image file','img1.jpg',1);

/*!40000 ALTER TABLE `page_file` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page_image
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page_image`;

CREATE TABLE `page_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) DEFAULT '',
  `image` varchar(250) DEFAULT NULL,
  `rank` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `exhibition_id_idx` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `page_image` WRITE;
/*!40000 ALTER TABLE `page_image` DISABLE KEYS */;

INSERT INTO `page_image` (`id`, `page_id`, `title`, `image`, `rank`)
VALUES
	(1,1,'Title of image 1','img1.jpg',1),
	(2,1,'Title of image 2','img2.jpg',2),
	(3,1,'Title of image 4','img4.jpg',4),
	(4,1,'Title of image 3','img3.jpg',3),
	(6,2,'Title of image 2','img2.jpg',2),
	(7,2,'Title of image 4','img4.jpg',4),
	(8,2,'Title of image 5','img5.jpg',3);

/*!40000 ALTER TABLE `page_image` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
