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
DROP TABLE IF EXISTS `store`;
CREATE TABLE `store`  (
  `id` int NOT NULL AUTO_INCREMENT , 
  `course_no` int(10)  NULL DEFAULT NULL,
  `plo` int(10)  NULL DEFAULT NULL,
  `score` int(10)  NULL DEFAULT NULL,


    PRIMARY KEY (`id`) USING BTREE
  
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------





SET FOREIGN_KEY_CHECKS = 1;
