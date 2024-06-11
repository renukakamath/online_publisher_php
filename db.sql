/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - online_publisher
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`online_publisher` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `online_publisher`;

/*Table structure for table `assign` */

DROP TABLE IF EXISTS `assign`;

CREATE TABLE `assign` (
  `assign_id` int(11) NOT NULL AUTO_INCREMENT,
  `editor_id` int(11) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`assign_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `assign` */

/*Table structure for table `author` */

DROP TABLE IF EXISTS `author`;

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `author` */

/*Table structure for table `content` */

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `content` */

/*Table structure for table `editor` */

DROP TABLE IF EXISTS `editor`;

CREATE TABLE `editor` (
  `editor_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`editor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `editor` */

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`usertype`) values 
(1,'admin','admin','admin'),
(2,'ammu','ammu','publisher');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

/*Table structure for table `publish` */

DROP TABLE IF EXISTS `publish`;

CREATE TABLE `publish` (
  `publish_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) DEFAULT NULL,
  `published_date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`publish_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `publish` */

/*Table structure for table `publisher` */

DROP TABLE IF EXISTS `publisher`;

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`publisher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `publisher` */

insert  into `publisher`(`publisher_id`,`login_id`,`fname`,`lname`,`phone`,`email`,`place`) values 
(1,2,'ammu','k r','7894561230','ammu@gmail.com','kollam');

/*Table structure for table `request` */

DROP TABLE IF EXISTS `request`;

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `request` */

/*Table structure for table `subscription` */

DROP TABLE IF EXISTS `subscription`;

CREATE TABLE `subscription` (
  `subscription_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `no_of_months` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`subscription_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `subscription` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
