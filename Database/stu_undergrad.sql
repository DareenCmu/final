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
  `Term` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Year` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
  `หมายเหตุ` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
  `เอกสารแนบ` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
  `ผู้บันทึกข้อมูล` varchar(2002) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
  `TimeStamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`StuID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;




CREATE TABLE `stu_undergrad_history` LIKE `stu_undergrad` ;

ALTER TABLE `stu_undergrad_history`
MODIFY COLUMN `StuID` INT UNSIGNED NOT NULL;

ALTER TABLE `stu_undergrad_history` DROP PRIMARY KEY;

ALTER TABLE `stu_undergrad_history`
ADD COLUMN `history_id` INT UNSIGNED NOT NULL;

ALTER TABLE `stu_undergrad_history`
ADD COLUMN `Status_Name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;

ALTER TABLE `stu_undergrad_history`
ADD CONSTRAINT PRIMARY KEY (`history_id`);

ALTER TABLE `stu_undergrad_history`
MODIFY `history_id` INT UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `stu_undergrad_history`
ADD CONSTRAINT fk_id FOREIGN KEY (StuID) REFERENCES `stu_undergrad`(StuID) ON UPDATE CASCADE ON DELETE CASCADE;


-- ----------------------------
-- Records of stu_undergrad
-- ----------------------------
INSERT INTO `stu_undergrad` VALUES ('630515034', 'นาย', 'พุทธิพงศ์ ', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาย สมชาย',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515022', 'นางสาว', 'ไพลิน ธีระแนว', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาย สมชาย',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515023', 'นางสาว', 'ภัทธิรา บุญทอง', '10','1','2558','ไม่มี','ไม่มีเอกสารแนบ','นาง แก้วใส',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515024', 'นาย', 'ภูชิชญ์ โคมแก้ว', '10','2','2560','ไม่มี','ไม่มีเอกสารแนบ','นาย สมชาย',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515025', 'นางสาว', 'วิลาสิณี ดีมาก', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาง แก้วใส',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515026', 'นางสาว', 'ศศิภัทร คงห้วยรอบ', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาย สมชาย',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515027', 'นาย', 'จาตุรงค์ คำเสนา', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาง แก้วใส',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515028', 'นางสาว', 'ชื่นพันธุ์ ฤทธิ์เทพ', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาย สมชาย',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515029', 'นางสาว', 'ณัฐปภัสร์  สิทธิ์คงชัย', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาง แก้วใส',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515030', 'นางสาว', 'ดาวฟ้า  ผดุงกิจ', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาย สมชาย',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515031', 'นาย', 'นรบดี พรหมเสน', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาย สมชาย',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515032', 'นาย', 'พรชัย ศรีบัณฑิต', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาง แก้วใส',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515033', 'นาย', 'สุพัฒน์ กาลจักร', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาง แก้วใส',CURRENT_TIMESTAMP);
INSERT INTO `stu_undergrad` VALUES ('630515035', 'นาย', 'อนุวัตร ', '10','1','2561','ไม่มี','ไม่มีเอกสารแนบ','นาง แก้วใส',CURRENT_TIMESTAMP);

SET FOREIGN_KEY_CHECKS = 1;

