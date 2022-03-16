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
DROP TABLE IF EXISTS `weight_score`;
CREATE TABLE `weight_score`  (
  `year` int(3) NOT NULL,
  `course_no` int(10)  NULL DEFAULT NULL,
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
  `5.4` DECIMAL(5,2)  NULL DEFAULT NULL,
  `Total` DECIMAL(5,2) NULL DEFAULT NULL
    
  
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------

INSERT INTO `weight_score` (`year`, `course_no`,`1.1`,`Total`)  VALUES ('1','204111','1','1');
INSERT INTO `weight_score` (`year`, `course_no`)  VALUES ('1','204113');
INSERT INTO `weight_score` (`year`, `course_no`)  VALUES ('2','204211');
INSERT INTO `weight_score` (`year`, `course_no`)  VALUES ('2','204231');
INSERT INTO `weight_score` (`year`, `course_no`)  VALUES ('2','204232');
INSERT INTO `weight_score` (`year`, `course_no`) VALUES ('2','204251');
INSERT INTO `weight_score` (`year`, `course_no`) VALUES ('3','204306');
INSERT INTO `weight_score` (`year`, `course_no`)  VALUES ('3','204315');
INSERT INTO `weight_score` (`year`, `course_no`)  VALUES ('3','204321');
INSERT INTO `weight_score` (`year`, `course_no`)  VALUES ('3','204341');
INSERT INTO `weight_score` (`year`, `course_no`) VALUES ('3','204361');
INSERT INTO `weight_score` (`year`, `course_no`)  VALUES ('3','204362');
INSERT INTO `weight_score` (`year`, `course_no`)  VALUES ('3','204451');
INSERT INTO `weight_score` (`year`, `course_no`)  VALUES ('3','204490');
INSERT INTO `weight_score` (`year`, `course_no`) VALUES ('4','204390');
INSERT INTO `weight_score` (`year`, `course_no`) VALUES ('4','204491');
INSERT INTO `weight_score` (`year`, `course_no`) VALUES ('4','204497');
INSERT INTO `weight_score` (`year`, `course_no`) VALUES ('4','204496');
INSERT INTO `weight_score` (`year`, `course_no`) VALUES ('4','204499');


SET FOREIGN_KEY_CHECKS = 1;
