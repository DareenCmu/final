/*
 Navicat Premium Data Transfer

 Source Server         : epg
 Source Server Type    : MariaDB
 Source Server Version : 100412
 Source Host           : 202.28.24.196:3306
 Source Schema         : acad

 Target Server Type    : MariaDB
 Target Server Version : 100412
 File Encoding         : 65001

 Date: 06/05/2021 15:14:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ref_edu_status
-- ----------------------------
DROP TABLE IF EXISTS `totalplo`;
CREATE TABLE `totalplo`  (
  `PLO` int(3) NOT NULL,

  `1.1` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.2` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.3` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.4` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.5` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.6` DECIMAL(5,2)  NULL DEFAULT NULL,
  `1.7` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.1` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.2` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.3` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.4` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.5` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.6` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.7` DECIMAL(5,2)  NULL DEFAULT NULL,
  `2.8` DECIMAL(5,2)  NULL DEFAULT NULL,
  `3.1` DECIMAL(5,2)  NULL DEFAULT NULL,
  `3.2` DECIMAL(5,2)  NULL DEFAULT NULL,
  `3.3` DECIMAL(5,2)  NULL DEFAULT NULL,
  `3.4` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.1` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.2` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.3` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.4` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.5` DECIMAL(5,2)  NULL DEFAULT NULL,
  `4.6` DECIMAL(5,2)  NULL DEFAULT NULL,
  `5.1` DECIMAL(5,2)  NULL DEFAULT NULL,
  `5.2` DECIMAL(5,2)  NULL DEFAULT NULL,
  `5.3` DECIMAL(5,2)  NULL DEFAULT NULL,
  `5.4` DECIMAL(5,2)  NULL DEFAULT NULL
 
    
  
  
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------

INSERT INTO `totalplo` (`PLO`,`1.6`,`2.1`,`2.2`,`2.6`,`2.8`,`3.4`,`4.3`,`5.2`)  VALUES ('1','1','10.45','10.70','1.80','6','11.80','0.10','2.05');
INSERT INTO `totalplo` (`PLO`,`2.3`,`2.7`,`3.1`,`3.3`,`3.4`)  VALUES ('2','19','27.20','29.20','6.90','47.20');
INSERT INTO `totalplo` (`PLO`,`2.3`,`3.1`,`3.4`,`4.3`,`4.5`,`5.2`)  VALUES ('3','9.5','21.9','35.40','0.05','0.20','2.05');
INSERT INTO `totalplo` (`PLO`,`1.3`,`1.4`,`4.1`,`4.2`,`4.4`,`4.5`,`5.1`,`5.3`,`5.4`)  VALUES ('4','1','0.05','3.20','0.20','1.30','2.25','0.20','10.70','4');
INSERT INTO `totalplo` (`PLO`,`2.4`,`2.5`,`3.2`,`4.6`,`5.1`,`5.4`)  VALUES ('5','10.70','3.30','10.80','0.05','2.05','17.90');
INSERT INTO `totalplo` (`PLO`,`1.1`,`1.2`,`1.4`,`1.5`,`1.6`,`1.7`,`4.3`,`4.4`)  VALUES ('6','1.2','4.85','3.20','3','1','6.40','0.05','2.25');




SET FOREIGN_KEY_CHECKS = 1;
