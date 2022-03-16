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
DROP TABLE IF EXISTS `scoring`;
CREATE TABLE `scoring`  (
  `scoringid` int(20)  NULL DEFAULT NULL,
  `num`  int(10)  NULL DEFAULT NULL
  
    
  
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------
INSERT INTO `scoring` VALUES ('1','25');
INSERT INTO `scoring` VALUES ('2','30');
INSERT INTO `scoring` VALUES ('3','8');
INSERT INTO `scoring` VALUES ('4','8');
INSERT INTO `scoring` VALUES ('5','0');
INSERT INTO `scoring` VALUES ('6','20');
INSERT INTO `scoring` VALUES ('7','0');
INSERT INTO `scoring` VALUES ('8','0');
INSERT INTO `scoring` VALUES ('9','0');
INSERT INTO `scoring` VALUES ('10','0');
INSERT INTO `scoring` VALUES ('11','10');
INSERT INTO `scoring` VALUES ('12','0');
INSERT INTO `scoring` VALUES ('13','0');
SET FOREIGN_KEY_CHECKS = 1;
