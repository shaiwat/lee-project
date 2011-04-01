/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : material

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2011-04-01 22:24:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `budgets`
-- ----------------------------
DROP TABLE IF EXISTS `budgets`;
CREATE TABLE `budgets` (
  `budget_id` int(11) NOT NULL AUTO_INCREMENT,
  `budget_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชืองบประมาณ สำหรับการจัดซื้อ',
  `year` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`budget_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of budgets
-- ----------------------------
INSERT INTO `budgets` VALUES ('1', 'งบประมาณประจำปี', '2554');
INSERT INTO `budgets` VALUES ('2', 'งบประมาณประจำปี', '2555');
INSERT INTO `budgets` VALUES ('3', 'งบประมาณประจำปี', '2555');
INSERT INTO `budgets` VALUES ('4', 'งบประมาณประจำปี', '2554');

-- ----------------------------
-- Table structure for `company`
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
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES ('1', '2222', 'xx', 'xxx', 'xx', 'xx');
INSERT INTO `company` VALUES ('2', 'grandu2', 'xxx', 'xxx', '', '');
INSERT INTO `company` VALUES ('3', 'forwardsystem', 'xxx', '', '', '');

-- ----------------------------
-- Table structure for `maintain`
-- ----------------------------
DROP TABLE IF EXISTS `maintain`;
CREATE TABLE `maintain` (
  `maintain_id` int(11) NOT NULL AUTO_INCREMENT,
  `maintain_name` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`maintain_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of maintain
-- ----------------------------

-- ----------------------------
-- Table structure for `maintain_history`
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
-- Records of maintain_history
-- ----------------------------

-- ----------------------------
-- Table structure for `materials`
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
  `image1` varchar(255) DEFAULT NULL COMMENT 'เก็บรูปที่ 1',
  `image2` varchar(255) DEFAULT NULL COMMENT 'เก็บรูปที่ 2',
  `create_date` varchar(255) DEFAULT NULL COMMENT 'วันที่กรอก ข้อมูล',
  `last_modify` date DEFAULT NULL COMMENT 'วันที่แก้ไข้ข้อมูลล่าสุด',
  `year` varchar(255) DEFAULT NULL COMMENT 'ปีการ ศึกษา',
  PRIMARY KEY (`material_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of materials
-- ----------------------------
INSERT INTO `materials` VALUES ('1', 'เครื่องคอมพิวเตอร์ HP', null, '540000002', '2', '1', '2011-03-08', '20000', 'HP', '1', null, null, 'hp_desktop.jpg', null, null, null, null);
INSERT INTO `materials` VALUES ('2', 'โต้ะคอมพิวเตอร์', null, '540000003', '3', '1', '2011-03-09', '2000', '-', null, null, null, 'Triple PC table 6340.jpg', null, null, null, '??');
INSERT INTO `materials` VALUES ('3', 'โปรเจคเตอร์ X1230S', null, '540000003', '2', null, '2011-03-29', null, null, null, null, null, 'ico_acer_projector.jpg', null, null, null, null);

-- ----------------------------
-- Table structure for `material_categories`
-- ----------------------------
DROP TABLE IF EXISTS `material_categories`;
CREATE TABLE `material_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of material_categories
-- ----------------------------
INSERT INTO `material_categories` VALUES ('2', 'เครื่องคอมพิวเตอร์');
INSERT INTO `material_categories` VALUES ('3', 'โต้ะคอมพิวเตอร์');
INSERT INTO `material_categories` VALUES ('4', 'เครื่อง printer');
INSERT INTO `material_categories` VALUES ('5', 'ตู้เก็บของ/หนังสือ');
INSERT INTO `material_categories` VALUES ('6', 'เครื่องเขียน');
INSERT INTO `material_categories` VALUES ('7', 'เครื่องปรับอากาศ');
INSERT INTO `material_categories` VALUES ('8', 'อุปกรณ์สำหรับทำความสะอาด');
INSERT INTO `material_categories` VALUES ('9', 'อุปกรณ์ขยายเสียง/ลำโพง');

-- ----------------------------
-- Table structure for `material_types`
-- ----------------------------
DROP TABLE IF EXISTS `material_types`;
CREATE TABLE `material_types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชือ ชนิด material มี 2 อัน วัสดุ กับ ครุภัณฑ์',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of material_types
-- ----------------------------
INSERT INTO `material_types` VALUES ('1', '?????');

-- ----------------------------
-- Table structure for `place`
-- ----------------------------
DROP TABLE IF EXISTS `place`;
CREATE TABLE `place` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส primary key',
  `place_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'ชือ่ห้อง หรือ สถานที่ ',
  `remark` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'หมายเหตุ / รายละเอียด',
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of place
-- ----------------------------
INSERT INTO `place` VALUES ('1', '403', null);
INSERT INTO `place` VALUES ('2', 'ห้องพักอาจารย์', null);

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'ผู้บริหาร');
INSERT INTO `roles` VALUES ('2', 'อาจารย์');
INSERT INTO `roles` VALUES ('3', 'เจ้าหน้าที่ครุภัณฑ์');

-- ----------------------------
-- Table structure for `users`
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'wirachat', 'e10adc3949ba59abbe56e057f20f883e', 'wirachat', 'suksawat', 'wirachat2you@hotmail.com', '0842188408', '1', '');
INSERT INTO `users` VALUES ('2', 'manager', '5f4dcc3b5aa765d61d8327deb882cf99', 'สมคิด', 'ทองแดง', 'wirachat2you@gmail.com', '0842188408', '1', '???????');
