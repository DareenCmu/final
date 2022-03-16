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
DROP TABLE IF EXISTS `estimated2`;
CREATE TABLE `estimated2`  (
  `id` int NOT NULL AUTO_INCREMENT ,
  `detail` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `204111` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204113` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204211` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204231` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204232` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204251` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204306` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204315` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204321` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204341` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204361` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204362` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204451` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204490` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204390` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204491` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204497` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204496` DECIMAL(15,2)  NULL DEFAULT NULL,
  `204499` DECIMAL(15,2)  NULL DEFAULT NULL,

    PRIMARY KEY (`id`) USING BTREE
  
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------

INSERT INTO `estimated2` (`detail`)  VALUES ('สอบกลางภาค');
INSERT INTO `estimated2` (`detail`)  VALUES ('สอบปลายภาค');
INSERT INTO `estimated2` (`detail`)  VALUES ('สอบย่อย ');
INSERT INTO `estimated2` (`detail`)  VALUES ('สอบปฏิบัติ');
INSERT INTO `estimated2` (`detail`)  VALUES ('แบบฝึกหัด (ทฤษฎี)');
INSERT INTO `estimated2` (`detail`)  VALUES ('แบบฝึกหัด (ปฏิบัติการ)');
INSERT INTO `estimated2` (`detail`)  VALUES ('รายงาน');
INSERT INTO `estimated2` (`detail`)  VALUES ('โครงงาน & สาธิต');
INSERT INTO `estimated2` (`detail`)  VALUES ('การนำเสนอ');
INSERT INTO `estimated2` (`detail`)  VALUES ('พฤติกรรมการมีส่วนร่วม');
INSERT INTO `estimated2` (`detail`)  VALUES ('คะแนนเข้าชั้นเรียน ');
INSERT INTO `estimated2` (`detail`)  VALUES ('วินัยการส่งงาน');
INSERT INTO `estimated2` (`detail`)  VALUES ('อื่นๆ');

SET FOREIGN_KEY_CHECKS = 1;
