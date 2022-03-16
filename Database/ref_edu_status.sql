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
DROP TABLE IF EXISTS `plo_table`;
CREATE TABLE `plo_table`  (
  `PLO_NUM` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `PLO_detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ผลลัพธ์การเรียนรู้` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `กลยุทธ์การสอน1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `กลยุทธ์การสอน2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `กลยุทธ์การประเมิน1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `กลยุทธ์การประเมิน2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`PLO_NUM`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_edu_status
-- ----------------------------
INSERT INTO `plo_table` VALUES ('1');
INSERT INTO `plo_table` VALUES ('2','PLO 2 : บัณฑิตสามารถประยุกต์ความรู้ในคณิตศาสตร์ และสถิติ', 'PLO 2.1 : สามารถอธิบายหลักการ แนวคิดและทฤษฏีที่สำคัญในเนื้อหาสาขาวิทยาการคอมพิวเตอร์ได้', '1.บรรยายแบบปฏิสัมพันธ์และยกตัวอย่างประกอบ','1.ประเมินผลจากการสอบข้อเขียน');


SET FOREIGN_KEY_CHECKS = 1;
