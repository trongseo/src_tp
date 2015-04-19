/*
SQLyog Ultimate v9.63 
MySQL - 5.0.45-community-nt : Database - test_glass1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test_glass1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `test_glass1`;

/*Table structure for table `aaachung` */

DROP TABLE IF EXISTS `aaachung`;

CREATE TABLE `aaachung` (
  `aaachung_guid` varchar(36) NOT NULL,
  `aaatitle` varchar(400) default NULL,
  `mo_ta_dai` text,
  `date_create` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`aaachung_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `adanhmuc` */

DROP TABLE IF EXISTS `adanhmuc`;

CREATE TABLE `adanhmuc` (
  `adanhmuc_guid` varchar(36) NOT NULL,
  `atitle` varchar(400) default NULL,
  `stt` int(11) default '0',
  `date_create` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`adanhmuc_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `color` */

DROP TABLE IF EXISTS `color`;

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL auto_increment,
  `color_guid_id` varchar(36) character set latin1 default NULL,
  `color_name` varchar(500) character set latin1 default NULL,
  `date_create` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL default '0000-00-00 00:00:00',
  KEY `color_id` (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `lienhe` */

DROP TABLE IF EXISTS `lienhe`;

CREATE TABLE `lienhe` (
  `lienhe_guid` varchar(36) NOT NULL,
  `hoten` varchar(400) default NULL,
  `email` varchar(400) default NULL,
  `dienthoai` varchar(400) default NULL,
  `fax` varchar(400) default NULL,
  `diachi` varchar(400) default NULL,
  `tieude` varchar(400) default NULL,
  `noidung` varchar(400) default NULL,
  `date_create` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`lienhe_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `m_color` */

DROP TABLE IF EXISTS `m_color`;

CREATE TABLE `m_color` (
  `color_id` varchar(36) collate utf8_unicode_ci NOT NULL,
  `color_name` varchar(500) collate utf8_unicode_ci default NULL,
  `date_create` timestamp NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NULL default NULL,
  `stt` int(11) default '0',
  PRIMARY KEY  (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `m_size` */

DROP TABLE IF EXISTS `m_size`;

CREATE TABLE `m_size` (
  `m_size_guid` varchar(36) NOT NULL,
  `size_text` varchar(200) default NULL,
  `date_create` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`m_size_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `m_user` */

DROP TABLE IF EXISTS `m_user`;

CREATE TABLE `m_user` (
  `id` int(10) NOT NULL auto_increment,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthday` date default NULL,
  `telephone` varchar(50) default NULL,
  `create_at` timestamp NULL default NULL,
  `create_by` int(11) default NULL,
  `guid` varchar(100) default NULL,
  `is_active` int(2) default '0',
  `update_at` timestamp NULL default NULL,
  `update_by` int(11) default NULL,
  `created_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

/*Table structure for table `my_const` */

DROP TABLE IF EXISTS `my_const`;

CREATE TABLE `my_const` (
  `id` int(11) NOT NULL auto_increment,
  `const_value` varchar(500) default NULL,
  `const_text` varchar(500) default NULL,
  `const_type` varchar(100) default NULL,
  `ord` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Table structure for table `san_pham` */

DROP TABLE IF EXISTS `san_pham`;

CREATE TABLE `san_pham` (
  `san_pham_guid` varchar(36) NOT NULL,
  `ma_sp` varchar(36) default NULL,
  `ten_sp` varchar(200) default NULL,
  `hinh_dai_dien` varchar(100) default NULL,
  `san_pham_loai_guid` varchar(36) default NULL,
  `mo_ta_ngan` varchar(1000) default NULL,
  `mo_ta_dai` text,
  `date_create` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`san_pham_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `san_pham_hinh` */

DROP TABLE IF EXISTS `san_pham_hinh`;

CREATE TABLE `san_pham_hinh` (
  `san_pham_hinh_guid` varchar(36) NOT NULL,
  `san_pham_guid` varchar(36) default NULL,
  `image1` varchar(200) default NULL,
  `so_thu_tu` int(11) default NULL,
  `tooltip` varchar(400) default NULL,
  `date_create` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL default '0000-00-00 00:00:00',
  `is_daidien` int(11) default '0',
  `color_guid_id` varchar(36) default NULL,
  PRIMARY KEY  (`san_pham_hinh_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `san_pham_loai` */

DROP TABLE IF EXISTS `san_pham_loai`;

CREATE TABLE `san_pham_loai` (
  `san_pham_loai_guid` varchar(36) NOT NULL,
  `ten_loai` varchar(200) default NULL,
  `so_thu_tu` int(11) default '0',
  `image1` varchar(100) default NULL,
  `date_create` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`san_pham_loai_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `san_pham_price` */

DROP TABLE IF EXISTS `san_pham_price`;

CREATE TABLE `san_pham_price` (
  `san_pham_price_guid` varchar(36) NOT NULL default '',
  `san_pham_guid` varchar(36) default NULL,
  `color_id` int(11) default NULL,
  `m_size_guid` varchar(36) default NULL,
  `sp_price` varchar(36) default '0',
  `date_create` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`san_pham_price_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `t_test` */

DROP TABLE IF EXISTS `t_test`;

CREATE TABLE `t_test` (
  `id` int(10) NOT NULL auto_increment,
  `id_question` int(10) NOT NULL,
  `id_answer` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_question_type` int(10) NOT NULL,
  `id_exam` int(10) NOT NULL,
  `create_at` timestamp NULL default NULL,
  `create_by` int(11) default NULL,
  `update_at` timestamp NULL default NULL,
  `update_by` int(11) default NULL,
  `created_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

/*Table structure for table `video_list` */

DROP TABLE IF EXISTS `video_list`;

CREATE TABLE `video_list` (
  `video_list_guid` varchar(36) NOT NULL,
  `san_pham_guid` varchar(36) default NULL,
  `text_embed` varchar(4000) default NULL,
  `mo_ta` text,
  `date_create` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL default '0000-00-00 00:00:00',
  `mo_ta_ngan` varchar(4000) default NULL,
  PRIMARY KEY  (`video_list_guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
