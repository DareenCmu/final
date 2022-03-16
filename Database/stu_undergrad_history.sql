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

 Date: 06/05/2021 16:00:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for stu_undergrad
-- ----------------------------
DROP TABLE IF EXISTS `stu_undergrad`;
CREATE TABLE `stu_undergrad`  (
  `StuID` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prefixThai` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `StuNameThai` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `EduStatus` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'สถานะ ทางการศึกษาปัจจุบัน เช่น ศึกษาอยู่ ลาออก ฯลฯ',
  
  PRIMARY KEY (`StuID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stu_undergrad
-- ----------------------------


SET FOREIGN_KEY_CHECKS = 1;


CREATE TABLE `stu_undergrad_history` LIKE `stu_undergrad`;

ALTER TABLE `stu_undergrad_history`
MODIFY COLUMN `StuID` INT UNSIGNED NOT NULL;

ALTER TABLE `stu_undergrad_history` DROP PRIMARY KEY;

ALTER TABLE `stu_undergrad_history`
ADD COLUMN `history_id` INT UNSIGNED NOT NULL;

ALTER TABLE `stu_undergrad_history`
ADD CONSTRAINT PRIMARY KEY (`history_id`);

ALTER TABLE `stu_undergrad_history`
MODIFY `history_id` INT UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `stu_undergrad_history`
ADD CONSTRAINT fk_id FOREIGN KEY (StuID) REFERENCES `stu_undergrad`(StuID) ON UPDATE CASCADE ON DELETE CASCADE;

UPDATE `stu_undergrad`
SET `StuNameThai`='Dareen'
WHERE `StuNameThai` = 'ไพลิน ธีระแนว';