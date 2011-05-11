/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50144
 Source Host           : localhost
 Source Database       : p

 Target Server Type    : MySQL
 Target Server Version : 50144
 File Encoding         : utf-8

 Date: 05/11/2011 22:07:37 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `budgets`
-- ----------------------------
DROP TABLE IF EXISTS `budgets`;
CREATE TABLE `budgets` (
  `budget_id` int(11) NOT NULL AUTO_INCREMENT,
  `budget_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชืองบประมาณ สำหรับการจัดซื้อ',
  `year` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`budget_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `budgets`
-- ----------------------------
BEGIN;
INSERT INTO `budgets` VALUES ('1', 'งบประมาณประจำปี', '2554'), ('2', 'งบประมาณประจำปี', '2555'), ('3', 'งบประมาณประจำปี', '2555'), ('4', 'งบประมาณประจำปี', '2554');
COMMIT;

-- ----------------------------
--  Table structure for `company`
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `address` text,
  `tel` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `company`
-- ----------------------------
BEGIN;
INSERT INTO `company` VALUES ('1', '2222', 'xx', 'xxx', 'xx', 'xx'), ('2', 'grandu2', 'xxx', 'xxx', '', ''), ('3', 'forwardsystem', 'xxx', '', '', '');
COMMIT;

-- ----------------------------
--  Table structure for `maintain`
-- ----------------------------
DROP TABLE IF EXISTS `maintain`;
CREATE TABLE `maintain` (
  `maintain_id` int(11) NOT NULL AUTO_INCREMENT,
  `maintain_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `remark` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`maintain_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `maintain`
-- ----------------------------
BEGIN;
INSERT INTO `maintain` VALUES ('2', 'เปิดเครื่องไม่ติด', '', '2'), ('3', 'เครื่องคอมช้ามาก ผิดปกติ', 'ลงโปรแกรมใหม่ หรือ ลง วินโดว์ใหม่', '2'), ('4', 'สีลอก', '', '5'), ('5', 'แอร์ไม่เย็น', '', '7'), ('6', 'เปิดไม่ติด', '', '7'), ('7', 'มีเสียงดัง', '', '7');
COMMIT;

-- ----------------------------
--  Table structure for `maintain_history`
-- ----------------------------
DROP TABLE IF EXISTS `maintain_history`;
CREATE TABLE `maintain_history` (
  `mh_id` varchar(255) NOT NULL DEFAULT '',
  `material_id` int(11) DEFAULT NULL COMMENT 'รหัส ครุภัณฑ์ foreign key',
  `maintain_id` int(11) DEFAULT NULL COMMENT 'foreign key from maintain table',
  `company_id` int(11) DEFAULT NULL COMMENT 'foreign key from company',
  `maintain_date` datetime DEFAULT NULL COMMENT 'วันที่ ซ่อม บำรุ่ง',
  `maintain_price` varchar(255) DEFAULT NULL COMMENT 'ราคาซ่อม',
  `remark` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL COMMENT 'การรับประกัน งานซ่อม',
  `responsible` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mh_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `material_categories`
-- ----------------------------
DROP TABLE IF EXISTS `material_categories`;
CREATE TABLE `material_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `material_categories`
-- ----------------------------
BEGIN;
INSERT INTO `material_categories` VALUES ('2', 'เครื่องคอมพิวเตอร์'), ('3', 'โต้ะคอมพิวเตอร์'), ('4', 'เครื่อง printer'), ('5', 'ตู้เก็บของ/หนังสือ'), ('6', 'เครื่องเขียน'), ('7', 'เครื่องปรับอากาศ'), ('8', 'อุปกรณ์สำหรับทำความสะอาด'), ('9', 'อุปกรณ์ขยายเสียง/ลำโพง');
COMMIT;

-- ----------------------------
--  Table structure for `material_types`
-- ----------------------------
DROP TABLE IF EXISTS `material_types`;
CREATE TABLE `material_types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชือ ชนิด material มี 2 อัน วัสดุ กับ ครุภัณฑ์',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `material_types`
-- ----------------------------
BEGIN;
INSERT INTO `material_types` VALUES ('1', 'วัสดุ'), ('2', 'ครุภัณฑ์');
COMMIT;

-- ----------------------------
--  Table structure for `materials`
-- ----------------------------
DROP TABLE IF EXISTS `materials`;
CREATE TABLE `materials` (
  `material_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส วัสดุครุภัณฑ์',
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชื่อวัสดุครภัณฑ์',
  `model` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL COMMENT 'เลขที่ครุถัณฑ์',
  `category_id` int(11) DEFAULT NULL COMMENT 'หมวด',
  `type_id` int(11) DEFAULT NULL COMMENT 'เป็น วัสดุ หรือ ครุภัณฑ์ มี ค่า 1 = วัสดุ  2 = ครุถัณฑ์',
  `buy_date` date DEFAULT NULL,
  `buy_price` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'เงือนไขการรับประกัน',
  `detail` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `responsible` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ผู้รับผิดชอบ',
  `thumbnail` varchar(255) DEFAULT NULL COMMENT 'เก็บรูปที่ 1',
  `image2` varchar(255) DEFAULT NULL COMMENT 'เก็บรูปที่ 2',
  `create_date` varchar(255) DEFAULT NULL COMMENT 'วันที่กรอก ข้อมูล',
  `last_modify` date DEFAULT NULL COMMENT 'วันที่แก้ไข้ข้อมูลล่าสุด',
  `year` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ปีการ ศึกษา',
  `budget_id` int(11) DEFAULT NULL,
  `place_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`material_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `materials`
-- ----------------------------
BEGIN;
INSERT INTO `materials` VALUES ('1', 'เครื่องคอมพิวเตอร์ HP', null, '540000002', '2', '1', '2011-03-08', '20000', 'HP', '1', null, null, 'hp_desktop.jpg', null, null, null, null, null, null, null), ('2', 'โต้ะคอมพิวเตอร์', null, '540000003', '3', '1', '2011-03-09', '2000', '-', null, null, null, 'Triple PC table 6340.jpg', null, null, null, '??', null, null, null), ('3', 'โปรเจคเตอร์ X1230S', null, '540000003', '2', null, '2011-03-29', null, null, null, null, null, 'ico_acer_projector.jpg', null, null, null, null, null, null, null), ('4', null, null, null, null, null, null, null, null, null, null, null, null, null, '11/04/02 00:41:43', '2011-04-02', null, null, null, null), ('5', null, null, null, null, null, null, null, null, null, null, null, null, null, '11/04/02 00:41:58', '2011-04-02', null, null, null, null), ('6', null, null, null, null, null, null, null, null, null, null, null, null, null, '11/04/02 00:42:47', '2011-04-02', null, null, null, null), ('7', 'x', 'xxxxxxxxxxxxxx', 'xxxxxxxxxxxxx', '6', null, '0000-00-00', 'xxxxxxxxx', 'xx', '', 'xxxxxxxxxxxxxxxxx', '', 'a3a54a73eb2ddba358f93e3b10dc113b.jpg', null, '11/04/02 00:44:48', '2011-04-02', null, '2', '1', '3'), ('8', 'xxxx', 'xxx', null, '3', '1', '0000-00-00', '200', 'xxx', '20', 'xx', 'xxx', '7a6ea0b4c1f33d779a574c53a9428ea2.jpg', null, '11/04/25 13:05:18', '2011-04-25', null, '1', '1', '2'), ('9', 'xxxxx', '1212', '10111111', '2', '2', '2011-05-11', '3000', 'hp', 'xxxx', 'xx', 'xxxx', 'da72d84ba3b7d9307cb3249c59368940.jpg', null, '11/05/11 20:51:36', '2011-05-11', null, '1', '2', '3');
COMMIT;

-- ----------------------------
--  Table structure for `place`
-- ----------------------------
DROP TABLE IF EXISTS `place`;
CREATE TABLE `place` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส primary key',
  `place_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชือ่ห้อง หรือ สถานที่ ',
  `remark` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'หมายเหตุ / รายละเอียด',
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `place`
-- ----------------------------
BEGIN;
INSERT INTO `place` VALUES ('1', '403', null), ('2', 'ห้องพักอาจารย์', null);
COMMIT;

-- ----------------------------
--  Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `roles`
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES ('1', 'ผู้บริหาร'), ('2', 'อาจารย์'), ('3', 'เจ้าหน้าที่ครุภัณฑ์');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `role_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชนิดผู้ใช้งาน',
  `position` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'wirachat', 'e10adc3949ba59abbe56e057f20f883e', 'wirachat', 'suksawat', 'wirachat2you@hotmail.com', '0842188408', '1', ''), ('2', 'manager', '5f4dcc3b5aa765d61d8327deb882cf99', 'สมคิด', 'ทองแดง', 'wirachat2you@gmail.com', '0842188408', '1', '???????'), ('3', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'xxxx', 'xxxx', '', '1', ''), ('4', 'kkk', 'cb42e130d1471239a27fca6228094f0e', 'kkk', 'kkk', 'kkk@kkk.kkk', '111', '3', 'kkk'), ('5', 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', 'aaa', 'aaa@aaa.aaa', '00111', '2', 'aaa'), ('6', 'hhh', 'a3aca2964e72000eea4c56cb341002a4', 'hhh', 'hhh', 'hhh@hhh.hhh', '00222', '1', 'hhh');
COMMIT;

-- ----------------------------
--  View structure for `material_views`
-- ----------------------------
DROP VIEW IF EXISTS `material_views`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `material_views` AS select `materials`.`material_id` AS `material_id`,`materials`.`name` AS `name`,`materials`.`model` AS `model`,`materials`.`code` AS `code`,`materials`.`category_id` AS `category_id`,`materials`.`type_id` AS `type_id`,date_format(`materials`.`buy_date`,'%d/%m/%Y') AS `buy_date`,`materials`.`buy_price` AS `buy_price`,`materials`.`brand` AS `brand`,`materials`.`warranty` AS `warranty`,`materials`.`detail` AS `detail`,`materials`.`responsible` AS `responsible`,`materials`.`thumbnail` AS `thumbnail`,`materials`.`image2` AS `image2`,`materials`.`create_date` AS `create_date`,`materials`.`last_modify` AS `last_modify`,`materials`.`budget_id` AS `budget_id`,`materials`.`place_id` AS `place_id`,`materials`.`company_id` AS `company_id`,`budgets`.`budget_name` AS `budget_name`,`budgets`.`year` AS `year`,`place`.`place_name` AS `place_name`,`place`.`remark` AS `remark`,`material_categories`.`category_name` AS `category_name` from ((((`materials` left join `material_categories` on((`materials`.`category_id` = `material_categories`.`category_id`))) left join `material_types` on((`materials`.`type_id` = `material_types`.`type_id`))) left join `budgets` on((`materials`.`budget_id` = `budgets`.`budget_id`))) left join `place` on((`materials`.`place_id` = `place`.`place_id`)));

SET FOREIGN_KEY_CHECKS = 1;
