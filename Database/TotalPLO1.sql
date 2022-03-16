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
DROP TABLE IF EXISTS `TotalPLO1`;
CREATE TABLE `TotalPLO1`  (
  `id` int NOT NULL AUTO_INCREMENT ,
  `plo` int(5)  NULL DEFAULT NULL,
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

INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','สอบกลางภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','สอบปลายภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','สอบย่อย ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','สอบปฏิบัติ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','แบบฝึกหัด (ทฤษฎี)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','แบบฝึกหัด (ปฏิบัติการ)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','รายงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','โครงงาน & สาธิต');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','การนำเสนอ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','พฤติกรรมการมีส่วนร่วม');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','คะแนนเข้าชั้นเรียน ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','วินัยการส่งงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('1','อื่นๆ');

INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','สอบกลางภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','สอบปลายภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','สอบย่อย ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','สอบปฏิบัติ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','แบบฝึกหัด (ทฤษฎี)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','แบบฝึกหัด (ปฏิบัติการ)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','รายงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','โครงงาน & สาธิต');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','การนำเสนอ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','พฤติกรรมการมีส่วนร่วม');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','คะแนนเข้าชั้นเรียน ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','วินัยการส่งงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('2','อื่นๆ');

INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','สอบกลางภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','สอบปลายภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','สอบย่อย ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','สอบปฏิบัติ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','แบบฝึกหัด (ทฤษฎี)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','แบบฝึกหัด (ปฏิบัติการ)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','รายงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','โครงงาน & สาธิต');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','การนำเสนอ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','พฤติกรรมการมีส่วนร่วม');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','คะแนนเข้าชั้นเรียน ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','วินัยการส่งงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('3','อื่นๆ');

INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','สอบกลางภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','สอบปลายภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','สอบย่อย ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','สอบปฏิบัติ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','แบบฝึกหัด (ทฤษฎี)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','แบบฝึกหัด (ปฏิบัติการ)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','รายงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','โครงงาน & สาธิต');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','การนำเสนอ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','พฤติกรรมการมีส่วนร่วม');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','คะแนนเข้าชั้นเรียน ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','วินัยการส่งงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('4','อื่นๆ');

INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','สอบกลางภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','สอบปลายภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','สอบย่อย ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','สอบปฏิบัติ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','แบบฝึกหัด (ทฤษฎี)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','แบบฝึกหัด (ปฏิบัติการ)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','รายงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','โครงงาน & สาธิต');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','การนำเสนอ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','พฤติกรรมการมีส่วนร่วม');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','คะแนนเข้าชั้นเรียน ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','วินัยการส่งงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('5','อื่นๆ');

INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','สอบกลางภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','สอบปลายภาค');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','สอบย่อย ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','สอบปฏิบัติ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','แบบฝึกหัด (ทฤษฎี)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','แบบฝึกหัด (ปฏิบัติการ)');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','รายงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','โครงงาน & สาธิต');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','การนำเสนอ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','พฤติกรรมการมีส่วนร่วม');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','คะแนนเข้าชั้นเรียน ');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','วินัยการส่งงาน');
INSERT INTO `TotalPLO1` (`plo`,`detail`)  VALUES ('6','อื่นๆ');

SET FOREIGN_KEY_CHECKS = 1;
