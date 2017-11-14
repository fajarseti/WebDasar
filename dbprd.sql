/*
SQLyog Enterprise - MySQL GUI v7.12 
MySQL - 5.0.45 : Database - a121405084
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`a121405084` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `a121405084`;

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `kd` char(17) NOT NULL,
  `nm_prd` char(35) default NULL,
  `hrg` int(20) default NULL,
  PRIMARY KEY  (`kd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`kd`,`nm_prd`,`hrg`) values ('01','celana',10000),('14','coklat',1000),('12','swallow',12000),('02','aqua',14000),('03','ayam',90000),('06','jelly',80000),('07','gerry',70000),('04','jajan',79000),('05','hp',60000),('08','biskuit',40000),('10','jeans',86000),('09','kaos',50000),('13','sepatu',45000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
