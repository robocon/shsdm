/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50560
Source Host           : localhost:3306
Source Database       : shsdm

Target Server Type    : MYSQL
Target Server Version : 50560
File Encoding         : 874

Date: 2020-07-17 15:44:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for diabetes
-- ----------------------------
DROP TABLE IF EXISTS `diabetes`;
CREATE TABLE `diabetes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `retinalExam` varchar(255) DEFAULT NULL,
  `retinalExamDate` datetime DEFAULT NULL,
  `retinalExamImg` varchar(255) DEFAULT NULL,
  `footExam` varchar(255) DEFAULT NULL,
  `footExamDate` datetime DEFAULT NULL,
  `footExamImg` varchar(255) DEFAULT NULL,
  `teeth` varchar(255) DEFAULT NULL,
  `teethDate` datetime DEFAULT NULL,
  `diag` varchar(255) DEFAULT NULL,
  `diagDate` datetime DEFAULT NULL,
  `diseaseHt` varchar(255) DEFAULT NULL,
  `diseaseEtc` text,
  `diseaseEtcDate` datetime DEFAULT NULL,
  `smoke` varchar(255) DEFAULT NULL,
  `footCare` varchar(255) DEFAULT NULL,
  `footCareDate` datetime DEFAULT NULL,
  `nutrition` varchar(255) DEFAULT NULL,
  `nutirtionDate` datetime DEFAULT NULL,
  `execise` varchar(255) DEFAULT NULL,
  `execiseDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of diabetes
-- ----------------------------

-- ----------------------------
-- Table structure for resultlab
-- ----------------------------
DROP TABLE IF EXISTS `resultlab`;
CREATE TABLE `resultlab` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `diabetesId` int(11) DEFAULT NULL,
  `dateResult` datetime DEFAULT NULL,
  `bs` varchar(255) DEFAULT NULL,
  `hba1c` varchar(255) DEFAULT NULL,
  `ldl` varchar(255) DEFAULT NULL,
  `creatinine` varchar(255) DEFAULT NULL,
  `urineprotein` varchar(255) DEFAULT NULL,
  `ua` varchar(255) DEFAULT NULL,
  `microalbuminuria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of resultlab
-- ----------------------------

-- ----------------------------
-- Table structure for screening
-- ----------------------------
DROP TABLE IF EXISTS `screening`;
CREATE TABLE `screening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `vsDate` datetime DEFAULT NULL,
  `height` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `waist` varchar(255) DEFAULT NULL,
  `temp` varchar(255) DEFAULT NULL,
  `pulse` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `bmi` varchar(255) DEFAULT NULL,
  `sys1` varchar(255) DEFAULT NULL,
  `dia1` varchar(255) DEFAULT NULL,
  `sys2` varchar(255) DEFAULT NULL,
  `dia2` varchar(255) DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of screening
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registerDate` date DEFAULT NULL,
  `idcard` varchar(255) DEFAULT NULL,
  `dmNumber` int(11) DEFAULT NULL,
  `yot` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `birthDate` datetime DEFAULT NULL,
  `editDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
